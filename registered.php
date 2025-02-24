<?php
session_start();
$connection = mysqli_connect("localhost", "root", "", "apdp");
if (isset($_POST['ibtn'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pswd = $_POST['pswd'];

    $query = mysqli_query($connection, "insert into tbl_user(user_name, user_email, user_password) values('{$name}', '{$email}', '{$pswd}')");
    if ($query) {
        echo "<script>alert('Sign up Successfully');window.location='login.php'</script>";
        //  header("location:login.php");
    } else {
        echo "<script>alert('Error')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from brandio.io/envato/iofrm/html/register14.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Jan 2025 06:13:13 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iofrm</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme14.css">
</head>
<body>
    <div class="form-body">
        <div class="iofrm-layout">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="website-logo-inside">
                            <a href="index.html">
                                <div class="logo">
                                    <img class="logo-size" src="images/logo-light.svg" alt="">
                                </div>
                            </a>
                        </div>
                        <h3>Get more things done with Loggin platform.</h3>
                        <p>Access to the most powerfull tool in the entire design and web industry.</p>
                        <div class="page-links">
                            <a href="login.php">Login</a><a href="registar.php" class="active">Register</a>
                        </div>
                        <form method="post">
                            <input class="form-control" type="text" name="name" placeholder="Full Name" required>
                            <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                            <input class="form-control" type="password" name="pswd" placeholder="Password" required>
                            <div class="form-button">
                                <button id="submit" type="submit" name="ibtn" class="ibtn"><a href="login.php">Register</a></button>
                            </div>
                        </form>
                        <div class="other-links">
                            <span>Or register with</span><a href="#"><i class="fab fa-facebook-f"></i></a><a href="#"><i class="fab fa-google"></i></a><a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/main.js"></script>
</body>

<!-- Mirrored from brandio.io/envato/iofrm/html/register14.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Jan 2025 06:13:13 GMT -->
</html>