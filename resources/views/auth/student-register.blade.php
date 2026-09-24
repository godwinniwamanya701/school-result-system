<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Registration - School Result System</title>

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
            background: #E6F4F8;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .register-container {
            width: 900px;
            min-height: 560px;
            background: white;
            border-radius: 24px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
            display: flex;
            overflow: hidden;
        }

        /* LEFT SIDE */
        .welcome-section {
            width: 40%;
            background: linear-gradient(135deg, #00D1E0, #00C8D7);
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 40px;
            border-radius: 0 50% 50% 0 / 0 30% 70% 0;
        }

        .welcome-section h1 {
            font-size: 32px;
            margin-bottom: 15px;
            font-weight: 700;
        }

        .welcome-section p {
            font-size: 15px;
            margin-bottom: 25px;
            line-height: 1.6;
        }

        .login-btn-link {
            padding: 11px 32px;
            border: 2px solid white;
            border-radius: 30px;
            background: transparent;
            color: white;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            transition: 0.3s;
        }

        .login-btn-link:hover {
            background: white;
            color: #00AFC0;
        }

        /* RIGHT SIDE */
        .register-section {
            width: 60%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 45px;
        }

        .register-form {
            width: 100%;
            max-width: 360px;
        }

        .register-form h2 {
            text-align: center;
            color: #123C4A;
            font-size: 30px;
            margin-bottom: 8px;
        }

        .register-form .subtitle {
            text-align: center;
            color: #777;
            font-size: 13px;
            margin-bottom: 22px;
        }

        /* ERROR MESSAGE */
        .error {
            background: #fff1f2;
            border: 1px solid #fecdd3;
            color: #dc2626;
            padding: 10px 14px;
            border-radius: 8px;
            margin-bottom: 18px;
            font-size: 13px;
        }

        .error p {
            margin: 3px 0;
        }

        /* INPUT GROUP */
        .input-group {
            position: relative;
            margin-bottom: 15px;
        }

        .input-group .icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 17px;
            color: #777;
        }

        .input-group input {
            width: 100%;
            height: 46px;
            padding: 0 15px 0 45px;
            border: none;
            outline: none;
            border-radius: 8px;
            background: #F5F5F5;
            font-family: 'Poppins', sans-serif;
            font-size: 13px;
            color: #333;
        }

        .input-group input:focus {
            box-shadow: 0 0 0 2px rgba(0, 209, 224, 0.25);
        }

        .input-group input::placeholder {
            color: #999;
        }

        /* REGISTER BUTTON */
        .register-submit-btn {
            width: 100%;
            height: 48px;
            border: none;
            border-radius: 25px;
            background: linear-gradient(135deg, #0A3D4D, #00D1E0);
            color: white;
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 5px;
        }

        .register-submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 18px rgba(0, 180, 200, 0.25);
        }

        /* MOBILE */
        @media (max-width: 750px) {

            body {
                padding: 15px;
            }

            .register-container {
                width: 100%;
                max-width: 450px;
                min-height: 650px;
                flex-direction: column;
            }

            .welcome-section {
                width: 100%;
                height: 210px;
                padding: 30px;
                border-radius: 0 0 50% 50% / 0 0 30% 30%;
            }

            .welcome-section h1 {
                font-size: 25px;
            }

            .welcome-section p {
                margin-bottom: 15px;
            }

            .register-section {
                width: 100%;
                padding: 30px 25px;
            }

            .register-form h2 {
                font-size: 26px;
            }
        }
    </style>
</head>

<body>

<div class="register-container">

    <!-- LEFT SIDE -->
    <div class="welcome-section">

        <h1>Welcome!</h1>

        <p>
            Create your student account
            and access your academic results.
        </p>

        <a href="{{ route('student.login') }}" class="login-btn-link">
            Login
        </a>

    </div>


    <!-- RIGHT SIDE -->
    <div class="register-section">

        <div class="register-form">

            <h2>Student Registration</h2>

            <p class="subtitle">
                Create your account to access your results
            </p>


            @if ($errors->any())
                <div class="error">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif


            <form method="POST" action="{{ route('student.register.submit') }}">
                @csrf

                <!-- STUDENT NUMBER -->
                <div class="input-group">

                    <span class="icon">🎓</span>

                    <input
                        type="text"
                        id="student_number"
                        name="student_number"
                        value="{{ old('student_number') }}"
                        placeholder="Enter student number"
                        required
                    >

                </div>


                <!-- NAME -->
                <div class="input-group">

                    <span class="icon">👤</span>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        value="{{ old('name') }}"
                        placeholder="Enter your full name"
                        required
                    >

                </div>


                <!-- EMAIL -->
                <div class="input-group">

                    <span class="icon">✉</span>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="Enter your email"
                        required
                    >

                </div>


                <!-- PASSWORD -->
                <div class="input-group">

                    <span class="icon">🔒</span>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Create a password"
                        required
                    >

                </div>


                <!-- CONFIRM PASSWORD -->
                <div class="input-group">

                    <span class="icon">🔐</span>

                    <input
                        type="password"
                        id="password_confirmation"
                        name="password_confirmation"
                        placeholder="Confirm your password"
                        required
                    >

                </div>


                <button type="submit" class="register-submit-btn">
                    Create Student Account
                </button>

            </form>

        </div>

    </div>

</div>

</body>
</html>