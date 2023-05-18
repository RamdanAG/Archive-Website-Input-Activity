<?php
session_start(); //memulai session

require 'function.php';

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // query untuk mencari data pengguna berdasarkan username
    $result = mysqli_query($conn, "SELECT * FROM akun WHERE username = '$username'");
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        // verifikasi password
        if (password_verify($password, $row["password"])) {
            // jika password benar, set session dan redirect ke halaman utama
            $_SESSION["login"] = true;
            header("location: index.php");
            exit;
        }
    }
    // jika username atau password salah, set flag error
    $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOgin</title>
    <link rel="stylesheet" href="Style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;500;900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="Heading-Text">
            <h6>Di Mulai Dari Sini</h6>
            <h1>Selamat Pagi<span>.</span></h1>
            <h4>Selesaikan login untuk mengakses <b class="boldtext">Dashboard</b></h4>
        </div>
        <div class="forminput">
            <?php if (isset($error) && $error) : ?>
                <p style="color:red; font-style:italic; text-align:center;">Username / Password / Kode Pegawai salah</p>
            <?php endif; ?>
            <form action="" method="post">
                <div class="two-columns">
                    <tr>
                        <td><label for="username" class="label-text"></label></td>
                        <td><input name="username" class="bentuk hoverinput" type="text" placeholder="Username" autofocus maxlength="30" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <td><label for="password" class="label-text"></label></td>
                        <td><input name="password" class="bentuk hoverinput" type="password" placeholder="password" maxlength="12" class="text-align:center;"></td>
                    </tr>
                    <tr>
                        <td><label for="kode_pegawai" class="label-text"></label></td>
                        <td><input name="kode_pegawai" class="bentuk hoverinput" type="password" placeholder="Kode Pegawai" maxlength="6"></td>
                    </tr>
                </div>
                <input type="submit" value="Submit" class="input5 bentuk" name="login" />
            </form>
        </div>
    </div>
</body>

</html>