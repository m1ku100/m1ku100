<?php
include "koneksi.php";
session_start();

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
<br>
<div class="container">
    <div class="col-lg-1">
        <div class="row">
            <div class="row">

            </div>

        </div>

    </div>

    <div class="col-lg-10">
        <div class="row">
            <div class="row">
                <h2 class="title text-center">OUR ITEM</h2>

                <div class="col-sm-12 padding-right">
                    <div class="features_items"><!--features_items-->
                        <?php
                        $query = "select * from barang";
                        $result = mysqli_query($conn, $query);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="img/<?php echo $row['gambar'] ?>" alt=""
                                                     style="width: 248px;height:229px "/>
                                                <h2>Rp.<?php echo $row['harga'] ?></h2>
                                                <p><?php echo $row['n_barang'] ?></p>
                                                <a href="#" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>Add
                                                    to cart</a>
                                            </div>
                                            <div class="product-overlay">
                                                <div class="overlay-content">
                                                    <h2>Rp.<?php echo $row['harga'] ?></h2>
                                                    <p><?php echo $row['nama_barang'] ?></p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i
                                                            class="fa fa-shopping-cart"></i>Add to cart</a>
                                                </div>
                                                <img src="images/home/new.png" class="new" alt=""/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php
                            }
                        }

                        ?>
                    </div>
                </div>
            </div>
        </div>

    </div>


</div>

<?php
include "footer.php";
?>


</body>
</html>
