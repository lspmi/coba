<?php
require 'koneksi.php';
$username = $_POST["username"];
$namalengkap = $_POST["namalengkap"];
$password = $_POST["password"];
$errusername = $errnamalengkap = $errpassword = "";

if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty(trim($_POST['username']))){
        $errusername = "Username belum diisi";
        header("Location:registrasi.php");
    }else{$username = $_POST['username'];
    }
    if(empty(trim($_POST['namalengkap']))){
        $errnamalengkap = "Nama Lengkap belum diisi";
        header("Location:registrasi.php");
    }else{$namalengkap = $_POST['namalengkap'];
    }
    if(empty(trim($_POST['password']))){
        $errpassword = "Password tidak boleh kosong";
        header("Location:registrasi.php");
    }else{$password = $_POST['password'];
    }
    if(empty($errusername) && empty($errnamalengkap) && empty($errpassword)){
        $query_sql = "INSERT INTO userasesi (username, namalengkap, password)
        VALUES ('$username', '$namalengkap', '$password')";
        
        if (mysqli_query($conn, $query_sql)){
            header("Location: //localhost/lspmi/login/loginasesi.php");
        }else{
            echo "Registrasi Gagal : " . mysqlierror($conn);
        }
    }
}
?>