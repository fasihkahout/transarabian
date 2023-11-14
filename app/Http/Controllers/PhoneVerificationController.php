<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class PhoneVerificationController extends Controller
{
    public function showVerificationForm()
    {
        return view('auth.verify-phone');
    }

    public function sendVerificationCode(Request $request)
    {
        $request->validate([
            'phone_number' => ['required', 'string'],
        ]);

        $user = User::where('phone', $request->phone)->first();

        if (!$user) {
            throw ValidationException::withMessages([
                'phone_number' => ['Phone number not found.'],
            ]);
        }

        // Generate a verification code (you can customize this logic)
        $verificationCode = mt_rand(1000, 9999);

        // Save the verification code in the user record
        $user->phone_verification_code = Hash::make($verificationCode);
        $user->save();

        // Your logic to send the verification code to the user (e.g., through SMS) goes here...

        return redirect()->route('phone.verify.form');
    }

    public function verifyPhone(Request $request)
    {
        $request->validate([
            'phone_number' => ['required', 'string'],
            'code' => ['required', 'numeric'],
        ]);

        $user = User::where('phone', $request->phone)->first();

        if (!$user) {
            throw ValidationException::withMessages([
                'phone_number' => ['Phone number not found.'],
            ]);
        }

        // Check if the provided code matches the stored verification code
        if (Hash::check($request->code, $user->phone_verification_code)) {
            // Mark the phone as verified (you can customize this logic)
            $user->phone_verified_at = now();
            $user->save();

            return redirect()->route('dashboard')->with('success', 'Phone verified successfully!');
        }

        throw ValidationException::withMessages([
            'code' => ['Invalid verification code.'],
        ]);
    }
}
