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
<br>
<div class="container">
    <div class="col-lg-10 col-lg-offset-1">
        <div class="row center-block">
            <h2 class="title text-center">OUR BLOG</h2>
            <div class="row">
                <center>
            <?php

            if (isset($_GET['page'])) {
                $page = $_GET['page'];
            } else {
                $page = 1;
            }
            $per_page = 3;
            // Page will start from 0 and Multiple by Per Page
            $start_from = ($page - 1) * $per_page;
            $query = "select * from blog  ORDER BY tgl_berita LIMIT $start_from, $per_page ";
            $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result)>0){
                while ($row = mysqli_fetch_assoc($result)){
                    ?>



                    <p><?php echo $row['tgl_berita']?> </p>
                    <h2><?php echo $row['judul'] ?></h2>
                    <img src="img/blog/<?php echo $row['foto'] ?>"><br>

                    <h4><?php echo substr($row['isi'],0,150) //untuk menampilkan bberapa bagian
                    // text ?></h4>
                    <br>
                    <br>
                    <br>
                    <a href="detailblog.php?id_berita=<?php echo $row['id_berita'] ?>"><button class="btn btn-warning">Baca Selengkapnya</button> </a>
                    <hr>

                    <?php


                }
            }
            ?>
                </center>
            </div>
        </div>
        <center>
            <ul class="pagination">
                <?php
                //Now select all from table
                $x = mysqli_query($conn, "SELECT * from blog");
                /*var_dump($x);*/
                // Count the total records
                $total_records = mysqli_num_rows($x);

                //Using ceil function to divide the total records on per page
                $total_pages = ceil($total_records / $per_page);

                //Going to first page
                echo "<li><a href='blog.php?page=1' style='text-decoration: none'>" . '&laquo;' . "</a></li>";

                for ($i = 1; $i <= $total_pages; $i++) {
                    echo "<li><a href='blog.php?page=$i' style='text-decoration: none'>" . $i . "</a></li>";
                };
                // Going to last page
                echo "<li><a href='blog.php?page=$total_pages' style='text-decoration: none'>" . '&raquo;' . "</a></li>";
                ?>
            </ul>
        </center>
    </div>
</div>

<?php
include "footer.php";
?>
</body>
</html>
