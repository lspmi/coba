<?php
require 'koneksi.php';

$namalengkap = $_POST['namalengkap'];
$NIK = $_POST['nik'];
$tl = $_POST['tempatlahir'];
$tgllahir = $_POST['tgllahir'];
$jk = $_POST['jk'];
$kebangsaan =$_POST['kebangsaan'];
$alamat = $_POST['alamat'];
$hp = $_POST['nohp'];
$email = $_POST['email'];
$institusi = $_POST['institusi'];
$jabatan = $_POST['jabatan'];
$alamatkantor = $_POST['alamatkantor'];
$telpkantor = $_POST['telpkantor'];
$tujuanasesmen = $_POST['tujuanasesmen'];

$query_sql = "INSERT INTO apl01 (namalengkap, nik, tempatlahir, tgllahir, jk, kebangsaan, alamat, nohp, email, institusi, jabatan, alamatkantor, telpkantor, tujuanasesmen)
            VALUES ('$namalengkap', '$NIK', '$tl', '$tgllahir', '$jk', '$kebangsaan', '$alamat', '$hp', '$email', '$institusi', '$jabatan', '$alamatkantor', '$telpkantor', '$tujuanasesmen')";

if (mysqli_query($conn, $query_sql)){
    header("Location: //localhost/lspmi/userasesi/uploadberkaspendukung.php");
}else{
    echo "Registrasi Gagal : " . mysqlierror($conn);
}
?>