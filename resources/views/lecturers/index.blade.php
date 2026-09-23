<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lecturers | School Result System</title>

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
            display: flex;
            justify-content: space-between;
            align-items: center;
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

        /* Add lecturer button */
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
            min-width: 500px;
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

        .lecturer-name {
            font-weight: 600;
            color: #0A3D4D;
        }

        .email {
            color: #6b7280;
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
            <h1>Lecturer Management</h1>
            <p>Manage lecturers in the school result system</p>
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
                <h2>Lecturers</h2>
                <p>View and manage registered lecturers</p>
            </div>

            <a href="{{ route('lecturers.create') }}" class="add-button">
                + Add New Lecturer
            </a>

        </div>

        <!-- Lecturers table -->
        <div class="table-card">

            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($lecturers as $lecturer)

                        <tr>
                            <td class="lecturer-name">
                                {{ $lecturer->name }}
                            </td>

                            <td class="email">
                                {{ $lecturer->email }}
                            </td>
                        </tr>

                    @empty

                        <tr>
                            <td colspan="2" class="empty">
                                No lecturers found.
                            </td>
                        </tr>

                    @endforelse

                </tbody>
            </table>

        </div>

    </div>

</body>
</html>