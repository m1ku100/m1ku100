<?php
include "koneksi.php";
session_start();
?>

<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="index.php"><img src="images/bboo.png" alt="bboo.png" style="width: 160px; height: 100px"/></a>
                    </div>

                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="blog.php"><i class="fa fa-user"></i> Blog</a></li>
                            <li><a href="tentang.php"><i class="fa fa-users active"></i> Tentang</a></li>
                            <li><a href="cara.php"><i class="fa fa-crosshairs active"></i> Cara Sewa</a></li>
                            <li><a href="sk.php"><i class="fa fa-shopping-cart " ></i> Syarat & Ketentuan</a></li>
                            <li><a href="kategori.php"><i class="fa fa-list"></i> Kategori</a></li>

                            <?php
                            if($_SESSION["email"]){

                                $email1 = $_POST['email'];
                                $sql = mysqli_query($conn, "SELECT * FROM member WHERE email='$email1'");
                                if(mysqli_num_rows($sql) == 0){
                                    header("Location: index.html");
                                }else{
                                    $row = mysqli_fetch_assoc($sql);
                                }

                                ?>

                                <li><a href="logout.php"><i class="fa fa-sign-out"></i><?php echo $row['username'] ?> Logout</a></li>
                                <?php
                            }
                            else{?>
                                <li><a href="login.php"><i class="fa fa-sign-in active"></i>Login </a>  </li>
                                <?php
                            }
                            ?>
                        </ul>
                        <br>
                        <br>

                        <form action="search.php" method="post" >

                            <div class="search_box pull-right">
                                <input type="text" placeholder="Search" name="search"/>

                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->


</header><!--/header-->
