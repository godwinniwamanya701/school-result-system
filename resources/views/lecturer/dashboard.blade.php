<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lecturer Dashboard - School Results</title>

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
        }

        .logo-icon svg {
            width: 17px;
            height: 17px;
            stroke: white;
        }

        .logo h2 {
            font-size: 15px;
            font-weight: 600;
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

        /* ================= LOGOUT ================= */

        .logout {
            position: absolute;
            bottom: 18px;
            left: 12px;
            right: 12px;
        }

        .logout button {
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

        .logout button:hover {
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

        .profile {
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

        .profile-avatar {
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

        .profile-name {
            color: #303044;
            font-size: 11px;
            font-weight: 600;
        }

        .profile-role {
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
            gap: 7px;
        }

        .welcome p {
            color: #b9b9cd;
            font-size: 10px;
        }

        /* PROFESSIONAL WELCOME ICON */

        .welcome-icon {
            width: 22px;
            height: 22px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: #a78bfa;
        }

        .welcome-icon svg {
            width: 21px;
            height: 21px;
            stroke: currentColor;
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

        /* ================= SECTION HEADER ================= */

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

        /* ================= QUICK ACTIONS ================= */

        .quick-actions {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 12px;
            margin-bottom: 22px;
        }

        .quick-card {
            background: white;
            padding: 18px;
            border-radius: 12px;
            border: 1px solid #eeeeF4;
        }

        .quick-card h3 {
            color: #29293c;
            font-size: 13px;
            margin-bottom: 5px;
        }

        .quick-card p {
            color: #9999a9;
            font-size: 9px;
            margin-bottom: 13px;
        }

        .quick-buttons {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }

        .quick-button {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: #6d28d9;
            color: white;
            text-decoration: none;
            padding: 8px 12px;
            border-radius: 7px;
            font-size: 9px;
            font-weight: 500;
            transition: 0.25s;
        }

        .quick-button:hover {
            background: #4c1d95;
        }

        .all-results-button {
            background: #312e81;
        }

        .all-results-button:hover {
            background: #6d28d9;
        }

        .button-icon {
            width: 13px;
            height: 13px;
        }

        /* ================= COURSES ================= */

        .courses-card {
            background: white;
            padding: 18px;
            border-radius: 12px;
            border: 1px solid #eeeeF4;
        }

        .courses-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .courses-header h3 {
            color: #29293c;
            font-size: 13px;
            font-weight: 600;
        }

        .courses-header span {
            color: #6d28d9;
            font-size: 9px;
        }

        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 600px;
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

        .course-code {
            display: inline-block;
            background: #eee8ff;
            color: #6d28d9;
            padding: 4px 8px;
            border-radius: 6px;
            font-size: 9px;
            font-weight: 600;
        }

        .action-button {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            background: #6d28d9;
            color: white;
            padding: 7px 11px;
            text-decoration: none;
            border-radius: 7px;
            font-size: 9px;
            font-weight: 500;
            transition: 0.25s;
        }

        .action-button:hover {
            background: #4c1d95;
        }

        .action-button svg {
            width: 12px;
            height: 12px;
        }

        .no-courses {
            text-align: center;
            padding: 30px;
            background: #f8f8fb;
            border-radius: 9px;
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

            .logo h2,
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

            .logout {
                left: 9px;
                right: 9px;
            }

            .logout button {
                justify-content: center;
                font-size: 0;
            }

            .main {
                margin-left: 68px;
            }

            .stats {
                grid-template-columns: 1fr;
            }

            .quick-actions {
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

            .profile-name,
            .profile-role,
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

            .welcome-stats {
                min-width: 0;
            }

            .welcome-stat {
                padding: 0 8px;
            }

            .quick-buttons {
                flex-direction: column;
            }

            .quick-button {
                width: 100%;
                justify-content: center;
            }
        }

    </style>
</head>

<body>

<!-- ================= SIDEBAR ================= -->

<aside class="sidebar">

    <div class="logo">

        <div class="logo-icon">

            <!-- Graduation cap -->

            <svg viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2">

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

        <a href="{{ route('lecturer.dashboard') }}" class="active">

            <span class="menu-icon">

                <svg viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2">

                    <rect x="3" y="3" width="7" height="7"/>
                    <rect x="14" y="3" width="7" height="7"/>
                    <rect x="3" y="14" width="7" height="7"/>
                    <rect x="14" y="14" width="7" height="7"/>

                </svg>

            </span>

            <span>Dashboard</span>

        </a>


        <!-- Courses -->

        <a href="{{ route('courses.index') }}">

            <span class="menu-icon">

                <svg viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2">

                    <path d="M4 5a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V5z"/>
                    <path d="M8 7h8"/>
                    <path d="M8 11h8"/>
                    <path d="M8 15h5"/>

                </svg>

            </span>

            <span>Courses</span>

        </a>


        <!-- Results -->

        <a href="{{ route('results.index') }}">

            <span class="menu-icon">

                <svg viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2">

                    <path d="M4 19V5"/>
                    <path d="M4 19h16"/>
                    <path d="M8 16v-5"/>
                    <path d="M12 16V8"/>
                    <path d="M16 16v-9"/>

                </svg>

            </span>

            <span>Results</span>

        </a>

    </div>


    <div class="section-title">
        Account
    </div>


    <div class="menu">

        <a href="#">

            <span class="menu-icon">

                <svg viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2">

                    <circle cx="12" cy="8" r="4"/>
                    <path d="M4 21c0-4 3.5-7 8-7s8 3 8 7"/>

                </svg>

            </span>

            <span>Profile</span>

        </a>

    </div>


    <!-- LOGOUT -->

    <div class="logout">

        <form method="POST" action="{{ route('lecturer.logout') }}">

            @csrf

            <button type="submit">

                <span class="logout-icon">

                    <svg viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2">

                        <path d="M10 17l5-5-5-5"/>
                        <path d="M15 12H3"/>
                        <path d="M21 19V5a2 2 0 0 0-2-2h-6"/>

                    </svg>

                </span>

                <span>Logout</span>

            </button>

        </form>

    </div>

</aside>


<!-- ================= MAIN ================= -->

<main class="main">


    <!-- TOPBAR -->

    <div class="topbar">

        <div class="search-box">

            <svg viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2">

                <circle cx="11" cy="11" r="7"/>
                <path d="M20 20l-4-4"/>

            </svg>

            <span>Search</span>

        </div>


        <div class="profile">

            <div class="notification">

                <svg viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="1.8">

                    <path d="M18 8a6 6 0 0 0-12 0c0 7-3 7-3 9h18c0-2-3-2-3-9"/>
                    <path d="M10 21h4"/>

                </svg>

            </div>


            <div class="profile-avatar">

                {{ strtoupper(substr($lecturer->name, 0, 1)) }}

            </div>


            <div>

                <div class="profile-name">
                    {{ $lecturer->name }}
                </div>

                <div class="profile-role">
                    Lecturer
                </div>

            </div>

        </div>

    </div>


    <!-- ================= CONTENT ================= -->

    <div class="content">


        <!-- WELCOME -->

        <div class="welcome">

            <div class="welcome-left">

                <div class="welcome-date">
                    Lecturer Dashboard
                </div>

                <h1>

                    Welcome back, {{ $lecturer->name }}

                    <span class="welcome-icon">

                        <!-- Sparkle / Welcome Icon -->

                        <svg viewBox="0 0 24 24"
                             fill="none"
                             stroke="currentColor"
                             stroke-width="1.8"
                             stroke-linecap="round"
                             stroke-linejoin="round">

                            <path d="M12 3l1.5 5.5L19 10l-5.5 1.5L12 17l-1.5-5.5L5 10l5.5-1.5L12 3z"/>

                            <path d="M19 15l0.7 2.3L22 18l-2.3 0.7L19 21l-0.7-2.3L16 18l2.3-0.7L19 15z"/>

                        </svg>

                    </span>

                </h1>

                <p>
                    Manage your courses and enter student academic results.
                </p>

            </div>


            <div class="welcome-stats">

                <div class="welcome-stat">

                    <small>
                        Assigned Courses
                    </small>

                    <strong>
                        {{ $lecturer->courses->count() }}
                    </strong>

                </div>


                <div class="welcome-stat">

                    <small>
                        Account
                    </small>

                    <strong>
                        Active
                    </strong>

                </div>

            </div>

        </div>


        <!-- ================= OVERVIEW ================= -->

        <div class="section-header">

            <h3>
                Academic Overview
            </h3>

        </div>


        <div class="stats">


            <!-- ASSIGNED COURSES -->

            <div class="stat-card">

                <div class="icon">

                    <svg viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2">

                        <path d="M4 5a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V5z"/>
                        <path d="M8 7h8"/>
                        <path d="M8 11h8"/>
                        <path d="M8 15h5"/>

                    </svg>

                </div>

                <small>
                    Assigned Courses
                </small>

                <h2>
                    {{ $lecturer->courses->count() }}
                </h2>

            </div>


            <!-- EMAIL -->

            <div class="stat-card">

                <div class="icon">

                    <svg viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2">

                        <rect x="3" y="5" width="18" height="14" rx="2"/>
                        <path d="M3 7l9 6 9-6"/>

                    </svg>

                </div>

                <small>
                    Lecturer Email
                </small>

                <h2 style="font-size: 11px; margin-top: 8px; word-break: break-word;">
                    {{ $lecturer->email }}
                </h2>

            </div>


            <!-- STATUS -->

            <div class="stat-card">

                <div class="icon">

                    <svg viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2">

                        <path d="M12 3l7 4v5c0 5-3 8-7 9-4-1-7-4-7-9V7l7-4z"/>
                        <path d="M9 12l2 2 4-4"/>

                    </svg>

                </div>

                <small>
                    Account Status
                </small>

                <h2 style="font-size: 17px;">
                    Active
                </h2>

            </div>


        </div>


        <!-- ================= QUICK ACTIONS ================= -->

        <div class="section-header">

            <h3>
                Quick Actions
            </h3>

        </div>


        <div class="quick-actions">


            <!-- MANAGE COURSES -->

            <div class="quick-card">

                <h3>
                    Manage Courses
                </h3>

                <p>
                    View and manage courses in the system.
                </p>

                <a href="{{ route('courses.index') }}"
                   class="quick-button">

                    <svg class="button-icon"
                         viewBox="0 0 24 24"
                         fill="none"
                         stroke="currentColor"
                         stroke-width="2">

                        <path d="M4 5a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V5z"/>
                        <path d="M8 7h8"/>
                        <path d="M8 11h8"/>

                    </svg>

                    View Courses

                </a>

            </div>


            <!-- MANAGE RESULTS -->

            <div class="quick-card">

                <h3>
                    Manage Results
                </h3>

                <p>
                    View existing results or enter new student marks.
                </p>

                <div class="quick-buttons">


                    <a href="{{ route('results.index') }}"
                       class="quick-button">

                        <svg class="button-icon"
                             viewBox="0 0 24 24"
                             fill="none"
                             stroke="currentColor"
                             stroke-width="2">

                            <path d="M4 19V5"/>
                            <path d="M4 19h16"/>
                            <path d="M8 16v-5"/>
                            <path d="M12 16V8"/>
                            <path d="M16 16v-9"/>

                        </svg>

                        View Results

                    </a>


                    <a href="{{ route('results.all-students') }}"
                       class="quick-button all-results-button">

                        <svg class="button-icon"
                             viewBox="0 0 24 24"
                             fill="none"
                             stroke="currentColor"
                             stroke-width="2">

                            <circle cx="9" cy="8" r="3"/>
                            <circle cx="17" cy="9" r="2.5"/>
                            <path d="M3 20c0-4 2.5-6 6-6s6 2 6 6"/>
                            <path d="M14 15c3-.5 6 1.5 6 5"/>

                        </svg>

                        View All Students & Results

                    </a>

                </div>

            </div>


        </div>


        <!-- ================= ASSIGNED COURSES ================= -->

        <div class="section-header">

            <h3>
                My Assigned Courses
            </h3>

        </div>


        <div class="courses-card">


            <div class="courses-header">

                <h3>
                    Assigned Courses
                </h3>

                <span>
                    {{ $lecturer->courses->count() }} Course(s)
                </span>

            </div>


            @if ($lecturer->courses->count() > 0)


                <div class="table-wrapper">

                    <table>

                        <thead>

                            <tr>

                                <th>
                                    Course Name
                                </th>

                                <th>
                                    Course Code
                                </th>

                                <th>
                                    Action
                                </th>

                            </tr>

                        </thead>


                        <tbody>

                            @foreach ($lecturer->courses as $course)

                                <tr>

                                    <td>
                                        {{ $course->course_name }}
                                    </td>


                                    <td>

                                        <span class="course-code">

                                            {{ $course->course_code }}

                                        </span>

                                    </td>


                                    <td>

                                        <a
                                            href="{{ route('results.create', ['course_id' => $course->id]) }}"
                                            class="action-button"
                                        >

                                            <svg viewBox="0 0 24 24"
                                                 fill="none"
                                                 stroke="currentColor"
                                                 stroke-width="2">

                                                <path d="M12 5v14"/>
                                                <path d="M5 12h14"/>

                                            </svg>

                                            Enter Results

                                        </a>

                                    </td>

                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>


            @else


                <div class="no-courses">

                    No courses have been assigned to you yet.

                </div>


            @endif


        </div>


        <!-- FOOTER -->

        <div class="footer">

            School Result Management System
            &copy; {{ date('Y') }}

        </div>


    </div>

</main>

</body>
</html>