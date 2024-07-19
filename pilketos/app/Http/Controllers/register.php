<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\wargatels;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;


class register extends Controller
{
    public function index() {
        return view('register');
    }
    public function store(Request $request) {
        $request->validate([
            'NIS'=> ['required', 'min:3', 'max:255', 'unique:users'],
            'name'=> ['required', 'min:3', 'max:255', 'unique:users'],
            'password'=>['required', 'min:4', 'unique:users'],
        ]);

        $warga = wargatels::where('NIS', $request->NIS)
                      ->where('name', $request->name)
                      ->first();
        if (!$warga) {
            throw ValidationException::withMessages([
                'NIS' => ['The provided NIS do not match our records.'],
                'name' => ['The provided name do not match our records.'],
            ]);
        }
        
        User::create([
            'NIS' => $request->NIS,
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'role' => 'user', // or whatever default role you want to set
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return redirect()->route('login');
    }
}
