<?php

require 'function.php';
// Ambil semua data kegiatan
$kegiatan = query("SELECT * FROM kegiatan");
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archive - Website BBPMP</title>
    <link rel="stylesheet" href="Style/Dashboard.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
</head>

<body style="background-color:white;">
    <div class="table" id="myTable">
        <div class="table_header">
            <p style="color:white;">BBPMP JAWA BARAT - Pokja</p>
            <div>
                <form action="" method="get" style="display: inline-block;">
                    <label class="cari">Pencarian :</label>
                    <input type="text" name="cari" placeholder="Cari">
                    <input type="submit" value="Cari">
                </form>
            </div>
        </div>
        <?php
        $sql = "SELECT * FROM kegiatan";

        // $result = mysqli_query($conn, $sql);

        if (isset($_GET['cari'])) {
            $keyword = $_GET['cari'];
            $kegiatan = cari($keyword);
        } else {
            $kegiatan = mysqli_query($conn, $sql);
        }

        // Menampilkan data dalam tabel
        echo '<div class="table_section">';
        echo '<table>';
        echo '<thead>';
        echo '<tr>';
        echo '<th>S. No</th>';
        echo '<th>Nama Kegiatan</th>';
        echo '<th>Tempat Kegiatan</th>';
        echo '<th>PDM</th>';
        echo '<th>Metude Kegiatan</th>';
        echo '<th>Tanggal Mulai</th>';
        echo '<th>Tanggal Akhir</th>';
        echo '<th>file1</th>';
        echo '<th>file2</th>';
        echo '<th>file3</th>';
        echo '<th>file4</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

        if (mysqli_num_rows($kegiatan) > 0) {
            $no = 1;
            while ($row = mysqli_fetch_assoc($kegiatan)) {
                echo '<tr>';
                echo '<td>' . $no++ . '</td>';
                echo '<td>' . $row['nama_kegiatan'] . '</td>'; // Ganti dengan kolom gambar Anda
                echo '<td>' . $row['tempat_kegiatan'] . '</td>'; // Ganti dengan kolom nama Anda
                echo '<td>' . $row['PDM'] . '</td>'; // Ganti dengan kolom email Anda
                echo '<td>' . $row['metode_kegiatan'] . '</td>'; // Ganti dengan kolom owner Anda
                echo '<td>' . $row['tanggal_mulai'] . '</td>'; // Ganti dengan kolom owner Anda
                echo '<td>' . $row['tanggal_akhir'] . '</td>'; // Ganti dengan kolom owner Anda
                echo '<td>' . $row['file1'] . '</td>'; // Ganti dengan kolom owner Anda
                echo '<td>' . $row['file2'] . '</td>'; // Ganti dengan kolom owner Anda
                echo '<td>' . $row['file3'] . '</td>'; // Ganti dengan kolom owner Anda
                echo '<td>' . $row['file4'] . '</td>'; // Ganti dengan kolom owner Anda
                echo '</tr>';
            }
        }
        echo '</tbody>';
        echo '</table>';
        echo '</div>';

        mysqli_close($conn);
        ?>
    </div>
</body>

</html>