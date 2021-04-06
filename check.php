<?php
include 'out.php';
// menyimpan data kedalam variabel
$nim                 = $_POST['nama_lengkap'];
$nama                = $_POST['email'];
$jurusan             = $_POST['no.hp'];
$alamat_jemput       = $_POST['alamat_jemput'];
$alamat_kirim        = $_POST['alamat_kirim'];
$waktu_jemput        = $_POST['waktu_jemput'];
$waktu_kirim         = $_POST['waktu_kirim'];
$catatan             = $_POST['catatan'];
// query SQL untuk insert data
$query="INSERT INTO jurusan SET nim='$nim',nama_lengkap='$nama',email='$jurusan',no.hp='$jenis_kelamin',alamat='$alamat'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:jurusan.php");
?>