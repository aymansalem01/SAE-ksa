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

    <!--  Navbar Area  -->
    <div class="navbar-area style-2" id="navbar">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="index.html">
                    <img class="logo-light" src="{{ asset('assets/images/sae-logo.webp') }}" alt="logo"
                        width="200px">
                    <img class="logo-dark" src="{{ asset('assets/images/sae-logo.webp') }}" alt="logo"
                        width="200px">
                </a>
                <a class="navbar-toggler" data-bs-toggle="offcanvas" href="#navbarOffcanvas" role="button"
                    aria-controls="navbarOffcanvas">
                    <i class='bx bx-menu'></i>
                </a>
                <div class="collapse navbar-collapse justify-content-between">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a href="" class=" nav-link "  >
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#contactForm" class=" nav-link  ">
                                Contact Form
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#about" class=" nav-link  ">
                                About Us
                            </a>
                        </li>
                    </ul>
                    <div class="others-option d-flex align-items-center">
                        <div class="option-item">
                            <div class="nav-btn">
                                <a href="#contactForm" class="default-btn">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!--  Navbar   -->

    <!--  Responsive Navbar  -->
    <div class="responsive-navbar offcanvas offcanvas-end" data-bs-backdrop="static" tabindex="-1"
        id="navbarOffcanvas">
        <div class="offcanvas-header">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="accordion" id="navbarAccordion">
                <div class="accordion-item">
                    <a href="" class="accordion-link">
                        Home
                    </a>
                </div>
                <div class="accordion-item">
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                        <div class="accordion-body">
                            <div class="accordion" id="navbarAccordion8">
                                <div class="accordion-item">
                                    <a href="#about" class="accordion-link">
                                        About Us
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <a class="accordion-link without-icon" href="#contactForm">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Responsive Navbar Area -->


    <!-- Start Clgun Banner 2 Area -->
    <div class="banner-area-2 big-bg-2">
        <!-- Background Video -->
        <video autoplay muted loop playsinline class="bg-video">
            <source src="{{ asset('assets/images/video.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <div class="container">
            <div class="banner-content-2">
                <div class="content">
                    <span data-aos="fade-zoom-in" data-aos-delay="300">Leading Global Specialist in Creative Media
                        Education</span>
                    <h1 data-aos="fade-up" data-aos-delay="200" style="font-size: 100px">SAE Institue</h1>
                    <p data-aos="fade-up" data-aos-delay="300">
                        YOUR CREATIVE CAREER BEGINS NOW
                    </p>
                    <div class="buttons-action" data-aos="fade-up" data-aos-delay="100">
                        <a class="default-btn" href="#contactForm">Contact Us</a>
                    </div>

                    <div class="scroll-down" data-aos="fade-down" data-aos-delay="100">
                        <a href="#about"><i class='bx bx-chevron-down'></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Clgun Banner 2 Area -->


    <!-- Start Faculty Area 2 -->
    <div class="faculty-area-2 ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="heading" data-aos="fade-up" data-aos-delay="100">
                        <h2>47 Campuses Globally</h2>
                    </div>
                </div>
                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                    <div class="content">
                        <p style="font-size:22px ">SAE Gives You World Access
                            SAE has around 47 campuses in 23 countries. Our students and teachers are a unique, diverse,
                            and creative community who come together for a collective purpose – outstanding education
                            opportunities.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Faculty Area 2 -->
    <!-- Start Contact  Area-->




    <section>
    @livewire('english')
    </section>
    <!-- End Contact Area-->





    <!-- Start About Us Area 2 -->
    <div id="about" class="about-us-area-2 ptb-100">
        <div class="container">
            <div class="section-title" data-aos="fade-up" data-aos-delay="100">
                <h2>Why SAE</h2>
                <p style="font-size: 14px;">
                    SAE has been delivering outstanding industry-focused education since 1976. We have set the benchmark
                    for Higher Education in Creative Media because we know these industries and how to train
                    industry-ready graduates.
                    We love what we do and are committed to the provision of education options that challenge, develop,
                    and inspire.
                <p>
            </div>
            <div class="about-content-courser owl-carousel owl-theme">
                <div class="content-items" data-dot="<button>01</button>">
                    <div class="image ct-bg-1" data-aos="fade-zoom-in" data-aos-delay="100"
                        style="background-image: url('{{ asset('assets/images/game.png') }}');">
                    </div>
                    <div class="content" data-aos="fade-up" data-aos-delay="200">
                        <h2>SAE EQUIPS YOU FOR SUCCESS</h2>
                        <p>We are the world’s leading educator in creative industries because we work closely with our
                            industry partners, we employ specialist teachers with real-world experience, and we deliver
                            personalised education in world-class facilities.
                            Our specialised courses in creative media are responsive to the dynamic and evolving nature
                            of these industries. We keep our finger on the pulse and think outside the square to help
                            you reach your potential and realise your dreams</p>
                    </div>
                </div>
                <div class="content-items" data-dot="<button>02</button>">
                    <div class="image ct-bg-2" data-aos="fade-zoom-in" data-aos-delay="100"
                        style="background-image: url('{{ asset('assets/images/audio.png') }}') ">
                    </div>
                    <div class="content" data-aos="fade-up" data-aos-delay="200">
                        <h2>SAE GIVES YOU WORLD ACCESS</h2>
                        <p>SAE has around 47 campuses in 23 countries. Our students and teachers are a unique, diverse,
                            and creative community who come together for a collective purpose – outstanding education
                            opportunities. Our expertise is world-recognised and truly global.</p>
                    </div>
                </div>
                <div class="content-items" data-dot="<button>03</button>">
                    <div class="image ct-bg-3" data-aos="fade-zoom-in" data-aos-delay="100"
                        style=" background-image: url('{{ asset('assets/images/film.png') }}'); ">
                    </div>
                    <div class="content" data-aos="fade-up" data-aos-delay="200">
                        <h2>SAE EXPOSES YOU TO THE REAL WORLD</h2>
                        <p>At SAE, we know creative media industry graduates need individual practical training. We
                            recognised this back in 1976 – that’s why we pioneered our hands-on, industry-focused, and
                            personalised curriculum, delivered to you in state-of-the-art facilities.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End About Us Area 2 -->


    <!-- Start Footer Area -->
    <div class="footer-area">

        <div class="copy-right-area style-2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="cpr-left">
                            <p>Copyright© <a href="#">SAE Institue</a>, All rights reserved.</p>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="cpr-right">
                            <ul>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Cookie Policy</a></li>
                            </ul>
                            <ul class="social-list">
                                <li><a href="#"><i class='bx bxl-facebook'></i></a></li>
                                <li><a href="#"><i class='bx bxl-instagram-alt'></i></a></li>
                                <li><a href="#"><i class='bx bxl-twitter'></i></a></li>
                                <li><a href="#"><i class='bx bxl-linkedin-square'></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Area -->

    <div class="go-top active">
        <i class="bx bx-up-arrow-alt"></i>
    </div>
    @if(session('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Success!',
        text: "{{ session('success') }}",
        timer: 3000,
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
    <!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

</body>

</html>
