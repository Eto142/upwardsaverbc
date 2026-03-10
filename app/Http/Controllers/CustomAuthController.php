<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Loan;
use App\Models\User;
use App\Models\Debit;
use App\Models\Credit;
use App\Events\NewUser;
use App\Models\Deposit;
use App\Models\Transfer;
use App\Models\Trade;
use App\Models\Transaction;
use App\Mail\welcomeEmail;
use App\Mail\LoginOtpMail;
use App\Models\verifyToken;
use Illuminate\Http\Request;
use App\Mail\VerificationEmail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class CustomAuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    } 
   
      
    public function customLogin(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        // Verify credentials without logging the user in yet
        if (!Auth::validate($credentials)) {
            return response()->json([
                'content'  => 'Error',
                'message'  => 'Invalid credentials',
                'redirect' => url('login'),
            ]);
        }

        $user = User::where('email', $request->email)->first();

        // Generate a 6-digit OTP and save it to the user record
        $otp = str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT);

        $user->login_otp            = $otp;
        $user->login_otp_expires_at = now()->addMinutes(10);
        $user->save();

        // Keep only the user ID in session (no sensitive data stored there)
        session(['login_otp_user_id' => $user->id]);

        // Send the OTP email after the response is returned so the user isn't waiting on SMTP
        $userEmail     = $user->email;
        $userFirstName = $user->first_name;
        app()->terminating(function () use ($userEmail, $otp, $userFirstName) {
            Mail::to($userEmail)->send(new LoginOtpMail($otp, $userFirstName));
        });

        return response()->json([
            'content'  => 'Successful',
            'message'  => 'Verification code sent to your email.',
            'redirect' => route('login.otp'),
        ]);
    }

    public function showLoginOtp()
    {
        if (!session('login_otp_user_id')) {
            return redirect()->route('login');
        }
        return view('auth.login-otp');
    }

    public function verifyLoginOtp(Request $request)
    {
        $request->validate([
            'otp' => 'required|digits:6',
        ]);

        if (!session('login_otp_user_id')) {
            return response()->json([
                'content' => 'Error',
                'message' => 'Session expired. Please sign in again.',
            ], 422);
        }

        $user = User::find(session('login_otp_user_id'));

        if (!$user || !$user->login_otp_expires_at || now()->isAfter($user->login_otp_expires_at)) {
            if ($user) {
                $user->login_otp            = null;
                $user->login_otp_expires_at = null;
                $user->save();
            }
            session()->forget('login_otp_user_id');
            return response()->json([
                'content' => 'Error',
                'message' => 'Your code has expired. Please sign in again.',
            ], 422);
        }

        if ($request->otp !== $user->login_otp) {
            return response()->json([
                'content' => 'Error',
                'message' => 'Invalid code. Please try again.',
            ], 422);
        }

        // OTP is valid — clear it, log the user in
        $user->login_otp            = null;
        $user->login_otp_expires_at = null;
        $user->save();

        session()->forget('login_otp_user_id');

        Auth::login($user);

        return response()->json([
            'content'  => 'Successful',
            'message'  => 'Login successful.',
            'redirect' => url('dashboard'),
        ]);
    }

    public function resendLoginOtp(Request $request)
    {
        if (!session('login_otp_user_id')) {
            return response()->json([
                'content' => 'Error',
                'message' => 'Session expired. Please sign in again.',
            ]);
        }

        $user = User::find(session('login_otp_user_id'));
        $otp  = str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT);

        $user->login_otp            = $otp;
        $user->login_otp_expires_at = now()->addMinutes(10);
        $user->save();

        Mail::to($user->email)->send(new LoginOtpMail($otp, $user->first_name));

        return response()->json([
            'content' => 'Successful',
            'message' => 'A new code has been sent to your email.',
        ]);
    }

    public function registration()
    {
        return view('auth.register');
    }
      
    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'address' => 'required',
            'phone' => 'required',
            'country' => 'required',
            'password' => 'string|required|confirmed|min:3',
           
           
        ]);
           
       
        $data = $request->all();
        $check = $this->create($data);
   

        $email = $request['email'];

        //$user_data['email'] = $request['email'];
       

        $validToken = rand(7650, 1234);
        $get_token = new verifyToken();
        $get_token ->token = $validToken;
        $get_token ->email = $email;
        $get_token ->save();


    
        Mail::to($email)->send(new VerificationEmail($validToken));
        $userData = User::where('email',$request->email)->first();
        
        return redirect("verify/".$userData->id);

                 
     
    }

    public function resendCode($id)
    {
        
        $userData = User::where('id',$id)->first();
        $email = $userData->email;

        $validToken = rand(7650, 1234);
        $get_token = Auth::user();
        $get_token ->token = $validToken;
        $get_token ->update();


    
        Mail::to($email)->send(new VerificationEmail($validToken));
       
        
        return redirect("verify/".$userData->id)->with('message','verification code has been resent to your email');


    }

    public function create(array $data)
    {
       $accountNumber = rand(1645566556, 5575755768);
       return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'address' => $data['address'],
        'phone' => $data['phone'],
        'country' => $data['country'],
        'password' => Hash::make($data['password'])
      ]);
    }    
    
    public function dashboard()
    {
        if(Auth::check()){
            if(Auth::user()->user_type=='1')
            {
             $result = DB::table('users')->where('user_type','0')->get();
             return view('admin.home',compact('result'));
            } else{

               
                if(Auth::user()->is_activated=='1')
                {  

         $data['transaction'] = Transaction::where('user_id', Auth::user()->id)
                                        ->orderBy('created_at', 'desc')
                                        ->get();
         $data['trades'] = Trade::where('user_id', Auth::user()->id)
                                        ->orderBy('created_at', 'desc')
                                        ->get();                               
        $data['credit_transfers']= Transaction::where('user_id',Auth::user()->id)->where('transaction_status','1')->where('transaction_type', 'Credit') ->sum('transaction_amount');
       $data['debit_transfers'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1') ->where('transaction_type', 'Debit')  ->sum('transaction_amount');// Include only debit transactions->sum('transaction_amount');
        $data['user_deposits']= Deposit::where('user_id',Auth::user()->id)->where('status','1')->sum('amount');
        $data['user_loans']= Loan::where('user_id',Auth::user()->id)->where('status','1')->sum('amount');
        $data['user_card']= Card::where('user_id',Auth::user()->id)->sum('amount');
        $data['user_credit']= Credit::where('user_id',Auth::user()->id)->where('status','1')->sum('amount');
        $data['user_debit']= Debit::where('user_id',Auth::user()->id)->where('status','1')->sum('amount');
        $data['balance'] = $data['user_deposits'] + $data['credit_transfers']+ $data['user_loans'] - $data['user_debit'] - $data['debit_transfers']- $data['user_card'];
                    return view('dashboard.home',$data);
                }else{
                 
                    return redirect("verify/".Auth::user()->id);
                }
            }
            
            
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    // public function adminHome()
    // {

    //     return view('admin.home');
 
    // }
    
    public function signOut() {
        Session::flush();
        Auth::logout();

        $response = ['content' => 'Logout Successful'];
     

        return response()->json($response);
  
     
    }

    public function UserlogOut(Request $request)
{
    // Log the user out
    Auth::logout();

    // Invalidate the session
    $request->session()->invalidate();

    // Regenerate CSRF token
    $request->session()->regenerateToken();

    // Redirect to login page (adjust the route name if different)
    return redirect()->route('login')->with('status', 'You have been logged out.');
}



    public function logOut() {
        Session::flush();
        Auth::logout();

        return redirect("login")->with('Message', 'Your account has been verified Successfully.');
  
     
    }

    public function verify($id)
    {
        $user = User::where('id',$id)->first();
        $data['email'] = $user->email;
        $data['hash'] = $user->password;
        $data['id'] = $user->id;
      
        return view('auth.verify',$data);
    } 

    
    public function emailVerify(Request $request)
    {
        $first_token = $request->input('digit');
        $second_token = $request->input('digit2');
        $third_token = $request->input('digit3');
        $fourth_token = $request->input('digit4');
        $get_token =  $first_token;
        $verify_token = User::where('token',$get_token)->first();
        if ($verify_token){
            $user= User::where('email', $verify_token->email)->first();
            $user->is_activated = 1;
            $user->save();
            $user_email =  $user->email;
            $user_password =  $user->password;
            
            
        $data = [
            'name' => $user->name,
            'a_number' => $user->a_number,
            'email' => $user->email,
            'password' => '*********',
           
          ];
        
             
            Mail::to($user_email)->send(new welcomeEmail($data));
            
            return redirect("dashboard")->with('status', 'Your account has been verified Successfully, you can now login');
            

        }else{
            return back()->with('error','Incorrect Activation Code!');
          }
    
    }



    
}
