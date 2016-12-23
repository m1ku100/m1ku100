<?php

include "koneksi.php";


            if (isset($_POST['login'])) {
                        $username = mysqli_real_escape_string($conn, $_POST['username']);
                        $password = mysqli_real_escape_string($conn, $_POST['password']);
                        $login = mysqli_query($conn, "select * from admin where username='$username' AND password='$password'");
                        if (mysqli_num_rows($login) > 0) {
                            $_SESSION['username'] = $username;
                            header("location: dashboard.php");
                        } else {
                            echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>You are not an Admin! <a href="index.html"><- Back to site</a></div>';
                        }
                    }
                    ?>



<meta http-equiv="refresh" content="1;url=dashboard.php"/>
