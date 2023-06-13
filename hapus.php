<?php
session_start();
require 'function.php';

$id = $_GET["ID_kegiatan"];

if (hapus($id)) {
    echo "
        <script>
            alert('Data berhasil dihapus!');
            document.location.href = 'index.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Data gagal dihapus!');
            document.location.href = 'index.php';
        </script>
    ";
}

?>
