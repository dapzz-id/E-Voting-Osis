<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    public function showForm(Request $request)
    {
        $token = session('password_reset_token');
        return view('auth.reset-password', compact('token'));
    }

    public function reset(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'password' => 'required|confirmed',
        ]);

        $user = User::where('password_reset_token', $request->token)->first();

        if ($user) {
            $user->password = Hash::make($request->password);
            $user->update(['password_reset_token' => null]);
            return redirect('/admin')->with('success', 'Kata sandi berhasil diubah.');
        } else {
            return redirect()->back()->with('error', 'Token reset tidak valid.');
        }
    }
}
