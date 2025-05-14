<?php
require 'koneksi.php';
$result = mysqli_query($conn, "SELECT * FROM apl01");

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LSP Media Informatika - Dashboard Asesi</title>
        <link rel="stylesheet" href="//localhost/lspmi/asset/css/styledashboard.css">
        <link rel="stylesheet" href="//localhost/lspmi/asset/js/script.js">
    </head>
    <body background="//localhost/lspmi/asset/picture/2.jpg">
        <div class="containerr">
            <div class="sidebar">
                <div class="header">
                    <div class="list-item">
                        <a href="">
                            <span class="description-header">LSP Media Infromatika</span>
                        </a>
                    </div>
                </div>
                <div class="main">
                    <div class="list-item">
                        <a href="dashboardasesi.php">
                            <span class="description">Dashboard</span>
                        </a>
                    </div>
                    <div class="list-item">
                        <a href="apl01.php">
                            <span class="description">APL.01-Pendaftaran</span>
                        </a>
                    </div>
                    <div class="list-item">
                        <a href="apl02.php">
                            <span class="description">APL.02-Asesmen Mandiri</span>
                        </a>
                    </div>
                    <div class="list-item">
                        <a href="ak01.php">
                            <span class="description">AK.01-Persetujuan Asesmen dan Kerahasiaan</span>
                        </a>
                    </div>
                    <div class="list-item">
                        <a href="ak03.php">
                            <span class="description">AK.03-Umpan Balik Asesmen</span>
                        </a>
                    </div>
                    <div class="list-item">
                        <a href="ak04.php">
                            <span class="description">AK.04-Form Banding</span>
                        </a>
                    </div><br><br>
                    <div class="list-item">
                        <a href="//localhost/lspmi/index.html">
                            <span class="description">Logout</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="main-content">
                <div id="menu-button">
                    <input type="checkbox" id="menu-checkbox">
                    <label for="menu-checkbox" id="menu-label">
                        <div id="asesmen"></div>
                    </label>
                </div>
                <div>
                    <h1 class="juduldashboard">Selamat Datang</h1>
                    <h3>Data APL.01 :</h3><br>
                    <table border="1" class="tabeldashboard">
                        <tr class="judul-tabel">
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>NIK</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>No. HP</th>
                            <th>Email</th>
                        </tr>
                        <tr class="isitabel">
                            <?php
                                while($row = mysqli_fetch_assoc($result)):?>
                                <td><?php echo $row['iduser'];?></td>
                                <td><?php echo $row['namalengkap'];?></td>
                                <td><?php echo $row['nik'];?></td>
                                <td><?php echo $row['tgllahir'];?></td>
                                <td><?php echo $row['alamat'];?></td>
                                <td><?php echo $row['nohp'];?></td>
                                <td><?php echo $row['email']; ?></td>
                        </tr>
                        <?php endwhile;?>
                    </table>
                </div>
            </div>
        </div>

        <script src="//localhost/lspmi/asset/js/script.js"></script>
    </body>
</html>