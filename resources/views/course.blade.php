<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>SAE courses</title>
    <style>
        body{
            background-color: #000000;
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body>
    {{--------------------------- nav bar -------------------}}
    <nav>
        <div class="mt-4 ">
            <ul class="nav nav-tabs ">
                <li class="nav-item m-3  " style="width: 207px">
                    <a class="nav-link" href="#"><img src="{{ asset('assets/images/sae-logo.webp') }}"
                            alt="" width="100%"></a>
                </li>
            </ul>
        </div>
    </nav>

    <section class=" my-5 pt-2">
        {{--------------------header -----------------------------------}}
        <div class=" mt-5 text-center" >
            <h1 class="mb-2 text-white" style="font-size: 35px" >SAE {{$category->name}}</h1>
            <h3  style="color: #d1d5db" >{{$category->description}}</h3>
        </div>
        {{--------------------cards -----------------------------------}}
        <div class="d-flex gap-5 flex-wrap mt-5 justify-content-center">
            @if ($courses->isEmpty())
                <h1 class="text-center text-white mt-3">No Courses Found</h1>
            @endif
            @foreach ($courses as $course )
            <div class="card mt-5" style="width: 24rem;background-color: #111827; border-radius: 10px; " >
                <img src="{{asset('storage/'.$course->image) }}" class="card-img-top" alt="..." style="border-radius:10px ">
                <div class="card-body p-4 text-white" >
                    <h5 class="card-title text-white mb-3 ">{{$course->name}}</h5>
                    <p class="card-text " style="color: #d1d5db">{{$course->description}}</p>
                    <a href="{{ route('form', $course->id) }}" class="btn btn-primary mt-2">Register Now</a>
                </div>
            </div>
            @endforeach
        </div>
    </section>

</body>

</html>
