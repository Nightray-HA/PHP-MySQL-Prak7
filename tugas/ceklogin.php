<?php
include 'koneksi.php';//eksekusi koneksi.php
//menangkap value dari form
$username = $_POST['username'];
$password = $_POST['password'];
//menjalankan query 
$query = "SELECT username, password FROM user WHERE username = '$username' and password = '$password'";
$login = mysqli_query($koneksi,$query);
//cek data
if (mysqli_num_rows($login)>0) {
    session_start();//memulai eksekusi session pada server
    $_SESSION['username'] = $username;//inisialisasi session 
    header("location:tampilkontak.php"); //redirect halaman ke tampilkontak.php
}else
//pesan jika data tidak valid
echo "<script>alert('Username atau Password yang dimasukkan SALAH!');history.go(-1);</script>";
?>