<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LSP Media Informatika - Dashboard Asesi</title>
        <link rel="stylesheet" href="//localhost/lspmi/asset/css/styledashboard.css">
        <link rel="stylesheet" href="//localhost/lspmi/asset/js/script.js">
        <link rel="stylesheet" href="//localhost/lspmi/asset/css/styleapl01.css">
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
                <div class="uploadbukti">
                    <form action="" method="POST" enctype="multipart/form-data">
                    <h1>UPLOAD DOKUMEN BUKTI PENDUKUNG</h1>
                    <table class="table3">
                    <tr>
                        <td><a>Upload KTP</a></td>
                        <td>:</td>
                        <td><input type="file" name="uploadktp" value="upload"></td>
                    </tr>
                    <tr>
                        <td><a>Upload Ijazah</a></td>
                        <td>:</td>
                        <td><input type="file" name="uploadijazah" value="upload"></td>
                    </tr>
                    <tr>
                        <td><a>Upload Sertifikat Pelatihan (Jika Ada)</></td>
                        <td>:</td>
                        <td><input type="file" name="uploadsertpel" value="upload"></td>
                    </tr>
                    <tr>
                        <td><a>Upload Surat Pengalaman Kerja</a></td>
                        <td>:</td>
                        <td><input type="file" name="uploadskkerja" value="upload"></td>
                    </tr>
                </table>
                <button type="submit" class="btn" name="proses" value="upload">Simpan</button>
                </form>
                <?php
                    require 'koneksi.php';

                    if(isset($_POST['proses'])){

                    $dir = "berkasapl01/";
                    $uploadktp = $_FILES['uploadktp']['name'];
                    $uploadijazah = $_FILES['uploadijazah']['name'];
                    $uploadsertpel = $_FILES['uploadsertpel']['name'];
                    $uploadskkerja = $_FILES['uploadskkerja']['name'];
    
                    move_uploaded_file($_FILES['uploadktp']['tmp_name'],$dir.$uploadktp);
                    move_uploaded_file($_FILES['uploadijazah']['tmp_name'],$dir.$uploadijazah);
                    move_uploaded_file($_FILES['uploadsertpel']['tmp_name'],$dir.$uploadsertpel);
                    move_uploaded_file($_FILES['uploadskkerja']['tmp_name'],$dir.$uploadskkerja);

                    mysqli_query($conn, "INSERT INTO uploadberkasbukti SET uploadktp='$uploadktp', uploadijazah='$uploadijazah', uploadsertpel='$uploadsertpel', uploadskkerja='$uploadskkerja'");

                    echo '<a>Upload Berkas Berhasil, <a href="apl02.php">lanjut APL02</a></a>';
                    }
                ?>
                </div>
            </div>
        </div>

        <script src="//localhost/lspmi/asset/js/script.js"></script>
    </body>
</html>