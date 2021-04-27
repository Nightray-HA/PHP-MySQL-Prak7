<?php
include 'koneksi.php'; //eksekusi koneksi.php
$nama           = $_POST['nama'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$email          = $_POST['email'];
$alamat         = $_POST['alamat'];
$kota           = $_POST['kota'];
$pesan          = $_POST['pesan'];
//menjalankan query
$query = "INSERT INTO kontak SET nama='$nama', jkel='$jenis_kelamin', email='$email', alamat='$alamat', 
            kota='$kota', pesan='$pesan' ";
mysqli_query($koneksi, $query);
header("location:index.php")
?>