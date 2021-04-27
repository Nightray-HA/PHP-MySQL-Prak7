<html>
<head><title>Form Input</title></head>
<body>
    <form method = "POST" action="simpan.php"><!--form untuk mengisi data-->
    <table>
        <tr><td>Nama</td><td><input type="text" name = "nama"></td></tr>
        <tr><td>Jenis Kelamin</td><td>
            <input type="radio" name = "jenis_kelamin" value = "Laki-laki">Laki-laki
            <input type="radio" name = "jenis_kelamin" value = "Perempuan">Perempuan</td></tr>
        <tr><td>E-mail</td><td><input type="text" name = "email"></td></tr>
        <tr><td>Alamat</td><td><input type="text" name = "alamat"></td></tr>
        <tr><td>Kota</td><td><input type="text" name = "kota"></td></tr>
        <tr><td>Pesan</td><td><input type="text" name  = "pesan"></td></tr>
        <tr><td colspan = "2"><button type="submit" value ="simpan">Simpan</button></td></tr>
    </table>
    </form>
</body>
</html>