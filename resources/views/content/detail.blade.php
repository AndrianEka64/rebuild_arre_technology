<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Arre Technology</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- Google Web Fonts -->
    <link rel="shortcut icon" href="{{ asset('assets/img/icon.png') }}" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/lib/animate/animate.min.css') }}" />
    <link href="{{ asset('assets/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    {{-- <div class="container-fluid topbar bg-light px-5 py-2 d-none d-lg-block">
        <div class="row gx-0 align-items-center">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-flex flex-wrap">
                    <a href="#" class="text-muted small me-4"><i class="fas fa-map-marker-alt text-primary me-2"></i>Jl.
                        Suryat No.83, Gedog,
                        Kec. Sananwetan, Kota Blitar,
                        Jawa Timur 66132</a>
                    <a href="tel:+01234567890" class="text-muted small me-4"><i
                            class="fas fa-phone-alt text-primary me-2"></i>0822-3131-6699</a>
                    <a href="mailto:example@gmail.com" class="text-muted small me-0"><i
                            class="fas fa-envelope text-primary me-2"></i>reza@dbn.net.id</a>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0 bg-light">
            <a href="" class="navbar-brand p-0">
                <img src="/assets/img/logo-ws.png" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0 ">
                    <a href="/" class="nav-item nav-link text-dark">Beranda</a>
                    <a href="#tentang" class="nav-item nav-link text-dark">Tentang</a>
                    <a href="#layanan" class="nav-item nav-link text-dark">Layanan</a>
                    <a href="#portofolio" class="nav-item nav-link active">Portofolio</a>
                    <a href="#kontak" class="nav-item nav-link text-dark">Kontak</a>
                </div>
            </div>
        </nav>

        <!-- Carousel Start -->
        <div id="beranda" class="header-carousel owl-carousel">
            <div class="header-carousel-item">
                @if(isset(json_decode($project->image, true)[0]))
                    <div class="header-carousel-item">
                        <img src="{{ asset('image/' . json_decode($project->image, true)[0]) }}" class="img-fluid w-100"
                            alt="Image">
                    </div>
                @endif
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row gy-0 gx-5">
                            <div class="col-lg-0 col-xl-5"></div>
                            <div class="col-xl-7 animated fadeInLeft">
                                <div class="text-sm-center text-md-end">
                                    <h4 class="text-primary text-uppercase fw-bold mb-4">Halaman Detail
                                    </h4>
                                    <h1 class="display-4 text-uppercase text-white mb-4">{{ $project->nama_project }}
                                    </h1>
                                    <p class="mb-5 fs-5 ">By :<b> Arre Technology</b>
                                    </p>
                                    <div class="d-flex justify-content-center justify-content-md-end shrink-0 mb-4">
                                        <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2"
                                            href="https://wa.me/6282231316699" target="_blank">Hubungi Kami</a>
                                    </div>
                                    <div
                                        class="d-flex align-items-center justify-content-center justify-content-md-end">
                                        <h2 class="text-white me-2">Ikuti Kami:</h2>
                                        <div class="d-flex justify-content-end ms-2">
                                            <a class="btn btn-md-square btn-light rounded-circle me-2" href=""><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i
                                                    class="fab fa-twitter"></i></a>
                                            <a class="btn btn-md-square btn-light rounded-circle mx-2" href="https://www.instagram.com/arre.tech/" target="_blank"><i
                                                    class="fab fa-instagram"></i></a>
                                            <a class="btn btn-md-square btn-light rounded-circle ms-2" href=""><i
                                                    class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-carousel-item">
                @if(isset(json_decode($project->image, true)[1]))
                    <div class="header-carousel-item">
                        <img src="{{ asset('image/' . json_decode($project->image, true)[1]) }}" class="img-fluid w-100"
                            alt="Image">
                    </div>
                @endif
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row g-5">
                            <div class="col-12 animated fadeInUp">
                                <div class="text-center">
                                    <h4 class="text-primary text-uppercase fw-bold mb-4">Halaman Detail
                                    </h4>
                                    <h1 class="display-4 text-uppercase text-white mb-4">{{ $project->nama_project }}
                                    </h1>
                                    <p class="mb-5 fs-5 ">By :<b> Arre Technology</b>
                                    </p>
                                    <div class="d-flex justify-content-center shrink-0 mb-4">
                                        <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2"
                                            href="https://wa.me/6282231316699" target="_blank">Hubungi Kami</a>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <h2 class="text-white me-2">Ikuti Kami:</h2>
                                        <div class="d-flex justify-content-end ms-2">
                                            <a class="btn btn-md-square btn-light rounded-circle me-2" href=""><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i
                                                    class="fab fa-twitter"></i></a>
                                            <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i
                                                    class="fab fa-instagram"></i></a>
                                            <a class="btn btn-md-square btn-light rounded-circle ms-2" href=""><i
                                                    class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->
    </div>
    <!-- Navbar & Hero End -->

    <!--Content-->
    <div id="portofolio" class="container-fluid about py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="bg-primary rounded position-relative overflow-hidden">
                        {{-- batas carousel --}}
                        @php
                            $images = json_decode($project->image, true);
                        @endphp
                        @if (is_array($images))
                            <div id="carouselExampleRide{{ $project->id }}" class="carousel slide" data-bs-ride="true">
                                <div class="carousel-inner">
                                    @foreach ($images as $index => $img)
                                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                            <img src="{{ asset('image/' . $img) }}" class="img-fluid rounded w-100"
                                                alt="Gambar {{ $index + 1 }}">
                                        </div>
                                    @endforeach
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleRide{{ $project->id }}" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleRide{{ $project->id }}" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        @endif
                        {{-- batas carousel --}}
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div>
                        <h4 class="text-primary">Detail</h4>
                        <h1 class="display-5 mb-4">{{ $project->nama_project }}</h1>
                        <a href="/portofolio#daftar"
                            class="btn btn-primary rounded-pill py-3 px-5 me-2 mb-2">Kembali</a>
                        <a href="{{ $project->link_project }}" target="blank"
                            class="btn btn-outline-primary rounded-pill py-3 px-5 mb-2">Preview</a>
                    </div>
                </div>
                <p class="mb-4" style="white-space: pre-line; text-align: justify;">{{ $project->deskripsi_project }}
                </p>
                <hr>
            </div>
        </div>
    </div>
    <!--End detail-->

    <!-- brand -->
    <section id="clients" class="clients section-bg mb-5">
        <div class="container-fluid" data-aos="zoom-in">
            <div id="carouselClients" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000"
                data-bs-pause="hover">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row align-items-center justify-content-center g-4">
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="client-logo">
                                    <img src="/assets/img/1.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="client-logo">
                                    <img src="/assets/img/2.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="client-logo">
                                    <img src="/assets/img/3.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="client-logo">
                                    <img src="/assets/img/4.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row align-items-center justify-content-center g-4">
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="client-logo">
                                    <img src="/assets/img/5.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="client-logo">
                                    <img src="/assets/img/6.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="client-logo">
                                    <img src="/assets/img/7.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="client-logo">
                                    <img src="/assets/img/8.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselClients"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselClients"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
    </section>

    <!-- end-brand -->

    <!-- Footer Start -->
    <div class="container-fluid footer py-5 wow fadeIn" style="background-color: #03254c" data-wow-delay="0.2s">
        <div class="container py-5 border-start-0 border-end-0"
            style="border: 1px solid; border-color: rgb(255, 255, 255);">
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="footer-item">
                        <a href="index.html" class="p-">
                            <h4 class="text-white"></i>Arre Technology</h4>
                            {{-- <img src="assets/img/logo-ws.png" class="w-50" alt="Logo"> --}}
                        </a>
                        <p class="mb-2">
                            Jl.Suryat No.83, Gedog,Kec. Sananwetan, Kota Blitar,Jawa Timur 66132
                        </p>
                        <div class="d-flex">
                            <b>Phone :</b>0822-3131-6699
                        </div>
                        <div class="d-flex">
                            <b>Email :</b>reza@dbn.net.id
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-2">
                    <div class="footer-item">
                        <h4 class="text-white mb-4">Useful Links</h4>
                        <a href="#beranda"><i class="fas fa-angle-right me-2"></i> Home</a>
                        <a href="#tentang"><i class="fas fa-angle-right me-2"></i> About Us</a>
                        <a href="#layanan"><i class="fas fa-angle-right me-2"></i> Services</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Terms & service</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Privacy policy</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item">
                        <h4 class="text-white mb-4">Our Services</h4>
                        <a href="#layanan"><i class="fas fa-angle-right me-2"></i> Web Design</a>
                        <a href="#layanan"><i class="fas fa-angle-right me-2"></i> Web Development</a>
                        <a href="#layanan"><i class="fas fa-angle-right me-2"></i> Product Management</a>
                        <a href="#layanan"><i class="fas fa-angle-right me-2"></i> Marketing</a>
                        <a href="#layanan"><i class="fas fa-angle-right me-2"></i> Graphic Design</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item">
                        <h4 class="text-white mb-4">Our Social Network</h4>
                        <div class="d-flex">
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="#"><i
                                    class="fab fa-facebook-f text-white"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="#"><i
                                    class="fab fa-twitter text-white"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="#"><i
                                    class="fab fa-instagram text-white"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-0" href="#"><i
                                    class="fab fa-linkedin-in text-white"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6 text-center text-md-start mb-md-0">
                    <span class="text-body"><a href="#" class="border-bottom text-white"><i
                                class="fas fa-copyright text-light me-2"></i>Copyright <b>Arre Technology</b></a>, All
                        right
                        reserved.</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/lib/lightbox/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>


    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>