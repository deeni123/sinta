<!DOCTYPE html>

<html lang="id">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>SINTA - Sistem Informasi Tugas Akhir</title>
  <meta name="description" content="Sistem Informasi Tugas Akhir Program Studi S1 Informatika">
  <meta name="keywords" content="tugas akhir, skripsi, sistem informasi, informatika">

  <!-- Favicons -->

  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/logo.jpeg" rel="apple-touch-icon">

  <!-- Fonts -->

  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->

  <link href="assets/css/main.css" rel="stylesheet">


</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
      <!-- Logo -->
      <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto">
        <img src="assets/img/logo.jpeg" alt="Logo SINTA" class="logo-img">
        <h1 class="sitename">SINTA</h1>
      </a>
  
      <!-- Navigation Menu -->
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Beranda</a></li>
          <li><a href="#about">Tentang</a></li>
          <li><a href="#services">Layanan</a></li>
          <li class="dropdown">
            <a href="#"><span>Informasi</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul class="dropdown-menu">
              <li><a href="{{ url('/templateTA') }}">Panduan Tugas Akhir</a></li>
              <li><a href="{{ url('/dataTA') }}">Data TA</a></li>
              <li><a href="{{ url('/skPembimbing') }}">SK Pembimbing</a></li>
              <li><a href="{{ url('/skPenguji') }}">SK Penguji</a></li>
            </ul>
          </li>
          <li><a href="#contact">Kontak</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
  
      <!-- User Section -->
      <div class="user-section ms-auto d-flex align-items-center">
        @auth
          <!-- User Profile Dropdown -->
          <div class="dropdown user-dropdown">
            <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
              <div class="user-avatar me-2">
                
              </div>
              <span class="user-name d-none d-lg-inline">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
              <li><a class="dropdown-item" href="{{ url('/profile') }}"><i class="bi bi-person me-2"></i>Profil</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right me-2"></i>Logout</button>
                </form>
              </li>
            </ul>
          </div>
        @else
          <!-- Login Button -->
          <div class="auth-buttons">
            <a href="{{ url('/login') }}" class="btn btn-danger me-2">
              <i class="bi bi-box-arrow-in-right me-1"></i> Login
            </a>
          </div>
        @endauth
      </div>
    </div>
  </header>
  
  <style>
    /* Navbar Styling */
    .header {
      background-color: #fff;
      box-shadow: 0 2px 15px rgba(220, 53, 69, 0.1);
      /* padding: 15px 0; */
      transition: all 0.3s ease;
    }
    
    .logo-img {
      height: 40px;
      width: auto;
      margin-right: 10px;
    }
    
    .sitename {
      font-family: 'Raleway', sans-serif;
      font-weight: 700;
      color: #dc3545; /* Warna merah */
      margin: 0;
      font-size: 1.5rem;
    }
    
    /* Navigation Menu */
    .navmenu ul {
      display: flex;
      margin: 0;
      padding: 0;
      list-style: none;
    }
    
    .navmenu ul li {
      position: relative;
      padding: 0 10px;
    }
    
    .navmenu ul li a {
      color: #2c3e50;
      font-weight: 500;
      padding: 10px 15px;
      text-decoration: none;
      transition: all 0.3s ease;
      display: flex;
      align-items: center;
    }
    
    .navmenu ul li a:hover,
    .navmenu ul li a.active {
      color: #dc3545; /* Warna merah */
    }
    
    /* Dropdown Menu */
    .dropdown-menu {
      position: absolute;
      top: 100%;
      left: 0;
      min-width: 220px;
      background: #fff;
      box-shadow: 0 5px 15px rgba(220, 53, 69, 0.1);
      border-radius: 5px;
      padding: 10px 0;
      opacity: 0;
      visibility: hidden;
      transition: all 0.3s ease;
      z-index: 999;
    }
    
    .dropdown:hover .dropdown-menu {
      opacity: 1;
      visibility: visible;
    }
    
    .dropdown-menu li {
      padding: 0;
    }
    
    .dropdown-menu li a {
      padding: 8px 20px;
      color: #555;
      transition: all 0.2s;
    }
    
    .dropdown-menu li a:hover {
      background-color: #f8f9fa;
      color: #dc3545; /* Warna merah */
      padding-left: 25px;
    }
    
    /* User Section */
    .user-avatar img {
      width: 36px;
      height: 36px;
      object-fit: cover;
      border: 2px solid #dc3545; /* Border merah */
      transition: all 0.3s ease;
    }
    
    .user-avatar:hover img {
      border-color: #bb2d3b; /* Warna merah lebih gelap */
    }
    
    .user-name {
      font-weight: 500;
      color: #2c3e50;
    }
    
    .dropdown-menu .dropdown-item {
      padding: 8px 15px;
      font-size: 0.9rem;
    }
    
    .dropdown-menu .dropdown-item:hover {
      color: #dc3545; /* Warna merah */
      background-color: #f8f9fa;
    }
    
    /* Mobile Toggle */
    .mobile-nav-toggle {
      color: #dc3545; /* Warna merah */
      font-size: 1.5rem;
      cursor: pointer;
      display: none;
    }
    
    /* Responsive */
    @media (max-width: 1199.98px) {
      .navmenu ul li {
        padding: 0 8px;
      }
      
      .navmenu ul li a {
        padding: 8px 12px;
        font-size: 0.9rem;
      }
    }
  </style>
  

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
            <h1>Sistem Informasi Tugas Akhir</h1>
            <p>Platform terintegrasi untuk pengelolaan proses Tugas Akhir mahasiswa Program Studi S1 Informatika</p>
            <div class="d-flex">
              <a href="#services" class="btn-get-started">Mulai Jelajahi</a>
              <a href="login.html" class="btn-watch-video ms-3"><i class="bi bi-box-arrow-in-right"></i> <span>Login</span></a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="100">
            <img src="assets/img/hero.png" class="img-fluid animated" alt="Ilustrasi Tugas Akhir">
          </div>
        </div>
      </div>
    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Tentang SINTA</h2>
        <p>Sistem Informasi Tugas Akhir Program Studi S1 Informatika</p>
      </div>

      <div class="container">
        <div class="row gy-4 align-items-center">
          <div class="col-lg-6" data-aos="fade-right">
            <div class="custom-image-wrapper">
              <img src="assets/img/tentang.jpg" class="img-fluid" alt="Tentang Sistem Informasi Tugas Akhir">
            </div>
          </div>          
          <div class="col-lg-6" data-aos="fade-left">
            <div class="content ps-lg-5">
              <h3>SINTA membantu mahasiswa dalam proses penyelesaian Tugas Akhir</h3>
              <p>
                Sistem Informasi Tugas Akhir (SINTA) merupakan platform digital yang dirancang untuk memfasilitasi seluruh proses penyusunan Tugas Akhir mahasiswa Program Studi S1 Informatika.
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> Manajemen pengajuan pembimbing</li>
                <li><i class="bi bi-check-circle-fill"></i> Pelacakan progress bimbingan</li>
                <li><i class="bi bi-check-circle-fill"></i> Pendaftaran seminar proposal</li>
                <li><i class="bi bi-check-circle-fill"></i> Pengelolaan dokumen akademik</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /About Section -->

    <!-- Tugas Akhir Section -->
    <section id="tugas-akhir" class="tugas-akhir section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Proses Tugas Akhir</h2>
        <p class="text-muted">Program Studi S1 Informatika</p>
      </div>

      <div class="container">
        <div class="row gy-4 align-items-center">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <div class="process-visual p-3 rounded-3">
              <img src="assets/img/info.png" class="img-fluid rounded-2" alt="Alur Proses Tugas Akhir">
            </div>
          </div>
          
          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
            <div class="process-steps">
              <div class="step-card mb-4 p-4 bg-white rounded-3 shadow-sm border-start border-danger border-4">
                <div class="step-header d-flex align-items-center mb-2">
                  <div class="step-number bg-danger text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 36px; height: 36px;">1</div>
                  <h4 class="mb-0 text-danger">Pengajuan Topik</h4>
                </div>
                <p class="mb-0 text-secondary">Mahasiswa mengajukan topik, pembimbing, dan mempersiapkan proposal Tugas Akhir</p>
              </div>

              <div class="step-card mb-4 p-4 bg-white rounded-3 shadow-sm border-start border-danger border-4">
                <div class="step-header d-flex align-items-center mb-2">
                  <div class="step-number bg-danger text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 36px; height: 36px;">2</div>
                  <h4 class="mb-0 text-danger">SK Pembimbing</h4>
                </div>
                <p class="mb-0 text-secondary">Penerbitan SK Pembimbing Tugas Akhir dari Fakultas</p>
              </div>

              <div class="step-card mb-4 p-4 bg-white rounded-3 shadow-sm border-start border-danger border-4">
                <div class="step-header d-flex align-items-center mb-2">
                  <div class="step-number bg-danger text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 36px; height: 36px;">3</div>
                  <h4 class="mb-0 text-danger">Bimbingan</h4>
                </div>
                <p class="mb-0 text-secondary">Mahasiswa melanjutkan progress Tugas Akhir hingga eligible untuk Seminar Proposal</p>
              </div>

              <div class="step-card mb-4 p-4 bg-white rounded-3 shadow-sm border-start border-danger border-4">
                <div class="step-header d-flex align-items-center mb-2">
                  <div class="step-number bg-danger text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 36px; height: 36px;">4</div>
                  <h4 class="mb-0 text-danger">Seminar Proposal</h4>
                </div>
                <p class="mb-0 text-secondary">Pendaftaran seminar dengan melengkapi persyaratan dan penentuan jadwal</p>
              </div>

              <div class="step-card mb-4 p-4 bg-white rounded-3 shadow-sm border-start border-danger border-4">
                <div class="step-header d-flex align-items-center mb-2">
                  <div class="step-number bg-danger text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 36px; height: 36px;">5</div>
                  <h4 class="mb-0 text-danger">Pelaksanaan</h4>
                </div>
                <p class="mb-0 text-secondary">Presentasi seminar dan penyelesaian revisi proposal</p>
              </div>

              <div class="step-card p-4 bg-white rounded-3 shadow-sm border-start border-danger border-4">
                <div class="step-header d-flex align-items-center mb-2">
                  <div class="step-number bg-danger text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 36px; height: 36px;">6</div>
                  <h4 class="mb-0 text-danger">Finalisasi</h4>
                </div>
                <p class="mb-0 text-secondary">Pengunggahan dokumen final Tugas Akhir ke sistem Igracias</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Tugas Akhir Section -->

    <!-- Services Section -->
