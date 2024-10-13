<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Muh. Alif Anhar | Web Developer</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.jpeg') }}" rel="icon" />
    <link href="{{ asset('assets/img/favicon.jpeg') }}" rel="apple-touch-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet" />
</head>

<body class="index-page">
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <!-- <h1 class="sitename">Bootslander</h1> -->
                <img src="assets/img/faviconn.png" alt="logo" class="img-fluid w-100" />
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Beranda</a></li>
                    <li><a href="#about">Tentang Saya</a></li>
                    <li><a href="#details">Portfolio</a></li>
                    <li><a href="#stats">Clients</a></li>
                    <!-- <li class="dropdown">
              <a href="#"
                ><span>Dropdown</span>
                <i class="bi bi-chevron-down toggle-dropdown"></i
              ></a>
              <ul>
                <li><a href="#">Dropdown 1</a></li>
                <li class="dropdown">
                  <a href="#"
                    ><span>Deep Dropdown</span>
                    <i class="bi bi-chevron-down toggle-dropdown"></i
                  ></a>
                  <ul>
                    <li><a href="#">Deep Dropdown 1</a></li>
                    <li><a href="#">Deep Dropdown 2</a></li>
                    <li><a href="#">Deep Dropdown 3</a></li>
                    <li><a href="#">Deep Dropdown 4</a></li>
                    <li><a href="#">Deep Dropdown 5</a></li>
                  </ul>
                </li>
                <li><a href="#">Dropdown 2</a></li>
                <li><a href="#">Dropdown 3</a></li>
                <li><a href="#">Dropdown 4</a></li>
              </ul>
            </li> -->
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>

    <main class="main">
        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">
            <img src="assets/img/hero-bg-2.jpg" alt="" class="hero-bg" />

            <div class="container">
                <div class="row gy-4 justify-content-between">
                    <div class="col-lg-4 tes order-lg-last hero-img" data-aos="zoom-out" data-aos-delay="100">
                        <img src="assets/img/alif.png" class="img-fluid tes w-100 object-fit-cover animated"
                            alt="" />
                    </div>

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-in">
                        <h1>
                            Halo Semua 👋, saya<br />
                            <span>Muh. Alif Anhar</span>
                        </h1>
                        <p>
                            Seorang programmer yang berdedikasi dalam merancang dan
                            mengembangkan solusi teknologi kreatif serta efisien, untuk
                            menghadirkan pengalaman digital yang memukau.
                        </p>
                        <div class="d-flex">
                            <a href="#contact" class="btn-get-started">Hubungi Saya</a>
                            <a href="#" id="downloadImg"
                                class="glightbox btn-watch-video d-flex align-items-center" target="_blank"
                                onclick="downloadImage()"><i class="bi bi-file-earmark-pdf"></i><span>Download
                                    CV</span></a>
                        </div>
                    </div>
                </div>
            </div>

            <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 28 " preserveAspectRatio="none">
                <defs>
                    <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
                    </path>
                </defs>
                <g class="wave1">
                    <use xlink:href="#wave-path" x="50" y="3"></use>
                </g>
                <g class="wave2">
                    <use xlink:href="#wave-path" x="50" y="0"></use>
                </g>
                <g class="wave3">
                    <use xlink:href="#wave-path" x="50" y="9"></use>
                </g>
            </svg>
        </section>
        <!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row align-items-xl-center gy-5">
                    <div class="col-xl-5 content">
                        <h3>Tentang Saya</h3>
                        <h2>Mengenal Saya Lebih Dalam</h2>
                        <p>
                            Saya Muh. Alif Anhar, berdomisili di Banta-Bantaeng, Makassar,
                            Sulawesi Selatan. Saya lulusan SMKN 3 Makassar, jurusan Teknik
                            Komputer & Jaringan. Saya memiliki keterampilan dalam
                            menggunakan software perkantoran, desain grafis, serta
                            pengembangan website menggunakan Framework Laravel.
                        </p>
                    </div>

                    <div class="col-xl-7">
                        <div class="row gy-4 icon-boxes">
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                                <div class="icon-box">
                                    <i class="bi bi-palette"></i>
                                    <h3>Desain Grafis</h3>
                                    <p>
                                        Saya telah membuat lebih dari 30 desain flyer dakwah di
                                        Masjid Shihhatul Iman.
                                    </p>
                                </div>
                            </div>
                            <!-- End Icon Box -->

                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                                <div class="icon-box">
                                    <i class="bi bi-code"></i>
                                    <h3>Web Development</h3>
                                    <p>
                                        Saya telah membuat enam situs web menggunakan Laravel dan
                                        pernah magang sebagai Web Developer di PT. Digital Desa
                                        Indonesia pada tahun 2023. Selain itu, saya juga menjalani
                                        studi independen selama empat bulan di PT. Someah Kreatif
                                        Nusantara pada tahun 2024.
                                    </p>
                                </div>
                            </div>
                            <!-- End Icon Box -->

                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                                <div class="icon-box">
                                    <i class="bi bi-grid"></i>
                                    <h3>Web Design</h3>
                                    <p>
                                        Saya berpengalaman dalam merancang dan mengembangkan
                                        website yang menarik dan responsif menggunakan Bootstrap 5
                                        dan Tailwind.
                                    </p>
                                </div>
                            </div>
                            <!-- End Icon Box -->

                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                                <div class="icon-box">
                                    <i class="bi bi-file-earmark-text"></i>
                                    <h3>Microsoft Office</h3>
                                    <p>
                                        Saya mahir dalam Microsoft Office: Word, Excel dan
                                        PowerPoint.
                                    </p>
                                </div>
                            </div>
                            <!-- End Icon Box -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /About Section -->

        <!-- Details Section -->
        <section id="details" class="details section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Silahkan cek</h2>
                <div>
                    <span>Portfolio</span>
                    <span class="description-title">Saya!</span>
                </div>
            </div>
            <!-- End Section Title -->

            <div class="container">
                <div class="row gy-4 align-items-center features-item">
                    <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                        <img src="assets/img/andismart.png" class="img-fluid" alt="" />
                    </div>
                    <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
                        <h3>Andi Smart (Layanan Administrasi Desa)</h3>
                        <p class="fst-italic">
                            Andi Smart adalah situs web layanan administrasi desa yang
                            dirancang untuk memudahkan pembuatan surat dan pengambilan
                            informasi dari desa. Aplikasi ini merupakan proyek magang di PT.
                            Digital Desa Indonesia pada tahun 2023.
                        </p>
                        <p class="fst-italic">Fitur :</p>
                        <ul>
                            <li>
                                <i class="bi bi-check"></i><span> Audio Selamat Datang secara Dinamis</span>
                            </li>
                            <li>
                                <i class="bi bi-check"></i>
                                <span> Video Playlist</span>
                            </li>
                            <li>
                                <i class="bi bi-check"></i>
                                <span> Iframe untuk mengakses website pemerintah</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Features Item -->

                <div class="row gy-4 align-items-center features-item">
                    <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out"
                        data-aos-delay="200">
                        <img src="assets/img/penyewaan.png" class="img-fluid" alt="" />
                    </div>
                    <div class="col-md-7 order-2 order-md-1" data-aos="fade-up" data-aos-delay="200">
                        <h3>Penyewaan Baju Bodo dan Jas Tutup</h3>
                        <p class="fst-italic">
                            Situs web ini dirancang untuk memudahkan pelanggan dalam menyewa
                            baju bodo dan jas tutup di Kota Makassar.
                        </p>
                        <p class="fst-italic">Fitur :</p>
                        <ul>
                            <li>
                                <i class="bi bi-check"></i><span> Pengelolaan Baju Bodo dan Jas Tutup</span>
                            </li>
                            <li>
                                <i class="bi bi-check"></i>
                                <span> Pengelolaan Akun Admin Toko</span>
                            </li>
                            <li>
                                <i class="bi bi-check"></i>
                                <span> Pengelolaan Kontak</span>
                            </li>
                        </ul>
                        <small class="fst-italic">*Jika pengguna telah memesan baju bodo atau jas tutup,
                            keterangan akan otomatis menjadi "Disewa."</small>
                    </div>
                </div>
                <!-- Features Item -->

                <div class="row gy-4 align-items-center features-item">
                    <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out">
                        <img src="assets/img/kursus.png" class="img-fluid" alt="" />
                    </div>
                    <div class="col-md-7" data-aos="fade-up">
                        <h3>CUS (Cerdas, Unggul, Sukses)</h3>
                        <p>
                            CUS adalah situs web kursus online yang memungkinkan pengguna
                            mengakses berbagai materi pembelajaran secara fleksibel dan
                            mudah. Dengan aplikasi ini, peserta kursus dapat belajar kapan
                            saja dan di mana saja melalui perangkat yang terhubung ke
                            internet. Aplikasi ini dirancang dengan berbagai fitur, termasuk
                            materi yang terdiri dari beberapa bab, kuis, pemateri dari
                            dosen-dosen universitas, dan sistem penilaian untuk mendukung
                            proses belajar yang efektif dan efisien.
                        </p>
                        <p class="fst-italic">Fitur :</p>
                        <ul>
                            <li>
                                <i class="bi bi-check"></i><span> Pengelolaan Pemateri</span>
                            </li>
                            <li>
                                <i class="bi bi-check"></i>
                                <span> Pengelolaan Mata Pelajaran</span>
                            </li>
                            <li>
                                <i class="bi bi-check"></i>
                                <span> Pengelolaan Materi</span>
                            </li>
                            <li>
                                <i class="bi bi-check"></i>
                                <span> Pengelolaan Quiz</span>
                            </li>
                            <li>
                                <i class="bi bi-check"></i>
                                <span> Pengelolaan Progress Belajar</span>
                            </li>
                            <li>
                                <i class="bi bi-check"></i>
                                <span> Pengelolaan Akun</span>
                            </li>
                        </ul>
                        <small class="fst-italic">*Jika pengguna belum menyelesaikan materi, mereka tidak dapat
                            mengerjakan kuis, dan progres belajar akan otomatis ter-reset
                            jika nilai kuisnya di bawah 70.</small>
                    </div>
                </div>
                <!-- Features Item -->

                <div class="row gy-4 align-items-center features-item">
                    <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out">
                        <img src="assets/img/infolahtadam.png" class="img-fluid" alt="" />
                    </div>
                    <div class="col-md-7 order-2 order-md-1" data-aos="fade-up">
                        <h3>E-Office Infolahtadam Hasanuddin</h3>
                        <p class="fst-italic">
                            E-Office Infolahtadam Hasanuddin Makassar Merupakan sebuah
                            aplikasi yang mengelola arsip persuratan. yang dimana aplikasi
                            ini mencakup kelola surat masuk dan surat keluar, dan
                            pengelolaan arsip devisi.
                        </p>
                        <p class="fst-italic">Fitur :</p>
                        <ul>
                            <li>
                                <i class="bi bi-check"></i><span> Pengelolaan Arsip Surat Masuk</span>
                            </li>
                            <li>
                                <i class="bi bi-check"></i>
                                <span> Pengelolaan Arsip Surat Keluar</span>
                            </li>
                            <li>
                                <i class="bi bi-check"></i>
                                <span> Pengelolaan Devisi</span>
                            </li>
                            <li>
                                <i class="bi bi-check"></i>
                                <span> Pengelolaan User</span>
                            </li>
                            <li>
                                <i class="bi bi-check"></i>
                                <span> Pengelolaan Produk Devisi</span>
                            </li>
                            <li>
                                <i class="bi bi-check"></i>
                                <span> Pengelolaan Administrasi Devisi</span>
                            </li>
                            <li>
                                <i class="bi bi-check"></i>
                                <span> Rekap Laporan</span>
                            </li>
                            <li>
                                <i class="bi bi-check"></i>
                                <span> Pencarian Multi Level</span>
                            </li>
                        </ul>
                        <small class="fst-italic">*Project ini menggunakan Livewire 3 dan dikerjakan oleh Tim
                            Wecode Solution yang isinya dua orang.</small>
                    </div>
                </div>
                <!-- Features Item -->
            </div>
        </section>
        <!-- /Details Section -->

        <!-- Stats Section -->
        <section id="stats" class="stats section light-background">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-4 d-flex flex-column align-items-center">
                        <i class="bi bi-emoji-smile"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="8" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                    <!-- End Stats Item -->

                    <div class="col-lg-4 col-md-4 d-flex flex-column align-items-center">
                        <i class="bi bi-journal-richtext"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="8" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Projects</p>
                        </div>
                    </div>
                    <!-- End Stats Item -->

                    <div class="col-lg-4 col-md-4 d-flex flex-column align-items-center">
                        <i class="bi bi-award"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Sertifikat</p>
                        </div>
                    </div>
                    <!-- End Stats Item -->
                </div>
            </div>
        </section>
        <!-- /Stats Section -->

        <!-- Testimonials Section -->
        <section id="stats" class="testimonials section dark-background">
            <img src="assets/img/tes.jpg" class="testimonials-bg" alt="" />

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                }
              }
            </script>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                    alt="" />
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Proin iaculis purus consequat sem cure digni ssim donec
                                        porttitora entum suscipit rhoncus. Accusantium quam,
                                        ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                        risus at semper.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img"
                                    alt="" />
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Export tempor illum tamen malis malis eram quae irure
                                        esse labore quem cillum quid cillum eram malis quorum
                                        velit fore eram velit sunt aliqua noster fugiat irure amet
                                        legam anim culpa.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img"
                                    alt="" />
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Enim nisi quem export duis labore cillum quae magna enim
                                        sint quorum nulla quem veniam duis minim tempor labore
                                        quem eram duis noster aute amet eram fore quis sint
                                        minim.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img"
                                    alt="" />
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Fugiat enim eram quae cillum dolore dolor amet nulla
                                        culpa multos export minim fugiat minim velit minim dolor
                                        enim duis veniam ipsum anim magna sunt elit fore quem
                                        dolore labore illum veniam.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                    alt="" />
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Quis quorum aliqua sint quem legam fore sunt eram irure
                                        aliqua veniam tempor noster veniam enim culpa labore duis
                                        sunt culpa nulla illum cillum fugiat legam esse veniam
                                        culpa fore nisi cillum quid.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!-- /Testimonials Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Kontak</h2>
                <div>
                    <span>Periksa Kontak</span>
                    <span class="description-title">Saya</span>
                </div>
            </div>
            <!-- End Section Title -->

            <div class="container" data-aos="fade" data-aos-delay="100">
                <div class="row gy-4">
                    <div class="col-lg-4">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Alamat</h3>
                                <p>Jalan Banta-Bantaeng No.23 Makassar, Sulawesi Selatan</p>
                            </div>
                        </div>
                        <!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>WhatsApp</h3>
                                <p>0857 5689 5140</p>
                            </div>
                        </div>
                        <!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email</h3>
                                <p>sultankautsar21@gmail.com</p>
                            </div>
                        </div>
                        <!-- End Info Item -->
                    </div>

                    <div class="col-lg-8">
                        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control"
                                        placeholder="Your Name" required="" />
                                </div>

                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Your Email" required="" />
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject"
                                        required="" />
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">
                                        Your message has been sent. Thank you!
                                    </div>

                                    <button type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- End Contact Form -->
                </div>
            </div>
        </section>
        <!-- /Contact Section -->
    </main>

    <footer id="footer" class="footer dark-background">
        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">Muh. Alif Anhar</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>Jalan Banta-Bantaeng No.23</p>
                        <p>Makassar, Sulawesi Selatan</p>
                        <p class="mt-3">
                            <strong>WhatsApp:</strong> <span>0857 5689 5140</span>
                        </p>
                        <p>
                            <strong>Email:</strong> <span>sultankautsar21@gmail.com</span>
                        </p>
                    </div>
                    <div class="social-links d-flex mt-4">
                        <a href="https://github.com/muhalifanhar" target="_blank"><i class="bi bi-github"></i></a>
                        <a href="https://www.facebook.com/Muhammad.Alif.Anhar/" target="_blank"><i
                                class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/itsalifanhar/" target="_blank"><i
                                class="bi bi-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/muh-alif-anhar-634bb1270/" target="_blank"><i
                                class="bi bi-linkedin"></i></a>
                        <a href="https://wa.me/6285756895140?text=Halo,%20saya%20mau%20bikin%20aplikasi"
                            target="_blank"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-3 footer-links">
                    <h4>Tautan</h4>
                    <ul>
                        <li><a href="#hero">Beranda</a></li>
                        <li><a href="#about">Tentang Saya</a></li>
                        <li><a href="#details">Portfolio</a></li>
                        <li><a href="#stats">Clients</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-3 footer-links">
                    <h4>Layanan Saya</h4>
                    <ul>
                        <li><a href="#about">Web Development</a></li>
                        <li><a href="#about">Graphic Design</a></li>
                        <li><a href="#about">Web Design</a></li>
                        <li><a href="#about">Data Processing Services</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>
                © <span>Copyright</span>
                <strong class="px-1 sitename">Muh. Alif Anhar</strong>
                <span>All Rights Reserved</span>
            </p>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <script>
        function downloadImage() {
            // URL dari file yang ingin didownload (sesuaikan dengan lokasi file di server Anda)
            var url = "assets/img/cv_MuhAlifAnhar.pdf";

            // Membuat elemen <a> untuk memulai download
            var a = document.createElement("a");
            a.href = url;
            a.download = "YourCV.pdf"; // Nama file yang akan didownload
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
        }
    </script>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>
