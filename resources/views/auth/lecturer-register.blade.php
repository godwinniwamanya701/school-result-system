<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lecturer Registration - School Result System</title>

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
            background: #eef7f3;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .register-container {
            width: 900px;
            min-height: 500px;
            background: white;
            border-radius: 24px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
            display: flex;
            overflow: hidden;
        }

        /* ================= LEFT SIDE ================= */

        .welcome-section {
            width: 40%;
            background: linear-gradient(135deg, #0A3D4D, #16A34A);
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
            font-size: 31px;
            margin-bottom: 15px;
            font-weight: 700;
        }

        .welcome-section p {
            font-size: 14px;
            margin-bottom: 25px;
            line-height: 1.7;
        }

        .login-link {
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

        .login-link:hover {
            background: white;
            color: #0A3D4D;
        }

        /* ================= RIGHT SIDE ================= */

        .register-section {
            width: 60%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 45px;
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
            margin-bottom: 25px;
        }

        /* ================= ERROR MESSAGE ================= */

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

        /* ================= INPUT GROUP ================= */

        .input-group {
            position: relative;
            margin-bottom: 18px;
        }

        .input-group .icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            width: 18px;
            height: 18px;
            color: #777;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .input-group .icon svg {
            width: 17px;
            height: 17px;
            stroke: currentColor;
        }

        .input-group input {
            width: 100%;
            height: 48px;
            padding: 0 50px 0 45px;
            border: none;
            outline: none;
            border-radius: 8px;
            background: #F5F5F5;
            font-family: 'Poppins', sans-serif;
            font-size: 13px;
            color: #333;
        }

        .input-group input:focus {
            box-shadow: 0 0 0 2px rgba(22, 163, 74, 0.25);
        }

        .input-group input::placeholder {
            color: #999;
        }

        /* ================= PASSWORD SHOW / HIDE ================= */

        .password-toggle {
            position: absolute;
            right: 13px;
            top: 50%;
            transform: translateY(-50%);
            width: 30px;
            height: 30px;
            border: none;
            background: transparent;
            color: #777;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0;
        }

        .password-toggle:hover {
            color: #16A34A;
        }

        .password-toggle svg {
            width: 19px;
            height: 19px;
            stroke: currentColor;
        }

        /* ================= REGISTER BUTTON ================= */

        .register-submit-btn {
            width: 100%;
            height: 48px;
            border: none;
            border-radius: 25px;

            background: linear-gradient(135deg, #0A3D4D, #16A34A);

            color: white;
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
        }

        .register-submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 18px rgba(22, 163, 74, 0.25);
        }

        /* ================= MOBILE ================= */

        @media (max-width: 750px) {

            body {
                padding: 15px;
            }

            .register-container {
                width: 100%;
                max-width: 450px;
                min-height: 600px;
                flex-direction: column;
            }

            .welcome-section {
                width: 100%;
                height: 220px;
                padding: 30px;

                border-radius: 0 0 50% 50% / 0 0 30% 30%;
            }

            .welcome-section h1 {
                font-size: 25px;
            }

            .register-section {
                width: 100%;
                padding: 35px 25px;
            }

        }

    </style>
</head>

<body>

<div class="register-container">

    <!-- ================= LEFT SIDE ================= -->

    <div class="welcome-section">

        <h1>
            Welcome!
        </h1>

        <p>
            Create your lecturer account
            to manage courses and student results.
        </p>

        <a href="{{ route('lecturer.login') }}" class="login-link">
            Login
        </a>

    </div>


    <!-- ================= RIGHT SIDE ================= -->

    <div class="register-section">

        <div class="register-form">

            <h2>
                Lecturer Register
            </h2>

            <p class="subtitle">
                Create your lecturer account
            </p>


            <!-- ERROR MESSAGE -->

            @if ($errors->any())

                <div class="error">

                    @foreach ($errors->all() as $error)

                        <p>
                            {{ $error }}
                        </p>

                    @endforeach

                </div>

            @endif


            <!-- REGISTRATION FORM -->

            <form method="POST" action="{{ route('lecturer.register.submit') }}">

                @csrf


                <!-- NAME -->

                <div class="input-group">

                    <span class="icon">

                        <!-- User icon -->

                        <svg viewBox="0 0 24 24"
                             fill="none"
                             stroke="currentColor"
                             stroke-width="1.8"
                             stroke-linecap="round"
                             stroke-linejoin="round">

                            <circle cx="12" cy="8" r="4"/>

                            <path d="M4 21c0-4 3.5-7 8-7s8 3 8 7"/>

                        </svg>

                    </span>


                    <input
                        type="text"
                        name="name"
                        value="{{ old('name') }}"
                        placeholder="Enter your full name"
                        required
                    >

                </div>


                <!-- EMAIL -->

                <div class="input-group">

                    <span class="icon">

                        <!-- Email icon -->

                        <svg viewBox="0 0 24 24"
                             fill="none"
                             stroke="currentColor"
                             stroke-width="1.8"
                             stroke-linecap="round"
                             stroke-linejoin="round">

                            <rect x="3" y="5" width="18" height="14" rx="2"/>

                            <path d="M3 7l9 6 9-6"/>

                        </svg>

                    </span>


                    <input
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="Enter your email"
                        required
                    >

                </div>


                <!-- PASSWORD -->

                <div class="input-group">

                    <span class="icon">

                        <!-- Padlock icon -->

                        <svg viewBox="0 0 24 24"
                             fill="none"
                             stroke="currentColor"
                             stroke-width="1.8"
                             stroke-linecap="round"
                             stroke-linejoin="round">

                            <rect x="5" y="10" width="14" height="10" rx="2"/>

                            <path d="M8 10V7a4 4 0 0 1 8 0v3"/>

                        </svg>

                    </span>


                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Create a password"
                        required
                    >


                    <!-- Show / Hide Password -->

                    <button
                        type="button"
                        class="password-toggle"
                        onclick="togglePassword('password', 'eyeIcon1', this)"
                        aria-label="Show password"
                    >

                        <svg id="eyeIcon1"
                             viewBox="0 0 24 24"
                             fill="none"
                             stroke="currentColor"
                             stroke-width="1.8"
                             stroke-linecap="round"
                             stroke-linejoin="round">

                            <path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12z"/>

                            <circle cx="12" cy="12" r="2.5"/>

                        </svg>

                    </button>

                </div>


                <!-- CONFIRM PASSWORD -->

                <div class="input-group">

                    <span class="icon">

                        <!-- Padlock icon -->

                        <svg viewBox="0 0 24 24"
                             fill="none"
                             stroke="currentColor"
                             stroke-width="1.8"
                             stroke-linecap="round"
                             stroke-linejoin="round">

                            <rect x="5" y="10" width="14" height="10" rx="2"/>

                            <path d="M8 10V7a4 4 0 0 1 8 0v3"/>

                        </svg>

                    </span>


                    <input
                        type="password"
                        id="password_confirmation"
                        name="password_confirmation"
                        placeholder="Confirm your password"
                        required
                    >


                    <!-- Show / Hide Confirm Password -->

                    <button
                        type="button"
                        class="password-toggle"
                        onclick="togglePassword('password_confirmation', 'eyeIcon2', this)"
                        aria-label="Show password"
                    >

                        <svg id="eyeIcon2"
                             viewBox="0 0 24 24"
                             fill="none"
                             stroke="currentColor"
                             stroke-width="1.8"
                             stroke-linecap="round"
                             stroke-linejoin="round">

                            <path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12z"/>

                            <circle cx="12" cy="12" r="2.5"/>

                        </svg>

                    </button>

                </div>


                <!-- REGISTER BUTTON -->

                <button type="submit" class="register-submit-btn">
                    Create Lecturer Account
                </button>

            </form>

        </div>

    </div>

</div>


<!-- ================= PASSWORD SCRIPT ================= -->

<script>

function togglePassword(passwordId, eyeId, button) {

    const password = document.getElementById(passwordId);
    const eyeIcon = document.getElementById(eyeId);

    if (password.type === 'password') {

        password.type = 'text';

        button.setAttribute('aria-label', 'Hide password');

        eyeIcon.innerHTML = `
            <path d="M3 3l18 18"/>

            <path d="M10.6 10.6a2 2 0 0 0 2.8 2.8"/>

            <path d="M9.9 5.2A10.7 10.7 0 0 1 12 5c6.5 0 10 7 10 7a18.3 18.3 0 0 1-3.1 3.9"/>

            <path d="M6.2 6.2C3.7 8.1 2 12 2 12s3.5 7 10 7a9.7 9.7 0 0 0 3.3-.6"/>
        `;

    } else {

        password.type = 'password';

        button.setAttribute('aria-label', 'Show password');

        eyeIcon.innerHTML = `
            <path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12z"/>

            <circle cx="12" cy="12" r="2.5"/>
        `;

    }

}

</script>

</body>
</html>