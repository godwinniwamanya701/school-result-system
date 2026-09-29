<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Student Result | School Result System</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #f4fbfc;
            min-height: 100vh;
            padding: 40px 20px;
            color: #173b43;
        }

        .container {
            max-width: 700px;
            margin: 0 auto;
        }

        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            color: #0b6670;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 20px;
        }

        .back-link:hover {
            text-decoration: underline;
        }

        .card {
            background: #ffffff;
            border-radius: 18px;
            padding: 35px;
            box-shadow: 0 10px 30px rgba(0, 60, 70, 0.08);
            border: 1px solid #e1f0f2;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .icon-circle {
            width: 65px;
            height: 65px;
            margin: 0 auto 15px;
            border-radius: 50%;
            background: #dff7f4;
            color: #087f7b;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .icon-circle svg {
            width: 32px;
            height: 32px;
        }

        h1 {
            color: #0a3d4d;
            font-size: 26px;
            margin-bottom: 7px;
        }

        .subtitle {
            color: #71878d;
            font-size: 14px;
        }

        .error-box {
            background: #fff1f1;
            border: 1px solid #f0b8b8;
            color: #9b2525;
            border-radius: 10px;
            padding: 15px 18px;
            margin-bottom: 25px;
            font-size: 14px;
        }

        .error-box strong {
            display: block;
            margin-bottom: 8px;
        }

        .error-box ul {
            margin-left: 20px;
        }

        .form-group {
            margin-bottom: 22px;
        }

        label {
            display: block;
            font-size: 14px;
            font-weight: 600;
            color: #244f58;
            margin-bottom: 8px;
        }

        select,
        input {
            width: 100%;
            padding: 13px 15px;
            border: 1px solid #cbdfe2;
            border-radius: 9px;
            background: #ffffff;
            color: #294c54;
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            outline: none;
            transition: 0.2s ease;
        }

        select:focus,
        input:focus {
            border-color: #0b8f8a;
            box-shadow: 0 0 0 3px rgba(11, 143, 138, 0.10);
        }

        .button-row {
            display: flex;
            gap: 12px;
            margin-top: 30px;
        }

        .update-btn,
        .cancel-btn {
            flex: 1;
            padding: 13px 20px;
            border-radius: 9px;
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            font-weight: 600;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            transition: 0.2s ease;
        }

        .update-btn {
            border: none;
            background: #087f7b;
            color: white;
        }

        .update-btn:hover {
            background: #066b68;
        }

        .cancel-btn {
            background: #eef6f7;
            color: #355b63;
            border: 1px solid #d2e4e7;
        }

        .cancel-btn:hover {
            background: #e3f0f2;
        }

        .info-box {
            margin-top: 25px;
            padding: 14px 16px;
            background: #f0fafb;
            border-left: 4px solid #0b8f8a;
            border-radius: 6px;
            color: #557077;
            font-size: 13px;
            line-height: 1.6;
        }

        @media (max-width: 600px) {
            body {
                padding: 25px 15px;
            }

            .card {
                padding: 25px 20px;
            }

            h1 {
                font-size: 22px;
            }

            .button-row {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <a href="{{ route('results.index') }}" class="back-link">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
             stroke="currentColor" stroke-width="2" stroke-linecap="round"
             stroke-linejoin="round">
            <path d="M19 12H5"></path>
            <path d="M12 19l-7-7 7-7"></path>
        </svg>
        Back to Results
    </a>

    <div class="card">

        <div class="header">

            <div class="icon-circle">
                <svg viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2"
                     stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 20h9"></path>
                    <path d="M16.5 3.5a2.1 2.1 0 0 1 3 3L8 18l-4 1 1-4Z"></path>
                </svg>
            </div>

            <h1>Edit Student Result</h1>

            <p class="subtitle">
                Update the student's academic result information
            </p>

        </div>

        @if ($errors->any())
            <div class="error-box">
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

            <div class="form-group">
                <label for="student_id">Student</label>

                <select name="student_id" id="student_id" required>
                    @foreach ($students as $student)
                        <option value="{{ $student->id }}"
                            {{ $result->student_id == $student->id ? 'selected' : '' }}>
                            {{ $student->student_number }} - {{ $student->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="course_id">Course</label>

                <select name="course_id" id="course_id" required>
                    @foreach ($courses as $course)
                        <option value="{{ $course->id }}"
                            {{ $result->course_id == $course->id ? 'selected' : '' }}>
                            {{ $course->course_code }} - {{ $course->course_name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="marks">Marks</label>

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

            <div class="form-group">
                <label for="semester">Semester</label>

                <input
                    type="text"
                    name="semester"
                    id="semester"
                    value="{{ $result->semester }}"
                    required
                >
            </div>

            <div class="form-group">
                <label for="academic_year">Academic Year</label>

                <input
                    type="text"
                    name="academic_year"
                    id="academic_year"
                    value="{{ $result->academic_year }}"
                    required
                >
            </div>

            <div class="button-row">

                <button type="submit" class="update-btn">
                    Update Result
                </button>

                <a href="{{ route('results.index') }}" class="cancel-btn">
                    Cancel
                </a>

            </div>

        </form>

        <div class="info-box">
            <strong>Note:</strong> The grade will be recalculated automatically
            based on the updated marks.
        </div>

    </div>

</div>

</body>
</html>