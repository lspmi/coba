<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LSP Media Informatika - Dashboard Asesi</title>
        <script src="https:/kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" href="//localhost/lspmi/asset/css/styledashboard.css">
        <link rel="stylesheet" href="//localhost/lspmi/asset/css/styledashboardadmin.css">
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
                        <a href="dashboardadmin.php">
                            <span class="description">Dashboard</span>
                        </a>
                    </div>
                    <div class="list-item">
                        <a href="masterskema.php">
                            <span class="description">Master Skema</span>
                        </a>
                    </div>
                    <div class="list-item">
                        <a href="mastertuk.php">
                            <span class="description">Master TUK</span>
                        </a>
                    </div>
                    
                    <div class="list-item">
                        <a href="masterinputasesor.php">
                            <span class="description">Master Input Asesor</span>
                        </a>
                    </div>
                    <div class="list-item">
                        <ul>
                            <li class="dropdown">
                            <a href="" class="dropbtn">
                                <label class="description"> Perangkat Asesmen
                                <span class="fas fa-caret-down"></label></span></a>
                            <div class="dropdown-content">
                                <a href="apl01.php">
                                <span class="description">APL.01-Pendaftaran</span>
                                </a>
                                <a href="apl02.php">
                                <span class="description">APL.02-Asesmen Mandiri</span>
                                </a>
                                <a href="ak01.php">
                                <span class="description">AK.01-Persetujuan Asesmen dan Kerahasiaan</span>
                                </a>
                                <a href="ak02.php">
                                <span class="description">AK.02-Rekaman Asesmen</span>
                                </a>
                                <a href="ak03.php">
                                <span class="description">AK.03-Umpan Balik Asesmen</span>
                                </a>
                                <a href="ak04.php">
                                <span class="description">AK.04-Form Banding</span>
                                </a>
                                <a href="ak05.php">
                                <span class="description">AK.05-Laporan Asesmen</span>
                                </a>
                                <a href="ak06.php">
                                <span class="description">AK.06-meninjau Asesmen</span>
                                </a>
                            </div>
                            </li>
                        </ul>
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
            </div>
        </div>

        <script src="//localhost/lspmi/asset/js/script.js"></script>
    </body>
</html>