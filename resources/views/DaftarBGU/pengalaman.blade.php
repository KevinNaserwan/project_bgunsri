<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Bujang Gadis Unsri 2023</title>
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
                    <li><a href="/" class="active">Beranda</a></li>
                    <li><a href="/">Sejarah</a></li>
                    <li><a href="/">Pendaftaran</a></li>
                    <li><a href="/">Kontak</a></li>
                    <li><a href="#">E-Voting</a></li>
                    <li><a class="get-a-quote" href="/logout">Logout</a></li>
                </ul>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
    <!-- End Header -->

    <main id="main">
        <!-- ======= About Us Section ======= -->
        <section id="about" class="about pt-5">
            <div class="container img" data-aos="fade-up">

                <div class="row my-auto">
                    <div class="col-lg-6 content order-last  order-lg-last mx-auto">
                        <img src="assets/img/register.svg" class="img-fluid pt-4 pb-5"
                            style="display:block; margin:auto;" alt="">
                        <h2>Pengalaman</h2>
                        <button id="tambah-sekolah" class="btn btn-primary btn-block my-4">Tambah Pengalaman</button>
                        <form action="/postregist4/{{Session('nim')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <div id="sekolah-container">
                                <div class="sekolah">
                                    <div class="row mb-4">
                                        <div class="col">
                                            <div class="form-outline">
                                                <label class="form-label text-warning" for="nama_organisasi">Nama
                                                    Organisasi</label>
                                                <input type="text" name="nama_organisasi[]" id="nama_organisasi"
                                                    class="form-control" placeholder="Masukkan Nama Organisasi Anda ...."
                                                    required />
                                                <p class=" py-2 text-warning">* Contoh : OSIS SMAN 03 Prabumulih</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col">
                                            <div class="form-outline">
                                                <label class="form-label text-warning" for="jabatan">Jabatan</label>
                                                <input type="text" name="jabatan[]" id="jabatan"
                                                    class="form-control" placeholder="Masukkan Jabatan Anda ...." />
                                                <p class=" py-2 text-warning">* Contoh : Ketua OSIS</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col">
                                            <div class="form-outline">
                                                <label class="form-label text-warning" for="periode">Periode</label>
                                                <input type="text" name="periode[]" id="periode"
                                                    class="form-control" placeholder="Masukkan Tahun Periode ...." />
                                                <p class=" py-2 text-warning">* Contoh : 2018/2019</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Checkbox -->
                            <div class=" d-flex justify-content-between">
                                <div class="form-check d-flex mb-4">
                                    <input class="form-check-input me-2" type="checkbox" id="showPassword"
                                        required />
                                    <label class="form-check-label" for="showPassword">
                                        Pastikan Data Yang Anda Isi Sudah Benar
                                    </label>
                                </div>
                            </div>
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4">Selanjutnya</button>
                        </form>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="container mt-4">
            <div class=" d-flex justify-content-center py-3">
                <img src="assets/img/logo.svg" alt="">
            </div>
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
    <script>
        // Fungsi untuk menambahkan div "sekolah" baru di awal kontainer
        function tambahSekolah() {
            var container = document.getElementById("sekolah-container");

            // Buat div baru dengan class "sekolah"
            var divBaru = document.createElement("div");
            divBaru.classList.add("sekolah");

            // Isi div baru sesuai dengan yang sudah Anda definisikan
            divBaru.innerHTML = `
            <div class="row mb-4">
                                        <div class="col">
                                            <div class="form-outline">
                                                <label class="form-label text-warning" for="nama_organisasi">Nama
                                                    Organisasi</label>
                                                <input type="text" name="nama_organisasi[]" id="nama_organisasi"
                                                    class="form-control" placeholder="Masukkan Nama Organisasi Anda ...."
                                                    required />
                                                <p class=" py-2 text-warning">* Contoh : OSIS SMAN 03 Prabumulih</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col">
                                            <div class="form-outline">
                                                <label class="form-label text-warning" for="jabatan">Jabatan</label>
                                                <input type="text" name="jabatan[]" id="jabatan"
                                                    class="form-control" placeholder="Masukkan Jabatan Anda ...." />
                                                <p class=" py-2 text-warning">* Contoh : Ketua OSIS</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col">
                                            <div class="form-outline">
                                                <label class="form-label text-warning" for="periode">Periode</label>
                                                <input type="text" name="periode[]" id="periode"
                                                    class="form-control" placeholder="Masukkan Tahun Periode ...." />
                                                <p class=" py-2 text-warning">* Contoh : 2018/2019</p>
                                            </div>
                                        </div>
                                    </div>
            `;

            // Sisipkan div baru di awal kontainer (di atas div yang sudah ada)
            container.insertBefore(divBaru, container.firstChild);
        }

        // Event listener untuk tombol "Tambah Sekolah"
        var tombolTambah = document.getElementById("tambah-sekolah");
        tombolTambah.addEventListener("click", tambahSekolah);
    </script>
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    @include('sweetalert::alert')
</body>

</html>
