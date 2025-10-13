<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Links of CSS files -->
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- SweetAlert2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>



    <style>
        .select2-container .select2-selection--multiple {
            margin-bottom: 30px;
            height: 60px;
            color: #212529;
            border: 1px solid #EEEEEE;
            box-shadow: none;
            padding-left: 20px;
            margin-bottom: 30px;
            box-shadow: none;

        }

        /* Text style inside */
        .select2-container--default .select2-selection--multiple .select2-selection__rendered {
            display: flex;
            gap: 5px;
        }

        /* Placeholder like Bootstrap */
        .select2-container--default .select2-selection--multiple .select2-selection__placeholder {
            color: #000000;
        }

        /* Dropdown same as Bootstrap */
        .select2-container .select2-dropdown {
            border: 1px solid #EEEEEE;
            border-radius: 0.375rem;
            margin-top: -30px;
            background-color: #fff;
        }
    </style>

    <title>SAE KSA</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/images/sae-logo.webp') }}">
</head>

<body>

    <!-- preloader -->
    <div class="preloader-container" id="preloader">
        <div class="preloader-dot"></div>
        <div class="preloader-dot"></div>
        <div class="preloader-dot"></div>
        <div class="preloader-dot"></div>
        <div class="preloader-dot"></div>
    </div>
    <!-- preloader -->

    <div class="navbar-area style-2" id="navbar" >
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="index.html">
                    <img class="logo-light" src="{{ asset('assets/images/sae-logo.png') }}" alt="logo"
                        width="200px">
                    <img class="logo-dark" src="{{ asset('assets/images/sae-logo.png') }}" alt="logo"
                        width="200px">
                </a>
                <a class="navbar-toggler" data-bs-toggle="offcanvas" href="#navbarOffcanvas" role="button"
                    aria-controls="navbarOffcanvas">
                    <i class='bx bx-menu'></i>
                </a>
                <div class="collapse navbar-collapse justify-content-between">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a href="" class="nav-link" style="font-size: 22px">الرئيسية</a>
                        </li>
                        <li class="nav-item ">
                            <a href="#contactForm" class="nav-link mx-3" style="font-size: 22px" >سجل اهتمامك</a>
                        </li>
                        <li class="nav-item">
                            <a href="#about" class="nav-link" style="font-size: 22px">من نحن</a>
                        </li>
                    </ul>
                    <div class="others-option d-flex align-items-center">
                        <div class="option-item">
                            <div class="nav-btn">
                                <a href="{{route('index')}}" class="default-btn">English</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="responsive-navbar offcanvas offcanvas-end" data-bs-backdrop="static" tabindex="-1"
        id="navbarOffcanvas">
        <div class="offcanvas-header">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="accordion" id="navbarAccordion">
                <div class="accordion-item">
                    <a href="" class="accordion-link">الرئيسية</a>
                </div>
                <div class="accordion-item">
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                        <div class="accordion-body">
                            <div class="accordion" id="navbarAccordion8">
                                <div class="accordion-item">
                                    <a href="#about" class="accordion-link">من نحن</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <a class="accordion-link without-icon" href="#contactForm">سجل اهتمامك</a>
                </div>
            </div>
        </div>
    </div>

    <div class="banner-area-2 big-bg-2" id="home">
        <video autoplay muted loop playsinline class="bg-video">
            <source src="{{ asset('assets/images/video.mp4') }}" type="video/mp4">
            متصفحك لا يدعم تشغيل الفيديو.
        </video>

        <div class="container" dir="rtl">
            <div class="banner-content-2">
                <div class="content">
                    <span data-aos="fade-zoom-in" data-aos-delay="300" style="font-size: 30px">الريادة العالمية في الإبداع والتكنولوجيا -
                        قريبًا في المملكة العربية السعودية</span>
                    <h1 data-aos="fade-up" data-aos-delay="200">SAE Institute</h1>
                    <p data-aos="fade-up" data-aos-delay="300" style="font-size: 30px" >
                        ابدأ رحلتك المهنية في الإبداع والتقنية
                    </p>
                    <div class="buttons-action" data-aos="fade-up" data-aos-delay="100">
                        <a class="default-btn" href="#contactForm" style="font-size: 22px">سجّل اهتمامك</a>
                    </div>

                    <div class="scroll-down" data-aos="fade-down" data-aos-delay="100">
                        <a href="#about"><i class='bx bx-chevron-down'></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="faculty-area-2 ptb-100" dir="rtl">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="heading" data-aos="fade-up" data-aos-delay="100">
                        <h2>47 حرمًا جامعيًا حول العالم</h2>
                    </div>
                </div>
                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                    <div class="content">
                        <p style="font-size:26px">
                            يمنحك معهد SAE وصولًا عالميًا
                            يضم المعهد حوالي 47 حرمًا جامعيًا في 23 دولة. طلابنا ومدرسونا مجتمع فريد ومتنوع ومبدع
                            يجتمعون لهدف واحد — توفير فرص تعليمية متميزة على مستوى عالمي.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section>
        @livewire('submission-form')
    </section>

    <div id="about" class="about-us-area-2 ptb-100">
        <div class="container">
            <div class="section-title" data-aos="fade-up" data-aos-delay="100" dir="rtl">
                <h2 >لماذا SAE </h2>
                <p>
                    يقدم معهد SAE تعليمًا متميزًا يركز على الصناعة منذ عام 1976. لقد وضعنا المعايير للتعليم العالي في
                    الصناعات الإبداعية لأننا نعرف هذه الصناعات جيدًا ونعرف كيف نُعدّ خريجين جاهزين لسوق العمل.
                    نحن نحب ما نقوم به وملتزمون بتوفير خيارات تعليمية تتحدى وتطور وتلهم.
                </p>
            </div>
            <div class="about-content-courser owl-carousel owl-theme text-end">
                <div class="content-items" data-dot="<button>01</button>">
                    <div class="image ct-bg-1" data-aos="fade-zoom-in" data-aos-delay="100"
                        style="background-image: url('{{ asset('assets/images/game.png') }}');"></div>
                    <div class="content" data-aos="fade-up" data-aos-delay="200" dir="rtl">
                        <h2>SAE تُعِدّك للنجاح</h2>
                        <p style="font-size: 20px">نحن الرائدون عالميًا في التعليم الإبداعي لأننا نعمل عن قرب مع شركاء الصناعة، ونوظف مدرّسين
                            متخصصين بخبرة عملية، ونقدم تعليمًا شخصيًا في مرافق عالمية المستوى.</p>
                    </div>
                </div>

                <div class="content-items" data-dot="<button>02</button>">
                    <div class="image ct-bg-2" data-aos="fade-zoom-in" data-aos-delay="100"
                        style="background-image: url('{{ asset('assets/images/audio.png') }}');"></div>
                    <div class="content" data-aos="fade-up" data-aos-delay="200" dir="rtl">
                        <h2>SAE تفتح لك أبواب العالم</h2>
                        <p style="font-size: 20px">يضم معهد SAE حوالي 47 حرمًا جامعيًا في 23 دولة. مجتمعنا الإبداعي من الطلاب والمدرسين يجمع بين
                            التنوع والابتكار لتحقيق فرص تعليمية مميزة ومعترف بها عالميًا.</p>
                    </div>
                </div>

                <div class="content-items" data-dot="<button>03</button>">
                    <div class="image ct-bg-3" data-aos="fade-zoom-in" data-aos-delay="100"
                        style="background-image: url('{{ asset('assets/images/film.png') }}');"></div>
                    <div class="content" data-aos="fade-up" data-aos-delay="200" dir="rtl">
                        <h2>SAE تُقربك من الواقع</h2>
                        <p style="font-size: 20px">ندرك في SAE أن طلاب الصناعات الإبداعية يحتاجون إلى تدريب عملي فردي، لذلك قمنا منذ عام 1976
                            بتقديم مناهج تركز على الجانب العملي والصناعة ضمن مرافق متطورة وحديثة.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-area">

        <div class="copy-right-area style-2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="cpr-left">
                            <p>Copyright© <a href="#home">SAE Institue</a>, All rights reserved.</p>
                        </div>
                    </div>
                    <div class="col-lg-8 ">
                        <div class="cpr-right ">
                            <ul>
                                <li><a href="https://jordan.sae.edu/policies-and-procedures/" target="_blank">Privacy
                                        Policy</a></li>
                                <li><a href="https://jordan.sae.edu/policies-and-procedures/" target="_blank">Cookie
                                        Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="go-top active">
        <i class="bx bx-up-arrow-alt"></i>
    </div>
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: "{{ session('success') }}",
                timer: 5000,
                timerProgressBar: true,
                showConfirmButton: false
            });
        </script>
    @endif
    <!-- Links of JS files -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
