<?php

namespace App\Http\Controllers;

use App\Models\Result;
use App\Models\Student;
use App\Models\Course;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function index()
    {
        $results = Result::with(['student', 'course'])->get();

        return view('results.index', compact('results'));
    }

    public function create(Request $request)
    {
        $students = Student::all();

        $course = null;

        if ($request->has('course_id')) {
            $course = Course::findOrFail($request->course_id);
        }

        return view('results.create', compact('students', 'course'));
    }

    public function store(Request $request)
    {
        if (!session()->has('lecturer_id')) {
            return redirect()->route('lecturer.login');
        }

        $validated = $request->validate([
            'student_id' => 'required|exists:students,id',
            'course_id' => 'required|exists:courses,id',
            'marks' => 'required|numeric|min:0|max:100',
            'semester' => 'required|string|max:50',
            'academic_year' => 'required|string|max:20',
        ]);

        $course = Course::findOrFail($validated['course_id']);

        if ($course->lecturer_id != session('lecturer_id')) {
            return redirect()
                ->route('lecturer.dashboard')
                ->with('error', 'You are not allowed to enter results for this course.');
        }

        $duplicate = Result::where('student_id', $validated['student_id'])
            ->where('course_id', $validated['course_id'])
            ->where('semester', $validated['semester'])
            ->where('academic_year', $validated['academic_year'])
            ->exists();

        if ($duplicate) {
            return back()
                ->withInput()
                ->withErrors([
                    'student_id' => 'This student already has a result for this course, semester, and academic year.'
                ]);
        }

        $validated['grade'] = $this->calculateGrade($validated['marks']);

        Result::create($validated);

        return redirect()
            ->route('results.index')
            ->with('success', 'Result added successfully.');
    }

    public function edit(Result $result)
    {
        $students = Student::all();
        $courses = Course::all();

        return view('results.edit', compact('result', 'students', 'courses'));
    }

    public function update(Request $request, Result $result)
    {
        $validated = $request->validate([
            'student_id' => 'required|exists:students,id',
            'course_id' => 'required|exists:courses,id',
            'marks' => 'required|numeric|min:0|max:100',
            'semester' => 'required|string|max:50',
            'academic_year' => 'required|string|max:20',
        ]);

        $validated['grade'] = $this->calculateGrade($validated['marks']);

        $result->update($validated);

        return redirect()
            ->route('results.index')
            ->with('success', 'Result updated successfully.');
    }

    public function destroy(Result $result)
    {
        $result->delete();

        return redirect()
            ->route('results.index')
            ->with('success', 'Result deleted successfully.');
    }

    private function calculateGrade($marks)
    {
        if ($marks >= 80) {
            return 'A';
        } elseif ($marks >= 70) {
            return 'B';
        } elseif ($marks >= 60) {
            return 'C';
        } elseif ($marks >= 50) {
            return 'D';
        } else {
            return 'F';
        }
    }
}