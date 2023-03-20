<?php
    $conn = mysqli_connect("localhost", "root", "", "db_webarsip");

    if (isset($_POST["submit"])) {
    // ambil setiap data di elemen
    $namaKegiatan = $_POST["nama_kegiatan"];
    $jenisKegiatan = $_POST["jenis_kegiatan"];
    $lokasi = $_POST["lokasi"];
    $PIC = $_POST["PIC"];
    $tanggal = $_POST["tanggal"];
    $Dokumentasi = $_POST["file"];

    $query = "INSERT INTO kegiatan (nama_kegiatan, jenis_kegiatan, lokasi, PIC, tanggal, file) VALUES ('$namaKegiatan','$jenisKegiatan','$lokasi','$PIC','$tanggal','$Dokumentasi')";

    mysqli_query($conn, $query);
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive Registration Form | CodingLab </title>
    <link rel="stylesheet" href="Style/input.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Isi Inputan</div>
    <div class="content">
      <form action="" method="post">
          <div class="user-details">
            <div class="input-box">
              <span class="details">Nama Kegiatan (1-20) </span>
              <input type="text" name="nama_kegiatan" placeholder="......." required>
            </div>
            <div class="input-box">
              <span class="details">jenis Kegiatan (1-20)</span>
              <input type="text" name="jenis_kegiatan" placeholder="......." required>
            </div>
            <div class="input-box">
              <span class="details">Provinsi</span>
              <input type="text" name="lokasi" placeholder="......." required>
            </div>
            <div class="input-box">
              <span class="details">Tanggal</span>
              <input type="date" name="tanggal" required>
            </div>
            <div class="input-box">
              <span class="details">PIC (1-10)</span>
              <input type="text" name="PIC" placeholder="......." required>
            </div>
            <div class="input-box">
              <span class="details">Dokumentasi/PDF</span>
              <input type="file" name="file" accept=".pdf" style="border:none; margin-top: 0.8em;">
            </div>
          </div>
          <div class="button">
            <input type="submit" value="Submit" name="submit">
          </div>
      </form>
    </div>
  </div>

</body>
</html>
