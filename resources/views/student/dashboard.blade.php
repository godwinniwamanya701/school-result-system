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
            background: #f7f7fb;
            color: #27273a;
            min-height: 100vh;
        }

        /* ================= SIDEBAR ================= */

        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            width: 220px;
            height: 100vh;
            background: #0d0d20;
            color: white;
            padding: 18px 12px;
            z-index: 1000;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 0 10px 25px;
        }

        .logo-icon {
            width: 32px;
            height: 32px;
            background: #6d28d9;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }

        .logo-icon svg {
            width: 17px;
            height: 17px;
        }

        .logo h2 {
            font-size: 15px;
            font-weight: 600;
            color: #ffffff;
        }

        .section-title {
            color: #77778e;
            font-size: 9px;
            font-weight: 600;
            letter-spacing: 0.7px;
            padding: 0 11px;
            margin: 12px 0 8px;
            text-transform: uppercase;
        }

        .menu a {
            display: flex;
            align-items: center;
            gap: 11px;
            text-decoration: none;
            color: #a5a5b7;
            padding: 10px 11px;
            border-radius: 9px;
            margin-bottom: 4px;
            font-size: 11px;
            transition: 0.25s;
        }

        .menu a:hover,
        .menu a.active {
            background: #29283d;
            color: white;
        }

        .menu-icon {
            width: 18px;
            height: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .menu-icon svg {
            width: 15px;
            height: 15px;
            stroke: currentColor;
        }

        .sidebar-bottom {
            position: absolute;
            bottom: 18px;
            left: 12px;
            right: 12px;
        }

        .logout-button {
            width: 100%;
            border: none;
            background: transparent;
            color: #a5a5b7;
            padding: 10px 11px;
            border-radius: 9px;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;
            font-size: 11px;
            text-align: left;
            display: flex;
            align-items: center;
            gap: 11px;
            transition: 0.25s;
        }

        .logout-button:hover {
            background: #29283d;
            color: white;
        }

        .logout-icon {
            width: 18px;
            height: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logout-icon svg {
            width: 15px;
            height: 15px;
        }

        /* ================= MAIN ================= */

        .main {
            margin-left: 220px;
            min-height: 100vh;
        }

        /* ================= TOPBAR ================= */

        .topbar {
            height: 62px;
            background: white;
            border-bottom: 1px solid #eeeeF4;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 25px;
        }

        .search-box {
            width: 310px;
            height: 35px;
            background: #f1f2f7;
            border-radius: 8px;
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 0 12px;
            color: #a0a0b0;
            font-size: 11px;
        }

        .search-box svg {
            width: 14px;
            height: 14px;
        }

        .student-profile {
            display: flex;
            align-items: center;
            gap: 9px;
        }

        .notification {
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #88889a;
            margin-right: 7px;
        }

        .notification svg {
            width: 16px;
            height: 16px;
        }

        .avatar {
            width: 34px;
            height: 34px;
            border-radius: 50%;
            background: #eee8ff;
            color: #6d28d9;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 12px;
        }

        .profile-text strong {
            display: block;
            color: #303044;
            font-size: 11px;
        }

        .profile-text small {
            color: #9999a9;
            font-size: 9px;
        }

        /* ================= CONTENT ================= */

        .content {
            padding: 25px;
        }

        /* ================= WELCOME ================= */

        .welcome {
            background: #19193a;
            color: white;
            padding: 22px;
            border-radius: 15px;
            margin-bottom: 24px;
            min-height: 125px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }

        .welcome-left {
            flex: 1;
        }

        .welcome-date {
            color: #a9a9c1;
            font-size: 9px;
            text-transform: uppercase;
            margin-bottom: 6px;
        }

        .welcome h1 {
            font-size: 19px;
            font-weight: 600;
            margin-bottom: 5px;
            display: flex;
            align-items: center;
            gap: 9px;
        }

        /* Professional welcome icon */

        .welcome-icon {
            width: 30px;
            height: 30px;
            border-radius: 8px;
            background: rgba(109, 40, 217, 0.25);
            color: #c4b5fd;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .welcome-icon svg {
            width: 17px;
            height: 17px;
        }

        .welcome p {
            color: #b9b9cd;
            font-size: 10px;
        }

        .welcome-stats {
            display: flex;
            background: rgba(255,255,255,0.10);
            border-radius: 10px;
            padding: 12px 15px;
            min-width: 210px;
        }

        .welcome-stat {
            flex: 1;
            padding: 0 12px;
        }

        .welcome-stat + .welcome-stat {
            border-left: 1px solid rgba(255,255,255,0.15);
        }

        .welcome-stat small {
            display: block;
            color: #aaaac0;
            font-size: 8px;
            margin-bottom: 3px;
        }

        .welcome-stat strong {
            color: white;
            font-size: 17px;
            font-weight: 600;
        }

        /* ================= SECTION HEADERS ================= */

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .section-header h3 {
            color: #29293c;
            font-size: 13px;
            font-weight: 600;
        }

        .section-link {
            color: #6d28d9;
            text-decoration: none;
            font-size: 10px;
            font-weight: 500;
        }

        /* ================= INFORMATION ================= */

        .information {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 12px;
            margin-bottom: 22px;
        }

        .info-card {
            background: white;
            padding: 16px;
            border-radius: 12px;
            border: 1px solid #eeeeF4;
        }

        .info-top {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 10px;
        }

        .info-icon {
            width: 32px;
            height: 32px;
            background: #f0eaff;
            color: #6d28d9;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .info-icon svg {
            width: 15px;
            height: 15px;
        }

        .info-card small {
            display: block;
            color: #9999a9;
            font-size: 9px;
        }

        .info-card strong {
            color: #333346;
            font-size: 11px;
            word-break: break-word;
        }

        /* ================= STATISTICS ================= */

        .stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 12px;
            margin-bottom: 22px;
        }

        .stat-card {
            background: white;
            padding: 16px;
            border-radius: 12px;
            border: 1px solid #eeeeF4;
            position: relative;
        }

        .stat-card small {
            color: #9999a9;
            font-size: 9px;
        }

        .stat-card h2 {
            color: #2e2e42;
            font-size: 20px;
            margin-top: 4px;
            font-weight: 600;
        }

        .stat-card .icon {
            position: absolute;
            right: 15px;
            top: 15px;
            width: 32px;
            height: 32px;
            border-radius: 8px;
            background: #f0eaff;
            color: #6d28d9;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .stat-card .icon svg {
            width: 15px;
            height: 15px;
        }

        /* ================= RESULTS ================= */

        .results-card {
            background: white;
            padding: 18px;
            border-radius: 12px;
            border: 1px solid #eeeeF4;
        }

        .results-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .results-header h3 {
            color: #29293c;
            font-size: 13px;
            font-weight: 600;
        }

        .results-header span {
            color: #9999a9;
            font-size: 9px;
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
            background: #f7f6fb;
            color: #656579;
            padding: 11px;
            text-align: left;
            font-size: 9px;
            font-weight: 600;
            border-bottom: 1px solid #eeeeF4;
        }

        td {
            padding: 12px 11px;
            border-bottom: 1px solid #f0f0f4;
            font-size: 10px;
            color: #626275;
        }

        tr:hover td {
            background: #fbfaff;
        }

        .grade {
            display: inline-block;
            min-width: 28px;
            text-align: center;
            padding: 4px 7px;
            border-radius: 12px;
            background: #eee8ff;
            color: #6d28d9;
            font-weight: 600;
            font-size: 9px;
        }

        .no-results {
            padding: 35px;
            background: #f8f8fb;
            border-radius: 9px;
            text-align: center;
            color: #9999a9;
            font-size: 10px;
        }

        /* ================= FOOTER ================= */

        .footer {
            text-align: center;
            color: #aaaaba;
            font-size: 9px;
            padding: 20px;
        }

        /* ================= MOBILE ================= */

        @media (max-width: 850px) {

            .sidebar {
                width: 68px;
                padding: 18px 9px;
            }

            .logo {
                justify-content: center;
                padding: 0 0 22px;
            }

            .logo h2 {
                display: none;
            }

            .section-title {
                display: none;
            }

            .menu a {
                justify-content: center;
                padding: 11px 5px;
            }

            .menu a span:not(.menu-icon) {
                display: none;
            }

            .sidebar-bottom {
                left: 9px;
                right: 9px;
            }

            .logout-button {
                justify-content: center;
                font-size: 0;
            }

            .main {
                margin-left: 68px;
            }

            .stats {
                grid-template-columns: 1fr;
            }

            .welcome {
                flex-direction: column;
                align-items: flex-start;
            }

            .welcome-stats {
                width: 100%;
            }
        }

        @media (max-width: 600px) {

            .topbar {
                padding: 0 15px;
            }

            .search-box {
                width: 150px;
            }

            .profile-text {
                display: none;
            }

            .notification {
                display: none;
            }

            .content {
                padding: 18px 13px;
            }

            .welcome {
                padding: 18px;
            }

            .welcome h1 {
                font-size: 17px;
            }

            .information {
                grid-template-columns: 1fr;
            }

            .welcome-stats {
                min-width: 0;
            }

            .welcome-stat {
                padding: 0 8px;
            }

        }

    </style>
</head>

<body>

<!-- ================= SIDEBAR ================= -->

<div class="sidebar">

    <div class="logo">

        <div class="logo-icon">

            <!-- Graduation cap icon -->
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M2 10l10-5 10 5-10 5L2 10z"/>
                <path d="M6 12v5c3 2 9 2 12 0v-5"/>
                <path d="M22 10v6"/>
            </svg>

        </div>

        <h2>SchoolResults</h2>

    </div>


    <div class="section-title">
        Academic
    </div>


    <div class="menu">

        <!-- Dashboard -->

        <a href="{{ route('student.dashboard') }}" class="active">

            <span class="menu-icon">

                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="3" y="3" width="7" height="7"/>
                    <rect x="14" y="3" width="7" height="7"/>
                    <rect x="3" y="14" width="7" height="7"/>
                    <rect x="14" y="14" width="7" height="7"/>
                </svg>

            </span>

            <span>Dashboard</span>

        </a>


        <!-- Results -->

        <a href="#results">

            <span class="menu-icon">

                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M4 19V5"/>
                    <path d="M4 19h16"/>
                    <path d="M8 16v-5"/>
                    <path d="M12 16V8"/>
                    <path d="M16 16v-9"/>
                </svg>

            </span>

            <span>My Results</span>

        </a>


        <!-- Information -->

        <a href="#information">

            <span class="menu-icon">

                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="8" r="4"/>
                    <path d="M4 21c0-4 3.5-7 8-7s8 3 8 7"/>
                </svg>

            </span>

            <span>My Information</span>

        </a>

    </div>


    <!-- LOGOUT -->

    <div class="sidebar-bottom">

        <form method="POST" action="{{ route('student.logout') }}">

            @csrf

            <button type="submit" class="logout-button">

                <span class="logout-icon">

                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M10 17l5-5-5-5"/>
                        <path d="M15 12H3"/>
                        <path d="M21 19V5a2 2 0 0 0-2-2h-6"/>
                    </svg>

                </span>

                <span>Logout</span>

            </button>

        </form>

    </div>

</div>


<!-- ================= MAIN ================= -->

<div class="main">


    <!-- TOPBAR -->

    <div class="topbar">

        <div class="search-box">

            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="11" cy="11" r="7"/>
                <path d="M20 20l-4-4"/>
            </svg>

            <span>Search</span>

        </div>


        <div class="student-profile">

            <div class="notification">

                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <path d="M18 8a6 6 0 0 0-12 0c0 7-3 7-3 9h18c0-2-3-2-3-9"/>
                    <path d="M10 21h4"/>
                </svg>

            </div>


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


    <!-- ================= CONTENT ================= -->

    <div class="content">


        <!-- ================= WELCOME ================= -->

        <div class="welcome">

            <div class="welcome-left">

                <div class="welcome-date">
                    Student Dashboard
                </div>


                <h1>

                    <span class="welcome-icon">

                        <!-- Professional welcome/sparkles icon -->
                        <svg viewBox="0 0 24 24"
                             fill="none"
                             stroke="currentColor"
                             stroke-width="1.8"
                             stroke-linecap="round"
                             stroke-linejoin="round">

                            <path d="M12 3l1.2 3.8L17 8l-3.8 1.2L12 13l-1.2-3.8L7 8l3.8-1.2L12 3z"/>

                            <path d="M19 14l.6 1.9 1.9.6-1.9.6L19 19l-.6-1.9-1.9-.6 1.9-.6L19 14z"/>

                            <path d="M5 15l.5 1.5L7 17l-1.5.5L5 19l-.5-1.5L3 17l1.5-.5L5 15z"/>

                        </svg>

                    </span>

                    <span>
                        Welcome back, {{ $student->name }}
                    </span>

                </h1>


                <p>
                    View your academic results and student information.
                </p>

            </div>


            <div class="welcome-stats">

                <div class="welcome-stat">

                    <small>
                        Total Results
                    </small>

                    <strong>
                        {{ $student->results->count() }}
                    </strong>

                </div>


                <div class="welcome-stat">

                    <small>
                        Average Marks
                    </small>

                    <strong>

                        @if ($student->results->count() > 0)

                            {{ number_format($student->results->avg('marks'), 1) }}%

                        @else

                            0%

                        @endif

                    </strong>

                </div>

            </div>

        </div>


        <!-- ================= STATISTICS ================= -->

        <div class="section-header">

            <h3>
                Academic Overview
            </h3>

        </div>


        <div class="stats">


            <!-- Total Courses -->

            <div class="stat-card">

                <div class="icon">

                    <svg viewBox="0 0 24 24"
                         fill="none"
                         stroke="currentColor"
                         stroke-width="2">

                        <path d="M4 19V5"/>
                        <path d="M4 19h16"/>
                        <path d="M8 16v-5"/>
                        <path d="M12 16V8"/>
                        <path d="M16 16v-9"/>

                    </svg>

                </div>

                <small>
                    Total Courses
                </small>

                <h2>
                    {{ $student->results->count() }}
                </h2>

            </div>


            <!-- Average Marks -->

            <div class="stat-card">

                <div class="icon">

                    <svg viewBox="0 0 24 24"
                         fill="none"
                         stroke="currentColor"
                         stroke-width="2">

                        <path d="M3 17l6-6 4 4 8-9"/>
                        <path d="M17 6h4v4"/>

                    </svg>

                </div>

                <small>
                    Average Marks
                </small>

                <h2>

                    @if ($student->results->count() > 0)

                        {{ number_format($student->results->avg('marks'), 1) }}%

                    @else

                        0%

                    @endif

                </h2>

            </div>


            <!-- Account Status -->

            <div class="stat-card">

                <div class="icon">

                    <svg viewBox="0 0 24 24"
                         fill="none"
                         stroke="currentColor"
                         stroke-width="2">

                        <path d="M12 3l7 4v5c0 5-3 8-7 9-4-1-7-4-7-9V7l7-4z"/>
                        <path d="M9 12l2 2 4-4"/>

                    </svg>

                </div>

                <small>
                    Account Status
                </small>

                <h2 style="font-size:17px;">
                    Active
                </h2>

            </div>


        </div>


        <!-- ================= INFORMATION ================= -->

        <div class="section-header" id="information">

            <h3>
                Student Information
            </h3>

        </div>


        <div class="information">


            <!-- Student Number -->

            <div class="info-card">

                <div class="info-top">

                    <div class="info-icon">

                        <svg viewBox="0 0 24 24"
                             fill="none"
                             stroke="currentColor"
                             stroke-width="2">

                            <rect x="3" y="4" width="18" height="16" rx="2"/>
                            <path d="M7 8h10"/>
                            <path d="M7 12h4"/>

                        </svg>

                    </div>


                    <div>

                        <small>
                            Student Number
                        </small>

                        <strong>
                            {{ $student->student_number }}
                        </strong>

                    </div>

                </div>

            </div>


            <!-- Email -->

            <div class="info-card">

                <div class="info-top">

                    <div class="info-icon">

                        <svg viewBox="0 0 24 24"
                             fill="none"
                             stroke="currentColor"
                             stroke-width="2">

                            <rect x="3" y="5" width="18" height="14" rx="2"/>
                            <path d="M3 7l9 6 9-6"/>

                        </svg>

                    </div>


                    <div>

                        <small>
                            Email Address
                        </small>

                        <strong>
                            {{ $student->email }}
                        </strong>

                    </div>

                </div>

            </div>


        </div>


        <!-- ================= RESULTS ================= -->

        <div class="section-header">

            <h3>
                My Results
            </h3>

            <a href="#results" class="section-link">
                View all →
            </a>

        </div>


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


    <!-- ================= FOOTER ================= -->

    <div class="footer">

        School Result System &copy; {{ date('Y') }}

    </div>


</div>

</body>
</html>