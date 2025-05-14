<?php
    $username = $namalengkap = $password = $errusername = $errnamalengkap = $errpassword = "";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LSP Media Informatika - Login</title>
    <link rel="stylesheet" href="//localhost/lspmi/asset/css/style.css">
    <link rel="stylesheet" href="//localhost/lspmi/asset/css/stylemenu.css">
    <link rel="stylesheet" href="//localhost/lspmi/asset/css/stylelogin.css">
    <link rel="stylesheet" href="//localhost/lspmi/asset/css/stylefooter.css">
</head>
<body background="//localhost/lspmi/asset/picture/2.jpg">
    <div class="container">
        <a href="//localhost/lspmi/index.html"><img src="//localhost/lspmi/asset/picture/lspmi.png" alt="logo lspmi"></a>
        <img class="bnsp" src="//localhost/lspmi/asset/picture/bnsp.png" alt="logo BNSP">
        <a class="judul">Lembaga Sertifikasi Profesi Media Informatika</a><br>
        <a class="alamat">Jl. garuda1 Blok A3 No. 3 Desa Cicadas Kec. Gunung Putri Kab. Bogor</a><br>
        <a class="mail">Email : </a>
        <a class="email" href="mailto:cs.lspmi@gmail.com" target="_blank">cs.lspmi@gmail.com </a>
        <a class="telp">No. Telepon :</a>
        <a class="wa" href="https://wa.me/+6282329465313" target="_blank"> +6282329465313</a><br>
    <hr>
    </div>
    <div class="menubar">
        <ul>
            <li><a href="//localhost/lspmi/index.html">Beranda</a></li>
            <li class="dropdown">
              <a href="javascript:void(0)" class="dropbtn">Informasi</a>
              <div class="dropdown-content">
                <a href="//localhost/lspmi/skema.php">Skema Sertifikasi</a>
                <a href="//localhost/lspmi/jadwal.html">Jadwal Sertifikasi</a>
                <a href="//localhost/lspmi/tuk.html">Data TUK</a>
                <a href="//localhost/lspmi/asesor.html">Data Asesor</a>
                <a href="//localhost/lspmi/asesi.html">Data Asesi</a>
              </div>
            </li>
            <li><a href="//localhost/lspmi/galeri.html">Galery LSP</a></li>
            <li><a href="//localhost/lspmi/profile.html">Profil LSP</a></li>
            <li class="drop">
                <a href="javascript:void(0)" class="dropb">Login</a>
            <div class="drop-content">
                <a href="loginadmin.php">Login Admin</a>
                <a href="loginasesi.php">Login Asesi</a>
                <a href="loginasesor.php">Login Asesor</a>
                <a href="logintuk.php">Login TUK</a>
            </div>
            </li>
        </ul>
    </div>
    <div class="login">
        <h1>Selamat Datang!</h1>
        <form action="register.php" method="POST">
            <a style="padding: 8px; margin: 10px; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; font-weight: 200;">Masukan username :</a>            
            <input style="padding: 4px;" type="text" name="username" value="<?php echo $username;?>" placeholder="Gunakan Email">
            <div class="eror"><?php echo $errusername;?>
            </div><br>
            <a style="padding: 24px; margin: 10px; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; font-weight: 200;">Masukan Nama :</a>
            <input style="padding: 4px;" type="text" value="<?php echo $namalengkap;?>" name="namalengkap" placeholder="Masukan Nama Lengkap">
            <div class="eror"><?php echo $errnamalengkap;?>
            </div><br>
            <a style="padding: 10px; margin: 10px; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; font-weight: 200;">Masukan Password :</a>
            <input style="padding: 4px;" type="password" value="<?php echo $password;?>" name="password" placeholder="Masukan Password Anda">
            <div class="eror"><?php echo $errpassword;?>
            </div><br><br>
            <button type="submit" name="registrasi" class="btn-input">Register</button>
            <br><br>
            <a>Sudah punya akun? </a>
            <a href="loginasesi.php">Masuk disini</a>
        </form>
    </div>
    <div class="footer">
        <a>Hubungi kami di :</a><br>
       
        <a class="fb" href="https://www.facebook.com/100071421048351" target="_blank">Facebook</a><br>
        <a class="ig" href="https://instagram.com/lspmi.id" target="_blank">Instagram</a><br>
        <a class="nowa" href="https://wa.me/+6282329465313" target="_blank">Whatsapp</a>
    </div>
</body>
</html>