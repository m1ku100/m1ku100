<?php
 include "koneksi.php";
	session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login | Baby-boo</title>
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
<?php
include "header.php";
?>



<section id="form"><!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form"><!--login form-->



                    <h2>Login to your account</h2>
                    <form action="login.php" method="post" >

                        <input type="email" placeholder="Email Address" name="email" required >
                        <input type="password" placeholder="Password" name="password" required>
							
                        <button type="submit" name="login" class="btn btn-default">Login</button>

                        <?php



                        if (isset($_POST['login'])) {
                            $email = mysqli_real_escape_string($conn, $_POST['email']);
                            $password = mysqli_real_escape_string($conn, $_POST['password']);
                            $login = mysqli_query($conn, "select * from member where email='$email' AND password='$password'");
                            if (mysqli_num_rows($login) > 0) {
                                $_SESSION['email'] = $email;
                                $_SESSION["email"] = true;
                                echo "<script>window.open('index.php','_self')</script>";
                            } else {
                                echo '<div class="alert alert-danger"><button type="button" data-dismiss="alert" aria-hidden="true">&times;</button>Try Again !</div>';
                            }
                        }

                        ?>
                    </form>
                </div><!--/login form-->
            </div>





            <div class="col-sm-1">
                <h2 class="or">OR</h2>
            </div>


            <div class="col-sm-4">
                <div class="signup-form"><!--sign up form-->
                    <h2>New User Signup!</h2>
                    <form action="daftar_pro.php" method="post">


                        <input type="text" placeholder="Name" name="nama" required>
                        <input type="text" placeholder="No KTP" name="no_identitas" required>
                        <input type="text" placeholder="Alamat" name="alamat" required>
                        <input type="text" placeholder="Telepon" name="telp" required>
                        <input type="text" placeholder="username" name="username" required>
                        <input type="email" placeholder="Email Address" name="email" required>
                        <input type="password" placeholder="Password" name="password" required>
                        


                        <button type="submit" class="btn btn-default" name="daftar">Signup</button>


                    </form>
                </div><!--/sign up form-->
            </div>
        </div>
    </div>
</section><!--/form-->







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