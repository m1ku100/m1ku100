<?php
include "../koneksi.php";


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
    <style>
        body {
            background-image: url("img/wall2.jpg");
            background-repeat: repeat;
            opacity: 63%;
            background: auto;

        }


    </style>
</head>
<body background="img/wall.jpg">
<section>
    <br><br><br><br><br><br><br><br>
    <div class="container">
        <div class="row">

                <div class="login-form login-card center-block">
                    <form method="post" action="loginpro.php">
                    
                        <table align="center">
                            <tr>
                                <td>Username</td>
                                <td><input required type="text" name="useradmin" placeholder="Please enter username">
                                </td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td><input required type="password" name="passwordadmin"
                                           placeholder="please enter password"></td>

                            </tr>
                            <tr>
                                <td>
                                    <button  type="submit" class="btn btn-default">masuk</button>

                                </td>
                            </tr>


                        </table>

                    </form>

                </div>

            </div>
</section>

</div>


</body>
</html>