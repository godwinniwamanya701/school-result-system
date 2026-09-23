<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add New Lecturer - School Result System</title>

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

        /* HEADER */

        .header {
            background: linear-gradient(135deg, #0A3D4D, #00C8D7);
            color: white;
            padding: 18px 45px;

            display: flex;
            justify-content: space-between;
            align-items: center;

            box-shadow: 0 4px 15px rgba(0,0,0,0.12);
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .brand-icon {
            width: 42px;
            height: 42px;

            background: rgba(255,255,255,0.18);

            border-radius: 10px;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 21px;
        }

        .brand h2 {
            font-size: 20px;
            font-weight: 600;
        }

        .back-link {
            color: white;
            text-decoration: none;

            border: 1px solid rgba(255,255,255,0.5);

            padding: 9px 17px;

            border-radius: 20px;

            font-size: 12px;

            transition: 0.3s;
        }

        .back-link:hover {
            background: white;
            color: #0A3D4D;
        }

        /* MAIN */

        .container {
            max-width: 750px;
            margin: 40px auto;
            padding: 0 20px;
        }

        /* PAGE HEADING */

        .page-heading {
            margin-bottom: 25px;
        }

        .page-heading h1 {
            color: #123C4A;
            font-size: 27px;
            margin-bottom: 6px;
        }

        .page-heading p {
            color: #777;
            font-size: 13px;
        }

        /* FORM CARD */

        .form-card {
            background: white;

            padding: 32px;

            border-radius: 18px;

            box-shadow: 0 7px 25px rgba(0,0,0,0.07);
        }

        /* ERROR BOX */

        .error-box {
            background: #fff1f2;

            border: 1px solid #fecdd3;

            color: #b91c1c;

            padding: 15px 18px;

            border-radius: 10px;

            margin-bottom: 25px;

            font-size: 13px;
        }

        .error-box strong {
            display: block;
            margin-bottom: 8px;
        }

        .error-box ul {
            padding-left: 20px;
        }

        .error-box li {
            margin-bottom: 3px;
        }

        /* FORM */

        .form-group {
            margin-bottom: 21px;
        }

        label {
            display: block;

            color: #123C4A;

            font-size: 13px;

            font-weight: 600;

            margin-bottom: 8px;
        }

        input {
            width: 100%;

            padding: 12px 14px;

            border: 1px solid #d9e1e6;

            border-radius: 9px;

            background: white;

            color: #333;

            font-family: 'Poppins', sans-serif;

            font-size: 13px;

            outline: none;

            transition: 0.3s;
        }

        input:focus {
            border-color: #00AFC0;

            box-shadow: 0 0 0 3px rgba(0,175,192,0.10);
        }

        input::placeholder {
            color: #aaa;
        }

        /* PASSWORD INFORMATION */

        .password-note {
            margin-top: 6px;

            color: #999;

            font-size: 10px;
        }

        /* ACTIONS */

        .form-actions {
            display: flex;

            justify-content: flex-end;

            align-items: center;

            gap: 12px;

            margin-top: 28px;

            padding-top: 25px;

            border-top: 1px solid #edf0f2;
        }

        .cancel-button {
            text-decoration: none;

            padding: 11px 20px;

            border: 1px solid #d9e1e6;

            border-radius: 9px;

            color: #666;

            background: white;

            font-size: 13px;

            transition: 0.3s;
        }

        .cancel-button:hover {
            background: #f5f5f5;

            color: #333;
        }

        .save-button {
            border: none;

            background: linear-gradient(135deg, #0A3D4D, #00AFC0);

            color: white;

            padding: 11px 23px;

            border-radius: 9px;

            font-family: 'Poppins', sans-serif;

            font-size: 13px;

            font-weight: 600;

            cursor: pointer;

            transition: 0.3s;

            box-shadow: 0 4px 12px rgba(0,175,192,0.20);
        }

        .save-button:hover {
            transform: translateY(-1px);

            box-shadow: 0 6px 15px rgba(0,175,192,0.28);
        }

        /* FOOTER */

        .footer {
            text-align: center;

            color: #999;

            font-size: 11px;

            padding: 20px;
        }

        /* MOBILE */

        @media (max-width: 600px) {

            .header {
                padding: 15px 20px;
            }

            .brand h2 {
                font-size: 16px;
            }

            .brand-icon {
                width: 36px;
                height: 36px;
                font-size: 17px;
            }

            .back-link {
                padding: 8px 12px;
                font-size: 11px;
            }

            .container {
                margin: 25px auto;
                padding: 0 15px;
            }

            .page-heading h1 {
                font-size: 22px;
            }

            .form-card {
                padding: 22px;
            }

            .form-actions {
                flex-direction: column-reverse;
                align-items: stretch;
            }

            .cancel-button,
            .save-button {
                width: 100%;
                text-align: center;
            }
        }

    </style>
</head>

<body>

<!-- HEADER -->

<div class="header">

    <div class="brand">

        <div class="brand-icon">
            🎓
        </div>

        <h2>School Result System</h2>

    </div>

    <a href="{{ route('lecturers.index') }}" class="back-link">
        ← Back to Lecturers
    </a>

</div>


<!-- MAIN -->

<div class="container">

    <!-- PAGE HEADING -->

    <div class="page-heading">

        <h1>
            Add New Lecturer
        </h1>

        <p>
            Create a lecturer account by entering the information below.
        </p>

    </div>


    <!-- FORM -->

    <div class="form-card">


        <!-- VALIDATION ERRORS -->

        @if ($errors->any())

            <div class="error-box">

                <strong>
                    Please correct the following errors:
                </strong>

                <ul>

                    @foreach ($errors->all() as $error)

                        <li>
                            {{ $error }}
                        </li>

                    @endforeach

                </ul>

            </div>

        @endif


        <form action="{{ route('lecturers.store') }}" method="POST">

            @csrf


            <!-- NAME -->

            <div class="form-group">

                <label for="name">
                    Full Name
                </label>

                <input
                    type="text"
                    name="name"
                    id="name"
                    value="{{ old('name') }}"
                    placeholder="Enter lecturer's full name"
                    required
                >

            </div>


            <!-- EMAIL -->

            <div class="form-group">

                <label for="email">
                    Email Address
                </label>

                <input
                    type="email"
                    name="email"
                    id="email"
                    value="{{ old('email') }}"
                    placeholder="lecturer@example.com"
                    required
                >

            </div>


            <!-- PASSWORD -->

            <div class="form-group">

                <label for="password">
                    Password
                </label>

                <input
                    type="password"
                    name="password"
                    id="password"
                    placeholder="Enter password"
                    required
                >

                <div class="password-note">
                    Use a secure password for the lecturer account.
                </div>

            </div>


            <!-- CONFIRM PASSWORD -->

            <div class="form-group">

                <label for="password_confirmation">
                    Confirm Password
                </label>

                <input
                    type="password"
                    name="password_confirmation"
                    id="password_confirmation"
                    placeholder="Confirm lecturer password"
                    required
                >

            </div>


            <!-- ACTIONS -->

            <div class="form-actions">

                <a
                    href="{{ route('lecturers.index') }}"
                    class="cancel-button"
                >
                    Cancel
                </a>


                <button
                    type="submit"
                    class="save-button"
                >
                    Save Lecturer
                </button>

            </div>

        </form>

    </div>

</div>


<!-- FOOTER -->

<div class="footer">

    School Result System &copy; {{ date('Y') }}

</div>

</body>
</html>