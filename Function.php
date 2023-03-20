<?php
      //koneksi ke database
      mysqli_connect("localhost", "username", "password", "nama_database");
      $conn = mysqli_connect("localhost", "username", "password", "nama_database");

      //query untuk mengambil data dari tabel
      $query = "SELECT name FROM nama_tabel";

      //eksekusi query dan looping hasilnya
      $result = mysqli_query($conn, $query);
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<span class='data-list'>" . $row['name'] . "</span>";
      }
?>