<?php

include("config.php");

if (isset($_GET['id']) ){
  $id = $_GET['id'];

  $sql = "DELETE FROM calon_karyawan_sambak WHERE id=$id";
  $query = mysqli_query($db, $sql);

  if ($query) {
    header('location: list_peserta.php');
  } else {
    die("Gagal menghapus data...");
  }
} else {
    die("Akses dilarang...");
}
?>