<?php
require 'function.php';

$id = $_GET["ID_kegiatan"];

if (hapus($id)) {
    echo "
        <script>
            alert('Data berhasil dihapus!');
            document.location.href = 'Dashboard.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Data gagal dihapus!');
            document.location.href = 'Dashboard.php';
        </script>
    ";
}
?>
