<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

```
<title>Add Course - School Result System</title>

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
        padding: 30px 20px;
    }

    .course-container {
        width: 100%;
        max-width: 650px;
        background: white;
        border-radius: 24px;
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.12);
        overflow: hidden;
    }

    /* HEADER */
    .course-header {
        background: linear-gradient(135deg, #0A3D4D, #16A34A);
        color: white;
        padding: 32px 40px;
        text-align: center;
    }

    .course-header h1 {
        font-size: 30px;
        font-weight: 700;
        margin-bottom: 8px;
    }

    .course-header p {
        font-size: 13px;
        line-height: 1.6;
        opacity: 0.95;
    }

    /* FORM */
    .course-form {
        padding: 40px;
    }

    .form-group {
        margin-bottom: 22px;
    }

    .form-group label {
        display: block;
        color: #123C4A;
        font-size: 13px;
        font-weight: 600;
        margin-bottom: 8px;
    }

    .form-group input,
    .form-group select {
        width: 100%;
        height: 48px;
        padding: 0 15px;
        border: 1px solid #e0e0e0;
        outline: none;
        border-radius: 9px;
        background: #F8FAF9;
        font-family: 'Poppins', sans-serif;
        font-size: 13px;
        color: #333;
        transition: 0.3s;
    }

    .form-group input:focus,
    .form-group select:focus {
        border-color: #16A34A;
        background: white;
        box-shadow: 0 0 0 3px rgba(22, 163, 74, 0.10);
    }

    .form-group input::placeholder {
        color: #999;
    }

    /* ERROR MESSAGE */
    .error-box {
        background: #fff1f2;
        border: 1px solid #fecdd3;
        color: #dc2626;
        padding: 14px 16px;
        border-radius: 9px;
        margin-bottom: 25px;
        font-size: 13px;
    }

    .error-box strong {
        display: block;
        margin-bottom: 6px;
    }

    .error-box ul {
        padding-left: 20px;
    }

    .error-box li {
        margin: 3px 0;
    }

    /* BUTTONS */
    .button-group {
        display: flex;
        gap: 12px;
        margin-top: 30px;
    }

    .save-btn,
    .cancel-btn {
        flex: 1;
        height: 48px;
        border-radius: 25px;
        font-family: 'Poppins', sans-serif;
        font-size: 14px;
        font-weight: 600;
        text-decoration: none;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: 0.3s;
    }

    .save-btn {
        border: none;
        background: linear-gradient(135deg, #0A3D4D, #16A34A);
        color: white;
    }

    .save-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 18px rgba(22, 163, 74, 0.25);
    }

    .cancel-btn {
        border: 2px solid #0A3D4D;
        background: white;
        color: #0A3D4D;
    }

    .cancel-btn:hover {
        background: #0A3D4D;
        color: white;
    }

    /* MOBILE */
    @media (max-width: 600px) {

        body {
            padding: 15px;
        }

        .course-header {
            padding: 28px 25px;
        }

        .course-header h1 {
            font-size: 25px;
        }

        .course-form {
            padding: 30px 22px;
        }

        .button-group {
            flex-direction: column;
        }

        .save-btn,
        .cancel-btn {
            width: 100%;
        }
    }
</style>
```

</head>

<body>

<div class="course-container">

```
<!-- HEADER -->
<div class="course-header">
    <h1>Add New Course</h1>

    <p>
        Enter the course details and assign a lecturer.
    </p>
</div>


<!-- FORM -->
<div class="course-form">

    @if ($errors->any())
        <div class="error-box">

            <strong>Please correct the following errors:</strong>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>
    @endif


    <form action="{{ route('courses.store') }}" method="POST">

        @csrf


        <!-- COURSE CODE -->
        <div class="form-group">

            <label for="course_code">
                Course Code
            </label>

            <input
                type="text"
                name="course_code"
                id="course_code"
                value="{{ old('course_code') }}"
                placeholder="e.g. BIT 2101"
                required
            >

        </div>


        <!-- COURSE NAME -->
        <div class="form-group">

            <label for="course_name">
                Course Name
            </label>

            <input
                type="text"
                name="course_name"
                id="course_name"
                value="{{ old('course_name') }}"
                placeholder="e.g. Database Systems"
                required
            >

        </div>


        <!-- CREDIT UNITS -->
        <div class="form-group">

            <label for="credit_units">
                Credit Units
            </label>

            <input
                type="number"
                name="credit_units"
                id="credit_units"
                min="1"
                max="20"
                value="{{ old('credit_units') }}"
                placeholder="e.g. 3"
                required
            >

        </div>


        <!-- LECTURER -->
        <div class="form-group">

            <label for="lecturer_id">
                Lecturer
            </label>

            <select name="lecturer_id" id="lecturer_id" required>

                <option value="">
                    -- Select Lecturer --
                </option>

                @foreach ($lecturers as $lecturer)

                    <option
                        value="{{ $lecturer->id }}"
                        {{ old('lecturer_id') == $lecturer->id ? 'selected' : '' }}
                    >
                        {{ $lecturer->name }} - {{ $lecturer->email }}
                    </option>

                @endforeach

            </select>

        </div>


        <!-- BUTTONS -->
        <div class="button-group">

            <button type="submit" class="save-btn">
                Save Course
            </button>

            <a href="{{ route('courses.index') }}" class="cancel-btn">
                Cancel
            </a>

        </div>

    </form>

</div>
```

</div>

</body>
</html>
