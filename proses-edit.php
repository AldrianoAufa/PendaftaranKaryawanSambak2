<?php 

include('config.php');

// cek apakah tombol simpan sudah diklik atau belum?
if (isset($_POST['simpan'])) {

    // ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $jo = $_POST['job_desk'];
    $pengalaman = $_POST['pengalaman'];

    // buat query update
    $sql = "UPDATE calon_karyawan_sambak SET nama='$nama', alamat='$alamat', jenis_kelamin='$jk', job_desk='$jo', pengalaman='$pengalaman' WHERE id=$id";

    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if ($query) {
        // kalau berhasil alihkan ke halaman list_siswa.php
        header('Location: list_peserta.php');
    } else {
        // Kalau gagal tampilkan pesan
        die("Gagal Menyimpan perubahan");
    }
} else {
    die("Akses dilarang....");
}

?>