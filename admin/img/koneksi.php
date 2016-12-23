<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "boo";

mysql_connect($servername, $username, $password);
mysql_selectdb( $dbname);
?>