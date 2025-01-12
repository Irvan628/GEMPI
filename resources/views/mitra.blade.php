<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GEMPI - Akses Daur Ulang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
      body {
        font-family: 'Poppins', sans-serif;
      }
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
      .section-gempi h3 {
        font-weight: bold;
      }
      .gempi-image {
        width: 100%;
        max-width: 70%; /* Adjust size as needed */
      }

      .program-section {
        font-family: 'Poppins', sans-serif;
        margin-top: 50px;
      }
      .program-box {
        border-radius: 15px;
        padding: 20px;
        margin-bottom: 20px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        position: relative;
      }
      .program-box.green-gradient {
        background: linear-gradient(90deg, #27A844 0%, #4ACE68 100%);
        color: white;
      }
      .program-box.white {
        background-color: #f8f9fa;
      }
      .program-number {
        font-size: 24px;
        font-weight: bold;
        color: #006400;
      }
      .program-title {
        font-weight: bold;
        font-size: 20px;
      }
      .program-description {
        font-size: 16px;
        margin-top: 10px;
        color: #333;
      }
      .join-button {
        background-color: white;
        color: #27A844;
        font-weight: bold;
        border: 2px solid #27A844;
        border-radius: 10px;
        padding: 5px 16px;
        text-decoration: none;
        position: absolute;
        bottom: 16px;
        right: 20px;
        transition: background-color 0.3s;
      }
      .join-button:hover {
        background-color: #27A844;
        color: white;
      }

      /* Section Baru Styling */
      .section-baru {
        background-color: #e0f7f5; /* Light teal background */
        padding: 40px;
        border-radius: 15px;
        margin-top: 40px;
      }
      .section-baru h3 {
        font-weight: bold;
        color: #006400;
      }
      .section-baru p {
        font-size: 16px;
        color: #333;
        margin-top: 10px;
      }
      .section-baru .action-button {
        background-color: #27A844;
        color: white;
        font-weight: bold;
        border: none;
        border-radius: 10px;
        padding: 10px 20px;
        text-decoration: none;
        display: inline-block;
        margin-top: 20px;
        transition: background-color 0.3s;
      }
      .section-baru .action-button:hover {
        background-color: #1e8f37;
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
              <a class="nav-link" href="tentangKami">Tentang Kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="layanan">Layanan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="mitra">Mitra</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- First Section -->
    <div class="sectionsatu py-5">
      <div class="container">
        <h3 class="text-center"><strong>Mitra Gempi</strong></h3>
        <p class="text-center">Teknologi untuk pelaku daur ulang sampah di Indonesia. <br> Bergabung, Terhubung & Dapatkan Manfaatnya.</p>
      </div>
    </div>

    <!-- Second Section -->
    <div class="container my-5">
      <div class="section-gempi d-flex align-items-center">
        <div class="col-md-6 text-start">
            <h3><strong>Platform yang Menghubungkan Seluruh Stakeholder Pengelolaan Sampah & Daur  Ulang Dalam Satu Jejaring Teknologi</strong></h3>
          <p>
            Kami menggunakan jejaring pengepul dan pemulung lokal sebagai infrastruktur daur ulang digital yang setara dengan infrastruktur fisik di negara-negara maju. Kami percaya, dengan membawa sektor informal ini ke ekosistem digital, dapat mempercepat tujuan kita bersama untuk bebas polusi sampah pada tahun 2025.
          </p>
          
        </div>
        <div class="col-md-6 text-end">
            <img src="img/tangan.png" alt="Gempi Character" class="gempi-image">
        </div>
      </div>
    </div>


    <div class="container program-section">
        <h3 class="fw-bold">Tawaran Program</h3>
  
        <!-- First Program Box -->
        <div class="program-box green-gradient">
          <div>
            <span class="program-number">1. Pengepul</span>
            <p class="program-description">
              Jika Sehari-Hari Anda Bekerja Sebagai Pengepul/Tukang Loak, Menjadikan Pekerjaan Tersebut Sebagai Profesi Utama Atau Sampingan, Bergabunglah Dengan GEMPI Untuk Meningkat Pemasukan Anda, Meningkatkan Efektifitas Kerja Dan Kualitas Hidup Anda Dengan Beragam Program-Program Pemberdayaan Dari GEMPI.
            </p>
          </div>
          <a href="#" class="join-button">Gabung Sekarang</a>
        </div>
  
        <!-- Second Program Box -->
        <div class="program-box white">
          <div>
            <span class="program-number">2. Pemilik Gudang Sortir</span>
            <p class="program-description">
              Pemilik Gudang Pengumpulan Atau Biasa Disebut Pelapak, Juga Dapat Bergabung Di GEMPI Sebagai Mitra. Anda Akan Mendapat Benefit Berupa Jejaring Pengepul-Pemulung Yang Lebih Luas, Kemudian Gudang Anda Juga Dapat Diakses Masyarakat Untuk Pengantaran Langsung, Sehingga Membantu Meningkatkan Target Pengumpulan Di Gudang Anda. Selain Itu, Ada Benefit Program-Program Social Dan Bonus Kemitraan. Daftar Sekarang Untuk Mendapat Banyak Manfaat.
            </p>
          </div>
          <a href="#" class="join-button">Gabung Sekarang</a>
        </div>

        <div class="program-box green-gradient">
                <div>
                <span class="program-number">3. Agen GEMPI</span>
                <p class="program-description">
                    Jika anda adalah ibu rumah tangga atau warga biasa yang tidak memiliki pengalaman pengelolaan sampah, namun anda ingin memiliki usaha daur ulang sebagai bisnis sampingan, bergabunglah menjadi agen GEMPI. lokasi atau rumah anda akan difungsikan sebagai drop off poin GEMPI, masyarakat dapat membawa barang daur ulang di lokasi anda, kemudian anda akan menjualnya kembali di GEMPI, dapatkan keuntungan dari peroses tersebut.
                </p>
                </div>
                <a href="#" class="join-button">Gabung Sekarang</a>
            </div>

            <div class="program-box white">
                <div>
                <span class="program-number">4. Pemilik Gudang Sortir</span>
                <p class="program-description">
                    Bank sampah dapat menjadi mitra Gempi untuk membantu peroses pengumpulan atau penjualan kembali sampah daur ulang. Apapun level Bank sampah anda, mulai dari Bank sampah unit, sampai bank sampah pusat, anda bisa bergabung di GEMPI untuk mendapat akses lebih luas terhadap nasabah bank sampah anda. Dapatkan juga akses teknologi GEMPI secara gratis.
                </p>
                </div>
                <a href="#" class="join-button">Gabung Sekarang</a>

            </div>
                <div class="program-box green-gradient">
                    <div>
                    <span class="program-number">5. Gudang Akhir</span>
                    <p class="program-description">
                        Gudang pengumpulan akhir dapat bermitra dengan gempi untuk menjaga suplay material barang, sekaligus akses terhadap jejaring pengepul-pemulung di ekosistem daur ulang gempi. Teknologi kami juga dapat membantu perusahaan anda lebih efisien dan efektif. Tidak ada biaya dalam kemitraan, anda mendapat benefit kemitraan secara gratis, daftar sekarang.
                    </p>
                    </div>
                    <a href="#" class="join-button">Gabung Sekarang</a>
                </div>
 
      </div>

      
  
   



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
