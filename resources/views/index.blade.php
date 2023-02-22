<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sistem Informasi - Klinik Utama Nuzula</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand - v3.9.1
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>(0283)6180680</span></i>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <!-- <h1 class="logo"><a href="index.html">BizLand<span>.</span></a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="{{ url('/')}}" class="logo"><img src="assets/img/nuzulalogo.png" alt=""></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="{{ url('/')}}">Home</a></li>
          <li class="dropdown"><a href="latarbelakang.html"><span>Profile</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ url('sejarah')}}">Sejarah</a></li>
              <li><a href="{{ url('visi-misi')}}">Visi & Misi</a></li>
              <li><a href="{{ url('struktur-organisasi')}}">Struktur Organisasi</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="produk.html"><span>Layanan</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ url('jadwal-layanan-rawat-inap')}}">Jadwal Layanan Rawat Jalan</a></li>
              <li><a href="{{ url('igd')}}">IGD 24 Jam</a></li>
              <li><a href="{{ url('rawat-jalan')}}">Rawat Jalan</a></li>
              <li><a href="{{ url('rawat-inap')}}">Rawat Inap</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="{{ url('fasilitas-umum')}}">Fasilitas Umum</a></li>
          <li><a class="nav-link scrollto" href="{{ url('chatbot')}}">Chatbot</a></li>
          <li><a class="nav-link scrollto" href="{{ url('kontak')}}">Kontak</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Selamat Datang Di <br><span>Website Klinik Utama Nuzula</span></h1>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <!-- <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

        </div>

      </div>
    </section>
    End Featured Services Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Tentang</h2>
          <br>
        </br>
          <h4>PT <span>Oriental Ceramic Indonesia</span></h4>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100"><br><br>
            <img src="https://i.ytimg.com/vi/p-de5mua0Xw/mqdefault.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-6 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <p align="justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas voluptatum esse similique iure inventore alias exercitationem officia voluptas aspernatur, consequatur eos natus tempora, eaque, commodi asperiores animi? Error, totam explicabo!
            </p>
      <div class="d-flex">
        <a href="{{url ('/sejarah')}}" class="btn-get-started scrollto">Ketahui Lebih Lengkap</a>
      </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pelanggan Kami</h2>
          <h3>Berikut Merupakan <span>Langgan Kami</span></h3>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-8 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="assets\img\pelanggan\pelanggan1.png" class="img-fluid" alt="">
              </div>
              <!-- <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
              </div> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-8 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="assets\img\pelanggan\pelanggan2.png" class="img-fluid" alt="">
                <!-- <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> -->
              </div>
              <!-- <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
              </div> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-8 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="assets\img\pelanggan\pelanggan3.png" class="img-fluid" alt="">
                <!-- <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> -->
              </div>
              <!-- <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
              </div> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-8 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="assets\img\pelanggan\pelanggan4.png" class="img-fluid" alt="">
                <!-- <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> -->
              </div>
              <!-- <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
              </div> -->
            </div>
          </div>
          <div class="col-lg-4 col-md-8 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="assets\img\pelanggan\pelanggan5.png" class="img-fluid" alt="">
                <!-- <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                          </div> -->
              </div>
              <!-- <div class="member-info">
                          <h4>Amanda Jepson</h4>
                          <span>Accountant</span>
                        </div> -->
            </div>
          </div>
          <div class="col-lg-4 col-md-8 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="assets\img\pelanggan\pelanggan6.png" class="img-fluid" alt="">
                <!-- <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                          </div> -->
              </div>
              <!-- <div class="member-info">
                          <h4>Amanda Jepson</h4>
                          <span>Accountant</span>
                        </div> -->
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright © 2023 <strong><span>Klinik Utama Nuzula</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
        Powered By <a href="https://bootstrapmade.com/">Klinik Utama Nuzula</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>