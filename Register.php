<?php
require 'function.php';

if(isset($_POST["register"])) {
    if(register($_POST) > 0) {
        echo "<script>alert('User telah berhasil terdaftar!');</script>";
        header("location: login.php");
    } else {
        echo "<script>alert('Registrasi gagal!');</script>";
    }
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
            <h4>Selesaikan Register untuk mengakses <b class="boldtext">Login</b></h4>
        </div>
        <div class="forminput">
            <form action="" method="post">
                <div class="two-columns">
                    <tr>
                        <td><label for="username" class="label-text"></label></td>
                        <td><input name="username" class="bentuk hoverinput" type="text" placeholder="Username" autofocus maxlength="30" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <td><label for="password" class="label-text"></label></td>
                        <td><input name="password" class="bentuk hoverinput" type="password" placeholder="password" maxlength="12"></td>
                    </tr>
                    <tr>
                        <td><label for="kode_pegawai" class="label-text"></label></td>
                        <td><input name="kode_pegawai" class="bentuk hoverinput" type="password" placeholder="Kode Pegawai" maxlength="6"></td>
                    </tr>
                </div>
                <input type="submit" value="Submit" class="input5 bentuk" name="register"/>
            </form>
        </div>
    </div>
</body>
</html>