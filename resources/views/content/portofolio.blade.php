<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Arre Technology</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
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
    <div class="container-fluid topbar bg-light px-5 py-2 d-none d-lg-block">
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
    </div>
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
                    <a href="/beranda" class="nav-item nav-link text-dark">Beranda</a>
                    <a href="#tentang" class="nav-item nav-link text-dark">Tentang</a>
                    <a href="#layanan" class="nav-item nav-link text-dark">Layanan</a>
                    <a href="#daftar" class="nav-item nav-link active">Portofolio</a>
                    <a href="#kontak" class="nav-item nav-link text-dark">Kontak</a>
                </div>
                <a href="/login" class="btn btn-primary rounded-pill py-2 px-4 my-3 my-lg-0 shrink-0">LOGIN</a>
            </div>
        </nav>

        <!-- Carousel Start -->
        <div id="beranda" class="header-carousel owl-carousel">
            <div class="header-carousel-item">
                <img src="/assets/img/bg1.jpg" class="img-fluid w-100" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row gy-0 gx-5">
                            <div class="col-lg-0 col-xl-5"></div>
                            <div class="col-xl-7 animated fadeInLeft">
                                <div class="text-sm-center text-md-end">
                                    <h4 class="text-primary text-uppercase fw-bold mb-4">Selamat Datang di website kami
                                    </h4>
                                    <h1 class="display-4 text-uppercase text-white mb-4">Jasa Pembuatan Website Di
                                        Blitar</h1>
                                    <p class="mb-5 fs-5"><b>Arre Technology</b> Solutions For Your Websites
                                    </p>
                                    <div class="d-flex justify-content-center justify-content-md-end shrink-0 mb-4">
                                        <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2"
                                            href="#">Selengkapnya</a>
                                    </div>
                                    <div
                                        class="d-flex align-items-center justify-content-center justify-content-md-end">
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
            <div class="header-carousel-item">
                <img src="/assets/img/bg2.jpg" class="img-fluid w-100" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row g-5">
                            <div class="col-12 animated fadeInUp">
                                <div class="text-center">
                                    <h4 class="text-primary text-uppercase fw-bold mb-4">Selamat Datang di website kami
                                    </h4>
                                    <h1 class="display-4 text-uppercase text-white mb-4">Jasa Pembuatan Website Di
                                        Blitar</h1>
                                    <p class="mb-5 fs-5"><b>Arre Technology</b> Solutions For Your Websites
                                    </p>
                                    <div class="d-flex justify-content-center shrink-0 mb-4">
                                        <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2"
                                            href="#">Selengkapnya</a>
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
    <div id="tentang" class="container-fluid about py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="bg-primary rounded position-relative overflow-hidden">
                        <img src="/assets/img/Projections-bro.svg" class="img-fluid rounded w-100" alt="">
                    </div>
                </div>
                <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                    <div>
                        <h4 class="text-primary">Portofolio</h4>
                        <h1 class="display-5 mb-4">Project</h1>
                        <p class="mb-4">Halaman Portofolio Project, pengguna akan melihat daftar seluruh project yang
                            telah
                            ditambahkan sebelumnya. Informasi ditampilkan dalam bentuk card yang rapi dan responsif,
                            memudahkan pengguna untuk memantau project dengan jelas.
                        </p>
                        <div class="row g-4">
                            <div class="col-md-6 col-lg-6 col-xl-6">
                                <div class="d-flex">
                                    <div><i class="fas fa-map-marker-alt fa-3x text-primary"></i></div>
                                    <div class="ms-4">
                                        <h4>Datangi kami</h4>
                                        <p>Jl.
                                            Suryat No.83, Gedog,
                                            Kec. Sananwetan, Kota Blitar,
                                            Jawa Timur 66132</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-6">
                                <div class="d-flex">
                                    <i class="fas fa-phone-alt fa-2x text-primary me-4"></i>
                                    <div>
                                        <h4>Hubungi Kami</h4>
                                        <p class="mb-0 fs-5" style="letter-spacing: 1px;">0822-3131-6699</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End detail-->
    <hr>

    <!-- Portofolio Start -->
    <div id="daftar" class="container-fluid service pb-5">
        <div class="container pb-5">
            <div class="text-start mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s">
                <h1 class="display-5 my-3 text-primary">Daftar Project</h1>
                <h4>Berikut daftar project dari kami :</h4>
            </div>
            <div class="row g-5 text-start mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s">
                @foreach ($project as $key => $item)
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{ asset('image/' . $item->image) }}" class="img-fluid card-img-fixed w-100"
                                    alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="/portofolio/detail/{{$item->id}}#portofolio"
                                    class="h4 d-inline-block mb-4">{{ $item->nama_project }}</a><br>
                                <p class="mb-4">{{ Str::limit($item->deskripsi_project, '50') }}</p>
                                <hr>
                                <a href="/portofolio/detail/{{$item->id}}#portofolio" class="btn btn-primary me-2"
                                    type="button">Detail</a>
                                <a href="{{ $item->link_project }}" target="_blank" class="btn btn-warning" type="button">Preview</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Portofolio End -->

    <!-- brand -->
    <section id="clients" class="clients section-bg mb-5 mt-5">
        <div class="container">
            <div class="row aos-init aos-animate" data-aos="zoom-in">
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="/assets/img/cyber.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="/assets/img/client-2.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="/assets/img/client-3.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="/assets/img/client-4.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="/assets/img/client-5.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="/assets/img/client-6.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- end-brand -->

    <!-- Footer Start -->
    <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
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
    <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/lib/lightbox/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>


    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>