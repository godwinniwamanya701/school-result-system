<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>School Result Management System</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #E6F4F8;
            color: #0A3D4D;
            min-height: 100vh;
        }

        /* Navigation */
        .navbar {
            width: 100%;
            padding: 20px 7%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: white;
            box-shadow: 0 3px 15px rgba(0, 0, 0, 0.05);
        }

        .logo {
            font-size: 22px;
            font-weight: 700;
            color: #0A3D4D;
        }

        .logo span {
            color: #00C8D7;
        }

        .nav-buttons {
            display: flex;
            gap: 12px;
        }

        .nav-button {
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 25px;
            font-size: 14px;
            font-weight: 600;
            transition: 0.3s ease;
        }

        .student-login {
            color: #00AEBB;
            border: 1px solid #00C8D7;
            background: white;
        }

        .student-login:hover {
            background: #00C8D7;
            color: white;
        }

        .lecturer-login {
            color: white;
            background: linear-gradient(135deg, #0A3D4D, #16A34A);
        }

        .lecturer-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(10, 61, 77, 0.2);
        }

        /* Hero Section */
        .hero {
            min-height: calc(100vh - 75px);
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 50px;
            padding: 60px 7%;
            overflow: hidden;
        }

        .hero-content {
            width: 52%;
        }

        .welcome-badge {
            display: inline-block;
            background: #D5F8FA;
            color: #008B97;
            padding: 8px 18px;
            border-radius: 25px;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .hero h1 {
            font-size: 48px;
            line-height: 1.2;
            margin-bottom: 20px;
            color: #0A3D4D;
        }

        .hero h1 span {
            color: #00C8D7;
        }

        .hero p {
            font-size: 16px;
            line-height: 1.8;
            color: #55727B;
            max-width: 600px;
            margin-bottom: 30px;
        }

        .hero-buttons {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .main-button {
            text-decoration: none;
            padding: 14px 28px;
            border-radius: 30px;
            font-size: 14px;
            font-weight: 600;
            transition: 0.3s ease;
        }

        .primary-button {
            background: linear-gradient(135deg, #0A3D4D, #00C8D7);
            color: white;
            box-shadow: 0 8px 20px rgba(0, 200, 215, 0.2);
        }

        .primary-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 25px rgba(0, 200, 215, 0.3);
        }

        .secondary-button {
            background: white;
            color: #0A3D4D;
            border: 1px solid #D1E7EB;
        }

        .secondary-button:hover {
            background: #F5FBFC;
            transform: translateY(-3px);
        }

        /* Illustration */
        .hero-image {
            width: 43%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .illustration {
            width: 390px;
            height: 390px;
            border-radius: 50%;
            background: linear-gradient(135deg, #00D1E0, #0A3D4D);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            box-shadow: 0 25px 50px rgba(10, 61, 77, 0.2);
        }

        .dashboard-card {
            width: 270px;
            background: white;
            border-radius: 20px;
            padding: 25px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.18);
        }

        .dashboard-title {
            font-size: 17px;
            font-weight: 700;
            color: #0A3D4D;
            margin-bottom: 18px;
        }

        .result-box {
            background: #F1FBFC;
            border-radius: 12px;
            padding: 12px;
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .result-name {
            font-size: 12px;
            color: #55727B;
        }

        .grade {
            background: #D9F8E4;
            color: #15803D;
            font-size: 12px;
            font-weight: 700;
            padding: 5px 9px;
            border-radius: 8px;
        }

        .small-card {
            position: absolute;
            background: white;
            padding: 13px 18px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            font-size: 12px;
            font-weight: 600;
        }

        .card-one {
            top: 40px;
            right: -20px;
            color: #0A3D4D;
        }

        .card-two {
            bottom: 40px;
            left: -25px;
            color: #16A34A;
        }

        /* Features */
        .features {
            background: white;
            padding: 60px 7%;
        }

        .features-title {
            text-align: center;
            margin-bottom: 35px;
        }

        .features-title h2 {
            font-size: 28px;
            color: #0A3D4D;
            margin-bottom: 8px;
        }

        .features-title p {
            color: #6B8188;
            font-size: 14px;
        }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
            max-width: 1100px;
            margin: auto;
        }

        .feature-card {
            padding: 28px;
            background: #F7FCFD;
            border-radius: 18px;
            text-align: center;
            border: 1px solid #E4F1F3;
            transition: 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(10, 61, 77, 0.08);
        }

        .feature-icon {
            width: 55px;
            height: 55px;
            margin: 0 auto 15px;
            border-radius: 50%;
            background: #DDF9FB;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
        }

        .feature-card h3 {
            font-size: 17px;
            color: #0A3D4D;
            margin-bottom: 8px;
        }

        .feature-card p {
            font-size: 13px;
            line-height: 1.7;
            color: #6B8188;
        }

        /* Footer */
        .footer {
            background: #0A3D4D;
            color: white;
            text-align: center;
            padding: 25px 20px;
            font-size: 13px;
        }

        .footer span {
            color: #00D1E0;
        }

        /* Mobile */
        @media (max-width: 900px) {
            .hero {
                flex-direction: column;
                text-align: center;
                padding: 50px 6%;
            }

            .hero-content {
                width: 100%;
            }

            .hero-content p {
                margin-left: auto;
                margin-right: auto;
            }

            .hero-buttons {
                justify-content: center;
            }

            .hero-image {
                width: 100%;
            }

            .illustration {
                width: 330px;
                height: 330px;
            }

            .feature-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 600px) {
            .navbar {
                padding: 15px 5%;
                flex-direction: column;
                gap: 15px;
            }

            .logo {
                font-size: 19px;
            }

            .nav-buttons {
                width: 100%;
                justify-content: center;
            }

            .nav-button {
                padding: 8px 14px;
                font-size: 12px;
            }

            .hero {
                padding: 40px 5%;
            }

            .hero h1 {
                font-size: 34px;
            }

            .hero p {
                font-size: 14px;
            }

            .illustration {
                width: 290px;
                height: 290px;
            }

            .dashboard-card {
                width: 220px;
                padding: 18px;
            }

            .card-one {
                right: -5px;
            }

            .card-two {
                left: -5px;
            }

            .features {
                padding: 45px 5%;
            }

            .features-title h2 {
                font-size: 24px;
            }
        }
    </style>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar">

        <div class="logo">
            School<span>Results</span>
        </div>

        <div class="nav-buttons">

            <a href="{{ route('student.login') }}" class="nav-button student-login">
                Student Login
            </a>

            <a href="{{ route('lecturer.login') }}" class="nav-button lecturer-login">
                Lecturer Login
            </a>

        </div>

    </nav>


    <!-- Hero Section -->
    <section class="hero">

        <div class="hero-content">

            <div class="welcome-badge">
                Welcome to the Result Management System
            </div>

            <h1>
                Manage Your Academic
                <span>Results Easily</span>
            </h1>

            <p>
                A simple and secure school result management system
                that allows students to view their academic results
                and lecturers to enter and manage student marks.
            </p>

            <div class="hero-buttons">

                <a href="{{ route('student.login') }}" class="main-button primary-button">
                    Student Login
                </a>

                <a href="{{ route('lecturer.login') }}" class="main-button secondary-button">
                    Lecturer Login
                </a>

            </div>

        </div>


        <!-- Illustration -->
        <div class="hero-image">

            <div class="illustration">

                <div class="small-card card-one">
                    ✓ Results Updated
                </div>

                <div class="dashboard-card">

                    <div class="dashboard-title">
                        Student Results
                    </div>

                    <div class="result-box">
                        <span class="result-name">Information Technology</span>
                        <span class="grade">A</span>
                    </div>

                    <div class="result-box">
                        <span class="result-name">Database Systems</span>
                        <span class="grade">B</span>
                    </div>

                    <div class="result-box">
                        <span class="result-name">Computer Networks</span>
                        <span class="grade">A</span>
                    </div>

                    <div class="result-box">
                        <span class="result-name">Management</span>
                        <span class="grade">B</span>
                    </div>

                </div>

                <div class="small-card card-two">
                    ✓ Secure & Easy
                </div>

            </div>

        </div>

    </section>


    <!-- Features -->
    <section class="features">

        <div class="features-title">

            <h2>System Features</h2>

            <p>
                Everything needed to manage student academic results.
            </p>

        </div>


        <div class="feature-grid">

            <div class="feature-card">

                <div class="feature-icon">
                    🎓
                </div>

                <h3>Student Results</h3>

                <p>
                    Students can securely log in and view their academic
                    results whenever they need them.
                </p>

            </div>


            <div class="feature-card">

                <div class="feature-icon">
                    👨‍🏫
                </div>

                <h3>Lecturer Management</h3>

                <p>
                    Lecturers can access their assigned courses and
                    enter student results.
                </p>

            </div>


            <div class="feature-card">

                <div class="feature-icon">
                    🔒
                </div>

                <h3>Secure System</h3>

                <p>
                    Login protection and result validation help keep
                    academic information secure and accurate.
                </p>

            </div>

        </div>

    </section>


    <!-- Footer -->
    <footer class="footer">

        <p>
            &copy; {{ date('Y') }}
            <span>School Result Management System</span>.
            All rights reserved.
        </p>

    </footer>

</body>
</html>