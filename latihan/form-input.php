<html>
<head><title>Form Input</title></head>
<body>
<!--form untuk mengisi data-->
    <form method = "POST" action="simpan.php">
    <table>
        <tr><td>NIM</td><td><input type="text" name = "nim"></td></tr>
        <tr><td>Nama</td><td><input type="text" name = "nama"></td></tr>
        <tr><td>Jenis Kelamin</td><td>
            <input type="radio" name = "jenis_kelamin" value = "L">Laki - laki
            <input type="radio" name = "jenis_kelamin" value = "P">Perempuan</td></tr>
        <tr><td>Jurusan</td>
        <td>
            <select name="jurusan">
                <option value="SISTEM INFORMASI">Sistem Informasi</option>
                <option value="INFORMATIKA">Informatika</option>
                <option value="SAINS DATA">Sains Data</option>
            </select>
        </td></tr>
        <tr><td>Alamat</td><td><input type="text" name = "alamat"></td></tr>
        <tr><td colspan = "2"><button type="submit" value ="simpan">Simpan</button></td></tr>
    </table>
    </form>
</body>
</html>