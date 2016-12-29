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
include "header.php";
?>
<br>
<?php
$idbarang = $_GET['idbarang'];
$query = "select * from barang where idbarang='$idbarang'";
$cart = "select * from keranjang";
$result = mysqli_query($conn, $query);
$resultcart = mysqli_query($conn, $cart);
if (mysqli_num_rows($result) > 0)
{
//                echo "<font color='#ffffff'>Data Ada. </font>";
    $row = mysqli_fetch_assoc($result);
    $row2 = mysqli_fetch_assoc($resultcart);
//                echo "<font color='#ffffff'>".$row['nim'].' '.$row['nama']."</font>";
}
else
{
    echo "Tidak Ditemukan";
}
?>
<div class="col-sm-9 padding-right">
    <div class="product-details"><!--product-details-->
        <div class="col-sm-5">
            <div class="view-product">
                <img src="img/<?php echo $row['gambar']?>" alt="" />

            </div>
        </div>
        <div class="col-sm-7">
            <div class="product-information"><!--/product-information-->

                <h2><?php echo $row[n_barang]?></h2>
                <p>ID : <?php echo $row['idbarang']?></p>

								<span>
									<span>Rp. <?php echo $row['harga']?>/week</span>
									<label>Quantity:</label>
									<input type="text" value="" name="jumlah" />


                                        <a href="cartaksi.php?idbarang=<?php echo $row['idbarang']?>">
                                        <button type="submit" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Add to cart
									</button></a>

								</span>
                <p><b><?php echo $row['stock']?></b> In Stock</p>
                <p><b>Description : </b> <br>
                    <?php echo $row['keterangan']?>
                </p>


            </div><!--/product-information-->
        </div>
    </div>



    <?php
    include "footer.php";
    ?>


    <script src="js/jquery.js"></script>
    <script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
</body>
</html>