<section id="services" class="services section light-background">
  <div class="container section-title" data-aos="fade-up">
    <span>Layanan</span>
    <h2>Layanan SINTA</h2>
    <p>Berbagai fasilitas yang disediakan untuk mendukung proses penyelesaian Tugas Akhir</p>
  </div>

  <div class="container">
    <div class="row gy-4">
      
      <!-- Pengajuan Pembimbing - Tidak tampil untuk Dosen -->
        @auth
          @if (!Auth::user()->hasRole('dosen'))
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-person-lines-fill"></i>
              </div>
              <h3>Pengajuan Pembimbing</h3>
              <p>Pengajuan dosen pembimbing Tugas Akhir secara online dengan tracking status real-time</p>
              <a href="{{ url('/pengajuanpembibing') }}" class="stretched-link"></a>
            </div>
          </div>
          @endif
        @endauth

      <!-- Log Bimbingan - Tidak tampil untuk Dosen -->
      @auth
        @if (!Auth::user()->hasRole('dosen'))
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-journal-text"></i>
            </div>
            <h3>Log Bimbingan</h3>
            <p>Pencatatan kegiatan bimbingan antara mahasiswa dan dosen pembimbing</p>
            <a href="{{ url('/logBimbingan') }}" class="stretched-link"></a>
          </div>
        </div>
        @endif
      @endauth

      <!-- Pendaftaran - Tidak tampil untuk Dosen -->
      @auth
        @if (!Auth::user()->hasRole('dosen'))
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-calendar-check"></i>
            </div>
            <h3>Pendaftaran</h3>
            <p>Registrasi seminar proposal dan penjadwalan presentasi Tugas Akhir</p>
            <a href="{{ url('/pendaftaran') }}" class="stretched-link"></a>
          </div>
        </div>
        @endif
      @endauth

      <!-- Penilaian Dosen - Tidak tampil untuk Mahasiswa -->
      @auth
        @if (!Auth::user()->hasRole('mahasiswa'))
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-file-earmark-check"></i>
            </div>
            <h3>Penilaian Dosen</h3>
            <p>Sistem penilaian online oleh dosen pembimbing dan penguji</p>
            <a href="/penilaiandosen" class="stretched-link penilaian-dosen-link"></a>
          </div>
        </div>
        @endif
      @endauth

      <!-- Template Dokumen -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-file-earmark-pdf"></i>
          </div>
          <h3>Template Dokumen</h3>
          <p>Download template proposal, laporan, dan dokumen pendukung Tugas Akhir</p>
          <a href="{{ url('/templateTA') }}" class="stretched-link"></a>
        </div>
      </div>

      <!-- SK Pembimbing/Penguji -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-file-text"></i>
          </div>
          <h3>SK Pembimbing/Penguji</h3>
          <p>Pengunduhan Surat Keputusan Pembimbing dan Penguji Tugas Akhir</p>
          <a href="{{ url('/skPembimbing') }}" class="stretched-link"></a>
        </div>
      </div>

    </div>
  </div>
