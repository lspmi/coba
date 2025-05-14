<?php
require 'koneksi.php';
$username = $_POST["username"];
$password = $_POST["password"];

$query_sql = "SELECT * FROM useradmin 
            WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($conn, $query_sql);

if (mysqli_num_rows($result) > 0){
    header("Location: //localhost/lspmi/useradmin/dashboardadmin.php");
}else{
    echo "<center><h1>Username atau Password Anda Salah. Silahkan coba kembali.</h1>
            <button><strong><a href='//localhost/lspmi/login/loginadmin.php'>Login</a></strong></button></center>";
}
?>