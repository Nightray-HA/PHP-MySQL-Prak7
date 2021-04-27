<html>
<head>
    <title>Form Input</title>
    <link rel="stylesheet" type="text/css" href="style.css"><!--external css-->
</head>
<body>
<?php
    session_start();//memulai session pada server
    include 'sesi.php';//eksekusi sesi.php
?>
<h2 align = "center">Masukkan Data Kontak</h2>
    <form  method = "POST" action="simpan.php"><!--form untuk memasukkan data-->
    <table align = "center" border = "1" style = "background : white;">
        <tr><td>Nama</td><td>: <input type="text" name = "nama"></td></tr>
        <tr><td>Jenis Kelamin</td><td>: 
            <input type="radio" name = "jenis_kelamin" value = "Laki-laki">Laki-laki
            <input type="radio" name = "jenis_kelamin" value = "Perempuan">Perempuan</td></tr>
        <tr><td>E-mail</td><td>: <input type="text" name = "email"></td></tr>
        <tr><td>Alamat</td><td>: <input type="text" name = "alamat"></td></tr>
        <tr><td>Kota</td><td>: <input type="text" name = "kota"></td></tr>
        <tr><td>Pesan</td><td>: <input type="text" name  = "pesan"></td></tr>
    </table>
    <br>
    <div align = "center" >
        <button type="submit" value ="simpan" class = "tombol1">Simpan</button>
    </div>
    </form>
    <!--tombol kembali ke halaman tampilkontak.php-->
    <div align = "center"><a href="tampilkontak.php"><button class = "tombol">Batal</button></a>
    </div>
</body>
</html>