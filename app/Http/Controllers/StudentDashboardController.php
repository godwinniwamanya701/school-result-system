<?php

namespace App\Http\Controllers;

use App\Models\Student;

class StudentDashboardController extends Controller
{
    public function index()
    {
        if (!session()->has('student_id')) {
            return redirect()->route('student.login');
        }

        $student = Student::with('results.course')
            ->findOrFail(session('student_id'));

        return view('student.dashboard', compact('student'));
    }
}