<?php
require 'koneksi.php';

if(isset($_POST['simpan'])){
    
    $namaskema = $_POST['namaskema']['name'];
    $kodeskema = $_POST['kodeskema']['name'];
    $jenisskema = $_POST['jenisskema']['name'];
    $jumlahunit = $_POST['jumlahunit']['name'];
    $hargaskema = $_POST['hargaskema']['name'];
    $dekcripsiskema = $_POST['deskripsiskema']['name'];

    $extensi = explode(".".$_FILES['fileskema']['name']);
    $fileskema = "fileskema-".round(microtime(true)).".".end($extensi);
    $sumber = $_FILES['fileskema']['tmp_name'];
    $upload = move_uploaded_file($sumber, "assets/berkasskema.".$fileskema);
    if(mysqli_query($conn, "INSERT INTO skema (namaskema, kodeskema, jenisskema, jumlahunit, hargaskema, fileskema, deskripsiskema)
    VALUES ('$namaskema', '$kodeskema', '$jenisskema', '$jumlahunit', '$hargaskema', '$fileskema', '$deskripsiskema')"));{
        header("Location: //localhost/lspmi/userasesi/uploadberkaspendukung.php");
    }else{
        echo "Registrasi Gagal : " . mysqlierror($conn);
    }
}
?>