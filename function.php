<?php
$conn = mysqli_connect("localhost", "root", "", "database_bbpmp");
$sql = "SELECT * FROM kegiatan";
$ID_kegiatan = ["ID_kegiatan"];

function tambah($data)
{
    global $conn;
    $nama_kegiatan = htmlspecialchars($data["nama_kegiatan"]);
    $tempat_kegiatan = htmlspecialchars($data["tempat_kegiatan"]);
    $PDM = htmlspecialchars($data["PDM"]);
    $metode_kegiatan = htmlspecialchars($data["metode_kegiatan"]);
    $tanggal_mulai = htmlspecialchars($data["tanggal_mulai"]);
    $tanggal_akhir = htmlspecialchars($data["tanggal_akhir"]);
    $file1 = htmlspecialchars($data["file1"]);
    $file2 = htmlspecialchars($data["file2"]);
    $file3 = htmlspecialchars($data["file3"]);
    $file4 = htmlspecialchars($data["file4"]);

    if (isset($data["ID_kegiatan"])) {
        $ID_kegiatan = htmlspecialchars($data["ID_kegiatan"]);
    } else {
        // lakukan sesuatu jika kunci "ID_kegiatan" tidak ditemukan
    }
    // kode selanjutnya

    switch ($metode_kegiatan) {
        case "option1":
            $metode_kegiatan = "Daring";
            break;
        case "option2":
            $metode_kegiatan = "Luring";
            break;
        case "option3":
            $metode_kegiatan = "Hybrid";
            break;
        default:
            $metode_kegiatan = "";
    }

    $query = "INSERT INTO kegiatan (nama_kegiatan, tempat_kegiatan, PDM, metode_kegiatan, tanggal_mulai, tanggal_akhir, file1, file2, file3, file4) VALUES ('$nama_kegiatan','$tempat_kegiatan','$PDM','$metode_kegiatan','$tanggal_mulai','$tanggal_akhir','$file1','$file2','$file3','$file4')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM kegiatan WHERE ID_kegiatan = $id");
    return mysqli_affected_rows($conn);
}

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}
?>