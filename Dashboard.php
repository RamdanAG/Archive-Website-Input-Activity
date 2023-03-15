<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/Dashboard.css">
    <title>Document</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>No.</th>
			<th>Nama Kegiatan</th>
			<th>Alamat</th>
		</tr>
		<?php
			//koneksi ke database
			$koneksi = mysqli_connect("localhost", "root", "root", "db_bbpmp");

			//query untuk mengambil data dari tabel
			$query = "SELECT * FROM kegiatan";
			$result = mysqli_query($koneksi, $query);

			//loop untuk menampilkan data dari tabel
			$no = 1;
			while($row = mysqli_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td>" . $no . "</td>";
				echo "<td>" . $row["username"] . "</td>";
				echo "<td>" . $row["password"] . "</td>";
				echo "</tr>";
				$no++;
			}

			//menutup koneksi database
			mysqli_close($koneksi);
		?>
	</table>
</body>
</html>