</section><!-- /Services Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Hubungi Kami</h2>
        <p>Untuk bantuan dan dukungan terkait Tugas Akhir</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4 justify-content-center">
          <div class="col-lg-8 text-center">
            <div class="info-wrap">
              <div class="info-item d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-whatsapp flex-shrink-0"></i>
                <div>
                  <h3>WhatsApp Helpdesk</h3>
                  <p><a href="https://wa.me/6281234567890" target="_blank">+62 812-3456-7890</a></p>
                  <p class="small">(Senin-Jumat, 08.00-16.00 WIB)</p>
                </div>
              </div>

              <div class="info-item d-flex justify-content-center mt-4" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email</h3>
                  <p><a href="mailto:sinta@informatika.ac.id">sinta@informatika.ac.id</a></p>
                </div>
              </div>

              <div class="mt-4" data-aos="fade-up" data-aos-delay="400">
                <a href="https://wa.me/6281234567890" class="btn btn-success btn-lg" target="_blank">
                  <i class="bi bi-whatsapp"></i> Chat via WhatsApp
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer">
    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="d-flex align-items-center">
            <img src="assets/img/logo.jpeg" alt="Logo SINTA" class="me-2" style="height: 40px;">
            <span class="sitename">SINTA</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Program Studi S1 Informatika</p>
            <p>Fakultas Ilmu Komputer</p>
            <p class="mt-3"><strong>Alamat:</strong> <span>Jl. DI Panjaitan No.128, Karangreja, Purwokerto Kidul, Kec. Purwokerto Sel., Kabupaten Banyumas, Jawa Tengah 53147</span></p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Tautan Cepat</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#hero">Beranda</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#about">Tentang</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#services">Layanan</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#contact">Kontak</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Layanan</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/skPembimbing') }}">SK Pembimbing</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/skPenguji') }}">SK Penguji</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/templateTA') }}">Template TA</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/') }}">Data TA</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12">
          <h4>Ikuti Kami</h4>
          <p>Dapatkan informasi terbaru tentang perkembangan sistem dan pengumuman penting</p>
          <div class="social-links d-flex">
            <a href="https://www.facebook.com/profile.php?id=61555984748240&locale=id_ID"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/telkomuniversity_purwokerto/"><i class="bi bi-instagram"></i></a>
            <a href="https://www.youtube.com/@TelkomUniversityPurwokerto/videos"><i class="bi bi-youtube"></i></a>
            <a href="https://www.linkedin.com/company/ittpurwokerto/?originalSubdomain=id"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1">SINTA</strong> <span>2025. All Rights Reserved</span></p>
      <div class="credits">
        Sistem Informasi Tugas Akhir - Program Studi S1 Informatika
      </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

 
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

  
</body>
</html>