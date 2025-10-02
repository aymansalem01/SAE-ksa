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
                            <a href="" class=" nav-link ">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class=" nav-link  ">
                                Contact Form
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class=" nav-link  ">
                                About Us
                            </a>
                        </li>
                    </ul>
                    <div class="others-option d-flex align-items-center">
                        <div class="option-item">
                            <div class="nav-btn">
                                <a href="contact-us.html" class="default-btn">Contact Us</a>
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
                                    <a href="" class="accordion-link">
                                        About Us
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <a class="accordion-link without-icon" href="contact-us.html">
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
                    <span data-aos="fade-zoom-in" data-aos-delay="300">The Best University of The State</span>
                    <h1 data-aos="fade-up" data-aos-delay="200">SAE Institue</h1>
                    <p data-aos="fade-up" data-aos-delay="300">
                        YOUR CREATIVE CAREER BEGINS NOW
                    </p>
                    <div class="buttons-action" data-aos="fade-up" data-aos-delay="100">
                        <a class="default-btn" href="">Connect with Us</a>
                    </div>

                    <div class="scroll-down" data-aos="fade-down" data-aos-delay="100">
                        <a href="#about"><i class='bx bx-chevron-down'></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Clgun Banner 2 Area -->



    <!-- Start Contact  Area-->
    <div class="contact-area ptb-100">
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="contact-form col-8">
                    <form id="contactForm" action="{{ route('submission') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="name">First Name</label>
                                    <input type="text" name="first_name" class="form-control" id="name"
                                        required data-error="Please enter your name" placeholder="First Name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="name">Last Name</label>
                                    <input type="text" name="last_name" class="form-control" id="name2"
                                        required data-error="Please enter your name" placeholder=" last name ">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="name">Email</label>
                                    <input type="email" name="email" class="form-control" id="email"
                                        required data-error="Please enter your email"
                                        placeholder="exampl@example.com">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="name">Phone</label>
                                    <input type="text" name="phone_number" class="form-control" id="phone_number"
                                        required data-error="Please enter your phone number" placeholder="966xxxxxxx">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>


                            <div class="form-group col-6 ">
                                <label for="name">Study plan</label>
                                <select class="form-select" aria-label="Default select example" name="category">
                                    <option selected>Select study plan</option>
                                    <option value="1">Diploma(1-2 years)</option>
                                    <option value="2">short course </option>
                                    <option value="3">all of them</option>
                                </select>
                            </div>
                            <div class="form-group col-6">
                                <label for="course">Select Your Course</label>
                                <select id="course" name="course[]" class="form-select" multiple>
                                    <option value="1">Course 1</option>
                                    <option value="2">Course 2</option>
                                    <option value="3">Course 3</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">Select Your City </label>
                                    <select class="form-select" name="city" aria-label="Default select example">
                                        <option selected>Select your city</option>
                                        <option value="1">Jeddah</option>
                                        <option value="2">Riyadh </option>
                                        <option value="3">other</option>
                                    </select>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label for="name">Any comment</label>
                                        <textarea name="message" id="message" class="form-control" cols="30" rows="6" required
                                            data-error="Please enter your message" placeholder=""></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn">Submit Now</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    </div>
    </div>
    </div>

    <!-- End Contact Area-->





    <!-- Start About Us Area 2 -->
    <div id="about" class="about-us-area-2 ptb-100">
        <div class="container">
            <div class="section-title" data-aos="fade-up" data-aos-delay="100">
                <h2>About Our University</h2>
                <p>Only when different values, experiences and perspectives are met with free and open discourse can
                    education be truly transformative..</p>
            </div>
            <div class="about-content-courser owl-carousel owl-theme">
                <div class="content-items" data-dot="<button>01</button>">
                    <div class="image ct-bg-1" data-aos="fade-zoom-in" data-aos-delay="100"
                        style="background-image: url('{{ asset('assets/images/game.png') }}');">
                    </div>
                    <div class="content" data-aos="fade-up" data-aos-delay="200">
                        <span>Campus Information</span>
                        <h2>Where Knowledge Meets Innovation</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusm tem incid idunt ut
                            labore et dolore magna aliqua. Ut enim ad minim iam quis nostrud xerci tation ulla mco
                            laboris nisi ut</p>
                        <a class="default-btn" href="schedule-tour.html">Schedule A Tour</a>
                    </div>
                </div>
                <div class="content-items" data-dot="<button>02</button>">
                    <div class="image ct-bg-2" data-aos="fade-zoom-in" data-aos-delay="100"
                        style="background-image: url('{{ asset('assets/images/audio.png') }}') ">
                    </div>
                    <div class="content" data-aos="fade-up" data-aos-delay="200">
                        <span>Campus Information</span>
                        <h2>Where Knowledge Meets Innovation</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusm tem incid idunt ut
                            labore et dolore magna aliqua. Ut enim ad minim iam quis nostrud xerci tation ulla mco
                            laboris nisi ut</p>
                        <a class="default-btn" href="schedule-tour.html">Schedule A Tour</a>
                    </div>
                </div>
                <div class="content-items" data-dot="<button>03</button>">
                    <div class="image ct-bg-3" data-aos="fade-zoom-in" data-aos-delay="100"
                        style=" background-image: url('{{ asset('assets/images/film.png') }}'); ">
                    </div>
                    <div class="content" data-aos="fade-up" data-aos-delay="200">
                        <span>Campus Information</span>
                        <h2>Where Knowledge Meets Innovation</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusm tem incid idunt ut
                            labore et dolore magna aliqua. Ut enim ad minim iam quis nostrud xerci tation ulla mco
                            laboris nisi ut</p>
                        <a class="default-btn" href="schedule-tour.html">Schedule A Tour</a>
                    </div>
                </div>
                <div class="content-items" data-dot="<button>04</button>">
                    <div class="image " data-aos="fade-zoom-in" data-aos-delay="100"
                        style="background-image: url('{{ asset('assets/images/design.png') }}')">
                    </div>
                    <div class="content" data-aos="fade-up" data-aos-delay="200">
                        <span>Campus Information</span>
                        <h2>Where Knowledge Meets Innovation</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusm tem incid idunt ut
                            labore et dolore magna aliqua. Ut enim ad minim iam quis nostrud xerci tation ulla mco
                            laboris nisi ut</p>
                        <a class="default-btn" href="schedule-tour.html">Schedule A Tour</a>
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

    <!-- Links of JS files -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#course').select2({
                placeholder: "You can select more than one course",
                allowClear: true,
                width: '100%',
            });
        });
    </script>
</body>

</html>
