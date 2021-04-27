<?php
include 'koneksi.php';
//menangkap value dari form
$nim            = $_POST['nim'];
$nama           = $_POST['nama'];
$jurusan        = $_POST['jurusan'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$alamat         = $_POST['alamat'];

$query = "INSERT INTO mahasiswa SET nim='$nim', nama='$nama', jurusan='$jurusan', jenis_kelamin='$jenis_kelamin', 
    alamat='$alamat'";
mysqli_query($koneksi, $query);//menjalankan query
header("location:index.php")//redirect halaman ke halaman index.php
?>