<html>
<head><title>List Kontak</title></head>
<body>
    <h2>List Kontak</h2>
    <table border="1">
		<tr>
			<td>NO</td><td>Nama</td><td>Jenis Kelamin</td><td>E-mail</td><td>Alamat</td><td>Kota</td><td>Pesan</td>
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
    <a href="tambahkontak.php"><button>Tambah Kontak</button></a>
</body>
</html>