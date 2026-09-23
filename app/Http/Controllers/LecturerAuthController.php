<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Lecturer;

class LecturerAuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.lecturer-login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $lecturer = Lecturer::where('email', $credentials['email'])->first();

        if ($lecturer && Hash::check($credentials['password'], $lecturer->password)) {

            session([
                'lecturer_id' => $lecturer->id,
                'lecturer_name' => $lecturer->name,
                'lecturer_email' => $lecturer->email,
            ]);

            return redirect()->route('lecturer.dashboard');
        }

        return back()->withErrors([
            'email' => 'Invalid lecturer email or password.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        $request->session()->forget([
            'lecturer_id',
            'lecturer_name',
            'lecturer_email',
        ]);

        return redirect()->route('lecturer.login');
    }
}