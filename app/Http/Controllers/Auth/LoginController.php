<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\LoginOtpMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /**
     * Show the login form.
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Validate credentials, generate OTP, and redirect to OTP screen.
     */
    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (!Auth::validate($credentials)) {
            return response()->json([
                'content'  => 'Error',
                'message'  => 'Invalid credentials',
                'redirect' => url('login'),
            ]);
        }

        $user = User::where('email', $request->email)->first();

        $otp = str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT);

        $user->login_otp            = $otp;
        $user->login_otp_expires_at = now()->addMinutes(10);
        $user->save();

        session(['login_otp_user_id' => $user->id]);

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

    /**
     * Show the OTP verification form.
     */
    public function showOtpForm()
    {
        if (!session('login_otp_user_id')) {
            return redirect()->route('login');
        }

        return view('auth.login-otp');
    }

    /**
     * Verify the submitted OTP and log the user in.
     */
    public function verifyOtp(Request $request)
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

    /**
     * Resend the login OTP.
     */
    public function resendOtp(Request $request)
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

    /**
     * Log the user out (AJAX / GET).
     */
    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return response()->json(['content' => 'Logout Successful']);
    }

    /**
     * Log the user out (POST with CSRF, proper session invalidation).
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('status', 'You have been logged out.');
    }

    /**
     * Legacy GET logout (used by some blade links).
     */
    public function legacyLogout()
    {
        Session::flush();
        Auth::logout();

        return redirect('login');
    }
}
