<?php

include("config.php");

if(isset($_POST['daftar'])){

    //ambil data dari formulir
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $jo = $_POST['job_desk'];
    $pengalaman = $_POST['pengalaman'];

    //buat array
    
    $sql = "INSERT INTO calon_karyawan_sambak (nama, alamat, jenis_kelamin, job_desk, pengalaman) VALUE ('$nama', '$alamat', '$jk', '$jo', '$pengalaman')";
    $query = mysqli_query($db, $sql);

    //apakah queery simpan berhasil?
    if( $query ) {
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }
} else {
    die("akses dilarang...");
}

?>