<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

```
<title>Lecturer Dashboard - School Results</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Poppins', sans-serif;
        background: #eef7f3;
        color: #1f2937;
    }

    /* SIDEBAR */

    .sidebar {
        position: fixed;
        left: 0;
        top: 0;
        width: 240px;
        height: 100vh;
        background: #0A3D4D;
        color: white;
        padding: 25px 18px;
    }

    .logo {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 0 10px;
        margin-bottom: 40px;
    }

    .logo-icon {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        background: #16A34A;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
    }

    .logo h2 {
        font-size: 17px;
    }

    .logo span {
        color: #00D1E0;
    }

    .menu-title {
        font-size: 10px;
        color: #91a9b0;
        margin: 20px 10px 10px;
        text-transform: uppercase;
    }

    .menu a {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 12px 14px;
        margin-bottom: 6px;
        border-radius: 8px;
        text-decoration: none;
        color: #d8e6e9;
        font-size: 13px;
        transition: 0.3s;
    }

    .menu a:hover,
    .menu a.active {
        background: #16A34A;
        color: white;
    }

    .logout {
        position: absolute;
        bottom: 25px;
        left: 18px;
        right: 18px;
    }

    .logout button {
        width: 100%;
        padding: 11px;
        border: 1px solid rgba(255,255,255,0.3);
        border-radius: 8px;
        background: transparent;
        color: white;
        cursor: pointer;
        font-family: 'Poppins';
        font-size: 12px;
    }

    .logout button:hover {
        background: white;
        color: #0A3D4D;
    }

    /* MAIN */

    .main {
        margin-left: 240px;
        min-height: 100vh;
    }

    /* TOP BAR */

    .topbar {
        height: 70px;
        background: white;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 35px;
        box-shadow: 0 2px 12px rgba(0,0,0,0.05);
    }

    .topbar h3 {
        color: #0A3D4D;
        font-size: 18px;
    }

    .profile {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .profile-avatar {
        width: 38px;
        height: 38px;
        border-radius: 50%;
        background: #e8f7ed;
        color: #16A34A;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
    }

    .profile-name {
        font-size: 12px;
        font-weight: 600;
        color: #0A3D4D;
    }

    .profile-role {
        font-size: 10px;
        color: #888;
    }

    /* CONTENT */

    .content {
        padding: 30px 35px;
    }

    .welcome {
        background: linear-gradient(135deg, #0A3D4D, #16A34A);
        color: white;
        padding: 28px;
        border-radius: 16px;
        margin-bottom: 25px;
    }

    .welcome h1 {
        font-size: 24px;
        margin-bottom: 6px;
    }

    .welcome p {
        font-size: 13px;
        opacity: 0.9;
    }

    /* STAT CARDS */

    .stats {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        margin-bottom: 25px;
    }

    .stat-card {
        background: white;
        padding: 22px;
        border-radius: 14px;
        box-shadow: 0 5px 18px rgba(0,0,0,0.06);
    }

    .stat-top {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .stat-icon {
        width: 45px;
        height: 45px;
        border-radius: 10px;
        background: #e8f7ed;
        color: #16A34A;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
    }

    .stat-card small {
        display: block;
        margin-top: 15px;
        color: #888;
        font-size: 11px;
    }

    .stat-card h2 {
        color: #0A3D4D;
        font-size: 25px;
        margin-top: 3px;
    }

    /* QUICK ACTIONS */

    .quick-actions {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
        margin-bottom: 25px;
    }

    .quick-card {
        background: white;
        padding: 20px;
        border-radius: 14px;
        box-shadow: 0 5px 18px rgba(0,0,0,0.06);
    }

    .quick-card h3 {
        color: #0A3D4D;
        font-size: 16px;
        margin-bottom: 6px;
    }

    .quick-card p {
        color: #777;
        font-size: 11px;
        margin-bottom: 15px;
    }

    .quick-button {
        display: inline-block;
        background: #0A3D4D;
        color: white;
        text-decoration: none;
        padding: 9px 15px;
        border-radius: 7px;
        font-size: 11px;
    }

    .quick-button:hover {
        background: #16A34A;
    }

    /* COURSES */

    .courses-card {
        background: white;
        padding: 25px;
        border-radius: 16px;
        box-shadow: 0 5px 18px rgba(0,0,0,0.06);
    }

    .courses-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .courses-header h3 {
        color: #0A3D4D;
        font-size: 18px;
    }

    .courses-header span {
        color: #16A34A;
        font-size: 11px;
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
        background: #f1faf4;
        color: #0A3D4D;
        padding: 13px;
        text-align: left;
        font-size: 11px;
    }

    td {
        padding: 14px 13px;
        border-bottom: 1px solid #edf0f2;
        font-size: 12px;
        color: #555;
    }

    tr:hover td {
        background: #fafefb;
    }

    .course-code {
        display: inline-block;
        background: #e8f7ed;
        color: #15803d;
        padding: 5px 9px;
        border-radius: 6px;
        font-size: 10px;
        font-weight: 600;
    }

    .action-button {
        display: inline-block;
        background: linear-gradient(135deg, #0A3D4D, #16A34A);
        color: white;
        padding: 8px 13px;
        text-decoration: none;
        border-radius: 7px;
        font-size: 10px;
        font-weight: 600;
    }

    .action-button:hover {
        transform: translateY(-2px);
    }

    .no-courses {
        text-align: center;
        padding: 30px;
        background: #f8fafc;
        border-radius: 10px;
        color: #777;
        font-size: 12px;
    }

    /* FOOTER */

    .footer {
        text-align: center;
        color: #888;
        font-size: 10px;
        padding: 25px;
    }

    /* MOBILE */

    @media (max-width: 850px) {

        .sidebar {
            width: 70px;
            padding: 20px 10px;
        }

        .logo h2,
        .menu-title,
        .menu a span,
        .logout button span {
            display: none;
        }

        .logo {
            justify-content: center;
        }

        .menu a {
            justify-content: center;
        }

        .logout {
            left: 10px;
            right: 10px;
        }

        .main {
            margin-left: 70px;
        }

        .stats {
            grid-template-columns: 1fr;
        }

        .quick-actions {
            grid-template-columns: 1fr;
        }

        .content {
            padding: 25px 20px;
        }

        .topbar {
            padding: 0 20px;
        }

        .profile-name,
        .profile-role {
            display: none;
        }
    }

    @media (max-width: 550px) {

        .topbar h3 {
            font-size: 15px;
        }

        .welcome h1 {
            font-size: 20px;
        }

        .content {
            padding: 20px 15px;
        }
    }

</style>
```

