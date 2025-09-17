<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.ar-fonts.com/css/ge-ss.css" rel="stylesheet">
    <title>SAE KSA</title>
    <style>
        body {
            background-color: #000000;
            margin: 0;
            padding: 0;
            font-family: 'GE SS', Arial, sans-serif;
        }

        .animation:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease-in-out;
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

        .form-label {
            color: #fff;
        }

    </style>
</head>

<body dir="rtl">
        <div style="background-color: white; z-index: auto;" class="d-flex justify-content-start" >
            <button class="btn btn-primary me-5">
                <a href="{{route('english')}}" style="text-decoration: none; color: white;">english</a>
            </button>
    </div>

    <div class="mt-4 ">
        <ul class="nav nav-tabs d-flex justify-content-end ">
            <li class="nav-item m-4 text" style="width: 207px">
                <a class="p-3" ><img src="{{asset('assets/images/sae-logo.webp')}}" alt="" width="100%" /></a>
            </li>
        </ul>
    </div>

    <section class="container">
        <div class=" mt-5 d-flex justify-content-center flex-column ">
            <h2 class="text-center text-white mt-3 ">
                هل تمتلك الشغف لتطوير الألعاب،<br>صناعة الأفلام، أو خوض مجالات الإبداع الأخرى؟
            </h2>
            <div class="text-center">
                <h4 class="text-center text-white mt-3  w-75 mx-auto">
                    سجل اهتمامك في برامج الدبلوم أو الدورات القصيرة المتخصصة في أكبر كلية الإعلام الإبداعي في العالم،
                    التي تمتد بخبرتها عبر 43 فرعًا في 27 دولة و قريباً في المملكة العربية السعودية ،
                    سجّل اهتمامك الآن، وابدأ رحلتك نحو مستقبل مهني مليء بالابتكار والفرص.
                </h4>
            </div>

        </div>
    </section>
    <section>
        <!-- Carousel -->
        <div id="demo" class="carousel slide  mt-5" data-bs-ride="carousel" >
            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('assets/images/3.png')}}" alt="" class="d-block" style="width: 100%" height="" />
                </div>
                <div class="carousel-item">
                    <img src="{{asset('assets/images/1.png')}}" alt="" class="d-block" style="width: 100%" height="" />
                </div>
                <div class="carousel-item">
                    <img src="{{asset('assets/images/2.png')}}" alt="" class="d-block" style="width: 100%" height="" />
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
    </section>
    <section class="mt-5 form-container">
        @livewire('submission-form')
    </section>

    <footer class="my-5 pt-5" style="border-top: solid #ffffff 0.1px ;">
        <p class="text-center text-white">
            جميع الحقوق محفوظة © 2025
        </p>
    </footer>
</body>

</html>
