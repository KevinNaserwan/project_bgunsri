<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Bujang Gadis Unsri</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('assets/img/logo.svg')}}" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Logis
  * Updated: Aug 30 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="assets/img/logo1.png" alt="">
                {{-- <h1>Logis</h1> --}}
            </a>

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="#hero" class="active">Beranda</a></li>
                    <li><a href="#about">Sejarah</a></li>
                    <li><a href="#service">Pendaftaran</a></li>
                    <li><a href="#testimonials">Kontak</a></li>
                    <li><a href="#">E-Voting</a></li>
                    <li><a class="get-a-quote" href="/login">Login</a></li>
                </ul>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row gy-4 d-flex justify-content-between">
                <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                    <img src="assets/img/Hero-img2.svg" class="img-fluid mb-3 mb-lg-0" alt="">
                </div>
                <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                    <img src="assets/img/Hero-img1.svg" class="img-fluid mb-3 mb-lg-0" alt="">
                </div>
            </div>
        </div>
    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services">
            {{-- <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up">
                        <div class="icon flex-shrink-0"><i class="fa-solid fa-cart-flatbed"></i></div>
                        <div>
                            <h4 class="title">Lorem Ipsum</h4>
                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                                excepturi sint occaecati cupiditate non provident</p>
                            <a href="service-details.html" class="readmore stretched-link"><span>Learn More</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon flex-shrink-0"><i class="fa-solid fa-truck"></i></div>
                        <div>
                            <h4 class="title">Dolor Sitema</h4>
                            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat tarad limino ata</p>
                            <a href="service-details.html" class="readmore stretched-link"><span>Learn More</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon flex-shrink-0"><i class="fa-solid fa-truck-ramp-box"></i></div>
                        <div>
                            <h4 class="title">Sed ut perspiciatis</h4>
                            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur</p>
                            <a href="service-details.html" class="readmore stretched-link"><span>Learn More</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div> --}}
        </section><!-- End Featured Services Section -->

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about pt-0">
            <div class="container img" data-aos="fade-up">

                <div class="row my-auto">
                    <div class="col-lg-6 content order-last  order-lg-last">
                        <img src="assets/img/judul-sejarah.svg" class="img-fluid pt-4" alt="">
                        <ul data-aos="fade-up" data-aos-delay="200">
                            <li>
                                <div>
                                    <p>Ikatan Bujang Gadis Universitas Sriwijaya merupakan organisasi yang berada di tingkat
                                        Universitas yang didirikan pada tnggal 21 Januari 2016. Organisasi ini digagasi oleh anggota
                                        Bujang Gadis Universitas Sriwijaya tahun 2015.
                                       Musyawarah besar pertama diadakan pada tanggal 24 Januari 2014 dengan hasil Terpilihnya
                                       M.
                                       Satrian Duva Dama sebagai ketua umum.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <p>Pada tahun 2013 sempat diadakan Pemilihan Bujang
                                        Gadis Unsri pertama dalam rangkaian Dies Natalis Unsri. Lalu, pada tahun 2014 Pemilihan
                                       Bujang Gadis Unsri ditiadakan karena hanya diadakan 2 tahun sekali. Kemudian diadakan
                                       kembali pada tahun 2015 atas kerjasama 3 fakultas (Fakultas Ilmu Komputer, Fakultas Hukum, dan Fakultas Matematika dan Ilmu Pengetahuan Alam).</p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <p>
                                        Berdasarkan keputusan Musyawarah Besar IBGU, Pelaksanaan Pemilihan Bujang Gadis Unsri
                                        diadakan setiap 1 tahun sekali dengan jumlah anggota terpilihnya sebanyak 30 orang. Tercatat
                                        sampai saat ini angota IBGU berjumlah 222 orang dengan total 8 angkatan.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 position-relative align-self-start order-lg-first order-first">
                        <img src="assets/img/sejarah.svg" class="img-fluid" alt="">
                    </div>
                </div>

            </div>
            <div class="container img2" data-aos="fade-up">

                <div class="row my-auto">
                    <div class="col-lg-6 content order-last  order-lg-last">
                        <img src="assets/img/judul-tema.svg" class="img-fluid pt-4" alt="">
                        <ul data-aos="fade-up" data-aos-delay="200">
                            <li>
                                <div>
                                    <p class=" text-center">“Enormous Legacy of Bumi Rajo Cindo” merupakan kata serapan bahasa daerah Sumatera Selatan.
                                        “Bumi Rajo Cindo” Berarti “Wilayah yang memiliki Raja dengan kinerja yang Bagus”. Mengambil makna sejarah Raja Balaputradewa yang memiliki kinerja pengendalian
                                        kekuasaan yang luar bisa hingga dapat menguasai dunia. berpusat di Provinsi Sumatera Selatan,
                                        Indonesia.
                                        “Enormous Legacy of Bumi Rajo Cindo” memiliki makna sebagai “Peninggalan Budaya yang
                                        Melimpah di Bumi Sumatera Selatan”
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <p>Jika ditarik dari sejarahnya, Kerajaan Sriwijaya pada masa kejayaannya pernah menjadi kerajaan
                                        terluas di dunia. hal ini mendorong terciptanya Seni dan Budaya di setiap daerah yang beragam
                                        serta Akulturasi Budaya, termasuk di Bumi Sriwijaya, Sumatera Selatan.
                                        Melalui tema tersebut, Ikatan Bujang Gadis Universitas Sriwijaya memiliki tujuan untuk
                                        memperkenalkan Seni dan Budaya Daerah di Provinsi Sumatera Selatan dalam upaya pelestarian
                                         budaya daerah sebagai wujud Abdi Duta Pendidikan Universitas Sriwijaya.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 position-relative align-self-start order-lg-first order-first">
                        <img src="assets/img/logo-tema.svg" class="img-fluid" alt="">
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Services Section ======= -->
        <section id="service" class="services pt-0">
            <img src="assets/img/motif-1.svg" class="img-fluid mb-3 mb-lg-0" alt="">
            <div class="container" data-aos="fade-up">
                <div class="row gy-4">

                    <div class="col-lg-12 py-5" data-aos="fade-up" data-aos-delay="100">
                        <img src="assets/img/daftar.svg" alt="" class="img-fluid">
                    </div><!-- End Card Item -->
                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Call To Action Section ======= -->
        <section id="call-to-action" class="call-to-action">
            <div class="container" data-aos="zoom-out">

                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h3>Daftar Dibawah Sini</h3>
                        <a class="cta-btn" href="/register">Daftar Sekarang</a>
                    </div>
                </div>

            </div>
        </section><!-- End Call To Action Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <img src="assets/img/waktu.svg" class="img-fluid" alt="">
            <div class="container">

                <div class="row gy-4 align-items-center features-item" data-aos="fade-up">

                    <div class="col-md-12">
                        {{-- <img src="assets/img/waktu.svg" class="img-fluid" alt=""> --}}
                    </div>
                </div><!-- Features Item -->
            </div>
        </section><!-- End Features Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container">

                <div class="slides-1 swiper" data-aos="fade-up">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/kontak.svg" class="img-fluid" alt="">
                            </div>
                        </div><!-- End testimonial item -->
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <img src="assets/img/logo1.png" alt="">
                    </a>
                    <div class="social-links d-flex mt-4">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container mt-4">
            <div class="copyright">
                &copy; Copyright <strong><span>Bujang Gadis Unsri</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/ -->
                Designed by <a href="">Meet.id Developer</a>
            </div>
        </div>

    </footer><!-- End Footer -->
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    @include('sweetalert::alert')

</body>

</html>
