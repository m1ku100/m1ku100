<?php
include "koneksi.php";


if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $login = mysqli_query($conn, "select * from user where username='$username' AND password='$password'");
    if (mysqli_num_rows($login) > 0) {
        $_SESSION['username'] = $username;
        echo "<script>window.open('index.php','_self')</script>";
    } else {
        echo '<div class="alert alert-danger"><button type="button" data-dismiss="alert" aria-hidden="true">&times;</button>Who Are You?? You not an admin here</div>';
    }
}
?>
