<?php
session_start();
session_destroy();
header("location: index.php");
$_SESSION["email"] = false;
?>