<?php
session_start(); //memulai session

if (!isset($_SESSION["login"])) { //memeriksa apakah session login telah di set atau belum
    header("Location: login.php"); //jika belum, maka redirect ke halaman login
    exit; //keluar dari script
}
require 'function.php';

$ID_kegiatan = $_GET["ID_kegiatan"];
$dok = query("SELECT * FROM kegiatan WHERE ID_kegiatan = $ID_kegiatan")[0];

if (isset($_POST["submit"])) {
  if (ubah($_POST) > 0) {
    echo "
    <script>
      alert('data berhasil di ubah!');
      document.location.href = 'index.php';
    </script>
    ";
  } else {
    echo "
    <script>
      alert('data gagal di ubah!');
      document.location.href = 'index.php';
    </script>
    ";
  }
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
    <div class="title">Update Kegiatan</div>
    <div class="content">
      <form action="" method="post">
        <div class="user-details">
          <div class="input-box">
            <input type="hidden" name="ID_kegiatan" value="<?= $dok["ID_kegiatan"]?>">
            <span class="details">Nama Kegiatan (1-20) </span>
            <input type="text" name="nama_kegiatan" placeholder="......." required maxlength="20" value="<?= $dok["nama_kegiatan"]?>">
          </div>

          <div class="input-box">
            <span class="details">Tempat Kegiatan (1-20)</span>
            <input type="text" name="tempat_kegiatan" placeholder="......." required maxlength="20" value="<?= $dok["tempat_kegiatan"]?>">
          </div>

          <div class="input-box">
            <span class="details">Tanggal Mulai</span>
            <input type="date" name="tanggal_mulai" required value="<?= $dok["tanggal_mulai"]?>">
          </div>

          <div class="input-box">
            <span class="details">Tanggal Akhir</span>
            <input type="date" name="tanggal_akhir" required value="<?= $dok["tanggal_akhir"]?>">
          </div>

          <div class="input-box">
            <span class="details">PDM (1-12)</span>
            <input type="text" name="PDM" placeholder="......." required maxlength="12" value="<?= $dok["PDM"]?>">
          </div>

          <div class="input-box">
            <span class="details">Metode Kegiatan Pilihan</span>
            <select id="pilihan" name="metode_kegiatan"
              style="padding: 0px 20px 3px 0px; border-radius: 5px; text-align: center;   border-color: #9b59b6; margin-left: 1em;" value="<?= $dok["metode_kegiatan"]?>">
              <option value="option1">Daring</option>
              <option value="option2">Luring</option>
              <option value="option3">Hybrid</option>
            </select>

          </div>

          <div class="input-box">
            <span class="details">Dokumentasi</span>
            <input type="file" name="file1" style="border:none; margin-top: 0.8em;" value="<?= $dok["file1"]?>">
          </div>

          <div class="input-box">
            <span class="details">Implementasi</span>
            <input type="file" name="file2" style="border:none; margin-top: 0.8em;" value="<?= $dok["file2"]?>">
          </div>

          <div class="input-box">
            <span class="details">Word</span>
            <input type="file" name="file3" style="border:none; margin-top: 0.8em;" value="<?= $dok["file3"]?>">
          </div>

          <div class="input-box">
            <span class="details">Luring</span>
            <input type="file" name="file4" style="border:none; margin-top: 0.8em; margin-left: 1.2em;" value="<?= $dok["file4"]?>">
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