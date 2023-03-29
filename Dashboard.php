<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Style/Dashboard.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
</head>

<body>
    <div class="table">
        <div class="table_header">
            <p>product detail</p>
            <div>
                <form action="" method="post">
                <?php
                    include 'function.php';
                    $kegiatan = query("SELECT * FROM kegiatan");
                    // if( isset($_POST["cari"])){
                    //     $kegiatan = cari($_POST["keyword"]);
                    // }
                ?>
                    <input placeholder="Keyword Pencarian" name="keyword" autofocus autocomplete="off"/>
                    <button type submit name="cari" class="add_new">Cari!</button>
                    <button class="add_new">+add New</button>
                </form>
            </div>
        </div>
        <?php
        $sql = "SELECT * FROM kegiatan";
        include 'function.php';

        $result = mysqli_query($conn, $sql);

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
                        echo '<th>Update & Hapus</th>';
                        echo '</tr>';
                    echo '</thead>';
                echo '<tbody>';

                    if (mysqli_num_rows($result) > 0) {
                    $no = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
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
                        echo '<td>';
                        echo '<button style="margin-right: 10px;"><a style="color:white;" href="update.php?ID_kegiatan='. $row["ID_kegiatan"] .'"><i class="fa-solid fa-pen-to-square"></i></a></button>';
                        echo '<button><a style="color:white;" href="hapus.php?ID_kegiatan='. $row["ID_kegiatan"] .'"><i class="fa-sharp fa-solid fa-trash"></i></a></button>';
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