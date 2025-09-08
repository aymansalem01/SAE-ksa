<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>SAE KSA</title>
    <style>
        body {
            background-color: #000000;
            margin: 0;
            padding: 0;
        }
        .animation:hover {
        transform: scale(1.05); /* Zooms in slightly on hover */
        transition: transform 0.3s ease-in-out; /* Smooth transition */
    }
    </style>
</head>

<body>
    {{--------------------------- nav bar -------------------}}
    <div class="mt-4 ">
        <ul class="nav nav-tabs ">
            <li class="nav-item m-4  " style="width: 207px">
                <a class="nav-link" href="#"><img src="{{ asset('assets/images/sae-logo.webp') }}" alt="" width="100%"></a>
            </li>
        </ul>
    </div>

    <section >
        <div class="container mt-5">
            <h1 class="text-center text-white mt-3"><span style="color:#f15d24 ">47</span> composes In <span style="color: #f15d24">23</span> Countries </h1>
            <h2 class="text-center text-white mt-3"><span style="color: #f15d24">SOON</span> in KSA</h2>
        </div>
    </section>

    <section>
        <div class="text-center mt-4" >
            <img src="{{ asset('assets/images/SAE MAP-01.png') }}" alt="">
        </div>
    </section>
    <section class="d-flex gap-5 justify-content-around container mt-5 flex-wrap" >
        @if ($categories->isEmpty())
            <h1 class="text-center text-white mt-3">No Courses Found</h1>
        @endif
        @foreach ($categories as $category)
        <div class="card mt-5 animation" style="width: 40%;background-color: #111827; border-radius: 10px; " >
                <img src="{{asset('storage/'.$category->image) }}" height="300px" class="card-img-top" alt="..." style="border-radius:10px ">
                <div class="card-body p-4 text-white" >
                    <h2 class="card-title text-white">{{$category->name}}</h2>
                    <h5 class="card-text " style="color: #d1d5db" >{{$category->description}}</h5>
                    <a href="{{route('course',$category->id)}}" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        @endforeach
    </section>



</body>

</html>
