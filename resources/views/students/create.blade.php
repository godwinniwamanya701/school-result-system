<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
</head>
<body>

    <h1>Add New Student</h1>

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

    <form action="{{ route('students.store') }}" method="POST">

        @csrf

        <div>
            <label for="student_number">Student Number:</label>
            <input
                type="text"
                name="student_number"
                id="student_number"
                value="{{ old('student_number') }}"
                placeholder="e.g. 2026/BIT/001"
                required
            >
        </div>

        <br>

        <div>
            <label for="name">Full Name:</label>
            <input
                type="text"
                name="name"
                id="name"
                value="{{ old('name') }}"
                placeholder="Enter student's name"
                required
            >
        </div>

        <br>

        <div>
            <label for="email">Email:</label>
            <input
                type="email"
                name="email"
                id="email"
                value="{{ old('email') }}"
                placeholder="student@example.com"
                required
            >
        </div>

        <br>

        <div>
            <label for="password">Password:</label>
            <input
                type="password"
                name="password"
                id="password"
                required
            >
        </div>

        <br>

        <div>
            <label for="password_confirmation">Confirm Password:</label>
            <input
                type="password"
                name="password_confirmation"
                id="password_confirmation"
                required
            >
        </div>

        <br>

        <button type="submit">Save Student</button>

        <a href="{{ route('students.index') }}">Cancel</a>

    </form>

</body>
</html>