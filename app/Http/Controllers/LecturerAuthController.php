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

    // Show lecturer registration page
    public function showRegister()
    {
        return view('auth.lecturer-register');
    }

    // Register a new lecturer
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:lecturers,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        Lecturer::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        return redirect()
            ->route('lecturer.login')
            ->with('success', 'Lecturer account created successfully. You can now login.');
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