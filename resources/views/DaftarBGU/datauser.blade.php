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
                        <form action="/postregist" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <h2>Informasi Pribadi</h2>
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label text-warning" for="nama_lengkap">Nama Lengkap</label>
                                        <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control"
                                            placeholder="Masukkan Nama Anda ...." value="{{ Session('name') }}" />
                                        <p class=" py-2 text-warning">* Masukkan Nama Lengkap</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label text-warning" for="panggilan">Nama Panggilan</label>
                                        <input type="text" name="panggilan" id="panggilan" class="form-control"
                                            placeholder="Masukkan Panggilan Anda ...." />
                                        <p class=" py-2 text-warning">* Masukkan Panggilan</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Email input -->
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label text-warning" for="email">Email</label>
                                        <input type="email" name="email" id="email" class="form-control"
                                            value="{{ Session('email') }}" />
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label text-warning" for="no_telp">No. WA</label>
                                        <input type="number" name="no_telp" id="no_telp" class="form-control"
                                            value="{{ Session('no_wa') }}" />
                                    </div>
                                </div>
                            </div>
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <label class="form-label text-warning" for="nim">NIM</label>
                                <input type="number" name="nim" id="nim" class="form-control"
                                    value="{{ Session('nim') }}" />
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label text-warning" for="prodi">Prodi/Jurusan</label>
                                        <input type="text" name="prodi" id="prodi" class="form-control"
                                            placeholder="Masukkan prodi Anda ...." />
                                        <p class=" py-2 text-warning">* Contoh : Teknik Tambang</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label text-warning" for="ttl">Tempat, Tanggal
                                            Lahir</label>
                                        <input type="text" name="ttl" id="ttl" class="form-control"
                                            placeholder="Masukkan Tempat dan tanggal lahir anda ...." />
                                        <p class=" py-2 text-warning">* Contoh : Palembang, 16 Oktober 2001</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label text-warning" for="umur">Umur</label>
                                        <input type="number" name="umur" id="umur" class="form-control"
                                            placeholder="Masukkan Umur anda ...." />
                                        <p class=" py-2 text-warning">* Contoh : 17</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label text-warning" for="jenis_kelamin">Jenis
                                            Kelamin</label>
                                        <select type="text" name="jenis_kelamin" id="jenis_kelamin"
                                            class="form-control">
                                            <option value="L">Laki - Laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>
                                        <p class=" py-2 text-warning">* Pilih Jenis Kelamin Anda</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label text-warning" for="tinggi_badan">Tinggi Badan</label>
                                        <input type="number" name="tinggi_badan" id="tinggi_badan" class="form-control"
                                            placeholder="Masukkan Tinggi anda ...." />
                                        <p class=" py-2 text-warning">* Contoh : 172</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label text-warning" for="berat_badan">Berat Badan</label>
                                        <input type="number" name="berat_badan" id="berat_badan" class="form-control"
                                            placeholder="Masukkan Berat anda ...." />
                                        <p class=" py-2 text-warning">* Contoh : 65</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label text-warning" for="alamat">Alamat Tempat
                                            Tinggal</label>
                                        <textarea type="number" name="alamat" id="alamat" class="form-control"
                                            placeholder="Masukkan alamat tinggal anda ...." cols="30" rows="5"></textarea>
                                        <p class=" py-2 text-warning">* Masukkan Alamat Yang Benar</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label text-warning" for="hobi">Hobi</label>
                                        <input type="text" name="hobi" id="hobi" class="form-control"
                                            placeholder="Masukkan Hobi anda ...." />
                                        <p class=" py-2 text-warning">* Boleh Lebih Dari 1</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label text-warning" for="bahasa">Bahasa Yang Dikuasai</label>
                                        <input type="text" name="bahasa" id="bahasa" class="form-control"
                                            placeholder="Masukkan Bahasa yang anda kuasai ...." />
                                        <p class=" py-2 text-warning">* Boleh Lebih Dari 1</p>
                                    </div>
                                </div>
                            </div>
                            <h2>Sosial Media</h2>
                            <!-- Email input -->
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label text-warning" for="line">Line</label>
                                        <input type="text" name="line" id="line" class="form-control"
                                            placeholder="Masukkan Id Line Anda ...." />
                                        <p class=" py-2 text-warning">* Contoh : @badrul</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label text-warning" for="ig">Instagram</label>
                                        <input type="text" name="ig" id="ig" class="form-control"
                                            placeholder="Masukkan Id IG Anda ...." />
                                        <p class=" py-2 text-warning">* Contoh : @badrul</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label text-warning" for="fb">Facebook</label>
                                        <input type="text" name="fb" id="fb" class="form-control"
                                            placeholder="Masukkan Nama Facebook Anda ...." />
                                    </div>
                                </div>
                            </div>
                            <h2>Data Orang Tua</h2>
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label text-warning" for="nama_ayah">Nama Ayah</label>
                                        <input type="text" name="nama_ayah" id="nama_ayah" class="form-control"
                                            placeholder="Masukkan Nama Lengkap Ayah Anda ...." />
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label text-warning" for="nama_ibu">Nama Ibu</label>
                                        <input type="text" name="nama_ibu" id="nama_ibu" class="form-control"
                                            placeholder="Masukkan Nama Lengkap Ibu Anda ...." />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label text-warning" for="pekerjaan_ortu">Pekerjaan Orang Tua</label>
                                        <input type="text" name="pekerjaan_ortu" id="pekerjaan_ortu" class="form-control"
                                            placeholder="Masukkan Pekerjaan Orang Tua Anda ...." />
                                            <p class=" py-2 text-warning">* Masukkan Pekerjaan dari salah satu orang tua anda ....</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label text-warning" for="no_ortu">Nomor Telepon Orang Tua</label>
                                        <input type="number" name="no_ortu" id="no_ortu" class="form-control"
                                            placeholder="Masukkan Pekerjaan Orang Tua Anda ...." />
                                            <p class=" py-2 text-warning">* Masukkan Nomor Telepon Orang Tua Anda ....</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label text-warning" for="alamat_ortu">Tempat
                                            Tinggal Orang Tua</label>
                                        <textarea type="number" name="alamat_ortu" id="alamat_ortu" class="form-control"
                                            placeholder="Masukkan alamat tinggal orang tua anda ...." cols="30" rows="5"></textarea>
                                        <p class=" py-2 text-warning">* Masukkan Alamat Tinggal Orang Tua</p>
                                    </div>
                                </div>
                            </div>
                            <h2>Photo & Composite</h2>
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <img src="{{asset('assets/img/DDE_5919.jpg')}}" class=" rounded-2" width="140px" height="180px"  alt="">
                                        <p class=" py-2 text-warning">* Contoh Foto Full Body</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <img src="{{asset('assets/img/DDE_5919_2.jpg')}}" class=" rounded-2" width="140px" height="180px"  alt="">
                                        <p class=" py-2 text-warning">* Contoh Foto Close Up</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <img src="{{asset('assets/img/pas_foto.jpg')}}" class=" rounded-2" width="140px" height="180px"  alt="">
                                        <p class=" py-2 text-warning">* Contoh Pas Foto</p>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col">
                                        <div class="form-outline">
                                            <label class="form-label text-warning" for="pas_foto">Pas Foto</label>
                                            <input type="file" name="pas_foto" id="pas_foto" class="form-control"
                                                placeholder="Masukkan Pekerjaan Orang Tua Anda ...." />
                                                <p class=" py-2 text-warning">* Ikuti Contoh Di atas</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col">
                                        <div class="form-outline">
                                            <label class="form-label text-warning" for="close_up">Close Up</label>
                                            <input type="file" name="close_up" id="close_up" class="form-control"
                                                placeholder="Masukkan Pekerjaan Orang Tua Anda ...." />
                                                <p class=" py-2 text-warning">* Ikuti Contoh Di atas</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col">
                                        <div class="form-outline">
                                            <label class="form-label text-warning" for="full_body">Full Body</label>
                                            <input type="file" name="full_body" id="full_body" class="form-control"
                                                placeholder="Masukkan Pekerjaan Orang Tua Anda ...." />
                                                <p class=" py-2 text-warning">* Ikuti Contoh Di atas</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Checkbox -->
                            <div class=" d-flex justify-content-between">
                                <div class="form-check d-flex mb-4">
                                    <input class="form-check-input me-2" type="checkbox" id="showPassword" required />
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
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    @include('sweetalert::alert')
</body>

</html>
