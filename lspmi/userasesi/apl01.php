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
                <div class="apl01">
                    <form action="//localhost/lspmi/database/apl01.php" method="POST" enctype="multipart/form-data">
                        <h1>FR.APL.01. PERMOHONAN SERTIFIKASI KOMPETENSI</h1>
                        <h2>Bagian 1 : Rincian Data Pemohon Sertifikasi</h2><br>
                        <a> Pada bagian ini, cantumkan data pribadi, data pendidikan formal serta data pekerjaan anda pada saat ini.</a><br><br>
                        <h3>a. Data Pribadi</h3>
                        <table class="table1">
                            <tr>
                                <td>Nama Lengkap</td>
                                <td></td>
                                <td>:</td>
                                <td><input type="text" name="namalengkap"></td>
                            </tr>
                            <tr>
                                <td>No. KTP/NIK/Paspor</td>
                                <td></td><td>:</td>
                                <td><input type="number" name="nik"></td>
                            </tr>
                            <tr>
                                <td>Tempat Lahir</td><td></td>
                                <td>:</td>
                                <td><input type="text" name="tempatlahir"></td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td><td></td>
                                <td>:</td>
                                <td><input class="date" type="date" name="tgllahir"></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td><td></td>
                                <td>:</td>
                                <td><select name="jk" id="jk">
                                    <option value="laki-laki">Laki-laki</option>
                                    <option value="perempuan">Perempuan</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Kebangsaan</td><td></td>
                                <td>:</td>
                                <td><input type="text" name="kebangsaan"></td>
                            </tr>
                            <tr>
                                <td>Alamat Domisili</td><td></td>
                                <td>:</td>
                                <td><textarea type="text" name="alamat"></textarea></td>
                            </tr>
                            <tr>
                                <td>No. Telepon/HP</td><td></td>
                                <td>:</td>
                                <td><input type="number" name="nohp"></td>
                            </tr>
                            <tr>
                                <td>Email</td><td></td>
                                <td>:</td>
                                <td><input type="text" name="email"></td>
                            </tr>
                        </table><br><br>
                        <h3>b. Data Pekerjaan Sekarang</h3>
                        <table class="table2">
                            <tr>
                                <td>Nama Institusi/Perusahaan</td>
                                <td>:</td>
                                <td><input type="text" name="institusi"></td>
                            </tr>
                            <tr>
                                <td>Jabatan</td>
                                <td>:</td>
                                <td><input type="text" name="jabatan"></td>
                            </tr>
                            <tr>
                                <td>Alamat Kantor</td>
                                <td>:</td>
                                <td><input type="text" name="alamatkantor"></td>
                            </tr>
                            <tr>
                                <td>No. Telepon Kantor</td>
                                <td>:</td>
                                <td><input type="int" name="telpkantor"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><h3>Tujuan Asesmen</h3></td>
                                <td>:</td>
                                <td><select name="tujuanasesmen" id="tujuanasesmen">
                                    <option value="Sertifikai Baru">Sertifikasi Baru</option>
                                    <option value="Sertifikasi Ulang">Sertifikasi Ulang</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <button type="submit" class="btn" name="simpan" value="upload">Lanjut Upload Dokumen</button>
                    </form>
                </div>
            </div>
        </div>

        <script src="//localhost/lspmi/asset/js/script.js"></script>
    </body>
</html>