<?php
require 'koneksi.php';
$username = $_POST["username"];
$password = $_POST["password"];

$query_sql = "SELECT * FROM userasesi 
            WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($conn, $query_sql);

if (mysqli_num_rows($result) > 0){
    header("Location: //localhost/lspmi/userasesi/dashboardasesi.php");
}else{
    echo "<center><h1>Username atau Password Anda Salah. Silahkan coba kembali.</h1>
            <button><strong><a href='//localhost/lspmi/login/loginasesi.php'>Login</a></strong></button></center>";
}
?>