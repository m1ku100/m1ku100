<?php
session_start();
$sid = session_id();
include "koneksi.php";
?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart | E-Shopper</title>
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
</head><!--/head-->
<body>
<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Shopping Cart</li>
            </ol>
        </div>
        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                <tr class="cart_menu">
                    <td >Item</td>
                    <td >jumlah</td>
                    <td >Price</td>
                    <td >total</td>

                </tr>
                </thead>

                <?php
                $sql = mysqli_query("SELECT * FROM keranjang, barang WHERE id_session='$sid' AND keranjang.idbarang=barang.idbarang");
                while($row=mysqli_fetch_array($sql)){
                $subtotal    = $row[harga]* $row[jumlah];
                $total       = $total + $subtotal;
                echo"<tr>
                    <td>$row[n_barang]</td>
                    <td>$row[jumlah]</td>
                    <td>$row[harga]</td>
                    <td>$subtotal</td>
                </tr>";
                }?>
               </table>
            <h2>Total Belanja : <b>$total</b></h2>

</body>
</html>