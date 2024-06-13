<!-- Alert data berhasil / gagal ditambahkan -->
<?php if(isset($_GET['status'])): ?>

    <?php
              if($_GET['status'] == 'sukses') {
                  echo "<div class='card text-bg-success mb-3 position-absolute top-50 start-50 translate-middle message' id='message' style='max-width: 18rem;'>
                  <div class='card-header text-center'>Berhasil!</div>
                  <div class='card-body justify-content-center'>
                    <h5 class='card-title text-center'>Data Sukses ditambahkan</h5>
                  </div>    
                </div>";
              } else {
                  echo "<div class='card text-bg-danger mb-3 position-absolute top-50 start-50 translate-middle message' id='message' style='max-width: 18rem;'>
                  <div class='card-header text-center'>Gagal!</div>
                  <div class='card-body justify-content-center'>
                    <h5 class='card-title text-center'>Data Anda Gagal ditambahkan</h5>
                  </div>    
                </div>";
              }
          
          ?>
 
  <?php endif; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pendaftaran Karyawan Sambal Bakar | Jakarta</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"  
    />

    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <!-- Bagian Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top shadow">
      <div class="container">
        <a class="navbar-brand text-light" href="#"><span class="brand">Sambal </span><span class="LogoBrand text-secoundary">Bakar</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" aria-current="page" href="form_daftar.php">Pendaftaran</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Bagian Navbar -->

    <!-- Bagian Hero -->
    <section class="carousel pt-5">
      <div class="hero d-flex align-items-center justify-content-center text-light">
        <div class="row p-4 text-center position-absolute text-primary">
          <div class="col">
            
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Bagian Hero -->

    <!--Bagian Tombol Daftar -->
    <section class="daftar">
      <div class="container">
         <div class="row">

          <div class="col-md-6 d-flex justify-content-end">
  
            <a class="btn btn-center text-white"
            href="form_daftar.php">Daftar Sekarang</a>
          </div>
          <div class="col-md-6 d-flex justify-content-start">
            <a class="btn btn-center text-white"
            href="list_peserta.php">Lihat Calon Karyawan</a>
          </div>
          
        </div>
      </div>
    </section>
    <!-- Akhir Bagian Tombol Daftar -->

    <!-- Bagian Sponsor -->
    <section class="container">
      <div class="row p-4 pt-5 pb-5 mt-5 mb-5 justify-content-center">
        <div class="col-md-2 p-3">
          <img src="Panas1.jpeg" class="w-100" alt="">
        </div>
        <div class="col-md-2 p-3 align-items-center">
          <img src="Pajangan3.png" class="w-100 h-100 align-items-center" alt="">
        </div>
        <div class="col-md-2 p-3">
          <img src="SAMBAL BAKAR.jpg" class="w-100" alt="">
        </div>
      </div>
    </section>
    <!-- Akhir Bagian Sponsor -->
    
    <!-- Bagian Tanggal -->
    <section class="main note">
    <a class="navbar-brand text-light" href="#"><span class="brand">SAMBAL BAKAR LEBIH ENAK DARI PADA SEAFOOD BAKARAN!!!</a>
    </section>
    <!-- Akhir Bagian Tanggal -->

    <!-- Bagian Lokasi  -->
    <footer class="bg-dark p-4 d-flex justify-content-center">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253834.52054073423!2d106.46820545196532!3d-6.24205488411134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1000d9fc8f3%3A0x585b92b753668eb1!2sSambal%20Bakar%20Indonesia%2C%20Pesanggrahan!5e0!3m2!1sid!2sid!4v1718158992181!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </footer>
    <!-- Akhirs Bagian Lokasi -->

    <!-- Link Bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>

    <!-- Menampilkan alert waktu 1.5 detik -->
    <script>
      let message = document.querySelector('.message');
      const tes = setTimeout(() => {
        message.style.display = 'none';
      }, 1500);

     if (message) {
      tes();
     }

    </script>
  </body>
</html>
