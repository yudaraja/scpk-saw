<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }}">
    <title>SCPK - Beasiswa</title>
    <link rel="stylesheet" href="/landing-page/assets/css/style.css">
    <link rel="stylesheet" href="/landing-page/assets/css/fontawesome.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body>
    <!-- ////////////////////////////////////////////////////////////////////////////////////////
                               START SECTION 1 - THE NAVBAR SECTION
/////////////////////////////////////////////////////////////////////////////////////////////-->
    <nav class="navbar navbar-expand-lg navbar-dark menu shadow fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">
             Sistem Cerdas Pendukung Keputusan
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Home</a></li>
                    </li>
                </ul>
                <button type="button" onclick="location.href='{{ url('dashboard') }}'"
                    class="rounded-pill btn-rounded">
                    SCPK - Beasiswa
                    <span>
                        <i class="fas fa-arrow-right"></i>
                    </span>
                </button>
            </div>
        </div>
    </nav>

    <!-- /////////////////////////////////////////////////////////////////////////////////////////////////
                            START SECTION 2 - THE INTRO SECTION
/////////////////////////////////////////////////////////////////////////////////////////////////////-->

    <section id="home" class="intro-section">
        <div class="container">
            <div class="row align-items-center text-white">
                <!-- START THE CONTENT FOR THE INTRO  -->
                <div class="col-md-6 intros text-start">
                    <h1 class="display-2">
                        <span class="display-2--intro">Selamat Datang!</span>
                        <span class="display-2--description lh-base">
                            Sistem Cerdas Pendukung Keputusan penentuan kriteria peserta beasiswa menggunakan metode
                            Simple Additve Weighting (SAW)
                        </span>
                    </h1>
                    <button onclick="location.href='{{ url('dashboard') }}'" type="button" class="rounded-pill btn-rounded">Masuk ke Sistem
                        <span><i class="fas fa-arrow-right"></i></span>
                    </button>
                </div>
                <!-- START THE CONTENT FOR THE VIDEO -->
                <div class="col-md-6 intros text-end">
                    <div class="video-box">
                        <img src="/landing-page/images/arts/intro-section-illustration.png" alt="video illutration"
                            class="img-fluid">
                        <a href="#" class="glightbox position-absolute top-50 start-50 translate-middle">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1"
                d="M0,160L48,176C96,192,192,224,288,208C384,192,480,128,576,133.3C672,139,768,213,864,202.7C960,192,1056,96,1152,74.7C1248,53,1344,107,1392,133.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>

    <!-- //////////////////////////////////////////////////////////////////////////////////////////////
                         START SECTION 4 - THE SERVICES
///////////////////////////////////////////////////////////////////////////////////////////////////-->
    <section id="services" class="services">
        <div class="container">
            <div class="row text-center">
                <h1 class="display-3 fw-bold">SCPK - Beasiswa</h1>
                <div class="heading-line mb-1"></div>
            </div>
            <!-- START THE DESCRIPTION CONTENT  -->
            <div class="row pt-2 pb-2 mt-0 mb-3">
                <div class="col-md-6 border-right">
                    <div class="bg-white p-3">
                        <h2 class="fw-bold text-capitalize text-center">
                            Sistem Cerdas Pendukung Keputusan menggunakan metode Simple Additve Weighting (SAW)
                        </h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bg-white p-4 text-start">
                        <p class="fw-light">
                            Simple Additive Weighting (SAW) merupakan metode
                            penjumlahan terbobot. Konsep dasar Simple Additive
                            Weighting (SAW) adalah mencari penjumlahan terbobot dari
                            rating kinerja pada setiap alternatif pada suatu kriteria.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- START THE CONTENT FOR THE SERVICES  -->
        <div class="container">
            <!-- START THE MARKETING CONTENT  -->
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
                    <div class="services__content">
                        <div class="icon d-block fas fa-paper-plane"></div>
                        <h3 class="display-3--title mt-1">Simple Additve Weighting (SAW)</h3>
                        <p class="lh-lg">
                            Simple Additive Weighting (SAW) merupakan metode
                            penjumlahan terbobot. Konsep dasar Simple Additive
                            Weighting (SAW) adalah mencari penjumlahan terbobot dari
                            rating kinerja pada setiap alternatif pada suatu kriteria.
                        </p>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-end">
                    <div class="services__pic">
                        <img src="/landing-page/images/services/service-1.png" alt="marketing illustration"
                            class="img-fluid">
                    </div>
                </div>
            </div>
            <!-- START THE WEB DEVELOPMENT CONTENT  -->
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-start">
                    <div class="services__pic">
                        <img src="/landing-page/images/services/service-2.png" alt="web development illustration"
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
                    <div class="services__content">
                        <div class="icon d-block fas fa-code"></div>
                        <h3 class="display-3--title mt-1">Laravel</h3>
                        <p class="lh-lg">
                            Sistem ini menggunakan framework laravel. Laravel adalah framework PHP ­open source yang kuat dan mudah dipahami, hal ini mengikuti pola desain model-view-controller. Laravel menggunakan kembali komponen kerja berbeda yang ada untuk membantu dalam penngembangan membuat aplikasi web.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- ///////////////////////////////////////////////////////////////////////////////////////////
                           START SECTION 9 - THE FOOTER
///////////////////////////////////////////////////////////////////////////////////////////////-->
    {{-- <footer class="footer">
        <div class="container">
            <div class="row">
            </div>


            <!-- START THE CONTENT FOR THE CAMPANY INFO -->
            <div class="container mt-5">
                <div class="row text-white justify-content-center mt-3 pb-3">
                    <div class="col-12 col-sm-6 col-lg-6 mx-auto">
                        <h5 class="text-capitalize fw-bold">Kelompok SCPK A-3</h5>
                        <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
                        <p class="lh-lg">
                            Sistem Cerdas Pendukung Keputusan penentuan kriteria beasiswa dengan menggunakan metode
                            Simple Additve Weighting (SAW)
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-2 mb-4 mx-auto">
                        <h5 class="text-capitalize fw-bold">Sistem Pendukung Keputusan</h5>
                        <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
                        <ul class="list-inline campany-list">
                            <li><a href="/dashboard">Masuk</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- START THE COPYRIGHT INFO  -->
            <div class="footer-bottom pt-5 pb-5">
                <div class="container">
                    <div class="row text-center text-white">
                        <div class="col-12">
                            <div class="footer-bottom__copyright">
                                &COPY; Copyright 2021 <a href="#">SCPK A-3</a> | Created by <a
                                    href="http://codewithpatrick.com" target="_blank">Muriungi</a><br><br>

                                Distributed by <a href="http://themewagon.com" target="_blank">ThemeWagon</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </footer> --}}

    <!-- BACK TO TOP BUTTON  -->
    <a href="#" class="shadow btn-primary rounded-circle back-to-top">
        <i class="fas fa-chevron-up"></i>
    </a>




    <script src="/landing-page/assets/vendors/js/glightbox.min.js"></script>

    <script type="text/javascript">
        const lightbox = GLightbox({
            'touchNavigation': true,
            'href': 'https://www.youtube.com/watch?v=J9lS14nM1xg',
            'type': 'video',
            'source': 'youtube', //vimeo, youtube or local
            'width': 900,
            'autoPlayVideos': 'true',
        });
    </script>
    <script src="/landing-page/assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>
