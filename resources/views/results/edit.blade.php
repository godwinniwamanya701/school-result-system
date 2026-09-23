<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student Result</title>
</head>
<body>

    <h1>Edit Student Result</h1>

    @if ($errors->any())
        <div>
            <strong>Please correct the following errors:</strong>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('results.update', $result->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div>
            <label for="student_id">Student:</label>

            <select name="student_id" id="student_id" required>
                @foreach ($students as $student)
                    <option value="{{ $student->id }}"
                        {{ $result->student_id == $student->id ? 'selected' : '' }}>
                        {{ $student->student_number }} - {{ $student->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <br>

        <div>
            <label for="course_id">Course:</label>

            <select name="course_id" id="course_id" required>
                @foreach ($courses as $course)
                    <option value="{{ $course->id }}"
                        {{ $result->course_id == $course->id ? 'selected' : '' }}>
                        {{ $course->course_code }} - {{ $course->course_name }}
                    </option>
                @endforeach
            </select>
        </div>

        <br>

        <div>
            <label for="marks">Marks:</label>

            <input
                type="number"
                name="marks"
                id="marks"
                min="0"
                max="100"
                step="0.01"
                value="{{ $result->marks }}"
                required
            >
        </div>

        <br>

        <div>
            <label for="semester">Semester:</label>

            <input
                type="text"
                name="semester"
                id="semester"
                value="{{ $result->semester }}"
                required
            >
        </div>

        <br>

        <div>
            <label for="academic_year">Academic Year:</label>

            <input
                type="text"
                name="academic_year"
                id="academic_year"
                value="{{ $result->academic_year }}"
                required
            >
        </div>

        <br>

        <button type="submit">Update Result</button>

        <a href="{{ route('results.index') }}">Cancel</a>

    </form>

</body>
</html>