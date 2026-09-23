<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Results | School Result System</title>

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
            max-width: 1250px;
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

        /* Add result button */
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

        /* Results table card */
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
            min-width: 950px;
        }

        thead {
            background: #f0fafc;
        }

        th {
            text-align: left;
            padding: 15px;
            color: #0A3D4D;
            font-size: 13px;
            font-weight: 600;
            border-bottom: 2px solid #e5e7eb;
            white-space: nowrap;
        }

        td {
            padding: 15px;
            font-size: 13px;
            border-bottom: 1px solid #eef2f3;
            color: #4b5563;
        }

        tbody tr {
            transition: 0.2s;
        }

        tbody tr:hover {
            background: #f8fcfd;
        }

        /* Student and course */
        .student-name {
            font-weight: 600;
            color: #0A3D4D;
        }

        .course-name {
            font-weight: 500;
            color: #1f2937;
        }

        /* Marks */
        .marks {
            font-weight: 600;
            color: #0A3D4D;
        }

        /* Grade badges */
        .grade {
            display: inline-block;
            min-width: 35px;
            text-align: center;
            padding: 5px 9px;
            border-radius: 20px;
            background: #e0f7fa;
            color: #0A3D4D;
            font-weight: 700;
            font-size: 12px;
        }

        /* Semester and academic year */
        .semester,
        .academic-year {
            color: #6b7280;
        }

        /* Actions */
        .actions {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .edit-button {
            background: #e0f2fe;
            color: #0369a1;
            text-decoration: none;
            padding: 7px 12px;
            border-radius: 7px;
            font-size: 12px;
            font-weight: 500;
            transition: 0.2s;
        }

        .edit-button:hover {
            background: #bae6fd;
        }

        .delete-button {
            background: #fee2e2;
            color: #b91c1c;
            border: none;
            padding: 7px 12px;
            border-radius: 7px;
            font-family: 'Poppins', sans-serif;
            font-size: 12px;
            font-weight: 500;
            cursor: pointer;
            transition: 0.2s;
        }

        .delete-button:hover {
            background: #fecaca;
        }

        /* Empty state */
        .empty {
            text-align: center;
            padding: 40px !important;
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
            <h1>Results Management</h1>
            <p>View and manage student academic results</p>
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
                <h2>Student Results</h2>
                <p>View, edit and manage academic results</p>
            </div>

            <a href="{{ route('results.create') }}" class="add-button">
                + Add New Result
            </a>

        </div>

        <!-- Results table -->
        <div class="table-card">

            <table>
                <thead>
                    <tr>
                        <th>Student</th>
                        <th>Course</th>
                        <th>Marks</th>
                        <th>Grade</th>
                        <th>Semester</th>
                        <th>Academic Year</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($results as $result)

                        <tr>

                            <td class="student-name">
                                {{ $result->student->name }}
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

                            <td class="semester">
                                {{ $result->semester }}
                            </td>

                            <td class="academic-year">
                                {{ $result->academic_year }}
                            </td>

                            <td>
                                <div class="actions">

                                    <a href="{{ route('results.edit', $result->id) }}"
                                       class="edit-button">
                                        Edit
                                    </a>

                                    <form action="{{ route('results.destroy', $result->id) }}"
                                          method="POST"
                                          style="display:inline;">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="delete-button"
                                                onclick="return confirm('Are you sure you want to delete this result?')">
                                            Delete
                                        </button>

                                    </form>

                                </div>
                            </td>

                        </tr>

                    @empty

                        <tr>
                            <td colspan="7" class="empty">
                                No results found.
                            </td>
                        </tr>

                    @endforelse

                </tbody>
            </table>

        </div>

    </div>

</body>
</html>