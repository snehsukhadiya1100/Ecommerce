<?php
$connection = mysqli_connect("localhost","root","","apdp");
session_start();
    if($_POST)
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $q = mysqli_query($connection,"select * from tbl_user where user_email='{$email}' and user_password='{$password}'");
        $data = mysqli_fetch_array($q);
        $count = mysqli_num_rows($q);
        if($count>0)
        {
            $_SESSION['uid']=$data['user_id'];
            $_SESSION['uname'] = $data['user_name'];
            header("location:shop.php");
        
        }else{
            echo "<script>alert('Login Failed')</script>";
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from brandio.io/envato/iofrm/html/login14.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Jan 2025 06:12:58 GMT -->
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
                       
                        <div class="w3ls_logo_products_left">
			<!-- <a href="shpo.php" class="text-decoration-none d-block d-lg-none"> -->
			<a href="home.html" class="text-decoration-none">
				<a href="shop.php"><img src="images\omlogo.png" alt="Logo" width="170px" height="auto"></a>
			</a>
		</div>

                        <div class="page-links">
                            <a href="login.php" class="active">Login</a><a href="registered.php">Register</a>
                        </div>
                        <form method="post">
                            <input class="form-control" type="text" name="email" placeholder="E-mail Address" required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Login</button> <a href="forget14.html">Forget password?</a>
                            </div>
                        </form>
                        <div class="other-links">
                            <span>Or login with</span><a href="#"><i class="fab fa-facebook-f"></i></a><a href="#"><i class="fab fa-google"></i></a><a href="#"><i class="fab fa-linkedin-in"></i></a>
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

<!-- Mirrored from brandio.io/envato/iofrm/html/login14.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Jan 2025 06:12:59 GMT -->
</html>