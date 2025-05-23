<?php
session_start();
$connection = mysqli_connect("localhost", "root", "", "apdp");
?>


<!DOCTYPE html>
<html>

<head>

    <!-- Favicon -->
    <link href="C:\xampp\htdocs\ecommerce\images\Favicon.PNG" rel="icon">

    <title>OM SWEETS</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Super Market Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //for-mobile-apps -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- font-awesome icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- js -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- //js -->
    <link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
</head>

<body>



    <?php
    include 'themepart/header.php'
    ?>
    <!-- header -->


    <!--- pakagedfoods --->
    <?php
    $userid = $_SESSION['uid'];

    // login chack
    if (!isset($_SESSION['uid'])) {
        header("location:login.php");
    }
    // Delete
    if (isset($_GET['did'])) {
        $did = $_GET['did'];
        $did = mysqli_query($connection, "delete from  tbl_cart where cart_id='{$did}'");
    }
    echo "<h1>Cart</h1>";
    $q = mysqli_query($connection, "select * from tbl_cart where user_id='{$userid}' ");
    $count = mysqli_num_rows($q);
    if ($count > 0) {

        echo "<table border='1' class='timetable_sub'>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Name</th>";
        echo "<th>photo</th>";
        echo "<th>Price</th>";
        echo "<th>Qty</th>";
        echo "<th>SubTotal</th>";
        echo "<th>Delete</th>";

        echo "</tr>";
        $i = 0;
        $grandtotal = 0;
        while ($data = mysqli_fetch_array($q)) {
            $pq = mysqli_query($connection, "select * from tbl_product where pro_id='{$data['product_id']}'");
            $pdata = mysqli_fetch_array($pq);
            $i++;
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>{$pdata['pro_name']}</td>";
            echo "<td><img src='admin/uploads/{$pdata['pro_photo']}'width='25'/></td>";
            echo "<td>{$pdata['pro_price']}</td>";
            echo "<td>{$data['product_qty']}</td>";
            $subtotale = $pdata['pro_price'] * $data['product_qty'];
            $grandtotal += $subtotale;
            echo "<td>$subtotale</td>";
            echo "<td><a href='cart.php?did={$data['cart_id']}'>X</td>";

            echo "</tr>";
        }
        echo "<tr>
<td></td><td></td><td></td><td></td><td>Total</td>
<td>$grandtotal</td>

</tr>";
        echo "</table>";
        echo "<a href='checkout.php'>Checkout  | </a>";


    } else {
        echo "Cart is Empty";
    }
    echo "<a href=shop.php>Shop</a>";
    ?>
    <!--- pakagedfoods --->



    <!-- footer -->

    <?php

    include 'themepart/footer.php'
    ?>

    <!-- footer -->



    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- top-header and slider -->
    <!-- here stars scrolling icon -->
    <script type="text/javascript">
        $(document).ready(function() {
            /*
            	var defaults = {
            	containerID: 'toTop', // fading element id
            	containerHoverID: 'toTopHover', // fading element hover id
            	scrollSpeed: 1200,
            	easingType: 'linear' 
            	};
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!-- //here ends scrolling icon -->
    <script src="js/minicart.min.js"></script>
    <script>
        // Mini Cart
        paypal.minicart.render({
            action: '#'
        });

        if (~window.location.search.indexOf('reset=true')) {
            paypal.minicart.reset();
        }
    </script>
    <!-- main slider-banner -->
    <script src="js/skdslider.min.js"></script>
    <link href="css/skdslider.css" rel="stylesheet">
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('#demo1').skdslider({
                'delay': 5000,
                'animationSpeed': 2000,
                'showNextPrev': true,
                'showPlayButton': true,
                'autoSlide': true,
                'animationType': 'fading'
            });

            jQuery('#responsive').change(function() {
                $('#responsive_wrapper').width(jQuery(this).val());
            });

        });
    </script>
    <!-- //main slider-banner -->

</body>

</html>