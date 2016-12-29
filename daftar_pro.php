<?php

error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "babyboo";
session_start();


$conn = mysqli_connect($servername, $username, $password, $dbname);
$query = "insert into member (nama,no_identitas,alamat,telp,username,email,password)
values ('$_REQUEST[nama]','$_REQUEST[no_identitas]','$_REQUEST[alamat]','$_REQUEST[telp]','$_REQUEST[username]','$_REQUEST[email]','$_REQUEST[password]')";

mysqli_query($conn,$query);
header("location: login.php")

?>



