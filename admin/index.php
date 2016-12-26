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
    <title>Login | Baby-boo</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/prettyPhoto.css" rel="stylesheet">
    <link href="../css/price-range.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/responsive.css" rel="stylesheet">
    <link href="admin.css" rel="stylesheet">

</head>
<body background="img/wall.jpg">

<style>
    body {
        background-image: url("img/wall2.jpg");
        background-repeat: repeat;
        opacity: 63%;
        background: auto;

    }


</style>


<section>
    <br><br><br><br><br><br><br><br>
    <div class="container">
        <div class="row">

            <div class="login-form login-card center-block">
                <form method="post" action="index.php">
                    <table align="center">
                        <tr>
                            <td>Username</td>
                            <td><input required type="text" name="username" placeholder="Please enter username">
                            </td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input required type="password" name="password"
                                       placeholder="please enter password"></td>
                        </tr>
                    </table>

                                <button type="submit" value="login" name="login" class="btn btn-default center-block">MASUK</button>



                    <?php
                    if (isset($_POST['login'])) {
                        $username = mysqli_real_escape_string($conn, $_POST['username']);
                        $password = mysqli_real_escape_string($conn, $_POST['password']);
                        $login = mysqli_query($conn, "select * from admin where username='$username' AND password='$password'");
                        if (mysqli_num_rows($login) > 0) {
                            $_SESSION['username'] = $username;
                            echo "<script>window.open('dashboard.php','_self')</script>";
                        } else {
                            echo '<div class="alert alert-danger"><button type="button" data-dismiss="alert" aria-hidden="true">&times;</button>Who Are You?? You not an admin here</div>';
                        }
                    }
                    ?>
                </form>

            </div>

        </div>
</section>

</div>


</body>
</html>