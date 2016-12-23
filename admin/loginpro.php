<?php
session_start();
include "../koneksi.php";

    $user = $_POST['useradmin'];
    $pass = $_POST['passwordadmin'];

    $query = "select id_admin, useradmin, passwordadmin from admin where id_admin='$user' AND  password=MD5('$pass') ";
    $cek = mysqli_num_rows($query);
        if (cek == '0'){
            echo "<script>alert('Masuk Gagal!')</script>";
        }
        else {
            $hasil = mysql_fetch_row($query);
            $_SESSION['id_admin'] = $hasil['id_petugas'];
            $_SESSION['useradmin'] = $hasil['useradmin'];
            echo "<script>alert('Masuk Berhasil!')</script>";
        }
?>
<meta http-equiv="refresh" content="1;url=index.php"/>
