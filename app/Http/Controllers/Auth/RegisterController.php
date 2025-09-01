<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Carbon\Carbon;
use Mail;
use Illuminate\Http\Request;
;

class RegisterController extends Controller
{
    //

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'     => ['required', 'string', 'max:255'],
            'email'    => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone'    => ['required', 'digits:10', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
           // 'role'     => ['required', 'in:admin,staff,student'],
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
          // Generate OTP
    $otp = rand(100000, 999999);

        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'phone'           => $request->phone,
            'password' => Hash::make($request->password),
           // 'role'     => $request->role,
           'otp'   => $otp,
            'otp_expires_at' => now()->addMinutes(5),
        ]);

         // Send OTP via email
    Mail::to($user->email)->send(new \App\Mail\SendOtpMail($otp));

    session(['otp_user_id' => $user->id]);

    return redirect()->route('otp.verify');
    }

    public function showOtpForm()
{
    return view('auth.verify_otp');
}

public function verifyOtp(Request $request)
{
    $request->validate(['otp' => 'required|digits:6']);

    $user = User::find(session('otp_user_id'));

    if (!$user || $user->otp !== $request->otp || now()->gt($user->otp_expires_at)) {
        return back()->withErrors(['otp' => 'Invalid or expired OTP']);
    }

    $user->update([
        'email_verified_at' => now(),
        'otp' => null,
        'otp_expires_at' => null,
    ]);

    auth()->login($user);

    return redirect()->route('student.dashboard')->with('success', 'Registration complete');
}
}
