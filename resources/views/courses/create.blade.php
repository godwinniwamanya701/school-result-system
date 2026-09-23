<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Course</title>
</head>
<body>

    <h1>Add New Course</h1>

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

    <form action="{{ route('courses.store') }}" method="POST">

        @csrf

        <div>
            <label for="course_code">Course Code:</label>
            <input
                type="text"
                name="course_code"
                id="course_code"
                value="{{ old('course_code') }}"
                placeholder="e.g. BIT 2101"
                required
            >
        </div>

        <br>

        <div>
            <label for="course_name">Course Name:</label>
            <input
                type="text"
                name="course_name"
                id="course_name"
                value="{{ old('course_name') }}"
                placeholder="e.g. Database Systems"
                required
            >
        </div>

        <br>

        <div>
            <label for="credit_units">Credit Units:</label>
            <input
                type="number"
                name="credit_units"
                id="credit_units"
                min="1"
                max="20"
                value="{{ old('credit_units') }}"
                placeholder="e.g. 3"
                required
            >
        </div>

        <br>

        <div>
            <label for="lecturer_id">Lecturer:</label>

            <select name="lecturer_id" id="lecturer_id" required>
                <option value="">-- Select Lecturer --</option>

                @foreach ($lecturers as $lecturer)
                    <option value="{{ $lecturer->id }}"
                        {{ old('lecturer_id') == $lecturer->id ? 'selected' : '' }}>
                        {{ $lecturer->name }} - {{ $lecturer->email }}
                    </option>
                @endforeach
            </select>
        </div>

        <br>

        <button type="submit">Save Course</button>

        <a href="{{ route('courses.index') }}">Cancel</a>

    </form>

</body>
</html>