</head>

<body>

<!-- SIDEBAR -->

<aside class="sidebar">

```
<div class="logo">

    <div class="logo-icon">
        🎓
    </div>

    <h2>
        School<span>Results</span>
    </h2>

</div>


<div class="menu-title">
    Main Menu
</div>


<div class="menu">

    <a href="{{ route('lecturer.dashboard') }}" class="active">
        📊
        <span>Dashboard</span>
    </a>

    <a href="{{ route('courses.index') }}">
        📚
        <span>Courses</span>
    </a>

    <a href="{{ route('results.index') }}">
        📝
        <span>Results</span>
    </a>

</div>


<div class="menu-title">
    Account
</div>


<div class="menu">

    <a href="#">
        👤
        <span>Profile</span>
    </a>

</div>


<div class="logout">

    <form method="POST" action="{{ route('lecturer.logout') }}">

        @csrf

        <button type="submit">
            🚪 <span>Logout</span>
        </button>

    </form>

</div>
```

</aside>

<!-- MAIN -->

<main class="main">

```
<!-- TOPBAR -->

<div class="topbar">

    <h3>Lecturer Dashboard</h3>

    <div class="profile">

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


<!-- CONTENT -->

<div class="content">

    <!-- WELCOME -->

    <div class="welcome">

        <h1>
            Welcome, {{ $lecturer->name }} 👋
        </h1>

        <p>
            Manage your courses and enter student academic results.
        </p>

    </div>


    <!-- STATISTICS -->

    <div class="stats">

        <div class="stat-card">

            <div class="stat-top">

                <div>
                    <small>Assigned Courses</small>

                    <h2>
                        {{ $lecturer->courses->count() }}
                    </h2>
                </div>

                <div class="stat-icon">
                    📚
                </div>

            </div>

        </div>


        <div class="stat-card">

            <div class="stat-top">

                <div>
                    <small>Lecturer Email</small>

                    <h2 style="font-size: 14px; margin-top: 10px;">
                        {{ $lecturer->email }}
                    </h2>
                </div>

                <div class="stat-icon">
                    ✉
                </div>

            </div>

        </div>


        <div class="stat-card">

            <div class="stat-top">

                <div>

                    <small>Account Status</small>

                    <h2 style="font-size: 16px; margin-top: 10px;">
                        Active
                    </h2>

                </div>

                <div class="stat-icon">
                    ✓
                </div>

            </div>

        </div>

    </div>


    <!-- QUICK ACTIONS -->

    <div class="quick-actions">

        <div class="quick-card">

            <h3>Manage Courses</h3>

            <p>
                View and manage courses in the system.
            </p>

            <a href="{{ route('courses.index') }}" class="quick-button">
                View Courses
            </a>

        </div>


        <div class="quick-card">

            <h3>Manage Results</h3>

            <p>
                View existing results or enter new student marks.
            </p>

            <a href="{{ route('results.index') }}" class="quick-button">
                View Results
            </a>

        </div>

    </div>


    <!-- COURSES -->

    <div class="courses-card">

        <div class="courses-header">

            <h3>My Assigned Courses</h3>

            <span>
                {{ $lecturer->courses->count() }} Course(s)
            </span>

        </div>


        @if ($lecturer->courses->count() > 0)

            <div class="table-wrapper">

                <table>

                    <thead>

                        <tr>

                            <th>Course Name</th>

                            <th>Course Code</th>

                            <th>Action</th>

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

                📚

                <br><br>

                No courses have been assigned to you yet.

            </div>

        @endif

    </div>


    <div class="footer">

        School Result Management System
        &copy; {{ date('Y') }}

    </div>

</div>
```

</main>

</body>
</html>
