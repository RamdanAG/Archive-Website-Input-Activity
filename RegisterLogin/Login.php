<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOgin</title>
    <link rel="stylesheet" href="../Style/styleLogin/Login.css">
    <link rel="stylesheet" href="../resetCSS/reset.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;500;900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="Heading-Text">
        <h6>Di Mulai Dari Sini</h6>
        <h1>Selamat Pagi<span>.</span></h1>
        <h4>Selesaikan login untuk mengakses <b class="boldtext">Dashboard</b></h4>
    </div>
    
    <div class="forminput">
        <form action="post">
            <div class="two-columns">
                <tr>
                    <td><label for="Username" class="label-text"></label></td>
                    <td><input class="input1 bentuk hoverinput" id="Username" type="text" placeholder="Username"></td>
                </tr>
                <tr>
                    <td><label for="email" class="label-text"></label></td>
                    <td><input class="input2 bentuk hoverinput" id="email" type="email" placeholder="Email"></td>
                </tr>
            </div>
            <tr>
                <td><label for="password" class="label-text"></label></td>
                <td><input class="input3 bentuk hoverinput" id="password" type="password" placeholder="Password"></td>
            </tr>
            <tr>
                <td><label for="kodePegawai" class="label-text"></label></td>
                <td><input class="input4 bentuk hoverinput" id="KodePegawai" type="password" placeholder="Kode Pegawai"></td>
            </tr>
            <input type="submit" value="Submit" class="input5 bentuk2"/>
        </form>
    </div>
    <img src="https://source.unsplash.com/random/500x500/?technology" alt="Gambar Random" class="img">
</body>
</html>