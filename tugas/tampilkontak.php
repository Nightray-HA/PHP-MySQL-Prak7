<html>
<head>
	<title>List Kontak</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
    session_start();//memulai session pada server
    include 'sesi.php';//eksekusi sesi.php
?>
    <h2 align = "center" >List Kontak</h2>
    <table align = "center" border="1" style = "background : white;"><!--tabel menampilkan data-->
		<tr>
			<td>NO</td>
			<td>Nama</td>
			<td>Jenis Kelamin</td>
			<td>E-mail</td>
            <td>Alamat</td>
            <td>Kota</td>
            <td>Pesan</td>
		</tr>
		<?php
			//mengeksekusi file koneksi.php
			include "koneksi.php";
			//menjalankan query
			$kontak=mysqli_query($koneksi,"SELECT * from kontak");
			$no=1;
			//menampilkan hasil query
			foreach ($kontak as $row) {
				echo "<tr>
				<td>$no</td>
				<td>".$row['nama']."</td>
				<td>".$row['jkel']."</td>
				<td>".$row['email']."</td>
                <td>".$row['alamat']."</td>
                <td>".$row['kota']."</td>
                <td>".$row['pesan']."</td>
				</tr>";
				$no++;
			}
		?>
	</table>
    <br>
	<div align = "center" >
	<!--menuju halaman tambahkontak.php-->
	<a href="tambahkontak.php"><button class = "tombol1">Tambah Kontak</button></a>
	<!--mengakhiri session dan kembali ke form login-->
	<a href="logout.php"><button class = "tombol">Log out</button></a>
	</div>
</body>
</html>