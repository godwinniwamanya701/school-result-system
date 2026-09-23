<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Dashboard - School Result System</title>

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

        /* ================= SIDEBAR ================= */

        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            width: 240px;
            height: 100vh;
            background: linear-gradient(180deg, #0A3D4D, #062C38);
            color: white;
            padding: 25px 15px;
            z-index: 1000;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 0 12px 30px;
            border-bottom: 1px solid rgba(255,255,255,0.12);
        }

        .logo-icon {
            width: 40px;
            height: 40px;
            background: rgba(255,255,255,0.15);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        .logo h2 {
            font-size: 17px;
            font-weight: 600;
        }

        .menu {
            margin-top: 30px;
        }

        .menu a {
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
            color: rgba(255,255,255,0.75);
            padding: 13px 15px;
            border-radius: 10px;
            margin-bottom: 8px;
            font-size: 13px;
            transition: 0.3s;
        }

        .menu a:hover,
        .menu a.active {
            background: rgba(255,255,255,0.13);
            color: white;
        }

        .menu-icon {
            width: 22px;
            text-align: center;
        }

        .sidebar-bottom {
            position: absolute;
            bottom: 25px;
            left: 15px;
            right: 15px;
        }

        .logout-button {
            width: 100%;
            border: none;
            background: rgba(255,255,255,0.1);
            color: white;
            padding: 12px;
            border-radius: 10px;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;
            font-size: 13px;
            transition: 0.3s;
        }

        .logout-button:hover {
            background: rgba(255,255,255,0.2);
        }

        /* ================= MAIN ================= */

        .main {
            margin-left: 240px;
            min-height: 100vh;
        }

        /* ================= TOPBAR ================= */

        .topbar {
            height: 75px;
            background: white;
            border-bottom: 1px solid #e8edf2;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 35px;
        }

        .topbar h3 {
            color: #123C4A;
            font-size: 18px;
            font-weight: 600;
        }

        .student-profile {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .avatar {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: #00AFC0;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 14px;
        }

        .profile-text strong {
            display: block;
            color: #123C4A;
            font-size: 12px;
        }

        .profile-text small {
            color: #888;
            font-size: 10px;
        }

        /* ================= CONTENT ================= */

        .content {
            padding: 30px 35px;
        }

        /* ================= WELCOME ================= */

        .welcome {
            background: linear-gradient(135deg, #0A3D4D, #00C8D7);
            color: white;
            padding: 30px;
            border-radius: 18px;
            margin-bottom: 25px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.08);
        }

        .welcome h1 {
            font-size: 25px;
            margin-bottom: 8px;
        }

        .welcome p {
            font-size: 13px;
            opacity: 0.9;
        }

        /* ================= STATS ================= */

        .stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
            margin-bottom: 25px;
        }

        .stat-card {
            background: white;
            padding: 22px;
            border-radius: 15px;
            box-shadow: 0 5px 18px rgba(0,0,0,0.05);
        }

        .stat-card small {
            color: #888;
            font-size: 11px;
        }

        .stat-card h2 {
            color: #123C4A;
            font-size: 25px;
            margin-top: 5px;
        }

        .stat-card .icon {
            float: right;
            width: 42px;
            height: 42px;
            border-radius: 10px;
            background: #E6F4F8;
            color: #00AFC0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
        }

        /* ================= INFORMATION ================= */

        .information {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 18px;
            margin-bottom: 25px;
        }

        .info-card {
            background: white;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 5px 18px rgba(0,0,0,0.05);
        }

        .info-card small {
            display: block;
            color: #888;
            font-size: 11px;
            margin-bottom: 5px;
        }

        .info-card strong {
            color: #123C4A;
            font-size: 14px;
            word-break: break-word;
        }

        /* ================= RESULTS ================= */

        .results-card {
            background: white;
            padding: 25px;
            border-radius: 16px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.06);
        }

        .results-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .results-header h3 {
            color: #123C4A;
            font-size: 18px;
        }

        .results-header span {
            color: #00AFC0;
            font-size: 11px;
        }

        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 500px;
        }

        th {
            background: #F1FAFC;
            color: #123C4A;
            padding: 14px;
            text-align: left;
            font-size: 12px;
            font-weight: 600;
            border-bottom: 1px solid #e5e7eb;
        }

        td {
            padding: 14px;
            border-bottom: 1px solid #edf0f2;
            font-size: 13px;
            color: #555;
        }

        tr:hover td {
            background: #fafefe;
        }

        .grade {
            display: inline-block;
            min-width: 35px;
            text-align: center;
            padding: 5px 9px;
            border-radius: 15px;
            background: #E6F7ED;
            color: #15803d;
            font-weight: 600;
            font-size: 12px;
        }

        .no-results {
            padding: 35px;
            background: #F8FAFC;
            border-radius: 10px;
            text-align: center;
            color: #777;
            font-size: 13px;
        }

        /* ================= FOOTER ================= */

        .footer {
            text-align: center;
            color: #999;
            font-size: 11px;
            padding: 25px;
        }

        /* ================= MOBILE ================= */

        @media (max-width: 850px) {

            .sidebar {
                width: 70px;
                padding: 20px 10px;
            }

            .logo {
                justify-content: center;
                padding: 0 0 25px;
            }

            .logo h2 {
                display: none;
            }

            .menu a {
                justify-content: center;
                padding: 13px 5px;
            }

            .menu a span:not(.menu-icon) {
                display: none;
            }

            .sidebar-bottom {
                left: 10px;
                right: 10px;
            }

            .logout-button {
                font-size: 0;
            }

            .logout-button::before {
                content: "↪";
                font-size: 18px;
            }

            .main {
                margin-left: 70px;
            }

            .stats {
                grid-template-columns: 1fr;
            }

        }

        @media (max-width: 600px) {

            .topbar {
                padding: 0 18px;
            }

            .topbar h3 {
                font-size: 15px;
            }

            .profile-text {
                display: none;
            }

            .content {
                padding: 20px 15px;
            }

            .welcome {
                padding: 23px;
            }

            .welcome h1 {
                font-size: 21px;
            }

            .information {
                grid-template-columns: 1fr;
            }

            .results-card {
                padding: 18px;
            }

            .results-header {
                align-items: flex-start;
                gap: 10px;
                flex-direction: column;
            }

        }

    </style>
