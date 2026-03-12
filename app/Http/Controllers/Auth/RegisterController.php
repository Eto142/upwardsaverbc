<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\VerificationEmail;
use App\Mail\welcomeEmail;
use App\Models\User;
use App\Models\verifyToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    /**
     * Show the registration form.
     */
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    /**
     * Handle a registration request.
     */
    public function register(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name'  => 'required',
            'email'      => 'required|email|unique:users',
            'address'    => 'required',
            'phone'      => 'required',
            'country'    => 'required',
            'password'   => 'string|required|confirmed|min:3',
        ]);

        $user = $this->createUser($request->all());

        $validToken = rand(1234, 9999);
        $get_token          = new verifyToken();
        $get_token->token   = $validToken;
        $get_token->email   = $user->email;
        $get_token->save();

        Mail::to($user->email)->send(new VerificationEmail($validToken));

        return redirect("verify/{$user->id}");
    }

    /**
     * Show the email verification form.
     */
    public function showVerifyForm($id)
    {
        $user = User::findOrFail($id);

        return view('auth.verify', [
            'email' => $user->email,
            'hash'  => $user->password,
            'id'    => $user->id,
        ]);
    }

    /**
     * Verify the submitted email token.
     */
    public function verifyEmail(Request $request)
    {
        $token = $request->input('digit');
        $verifyToken = verifyToken::where('token', $token)->first();

        if (!$verifyToken) {
            return back()->with('error', 'Incorrect Activation Code!');
        }

        $user = User::where('email', $verifyToken->email)->firstOrFail();
        $user->is_activated = 1;
        $user->save();

        Mail::to($user->email)->send(new welcomeEmail([
            'name'     => $user->first_name,
            'a_number' => $user->a_number,
            'email'    => $user->email,
            'password' => '*********',
        ]));

        return redirect('dashboard')->with('status', 'Your account has been verified successfully, you can now login.');
    }

    /**
     * Resend the verification code to the user.
     */
    public function resendCode($id)
    {
        $user       = User::findOrFail($id);
        $validToken = rand(1234, 9999);

        $user->token = $validToken;
        $user->save();

        Mail::to($user->email)->send(new VerificationEmail($validToken));

        return redirect("verify/{$user->id}")->with('message', 'Verification code has been resent to your email.');
    }

    /**
     * Create a new user in the database.
     */
    protected function createUser(array $data): User
    {
        return User::create([
            'first_name' => $data['first_name'],
            'last_name'  => $data['last_name'],
            'email'      => $data['email'],
            'address'    => $data['address'],
            'phone_number' => $data['phone'],
            'country'    => $data['country'],
            'password'   => Hash::make($data['password']),
        ]);
    }
}
