<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GEMPI - Akses Daur Ulang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
      .navbar {
        position: sticky;
        top: 0;
        z-index: 1020;
      }
      .navbar-brand img {
        width: 50px;
        border-radius: 24px;
      }
      .navbar-nav .nav-link {
        font-weight: 500;
        color: #333;
      }
      .navbar-nav .nav-link.active {
        font-weight: bold;
        color: #006400;
      }
      .sectionatas {
        background-image: url('img/bg.png');
        background-size: cover;
        background-position: center;
        height: 87vh;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-align: center;
      }
      .sectionatas h3 {
        font-weight: bolder;
      }
      .sectionatas small {
        font-size: 20px;
      }
      .sectiondua {
        margin-top: 5%;
      }
      .sectiondua img {
        width: 100%;
      }

      .section-gempi {
        background-color: #dfeecd; /* Light green background */
        padding: 40px;
        border-radius: 10px;
      }
      .section-gempi h3 {
        font-weight: bold;
        font-size: 24px;
        color: #333;
      }
      .section-gempi p {
        font-size: 16px;
        color: #555;
      }
      .gempi-image {
        width: 100%;
        max-width: 100%;
      }
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="img/logo.png" alt="GEMPI Logo">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" href="tentangKami">Tentang Kami</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="layanan">Layanan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="mitra">Mitra</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- Section with Background Image -->
    <div class="sectionatas">
      <div class="text-center">
        <h3>We Are The <br> Recycling Network <br> <small>#ubahjadikebaikan</small></h3>
      </div>
    </div>

    <!-- Mission Section -->
    <div class="sectiondua">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h3><strong>Misi Kami Menyediakan Akses Daur Ulang <br> Bagi Semua Orang</strong></h3>
            <p>
              Puluhan juta ton sampah dihasilkan setiap tahun, sementara angka daur ulang nasional masih di bawah 10%. Sebagian besar sampah diangkut ke TPA, dibuang ilegal atau berakhir di lautan. Layaknya negara berkembang, kita terbatas pada infrastruktur lingkungan yang maju. Lalu bagaimana solusinya?
            </p>
            <p>
              Kita memiliki 3.000.000+ pengepul dan pemulung lokal yang tersebar di seluruh Indonesia, mereka memiliki infrastruktur, berjejaring, dan terus berkembang secara tradisional. Ini adalah solusi yang kami lihat. Masalahnya, tidak banyak yang mendukung pekerjaan mereka. Padahal pengepul dan pemulung adalah kunci dari rantai daur ulang di Indonesia dan negara berkembang lainnya. Jika mereka sebagai kunci rantai daur ulang, mengapa tidak menggunakan kuncinya dengan baik?
            </p>
          </div>
          <div class="col-md-4">
            <img src="img/section2.png" alt="Recycling Network Image">
          </div>
        </div>
      </div>
    </div>
    <div class="container my-5">
        <div class="section-gempi d-flex align-items-center">
          <div class="col-md-3 text-center">
            <img src="img/tukangsampah.png" alt="Gempi Character" class="gempi-image">
          </div>
          <div class="col-md-9 text-end">
            <h3>Gempi Di Desain Untuk Menangkap Sampah Dari Sumbernya, Dengan Ukuran Paling Kecil Sekalipun</h3>
            <p>
              Kami menggunakan jejaring pengepul dan pemulung lokal sebagai infrastruktur daur ulang digital yang setara dengan infrastruktur fisik di negara-negara maju. Kami percaya, dengan membawa sektor informal ini ke ekosistem digital, dapat mempercepat tujuan kita bersama untuk bebas polusi sampah pada tahun 2025.
            </p>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
