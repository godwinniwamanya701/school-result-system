<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Student;

class StudentAuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.student-login');
    }

    // Show student registration page
    public function showRegister()
    {
        return view('auth.student-register');
    }

    // Register a new student
    public function register(Request $request)
    {
        $validated = $request->validate([
            'student_number' => 'required|string|max:255|unique:students,student_number',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:students,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        Student::create([
            'student_number' => $validated['student_number'],
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        return redirect()
            ->route('student.login')
            ->with('success', 'Student account created successfully. You can now login.');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $student = Student::where('email', $credentials['email'])->first();

        if ($student && Hash::check($credentials['password'], $student->password)) {

            session([
                'student_id' => $student->id,
                'student_name' => $student->name,
                'student_email' => $student->email,
            ]);

            return redirect()->route('student.dashboard');
        }

        return back()->withErrors([
            'email' => 'Invalid student email or password.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        $request->session()->forget([
            'student_id',
            'student_name',
            'student_email',
        ]);

        return redirect()->route('student.login');
    }
}