</head>

<body>

<!-- SIDEBAR -->

<div class="sidebar">

    <div class="logo">

        <div class="logo-icon">
            🎓
        </div>

        <h2>SchoolResults</h2>

    </div>


    <div class="menu">

        <a href="{{ route('student.dashboard') }}" class="active">

            <span class="menu-icon">🏠</span>

            <span>Dashboard</span>

        </a>


        <a href="#results">

            <span class="menu-icon">📊</span>

            <span>My Results</span>

        </a>


        <a href="#information">

            <span class="menu-icon">👤</span>

            <span>My Information</span>

        </a>

    </div>


    <div class="sidebar-bottom">

        <form method="POST" action="{{ route('student.logout') }}">

            @csrf

            <button type="submit" class="logout-button">
                Logout
            </button>

        </form>

    </div>

</div>


<!-- MAIN -->

<div class="main">


    <!-- TOPBAR -->

    <div class="topbar">

        <h3>Student Dashboard</h3>


        <div class="student-profile">

            <div class="avatar">

                {{ strtoupper(substr($student->name, 0, 1)) }}

            </div>


            <div class="profile-text">

                <strong>
                    {{ $student->name }}
                </strong>

                <small>
                    Student
                </small>

            </div>

        </div>

    </div>


    <!-- CONTENT -->

    <div class="content">


        <!-- WELCOME -->

        <div class="welcome">

            <h1>
                Welcome, {{ $student->name }} 👋
            </h1>

            <p>
                View your academic results and student information from your dashboard.
            </p>

        </div>


        <!-- STATISTICS -->

        <div class="stats">


            <div class="stat-card">

                <div class="icon">
                    📚
                </div>

                <small>Total Courses</small>

                <h2>
                    {{ $student->results->count() }}
                </h2>

            </div>


            <div class="stat-card">

                <div class="icon">
                    📈
                </div>

                <small>Average Marks</small>

                <h2>

                    @if ($student->results->count() > 0)

                        {{ number_format($student->results->avg('marks'), 1) }}%

                    @else

                        0%

                    @endif

                </h2>

            </div>


            <div class="stat-card">

                <div class="icon">
                    🎓
                </div>

                <small>Account Status</small>

                <h2 style="font-size:18px;">
                    Active
                </h2>

            </div>

        </div>


        <!-- INFORMATION -->

        <div class="information" id="information">


            <div class="info-card">

                <small>Student Number</small>

                <strong>
                    {{ $student->student_number }}
                </strong>

            </div>


            <div class="info-card">

                <small>Email Address</small>

                <strong>
                    {{ $student->email }}
                </strong>

            </div>

        </div>


        <!-- RESULTS -->

        <div class="results-card" id="results">


            <div class="results-header">

                <h3>
                    My Academic Results
                </h3>

                <span>
                    Academic Performance
                </span>

            </div>


            @if ($student->results->count() > 0)


                <div class="table-wrapper">

                    <table>

                        <thead>

                            <tr>

                                <th>
                                    Course
                                </th>

                                <th>
                                    Marks
                                </th>

                                <th>
                                    Grade
                                </th>

                            </tr>

                        </thead>


                        <tbody>

                            @foreach ($student->results as $result)

                                <tr>

                                    <td>

                                        {{ $result->course->course_name
                                            ?? $result->course->name
                                            ?? 'N/A' }}

                                    </td>


                                    <td>

                                        {{ $result->marks }}

                                    </td>


                                    <td>

                                        <span class="grade">

                                            {{ $result->grade ?? 'N/A' }}

                                        </span>

                                    </td>

                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>


            @else


                <div class="no-results">

                    No results have been entered for you yet.

                </div>


            @endif


        </div>


    </div>


    <!-- FOOTER -->

    <div class="footer">

        School Result System &copy; {{ date('Y') }}

    </div>


</div>

</body>
</html>