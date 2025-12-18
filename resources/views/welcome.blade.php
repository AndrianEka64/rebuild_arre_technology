<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Arre Technology</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="shortcut icon" href="{{ asset('assets/img/icon.png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
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
                    <a href="https://maps.app.goo.gl/zn1FuUMLmGJjffLt7" class="text-muted small me-4"><i
                            class="fas fa-map-marker-alt text-primary me-2"></i>Jl.
                        Suryat No.83, Gedog,
                        Kec. Sananwetan, Kota Blitar,
                        Jawa Timur 66132</a>
                    <a href="https://wa.me/6282231316699" class="text-muted small me-4"><i
                            class="fas fa-phone-alt text-primary me-2"></i>0822-3131-6699</a>
                    <a href="#" class="text-muted small me-0"><i
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
                <img src="assets/img/logo-ws.png" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0 ">
                    <a href="#beranda" class="nav-item nav-link active">Beranda</a>
                    <a href="#tentang" class="nav-item nav-link text-dark">Tentang</a>
                    <a href="#layanan" class="nav-item nav-link text-dark">Layanan</a>
                    <a href="#portofolio" class="nav-item nav-link text-dark">Portofolio</a>
                    <a href="#kontak" class="nav-item nav-link text-dark">Kontak</a>
                </div>
            </div>
        </nav>

        <!-- Carousel Start -->
        <div id="beranda" class="header-carousel owl-carousel">
            <div class="header-carousel-item">
                <img src="assets/img/bg1.jpg" class="img-fluid w-100" alt="Image">
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
                <img src="assets/img/bg2.jpg" class="img-fluid w-100" alt="Image">
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


    <!-- Abvout Start -->
    <div id="tentang" class="container-fluid about py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                    <div>
                        <h4 class="text-primary">Tentang</h4>
                        <h1 class="display-5 mb-4">Arre Technology</h1>
                        <p class="mb-4">adalah perusahaan swasta pengembang software terkemuka di Indonesia, khususnya
                            di Blitar, Jawa Timur. Layanan kami meliputi pengembangan pengembangan situs web,
                            maintenance, dan banyak lagi. Kami memberikan solusi untuk membantu perusahaan atau bisnis
                            Anda semakin berkembang. Klien kami adalah pemerintah, perusahaan, perusahaan luar negeri
                            dan multinasional.
                        </p>
                        <div class="row g-4">
                            <div class="col-md-6 col-lg-6 col-xl-6">
                                <div class="d-flex">
                                    <div><i class="fas fa-map-marker-alt fa-3x text-primary"></i></div>
                                    <div class="ms-4">
                                        <a href="https://maps.app.goo.gl/PEyCQfmrvP3v1oc67" target="_blank">
                                            <h4>Datangi Kami</h4>
                                        </a>
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
                                        <a href="https://wa.me/6282231316699" target="_blank">
                                            <h4>Hubungi Kami</h4>
                                        </a>
                                        <p class="mb-0 fs-5" style="letter-spacing: 1px;">0822-3131-6699</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                    <img src="assets/img/Programming.png" class="img-fluid rounded w-100" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Services Start -->
    <div id="layanan" class="container-fluid service pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Layanan</h4>
                <h1 class="display-6 mb-4">Kami akan memberikan layanan terbaik</h1>
                <p class="mb-0">Arre Technology menawarkan berbagai layanan terbaik yang diformulasikan untuk menjawab
                    kebutuhan Anda akan teknologi dan digitalisasi produk. Meski begitu, kami paham bahwa setiap produk
                    memiliki DNAnya sendiri. Maka, jangan ragu untuk menghubungi kami dan konsultasikan produk Anda.
                </p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item h-100">
                        <div class="service-img">
                            <img src="assets/img/mvp.webp" class="img-fluid rounded-top w-100 card-img-fixed"
                                alt="Image">
                        </div>
                        <div class="rounded-bottom p-4">
                            <a href="#" class="h4 d-inline-block mb-4">MVP Development</a>
                            <p class="mb-4">Ketahui peluang bisnis dari
                                setiap ide dan gagasan
                                dengan
                                mengembangkan produk MVP. Bangun produk MVP bersama kami, dan temukan jawaban
                                dari
                                setiap peluang bisnis di pasar digital saat ini.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item h-100">
                        <div class="service-img">
                            <img src="assets/img/web.jpg" class="img-fluid rounded-top w-100 card-img-fixed"
                                alt="Image">
                        </div>
                        <div class="rounded-bottom p-4">
                            <a href="#" class="h4 d-inline-block mb-4">Website Development</a>
                            <p class="mb-4">Dengan tim developer yang berpengalaman, kami selalu mempertimbangkan
                                relevansi teknologi dengan kebutuhan setiap bisnis. Kami pastikan website yang dibangun
                                tidak hanya cepat, namun juga SEO friendly serta mudah digunakan.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item h-100">
                        <div class="service-img">
                            <img src="assets/img/mobile-app.webp" class="img-fluid rounded-top w-100 card-img-fixed"
                                alt="Image">
                        </div>
                        <div class="rounded-bottom p-4">
                            <a href="#" class="h4 d-inline-block mb-4">Mobile App Development</a>
                            <p class="mb-4">Pengembangan aplikasi mobile yang mudah digunakan membantu berbagai
                                start-up dan perusahaan untuk mendefinisikan kembali pengalaman pengguna seluler.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item h-100">
                        <div class="service-img">
                            <img src="assets/img/ui-ux.webp" class="img-fluid rounded-top w-100 card-img-fixed"
                                alt="Image">
                        </div>
                        <div class="rounded-bottom p-4">
                            <a href="#" class="h4 d-inline-block mb-4">UI/UX Design</a>
                            <p class="mb-4">Layanan ini adalah untuk
                                Anda yang sepakat bahwa
                                komunikasi
                                visual merupakan satu hal yang cukup krusial dalam menyampaikan pesan, visi, dan
                                misi
                                perusahaan Anda. Konversi tindakan user ditentukan oleh baik tidaknya pengalaman
                                mereka
                                menggunakan produk Anda.

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item h-100">
                        <div class="service-img">
                            <img src="assets/img/csd2.png" class="img-fluid rounded-top w-100 card-img-fixed"
                                alt="Image">
                        </div>
                        <div class="rounded-bottom p-4">
                            <a href="#" class="h4 d-inline-block mb-4">Custom Software Development</a>
                            <p class="mb-4">Percepat laju bisnis dengan membangun platform digital yang tepat dan sesuai
                                kebutuhan bisnis perusahaan.
                                Efektifkan serta efisiensikan setiap proses bisnis agar menjadi lebih mudah dan cepat.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item h-100">
                        <div class="service-img">
                            <img src="assets/img/Wireframe.avif" class="img-fluid rounded-top w-100 card-img-fixed"
                                alt="Image">
                        </div>
                        <div class="rounded-bottom p-4">
                            <a href="#" class="h4 d-inline-block mb-4">Specification Document & Wireframe</a>
                            <p class="mb-4">Ketahui setiap kebutuhan platform digital yang akan dibangun, seperti jumlah
                                resource, teknologi, biaya, hingga timeline pengerjaan dengan Specification Document &
                                Wireframe
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->

    <!-- Portofolio Start -->
    <div id="portofolio" class="service pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Portofolio</h4>
                <h1 class="display-5 mb-4">Project</h1>
                <p class="mb-0"> Kami telah membuat project dengan klien kami.
                </p>
            </div>
            <div class="row g-5 text-start mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s">
                @foreach ($project as $key => $item)
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item h-100">
                            <div class="service-img">
                                <img src="{{ asset('image/' . json_decode($item->image, true)[0])  }}"
                                    class="img-fluid w-100 card-img-fixed" alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="/portofolio/detail/{{$item->id}}#portofolio"
                                    class="h4 d-inline-block mb-4">{{ $item->nama_project }}</a><br>
                                <p class="mb-4">{{ Str::limit($item->deskripsi_project, '50') }}</p>
                                <hr>
                                <a href="/portofolio/detail/{{$item->id}}#portofolio" class="btn btn-primary me-2"
                                    type="button">Detail</a>
                                <a href="{{ $item->link_project }}" target="_blank" class="btn btn-outline-primary"
                                    type="button">Preview</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <a href="portofolio#daftar" class="btn btn-primary mb-4">Lihat Semua Project </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portofolio End -->

    <!-- brand -->
    <section id="clients" class="clients section-bg pb-5">
        <div class=" pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Clients</h4>
                <h1 class="display-5 mb-4">Clients Kami</h1>
                <p class="mb-0"> Kami telah bekerjasama dengan beberapa klien terbaik.
                </p>
            </div>
            <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row" data-wow-delay="0.2s">
                            <div class="col-lg-3 col-md-5 col-6 d-flex align-items-center justify-content-center mb-5">
                                <img src="assets/img/2.png" class="img-fluid w-75" alt="">
                            </div>
                            <div class="col-lg-3 col-md-5 col-6 d-flex align-items-center justify-content-center mb-5">
                                <img src="assets/img/1.png" class="img-fluid w-75" alt="">
                            </div>
                            <div class="col-lg-3 col-md-5 col-6 d-flex align-items-center justify-content-center mb-5">
                                <img src="assets/img/6.png" class="img-fluid w-75" alt="">
                            </div>
                            <div class="col-lg-3 col-md-5 col-6 d-flex align-items-center justify-content-center mb-5">
                                <img src="assets/img/4.png" class="img-fluid w-75" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-lg-3 col-md-5 col-6 d-flex align-items-center justify-content-center mb-5">
                                <img src="assets/img/8.png" class="img-fluid w-75" alt="">
                            </div>
                            <div class="col-lg-3 col-md-5 col-6 d-flex align-items-center justify-content-center mb-5">
                                <img src="assets/img/7.png" class="img-fluid w-75" alt="">
                            </div>
                            <div class="col-lg-3 col-md-5 col-6 d-flex align-items-center justify-content-center mb-5">
                                <img src="assets/img/3.png" class="img-fluid w-50" alt="">
                            </div>
                            <div class="col-lg-3 col-md-5 col-6 d-flex align-items-center justify-content-center mb-5">
                                <img src="assets/img/5.png" class="img-fluid w-50" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <!-- end-brand -->

    <!-- FAQs Start -->
    <div class="container-fluid faq-section pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">FAQ</h4>
                <h1 class="display-5 mb-4">Pertanyaan yang Sering Diajukan</h1>
                <p class="mb-0">Jika kalian masih bingung mau tanya apa tantang kami, kami akan merekomendasikan
                    pertanyaan yang sering diajukan
                </p>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-lg-7 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="accordion accordion-flush bg-light rounded p-5" id="accordionFlushSection">
                        <div class="accordion-item rounded-top">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed rounded-top" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Apa saja layanan yang disediakan Arre Technology?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">Arre Technology menyediakan layanan pembuatan website, dan
                                    sistem informasi.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Data apa yang diperlukan untuk pengerjaan website?
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">Kami membutuhkan beberapa data berupa profil yang
                                    menunjukkan pemilik website seperti, nama, alamat, nomor telepon, logo, dan
                                    deskripsi lengkap.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Apakah bisa dibuka diberbagai device?
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">Website yang kami kerjakan sudah responsive, sehingga bisa
                                    dibuka diberbagai device seperti smartphone, tablet, dan komputer/desktop.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFour" aria-expanded="false"
                                    aria-controls="flush-collapseFour">
                                    Berapa lama proses pembuatan website?
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">Waktu pengerjaan website tergantung dari tingkat kesulitan
                                    dan jumlah halaman yang dibuat. Kami akan memberikan estimasi waktu pengerjaan
                                    setelah mendapatkan data yang diperlukan.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFive" aria-expanded="false"
                                    aria-controls="flush-collapseFive">
                                    Bagaimana dengan tema website?
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">Kami menyediakan beberapa template website yang bisa dipilih
                                    oleh klien, dan kami juga menerima pembuatan website sesuai dengan keinginan klien.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 wow fadeInRight" data-wow-delay="0.2s">
                    <img src="assets/img/tanya.png" class="img-fluid w-100" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- FAQs End -->


    <!-- Kontak -->
    <div id="kontak" class="container-fluid team pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Kontak</h4>
                <h1 class="display-5 mb-4">Kontak Kami!</h1>
                <p class="mb-0">Bila anda ingin membuat sebuah website/aplikasi segera hubungi kami!
                </p>
            </div>
            <div class="g-3 align-items-center">
                <div class="row wow fadeInLeft" style="border-radius: 20px; background-color: #03254c;"
                    data-wow-delay="0.2s">
                    <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="rounded p-4 text-white">
                            <div class="d-flex m-2">
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="#"><i
                                        class="bi bi-map"></i></i></a>
                                <div>
                                    <h4 class="text-light">Maps :</h4>
                                </div>
                            </div>
                            <div class="ratio ratio-4x3">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.005428388768!2d112.18391077443829!3d-8.100927281029264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78ec7cedba4f57%3A0xb1e2fa66d11fe6a7!2sJl.%20Suryat%20No.89%2C%20Gedog%2C%20Kec.%20Sananwetan%2C%20Kota%20Blitar%2C%20Jawa%20Timur%2066171!5e0!3m2!1sid!2sid!4v1764817752774!5m2!1sid!2sid"
                                    style="border-radius:20px;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="d-flex flex-column mb-3 p-4 text-white">
                            <div class="p-2">
                                <div class="d-flex justify-content-start">
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-3"
                                        href="https://maps.app.goo.gl/zn1FuUMLmGJjffLt7" target="_blank"><i
                                            class="bi bi-geo-alt-fill"></i></a>
                                    <h4 class="text-light">Lokasi :</h4>
                                </div>
                                <p>Jl.Suryat No.83, Gedog,Kec. Sananwetan, Kota Blitar,Jawa Timur 66132</p>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="p-2">
                                        <div class="d-flex justify-content-start">
                                            <a class="btn btn-primary btn-sm-square rounded-circle me-3"
                                                href="https://wa.me/6282231316699" target="_blank"><i
                                                    class="bi bi-telephone-fill"></i></a>
                                            <a href="https://wa.me/6282231316699" target="_blank">
                                                <h4 class="text-light">Telepon/WA :</h4>
                                            </a>
                                        </div>
                                        <p>0822-3131-6699 </p>
                                    </div>
                                    <div class="p-2">
                                        <div class="d-flex justify-content-start">
                                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="#"><i
                                                    class="bi bi-envelope-fill"></i></a>
                                            <h4 class="text-light">Email :</h4>
                                        </div>
                                        <p>reza@dbn.net.id</p>
                                    </div>
                                    <div class="p-2">
                                        <div class="d-flex justify-content-start">
                                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="#"><i
                                                    class="bi bi-browser-edge"></i></a>
                                            <h4 class="text-light">Situs :</h4>
                                        </div>
                                        <p>arre-tech.com</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <img src="/assets/img/halo.png" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Kontak berakhir -->


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
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script> --}}
    <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/lib/lightbox/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>


    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>