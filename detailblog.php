<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "babyboo";
session_start();

$conn = mysqli_connect($servername, $username, $password, $dbname);
?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Baby-boo</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
<body>
<?php
include "header.php" ?>
<section>
    <div class="container">
        <div class="row">

            <?php
            $idberita = $_GET['id_berita'];
            $query = "select * from blog where id_berita='$idberita'";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0)
            {
//                echo "<font color='#ffffff'>Data Ada. </font>";
                $row = mysqli_fetch_assoc($result);
//                echo "<font color='#ffffff'>".$row['nim'].' '.$row['nama']."</font>";
            }
            else
            {
                echo "Tidak Ditemukan";
            }
            ?>


            <p><?php echo $row['tgl_berita']?> </p>
            <h2><?php echo $row['judul'] ?></h2>
            <img src="img/blog/<?php echo $row['foto'] ?>"><br>
            <h4><?php echo $row['isi']?> </h4>
            </div>
        </div>
    </section>
<?php
include "footer.php";

?>

</body>

</html>

