<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAE Short Courses - Registration</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #000;
            color: #fff;
            font-family: Arial, sans-serif;
        }

        .form-container {
            max-width: 500px;
            margin: 60px auto;
            background: transparent;
            padding: 30px;
            border-radius: 12px;
        }

        .form-control,
        .form-select {
            background-color: #111;
            color: #fff;
            border: 1px solid #333;
        }

        .form-control::placeholder {
            color: #aaa;
        }

        .form-control:focus {
            background-color: #111;
            color: #fff;
        }

        .form-select option {
            background-color: #111;
            color: #fff;
        }

        .btn-custom {
            background-color: #222;
            color: #fff;
            border-radius: 8px;
            padding: 10px;
            width: 100%;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #444;
        }

        .form-header {
            text-align: center;
            margin-bottom: 25px;
        }

        .form-header h2 {
            font-weight: bold;
        }
    </style>
</head>

<body>

    <nav>
        <div class="mt-4">
            <ul class="nav nav-tabs ">
                <li class="nav-item m-3  " style="width: 207px">
                    <a class="nav-link" href="#"><img src="{{ asset('assets/images/sae-logo.webp') }}"
                            alt="" width="100%"></a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="form-container mt-4">
        <div class="form-header ">
            <div style="width: 70px;background-color: white; border-radius: 50%;" class="mx-auto text-black p-4">
                <i>
                    <svg class="svg-inline--fa fa-graduation-cap" aria-hidden="true" focusable="false" data-prefix="fas"
                        data-icon="graduation-cap" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 640 512" data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M320 32c-8.1 0-16.1 1.4-23.7 4.1L15.8 137.4C6.3 140.9 0 149.9 0 160s6.3 19.1 15.8 22.6l57.9 20.9C57.3 229.3 48 259.8 48 291.9v28.1c0 28.4-10.8 57.7-22.3 80.8c-6.5 13-13.9 25.8-22.5 37.6C0 442.7-.9 448.3 .9 453.4s6 8.9 11.2 10.2l64 16c4.2 1.1 8.7 .3 12.4-2s6.3-6.1 7.1-10.4c8.6-42.8 4.3-81.2-2.1-108.7C90.3 344.3 86 329.8 80 316.5V291.9c0-30.2 10.2-58.7 27.9-81.5c12.9-15.5 29.6-28 49.2-35.7l157-61.7c8.2-3.2 17.5 .8 20.7 9s-.8 17.5-9 20.7l-157 61.7c-12.4 4.9-23.3 12.4-32.2 21.6l159.6 57.6c7.6 2.7 15.6 4.1 23.7 4.1s16.1-1.4 23.7-4.1L624.2 182.6c9.5-3.4 15.8-12.5 15.8-22.6s-6.3-19.1-15.8-22.6L343.7 36.1C336.1 33.4 328.1 32 320 32zM128 408c0 35.3 86 72 192 72s192-36.7 192-72L496.7 262.6 354.5 314c-11.1 4-22.8 6-34.5 6s-23.5-2-34.5-6L143.3 262.6 128 408z">
                        </path>
                    </svg>
                </i>
            </div>
            <h2 class="my-4">SAE Courses</h2>
            <p class="text-white">Course Registration</p>
            <small class="text-white-50">Join our professional development programs</small>
        </div>

        <form action="{{ route('submission') }}" method="POST">
            @csrf
            <!-- Full Name -->
            <div class="mb-4">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" name="name" class="form-control p-3" style="background-color: #111827"
                    id="name" placeholder="Enter your full name" required value="{{ old('name') }}" >
                    @error('name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control p-3" style="background-color: #111827"
                    id="email" placeholder="Enter your email address" value="{{ old('email') }}">
                    @error('email')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
            </div>

            <!-- Phone -->
            <div class="mb-4">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="text" name="phone_number" class="form-control p-3" style="background-color: #111827"
                    id="phone" placeholder="Enter your phone number"  value="{{ old('phone_number') }}"  required >
                    @error('phone_number')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
            </div>

            <!-- City -->
            <div class="mb-4">
                <label for="city" class="form-label">City</label>
                <select id="city" name="city" class="form-select p-3" style="background-color: #111827">
                    <option selected disabled>Select your city</option>
                    <option value="Jeddah">Jeddah</option>
                    <option value="Riyadh" >Riyadh</option>
                </select>
                    @error('city')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
            </div>

            <!-- Course -->
            <div class="mb-5">
                <label for="course" class="form-label">Select Course</label>
                <select id="course" name="course" class="form-select p-3" style="background-color: #111827">
                    <option selected disabled>Choose a course</option>
                    @foreach ($courses as $course )
                    <option value="{{$course->name}}" >{{$course->name}}</option>
                    @endforeach
                </select>
                    @error('course')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
            </div>

            <!-- Submit -->
            <button type="submit" class="btn btn-custom"
                style="background-color: #111827; border: solid #a0a0a0 0.1px;">Register Now</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
