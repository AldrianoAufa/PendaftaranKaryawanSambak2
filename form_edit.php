<?php 

include("config.php");

// kalau tidak ada id di query string
if (!isset($_GET['id']) ) {
    header('Location: list_peserta.php');
}

// ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_karyawan_sambak WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang diedit tidak ditemukan
if ( mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link

      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"

      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"  
    />

    <link rel="stylesheet" href="form_edit.css">
    
    
    <title>Formulir Edit Karyawan | Sambal Bakar Jakarta</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg position-sticky top-0 shadow">

      <div class="container">
  
        <a class="navbar-brand shadow black " href="#">Edit Form Pendaftaraan Karyawan <span class="brand">Sambal </span><span class="LogoBrand text-secoundary">Bakar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
              <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
              </li>
          </ul>
        </div>
      </div>
    </nav>

  <section id="form" class="pb-4">

    <br><br>

    <div class="container text-dark">
      
      <div class="row justify-content-center" data-aos="fade-up"
      data-aos-duration="1300">
        <div class="col-md-6 pe-4 ps-4">
          
          <form action="proses-edit.php"
          method="POST">
            <input type="hidden" name="id" value="<?php echo $siswa['id']?>"/>
            
            <div class="mb-3">
              <label for="nama" class="form-label">Nama lengkap</label>
              <input name="nama" type="name" class="form-control" id="nama" required minlength="3"
              aria-describedby="nama" value="<?php echo $siswa['nama']?>">
            </div>
            <div class="mb-3">
              <label for="alamat" class="form-label">Alamat</label>
              <textarea name="alamat" class="form-control input" id="alamat" rows="3"
              style="box-shadow: 0px 0px 10px #ccc;" placeholder="" required><?php echo
              $siswa['alamat']?></textarea>
            </div>
            <div class="mb-3">
              <label for="jenis_kelamin" class="form-label">Jenis kelamin</label>
              <?php $jk = $siswa['jenis_kelamin']; ?>
            <div class="form-check">
                <input class="form-check-input" type="radio"
                name="jenis_kelamin" value="Laki-laki"   id="flexRadioDefault1"
                <?php echo ($jk == 'Laki-laki') ? "checked": ""?>>
                <label class="form-check-label" for="flexRadioDefault1">
                    laki-laki
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio"
                name="jenis_kelamin" value="Perempuan" id="flexRadioDefault2"
                checked  <?php echo ($jk == 'Perempuan') ? "checked": ""?>>
                <label class="form-check-label" for="flexRadioDefault2">
                    perempuan
                </label>
                </div>
            </div>
            <div class="mb-3">
              <label for="job_desk" class="form-label">JOB DESK :</label>
              <?php $jo = $siswa['job_desk'];?>
              <select class="form-select" aria-label="Default select example" name="job_desk">
                <option selected>Pelayan</option>
                <option value="CEO" <?php echo ($jo == 'CEO') ? "selected":
                ""?>>CEO</option>
                <option value="GM" <?php echo ($jo == 'GM') ?
                "selected": ""?>>General Manager</option>
                <option value="Kasir" <?php echo ($jo == 'Kasir') ?
                "selected": ""?>>Kasir</option>
                <option value="DWH" <?php echo ($jo == 'DWH') ? "selected":
                ""?>>Dishwasher</option>
                <option value="Chef" <?php echo ($jo == 'Chef') ? "selected":
                ""?>>Chef</option>
                <option value="Barista" <?php echo ($jo == 'Barista') ?
                "selected": ""?>>Barista</option>
                </select>
            </div>
            <div class="mb-3">
              <label for="pengalaman" class="form-label">Pengalaman</label>
              <input name="pengalaman" type="text" value="<?php echo $siswa['pengalaman'] ?>" class="form-control" id="pengalaman" required minlength="6"
              aria-describedby="pengalaman">
            </div>

            
            
            <input class="btn" type="submit" value="Simpan"
            name="simpan">
          </form>
        </div>
      </div>
    </div>
    <br>
  </section>
    
    <script

      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"

      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
</body>
</html>