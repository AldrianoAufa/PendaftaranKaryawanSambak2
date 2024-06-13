<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Calon Karyawan | Sambal Bakar</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"  
    />

    <link rel="stylesheet" href="list_peserta.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg position-sticky shadow bg-danger">
      <div class="container">
      <a class="navbar-brand" href="#"><span class="brand">Sambal </span><span class="LogoBrand text-secoundary">Bakar</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                <a class="text-secondary" href="index.php">Home</a>
                </li>
            </ul>
          </div>
      </div>
    </nav>

    <div class="judul text-center p-4">
        <h4>Nama Calon Pekerja yang sudah mendaftar</h4>
    </div>

    <br>
 
    <!-- <div class="card-peserta d-flex justify-content-center">
    <table border="2" class="tabel-peserta"> -->
            <!-- <tr>
                <td>nama</td>
                <td>Alamat</td>
                <td>Jenis Kelamin</td>
                <td>Jenis Olimpiade</td>
                <td>Asal Sekolah</td>
                <td>Tindakan</td>
                
            </tr>
            <tr>
                <td> : </td>
                <td> : </td>
                <td> : </td>
                <td> : </td>
                <td> : </td>
            </tr>
        <tbody border="1"> -->
    <div class="container">
        <div class="row d-flex justify-content-center">
            

            <?php
            $sql = "SELECT * FROM calon_karyawan_sambak";
            $query = mysqli_query($db, $sql);

            while($karyawan = mysqli_fetch_array($query)){
                echo "<div class='col-md-4 col-sm-12 m-3'>";
                echo "<div class='card-siswa p-2'>";
                echo "<table border='0'>";
                echo "<tr>";
                echo "<td> Nama </td>";
                echo "<td> : </td>";
                echo "<td>".$karyawan['nama']."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td> Alamat </td>";
                echo "<td> : </td>";
                echo "<td>".$karyawan['alamat']."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td> Jenis Kelamin </td>";
                echo "<td> : </td>";
                echo "<td>".$karyawan['jenis_kelamin']."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>  </td>";
                echo "<td> : </td>";
                echo "<td>".$karyawan['job_desk']."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td> Asal Sekolah </td>";
                echo "<td> : </td>";
                echo "<td>".$karyawan['pengalaman']."</td>";
                echo "</tr>";
                echo "</table>";
                

                // echo "<td>";
                // echo "<td><a class='edit' href='form_edit.php?id=".$siswa['id']."'>edit </a>";
                // echo "<a class='delete btn-delete' id='btn-delete' href='hapus.php?id=".$siswa['id']."'>hapus</a>";
                // echo "</td>";
                echo "<button class='edit pe-3 ps-3 mt-2 bg-success'><a class='text-light' href='form_edit.php?id=".$karyawan['id']."'>edit </a></button>";
                echo "<button class=' btn-delete mt-2 ms-3 ps-2 pe-2 bg-danger' id='delete'><a class='text-light' href='hapus.php?id=".$karyawan['id']."'>hapus</a></button>";
                echo "</div>";
                echo "</div>";
            }
            ?>

        <!-- </tbody>
     </table> -->
       </div>
    </div>

    

    <h5 class="text-center p-5">Jumlah Peserta: <span class="total-peserta"><?php echo mysqli_num_rows($query) ?></span></h5>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script src="list-peserta.js"></script>

</body>
</html>