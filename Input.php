<?php
    $conn = mysqli_connect("localhost", "root", "", "database_bbpmp");

    if (isset($_POST["submit"])) {
    // ambil setiap data di elemen
    $namaKegiatan = $_POST["nama_kegiatan"];
    $tempatkegiatan = $_POST["tempat_kegiatan"];
    $PDM = $_POST["PDM"];
    $metodeKegiatan = $_POST["metode_kegiatan"];
    $tanggalMulai = $_POST["tanggal_mulai"];
    $tanggalAkhir = $_POST["tanggal_akhir"];
    $File1 = $_POST["file1"];
    $File2 = $_POST["file2"];
    $File3 = $_POST["file3"];
    $File4 = $_POST["file4"];

    $query = "INSERT INTO kegiatan (nama_kegiatan, tempat_kegiatan, PDM, metode_kegiatan, tanggal_mulai, tanggal_akhir, file1, file2, file3, file4) VALUES ('','$namaKegiatan','$tempatkegiatan','$PDM','$metodeKegiatan','$tanggalMulai','$File1','$File2','$File3','$File4')";

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
    <div class="title">Dokumentasi Kegiatan</div>
    <div class="content">
      <form action="" method="post">
          <div class="user-details">
            <div class="input-box">
              <span class="details">Nama Kegiatan (1-20) </span>
              <input type="text" name="nama_kegiatan" placeholder="......." required>
            </div>

            <div class="input-box">
              <span class="details">Tempat Kegiatan</span>
              <input type="text" name="tempat_kegiatan" placeholder="......." required>
            </div>

            <div class="input-box">
              <span class="details">Tanggal Mulai</span>
              <input type="date" name="tanggal_mulai" required>
            </div>

            <div class="input-box">
              <span class="details">Tanggal Akhir</span>
              <input type="date" name="tanggal_akhir" required>
            </div>

            <div class="input-box">
              <span class="details">PDM (1-12)</span>
              <input type="text" name="PDM" placeholder="......." required>
            </div>
            
            <div class="input-box">
              <span class="details">Dokumentasi</span>
              <input type="file" name="file1" style="border:none; margin-top: 0.8em;">
            </div>

            <div class="input-box">
              <span class="details">Implementasi</span>
              <input type="file" name="file2" style="border:none; margin-top: 0.8em;">
            </div>

            <div class="input-box">
              <span class="details">Word</span>
              <input type="file" name="file3" style="border:none; margin-top: 0.8em;">
            </div>

            <div class="input-box">
              <span class="details">Luring</span>
              <input type="file" name="file4" style="border:none; margin-top: 0.8em;">
            </div>
            
            <div class="input-box">
              <span class="details">Metode Kegiatan Pilihan</span>
              <select id="pilihan" name="metode_kegiatan" style="padding: 0px 20px 3px 0px; border-radius: 5px; text-align: center;   border-color: #9b59b6; margin-left: 1em;">
                <option value="option1" style="">Daring</option>
                <option value="option2">Luring</option>
                <option value="option3">Hybrid</option>
              </select>

            </div>
            <div class="gender-details">
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
