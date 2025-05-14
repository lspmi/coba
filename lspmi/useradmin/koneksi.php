<?php
$host = "localhost";
$database = "db_lspmi";
$username = "root";
$password = "";

$conn = mysqli_connect($host, $username, $password, $database);

if(!$conn){
    die("Koneksi Gagal : " . mysqli_connect_error());
}else{
}
?>