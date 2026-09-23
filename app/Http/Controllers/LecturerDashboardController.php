<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;

class LecturerDashboardController extends Controller
{
    public function index()
    {
        if (!session()->has('lecturer_id')) {
            return redirect()->route('lecturer.login');
        }

        $lecturer = Lecturer::with('courses')->findOrFail(
            session('lecturer_id')
        );

        return view('lecturer.dashboard', compact('lecturer'));
    }
}