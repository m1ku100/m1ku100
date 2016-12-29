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
                        //pagination
                        if (isset($_GET['page'])) {
                            $page = $_GET['page'];
                        } else {
                            $page = 1;
                        }
                        $per_page = 9;
                        // Page will start from 0 and Multiple by Per Page
                        $start_from = ($page - 1) * $per_page;

                        $que = "select * from barang ORDER BY tgl_input DESC LIMIT $start_from, $per_page";
                        $result2 = mysqli_query($conn, $que);

                        if (mysqli_num_rows($result2) > 0) {
                            while ($row = mysqli_fetch_assoc($result2)) {
                                ?>
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="img/<?php echo $row['gambar'] ?>" alt=""
                                                     style="width: 248px;height:229px "/>
                                                <h2>Rp.<?php echo $row['harga'] ?></h2>
                                                <p><?php echo $row['n_barang'] ?></p>




                                            </div>
                                            <div class="product-overlay">
                                                <div class="overlay-content">
                                                    <h2>Rp.<?php echo $row['harga'] ?></h2>
                                                    <p><?php echo $row['nama_barang'] ?></p>
                                                    <a href="detail.php?idbarang=<?php echo $row['idbarang'] ?>" class="btn btn-default add-to-cart"><i
                                                            class="fa fa-shopping-cart"></i>Lihat Detail</a>
                                                </div>
                                                <img src="images/home/new.png" class="new" alt=""/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                $no++;
                            }
                        }
                        ?>
                    </div>
                    <center>
                        <ul class="pagination">
                            <?php
                            //Now select all from table
                            $x = mysqli_query($conn, "SELECT * from barang");
                            /*var_dump($x);*/
                            // Count the total records
                            $total_records = mysqli_num_rows($x);

                            //Using ceil function to divide the total records on per page
                            $total_pages = ceil($total_records / $per_page);

                            //Going to first page
                            echo "<li><a href='kategori.php?page=1' style='text-decoration: none'>" . '&laquo;' . "</a></li>";

                            for ($i = 1; $i <= $total_pages; $i++) {
                                echo "<li><a href='kategori.php?page=$i' style='text-decoration: none'>" . $i . "</a></li>";
                            };
                            // Going to last page
                            echo "<li><a href='kategori.php?page=$total_pages' style='text-decoration: none'>" . '&raquo;' . "</a></li>";
                            ?>
                        </ul>
                    </center>
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
