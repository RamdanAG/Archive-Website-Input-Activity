<?php
include 'function.php';
if (isset($_POST["submit"])) {
  tambah($_POST);
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
            <input type="text" name="nama_kegiatan" placeholder="......." required maxlength="20">
          </div>

          <div class="input-box">
            <span class="details">Tempat Kegiatan (1-20)</span>
            <input type="text" name="tempat_kegiatan" placeholder="......." required maxlength="20">
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
            <input type="text" name="PDM" placeholder="......." required maxlength="12">
          </div>

          <div class="input-box">
            <span class="details">Metode Kegiatan Pilihan</span>
            <select id="pilihan" name="metode_kegiatan"
              style="padding: 0px 20px 3px 0px; border-radius: 5px; text-align: center;   border-color: #9b59b6; margin-left: 1em;">
              <option value="option1">Daring</option>
              <option value="option2">Luring</option>
              <option value="option3">Hybrid</option>
            </select>

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
            <input type="file" name="file4" style="border:none; margin-top: 0.8em; margin-left: 1.2em;">
          </div>
          <div class="gender-details">
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Submit" name="submit">
        </div>
        <div class="button">
          <button class="buttonhome"
            style="height: 100%; width: 100%; border-radius: 5px; border: none; color: #fff; font-size: 18px; font-weight: 500; letter-spacing: 1px; cursor: pointer; background: #3c79f5;"><a
              href="Dashboard.php" style="color:white; text-decoration: none;">Kembali Ke Dashboard</a></button>
        </div>
      </form>
    </div>
  </div>

</body>

</html>