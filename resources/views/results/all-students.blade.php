<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>All Students & Results | School Result System</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #E6F4F8;
            color: #1f2937;
            min-height: 100vh;
        }

        .header {
            background: linear-gradient(135deg, #0A3D4D, #00C8D7);
            color: white;
            padding: 25px 40px;
        }

        .header h1 {
            font-size: 28px;
            font-weight: 600;
        }

        .header p {
            margin-top: 5px;
            font-size: 14px;
            opacity: 0.9;
        }

        .container {
            max-width: 1250px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .top-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            gap: 20px;
        }

        .page-title h2 {
            font-size: 24px;
            color: #0A3D4D;
        }

        .page-title p {
            color: #6b7280;
            font-size: 14px;
            margin-top: 5px;
        }

        .back-button {
            display: inline-block;
            background: linear-gradient(135deg, #0A3D4D, #00C8D7);
            color: white;
            text-decoration: none;
            padding: 12px 20px;
            border-radius: 10px;
            font-size: 14px;
            font-weight: 500;
            transition: 0.3s;
            box-shadow: 0 5px 15px rgba(0, 200, 215, 0.2);
        }

        .back-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0, 200, 215, 0.3);
        }

        .student-card {
            background: white;
            border-radius: 18px;
            padding: 25px;
            margin-bottom: 25px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        .student-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eef2f3;
        }

        .student-info h3 {
            color: #0A3D4D;
            font-size: 19px;
        }

        .student-info p {
            color: #6b7280;
            font-size: 12px;
            margin-top: 4px;
        }

        .result-count {
            background: #e0f7fa;
            color: #0A3D4D;
            padding: 7px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }

        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 800px;
        }

        thead {
            background: #f0fafc;
        }

        th {
            text-align: left;
            padding: 13px;
            color: #0A3D4D;
            font-size: 12px;
            font-weight: 600;
            border-bottom: 2px solid #e5e7eb;
            white-space: nowrap;
        }

        td {
            padding: 13px;
            font-size: 12px;
            border-bottom: 1px solid #eef2f3;
            color: #4b5563;
        }

        tbody tr:hover {
            background: #f8fcfd;
        }

        .course-code {
            font-weight: 600;
            color: #0A3D4D;
        }

        .course-name {
            color: #1f2937;
        }

        .marks {
            font-weight: 600;
            color: #0A3D4D;
        }

        .grade {
            display: inline-block;
            min-width: 35px;
            text-align: center;
            padding: 5px 9px;
            border-radius: 20px;
            background: #e0f7fa;
            color: #0A3D4D;
            font-weight: 700;
            font-size: 11px;
        }

        .empty-results {
            text-align: center;
            padding: 20px;
            color: #9ca3af;
            font-size: 13px;
        }

        .no-students {
            background: white;
            border-radius: 18px;
            padding: 50px;
            text-align: center;
            color: #9ca3af;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        .footer {
            text-align: center;
            color: #999;
            font-size: 11px;
            padding: 20px;
        }

        @media (max-width: 700px) {

            .header {
                padding: 20px;
            }

            .header h1 {
                font-size: 22px;
            }

            .container {
                margin: 25px auto;
                padding: 0 15px;
            }

            .top-section {
                flex-direction: column;
                align-items: flex-start;
            }

            .back-button {
                width: 100%;
                text-align: center;
            }

            .student-card {
                padding: 18px;
                border-radius: 14px;
            }

            .student-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }

            th,
            td {
                padding: 11px;
            }
        }
    </style>
</head>

<body>

    <div class="header">
        <h1>All Students & Results</h1>
        <p>View registered students and their academic results across different courses</p>
    </div>

    <div class="container">

        <div class="top-section">

            <div class="page-title">
                <h2>Students and Academic Results</h2>
                <p>All registered students and their results</p>
            </div>

            <a href="{{ route('lecturer.dashboard') }}" class="back-button">
                ← Back to Dashboard
            </a>

        </div>

        @forelse($students as $student)

            <div class="student-card">

                <div class="student-header">

                    <div class="student-info">
                        <h3>{{ $student->name }}</h3>

                        <p>
                            Student Number:
                            {{ $student->student_number }}
                        </p>
                    </div>

                    <div class="result-count">
                        {{ $student->results->count() }}
                        Result(s)
                    </div>

                </div>

                @if($student->results->count() > 0)

                    <div class="table-wrapper">

                        <table>

                            <thead>
                                <tr>
                                    <th>Course Code</th>
                                    <th>Course</th>
                                    <th>Marks</th>
                                    <th>Grade</th>
                                    <th>Semester</th>
                                    <th>Academic Year</th>
                                </tr>
                            </thead>

                            <tbody>

                                @foreach($student->results as $result)

                                    <tr>

                                        <td class="course-code">
                                            {{ $result->course->course_code }}
                                        </td>

                                        <td class="course-name">
                                            {{ $result->course->course_name }}
                                        </td>

                                        <td class="marks">
                                            {{ $result->marks }}
                                        </td>

                                        <td>
                                            <span class="grade">
                                                {{ $result->grade }}
                                            </span>
                                        </td>

                                        <td>
                                            {{ $result->semester }}
                                        </td>

                                        <td>
                                            {{ $result->academic_year }}
                                        </td>

                                    </tr>

                                @endforeach

                            </tbody>

                        </table>

                    </div>

                @else

                    <div class="empty-results">
                        No results have been entered for this student yet.
                    </div>

                @endif

            </div>

        @empty

            <div class="no-students">
                No registered students found.
            </div>

        @endforelse

    </div>

    <div class="footer">
        School Result System &copy; {{ date('Y') }}
    </div>

</body>
</html>