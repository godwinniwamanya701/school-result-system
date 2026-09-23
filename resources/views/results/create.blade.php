<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Student Result - School Result System</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #f4f7fb;
            color: #1f2937;
            min-height: 100vh;
        }

        /* HEADER */

        .header {
            background: linear-gradient(135deg, #0A3D4D, #00C8D7);
            color: white;
            padding: 18px 45px;

            display: flex;
            justify-content: space-between;
            align-items: center;

            box-shadow: 0 4px 15px rgba(0,0,0,0.12);
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .brand-icon {
            width: 42px;
            height: 42px;

            background: rgba(255,255,255,0.18);

            border-radius: 10px;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 21px;
        }

        .brand h2 {
            font-size: 20px;
            font-weight: 600;
        }

        .back-link {
            color: white;
            text-decoration: none;

            border: 1px solid rgba(255,255,255,0.5);

            padding: 9px 17px;

            border-radius: 20px;

            font-size: 12px;

            transition: 0.3s;
        }

        .back-link:hover {
            background: white;
            color: #0A3D4D;
        }

        /* MAIN */

        .container {
            max-width: 850px;

            margin: 40px auto;

            padding: 0 20px;
        }

        /* PAGE TITLE */

        .page-heading {
            margin-bottom: 25px;
        }

        .page-heading h1 {
            color: #123C4A;

            font-size: 27px;

            margin-bottom: 6px;
        }

        .page-heading p {
            color: #777;

            font-size: 13px;
        }

        /* FORM CARD */

        .form-card {
            background: white;

            padding: 32px;

            border-radius: 18px;

            box-shadow: 0 7px 25px rgba(0,0,0,0.07);
        }

        /* ERROR */

        .error-box {
            background: #fff1f2;

            border: 1px solid #fecdd3;

            color: #b91c1c;

            padding: 15px 18px;

            border-radius: 10px;

            margin-bottom: 25px;

            font-size: 13px;
        }

        .error-box strong {
            display: block;

            margin-bottom: 8px;
        }

        .error-box ul {
            padding-left: 20px;
        }

        .error-box li {
            margin-bottom: 3px;
        }

        /* FORM GRID */

        .form-grid {
            display: grid;

            grid-template-columns: repeat(2, 1fr);

            gap: 22px;

            margin-bottom: 22px;
        }

        .form-group {
            display: flex;

            flex-direction: column;
        }

        .form-group.full {
            grid-column: 1 / -1;
        }

        label {
            color: #123C4A;

            font-size: 13px;

            font-weight: 600;

            margin-bottom: 8px;
        }

        input,
        select {
            width: 100%;

            padding: 12px 14px;

            border: 1px solid #d9e1e6;

            border-radius: 9px;

            background: #fff;

            color: #333;

            font-family: 'Poppins', sans-serif;

            font-size: 13px;

            outline: none;

            transition: 0.3s;
        }

        input:focus,
        select:focus {
            border-color: #00AFC0;

            box-shadow: 0 0 0 3px rgba(0,175,192,0.10);
        }

        input::placeholder {
            color: #aaa;
        }

        /* COURSE BOX */

        .course-box {
            background: #F1FAFC;

            border: 1px solid #d9eef2;

            padding: 15px 17px;

            border-radius: 10px;
        }

        .course-box .course-code {
            color: #00AFC0;

            font-size: 12px;

            font-weight: 700;

            margin-bottom: 3px;
        }

        .course-box .course-name {
            color: #123C4A;

            font-size: 14px;

            font-weight: 600;
        }

        .no-course {
            background: #fff7ed;

            border: 1px solid #fed7aa;

            color: #c2410c;

            padding: 14px;

            border-radius: 10px;

            font-size: 13px;
        }

        /* BUTTONS */

        .form-actions {
            display: flex;

            justify-content: flex-end;

            align-items: center;

            gap: 12px;

            margin-top: 10px;

            padding-top: 25px;

            border-top: 1px solid #edf0f2;
        }

        .cancel-button {
            text-decoration: none;

            padding: 11px 20px;

            border: 1px solid #d9e1e6;

            border-radius: 9px;

            color: #666;

            background: white;

            font-size: 13px;

            transition: 0.3s;
        }

        .cancel-button:hover {
            background: #f5f5f5;

            color: #333;
        }

        .save-button {
            border: none;

            background: linear-gradient(135deg, #0A3D4D, #00AFC0);

            color: white;

            padding: 11px 23px;

            border-radius: 9px;

            font-family: 'Poppins', sans-serif;

            font-size: 13px;

            font-weight: 600;

            cursor: pointer;

            transition: 0.3s;

            box-shadow: 0 4px 12px rgba(0,175,192,0.20);
        }

        .save-button:hover {
            transform: translateY(-1px);

            box-shadow: 0 6px 15px rgba(0,175,192,0.28);
        }

        /* FOOTER */

        .footer {
            text-align: center;

            color: #999;

            font-size: 11px;

            padding: 20px;
        }

        /* MOBILE */

        @media (max-width: 700px) {

            .header {
                padding: 15px 20px;
            }

            .brand h2 {
                font-size: 16px;
            }

            .brand-icon {
                width: 36px;
                height: 36px;
                font-size: 17px;
            }

            .back-link {
                padding: 8px 12px;
                font-size: 11px;
            }

            .container {
                margin: 25px auto;
                padding: 0 15px;
            }

            .page-heading h1 {
                font-size: 22px;
            }

            .form-card {
                padding: 22px;
            }

            .form-grid {
                grid-template-columns: 1fr;
                gap: 18px;
            }

            .form-group.full {
                grid-column: auto;
            }

            .form-actions {
                flex-direction: column-reverse;
                align-items: stretch;
            }

            .cancel-button,
            .save-button {
                text-align: center;
                width: 100%;
            }
        }

    </style>
</head>

<body>

<!-- HEADER -->

<div class="header">

    <div class="brand">

        <div class="brand-icon">
            🎓
        </div>

        <h2>School Result System</h2>

    </div>

    <a href="{{ route('results.index') }}" class="back-link">
        ← Back to Results
    </a>

</div>


<!-- MAIN -->

<div class="container">

    <!-- PAGE HEADING -->

    <div class="page-heading">

        <h1>
            Add Student Result
        </h1>

        <p>
            Enter the student's academic result information below.
        </p>

    </div>


    <!-- FORM CARD -->

    <div class="form-card">


        <!-- VALIDATION ERRORS -->

        @if ($errors->any())

            <div class="error-box">

                <strong>
                    Please correct the following errors:
                </strong>

                <ul>

                    @foreach ($errors->all() as $error)

                        <li>
                            {{ $error }}
                        </li>

                    @endforeach

                </ul>

            </div>

        @endif


        <form action="{{ route('results.store') }}" method="POST">

            @csrf


            <div class="form-grid">


                <!-- STUDENT -->

                <div class="form-group full">

                    <label for="student_id">
                        Student
                    </label>

                    <select name="student_id" id="student_id" required>

                        <option value="">
                            -- Select Student --
                        </option>

                        @foreach ($students as $student)

                            <option
                                value="{{ $student->id }}"
                                {{ old('student_id') == $student->id ? 'selected' : '' }}
                            >

                                {{ $student->student_number }}
                                -
                                {{ $student->name }}

                            </option>

                        @endforeach

                    </select>

                </div>


                <!-- COURSE -->

                <div class="form-group full">

                    <label>
                        Course
                    </label>


                    @if ($course)

                        <input
                            type="hidden"
                            name="course_id"
                            value="{{ $course->id }}"
                        >

                        <div class="course-box">

                            <div class="course-code">

                                {{ $course->course_code }}

                            </div>

                            <div class="course-name">

                                {{ $course->course_name }}

                            </div>

                        </div>

                    @else

                        <div class="no-course">

                            No course was selected.

                        </div>

                    @endif

                </div>


                <!-- MARKS -->

                <div class="form-group">

                    <label for="marks">
                        Marks
                    </label>

                    <input
                        type="number"
                        name="marks"
                        id="marks"
                        min="0"
                        max="100"
                        step="0.01"
                        value="{{ old('marks') }}"
                        placeholder="Enter marks (0 - 100)"
                        required
                    >

                </div>


                <!-- SEMESTER -->

                <div class="form-group">

                    <label for="semester">
                        Semester
                    </label>

                    <input
                        type="text"
                        name="semester"
                        id="semester"
                        value="{{ old('semester') }}"
                        placeholder="e.g. Semester One"
                        required
                    >

                </div>


                <!-- ACADEMIC YEAR -->

                <div class="form-group">

                    <label for="academic_year">
                        Academic Year
                    </label>

                    <input
                        type="text"
                        name="academic_year"
                        id="academic_year"
                        value="{{ old('academic_year') }}"
                        placeholder="e.g. 2026/2027"
                        required
                    >

                </div>


            </div>


            <!-- ACTIONS -->

            <div class="form-actions">

                <a
                    href="{{ route('results.index') }}"
                    class="cancel-button"
                >
                    Cancel
                </a>


                <button
                    type="submit"
                    class="save-button"
                >
                    Save Student Result
                </button>

            </div>

        </form>

    </div>

</div>


<!-- FOOTER -->

<div class="footer">

    School Result System &copy; {{ date('Y') }}

</div>

</body>
</html>