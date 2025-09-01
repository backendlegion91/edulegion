<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;
use Mail;
use Carbon\Carbon;


class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required|string',
        ]);
    
        $user = User::where('email', $request->email)->first();
    
        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->withErrors(['email' => 'Invalid credentials.']);
        }
    
        if ($user->otp && $user->otp_expires_at) {
            return back()->withErrors(['email' => 'Please verify your email OTP before login.']);
        }
    
        Auth::login($user, $request->filled('remember'));
    
        return redirect()->intended(
            match ($user->role) {
                'admin' => '/admin/dashboard',
                'staff' => '/staff/dashboard',
                default => '/student/dashboard',
            }
        )->with('success', 'Welcome ' . ucfirst($user->role) . '!');
    }
    
    

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('success', 'Logged out successfully.');
    }


    public function showForgotForm()
    {
        return view('auth.forgot_password');
    }

    public function sendOtp(Request $request)
{
    $request->validate(['email' => 'required|email']);

    $user = User::where('email', $request->email)->first();

    if (!$user) {
        return back()->withErrors(['email' => 'User not found']);
    }

    $otp = rand(100000, 999999);
    $user->update([
        'otp' => $otp,
        'otp_expires_at' => Carbon::now()->addMinutes(10),
    ]);

    Mail::to($user->email)->send(new \App\Mail\SendOtpMail($otp));

    session(['reset_user_id' => $user->id]);

    return redirect()->route('password.otp')->with('success', 'OTP sent to your email.');
}

public function showOtpVerifyForm()
{
    return view('auth.verify_reset_otp');
}

public function verifyResetOtp(Request $request)
{
    $request->validate(['otp' => 'required|digits:6']);

    $user = User::find(session('reset_user_id'));

    if (!$user || $user->otp !== $request->otp || now()->gt($user->otp_expires_at)) {
        return back()->withErrors(['otp' => 'Invalid or expired OTP']);
    }

    $user->update([
        'otp' => null,
        'otp_expires_at' => null,
    ]);

    session(['otp_verified_user_id' => $user->id]);

    return redirect()->route('password.reset');
}

public function showResetForm()
{
    if (!session()->has('otp_verified_user_id')) {
        return redirect()->route('password.request');
    }

    return view('auth.reset_password');
}

public function resetPassword(Request $request)
{
    $request->validate([
        'password' => 'required|confirmed|min:8',
    ]);

    $user = User::find(session('otp_verified_user_id'));

    if (!$user) {
        return redirect()->route('password.request');
    }

    $user->update([
        'password' => Hash::make($request->password),
    ]);

    session()->forget(['otp_verified_user_id', 'reset_user_id']);

    return redirect()->route('login')->with('success', 'Password reset successfully');
}



}
