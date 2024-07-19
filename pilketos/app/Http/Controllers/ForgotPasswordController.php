<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    public function showForm()
    {
        return view('auth.forgot-password');
    }

    public function processForm(Request $request)
    {
        $user = User::where('NIS', $request->nis)
                    ->where('name', $request->name)
                    ->first();

        if ($user) {
            $resetToken = Str::random(32); // Generate token acak
            $user->update(['password_reset_token' => $resetToken]);
            session(['password_reset_token' => $resetToken]); // Simpan token di session
            return redirect('/reset-password')->with('token', $resetToken);
        } else {
            return redirect()->back()->with('error', 'Kombinasi NIS/NPK dan Name salah.');
        }
    }
}
