<?php
include "koneksi.php";
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
                <h2 class="title text-center">Result</h2>
                <?php
                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                } else {
                    $page = 1;
                }
                $per_page = 9;
                // Page will start from 0 and Multiple by Per Page
                $start_from = ($page - 1) * $per_page;

                $search = $_POST['search'];
                $que = "select * from barang WHERE n_barang LIKE '%$search%' LIMIT $start_from, $per_page";
                $result2 = mysqli_query($conn, $que);
                if (mysqli_num_rows($result2) > 0) {
                    while ($row2 = mysqli_fetch_array($result2)) {
                        ?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="img/<?php echo $row2['gambar'] ?>" alt=""
                                             style="width: 248px;height:229px "/>
                                        <h2>Rp.<?php echo $row2['harga'] ?></h2>
                                        <p><?php echo $row2['n_barang'] ?></p>




                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2>Rp.<?php echo $row2['harga'] ?></h2>
                                            <p><?php echo $row2['nama_barang'] ?></p>
                                            <a href="detail.php?idbarang=<?php echo $row2['idbarang'] ?>" class="btn btn-default add-to-cart"><i
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
                    $x = mysqli_query($conn, "select * from barang WHERE n_barang LIKE '%$search%'");
                    /*var_dump($x);*/
                    // Count the total records
                    $total_records = mysqli_num_rows($x);

                    //Using ceil function to divide the total records on per page
                    $total_pages = ceil($total_records / $per_page);

                    //Going to first page
                    echo "<li><a href='search.php?page=1' style='text-decoration: none'>" . '&laquo;' . "</a></li>";

                    for ($i = 1; $i <= $total_pages; $i++) {
                        echo "<li><a href='search.php?page=$i' style='text-decoration: none'>" . $i . "</a></li>";
                    };
                    // Going to last page
                    echo "<li><a href='search.php?page=$total_pages' style='text-decoration: none'>" . '&raquo;' . "</a></li>";
                    ?>
                </ul>
            </center>
            </div>
        </div>
    </div>


</body>