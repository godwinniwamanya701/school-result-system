<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Courses | School Result System</title>

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

        /* Header */
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

        /* Main container */
        .container {
            max-width: 1100px;
            margin: 40px auto;
            padding: 0 20px;
        }

        /* Top section */
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

        /* Add course button */
        .add-button {
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

        .add-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0, 200, 215, 0.3);
        }

        /* Success message */
        .success-message {
            background: #dcfce7;
            color: #166534;
            padding: 14px 18px;
            border-radius: 10px;
            margin-bottom: 20px;
            border-left: 5px solid #16a34a;
            font-size: 14px;
        }

        /* Table card */
        .table-card {
            background: white;
            border-radius: 18px;
            padding: 25px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 700px;
        }

        thead {
            background: #f0fafc;
        }

        th {
            text-align: left;
            padding: 16px;
            color: #0A3D4D;
            font-size: 14px;
            font-weight: 600;
            border-bottom: 2px solid #e5e7eb;
        }

        td {
            padding: 16px;
            font-size: 14px;
            border-bottom: 1px solid #eef2f3;
            color: #4b5563;
        }

        tbody tr {
            transition: 0.2s;
        }

        tbody tr:hover {
            background: #f8fcfd;
        }

        .course-code {
            font-weight: 600;
            color: #0A3D4D;
        }

        .course-name {
            font-weight: 500;
            color: #1f2937;
        }

        .credit-units {
            text-align: center;
            font-weight: 600;
        }

        .lecturer {
            color: #4b5563;
        }

        /* Lecturer badge */
        .lecturer-badge {
            display: inline-block;
            background: #e0f7fa;
            color: #0A3D4D;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 500;
        }

        /* Empty state */
        .empty {
            text-align: center;
            padding: 35px !important;
            color: #9ca3af;
        }

        /* Mobile */
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

            .add-button {
                width: 100%;
                text-align: center;
            }

            .table-card {
                padding: 15px;
                border-radius: 14px;
            }

            th,
            td {
                padding: 12px;
            }
        }
    </style>
</head>

<body>

    <!-- Header -->
    <div class="header">
        <div>
            <h1>Course Management</h1>
            <p>Manage courses and assigned lecturers</p>
        </div>
    </div>

    <!-- Main content -->
    <div class="container">

        <!-- Success message -->
        @if(session('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif

        <!-- Page title and button -->
        <div class="top-section">

            <div class="page-title">
                <h2>Courses</h2>
                <p>View and manage registered courses</p>
            </div>

            <a href="{{ route('courses.create') }}" class="add-button">
                + Add New Course
            </a>

        </div>

        <!-- Courses table -->
        <div class="table-card">

            <table>
                <thead>
                    <tr>
                        <th>Course Code</th>
                        <th>Course Name</th>
                        <th>Credit Units</th>
                        <th>Lecturer</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($courses as $course)

                        <tr>
                            <td class="course-code">
                                {{ $course->course_code }}
                            </td>

                            <td class="course-name">
                                {{ $course->course_name }}
                            </td>

                            <td class="credit-units">
                                {{ $course->credit_units }}
                            </td>

                            <td class="lecturer">
                                <span class="lecturer-badge">
                                    {{ $course->lecturer->name }}
                                </span>
                            </td>
                        </tr>

                    @empty

                        <tr>
                            <td colspan="4" class="empty">
                                No courses found.
                            </td>
                        </tr>

                    @endforelse

                </tbody>
            </table>

        </div>

    </div>

</body>
</html>