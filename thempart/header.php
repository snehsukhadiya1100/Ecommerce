<head>
	<link rel="stylesheet" href="css\bootstrap.css">
	<link rel="stylesheet" href="css\font-awesome.css">
	<link rel="stylesheet" href="css\font-skdslider.css">
	<link rel="stylesheet" href="css\style.css">
</head>

<!-- Favicon -->
<link href="images\om-f.png" rel="icon">


<!-- header -->
<div class="agileits_header">
	<div class="container">
		<div class="w3l_offers">
			<p>SALE UP TO 10% OFF. USE CODE "SALE10%" . <a href="shop.php">SHOP NOW</a></p>
		</div>
		<div class="agile-login">
			<ul>
				<li><a href="registered.php"> Create Account </a></li>
				<li><a href="login.php">Login</a></li>
				<!-- <li><a href="contact.html">Help</a></li> -->
			</ul>
		</div>
		<div class="product_list_header">
			<form action="cart.php" method="post" class="last">
				<input type="hidden" name="cmd" value="_cart">
				<input type="hidden" name="display" value="1">
				<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
			</form>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>

<div class="logo_products">
	<div class="container">
		<div class="w3ls_logo_products_left1">
			<ul class="phone_email">
				<li><i class="fa fa-phone" aria-hidden="true"></i>Order online or call us : <a href="tel:8490014300">+91 8799593154</a></li>

			</ul>
		</div>
		<div class="w3ls_logo_products_left">
			<!-- <a href="shpo.php" class="text-decoration-none d-block d-lg-none"> -->
			<a href="home.html" class="text-decoration-none">
				<a href="shop.php"><img src="images\omlogo.png" alt="Logo" width="70px" height="auto"></a>
			</a>
		</div>
		<div class="w3l_search">
			<form action="#" method="post">
				<input type="search" name="Search" placeholder="Search for a Product..." required="">
				<button type="submit" class="btn btn-default search" aria-label="Left Align">
					<i class="fa fa-search" aria-hidden="true"> </i>
				</button>
				<div class="clearfix"></div>
			</form>
		</div>

		<div class="clearfix"> </div>
	</div>
</div>
<!-- //header -->
<!-- navigation -->
<div class="navigation-agileits">
	<div class="container">
		<nav class="navbar navbar-default">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header nav_2">
				<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
					<span class="sr-only">Toggle navigation</span>

				</button>
			</div>
			<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
				<ul class="nav navbar-nav">
					<li class="active"><a href="shop.php
					" class="act">Home</a></li>
					
					<!-- Mega Menu -->
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Sweets<b class="caret"></b></a>
						<ul class="dropdown-menu multi-column columns-3">
							<div class="row">
								<div class="multi-gd-img">
									<ul class="multi-column-dropdown">
										<h6>All Groceries</h6>
										
										<!-- <li><a href="groceries.html">Kaju Sweet</a></li>
										<li><a href="groceries.html">Indain Ghee Sweeet</a></li>
										<li><a href="groceries.html">Mawa sweet</a></li>
										<li><a href="groceries.html">Penda</a></li> -->
									</ul>
								</div>
							</div>
						</ul>
					</li>
					
					<li><a href="#">Namkeen</a></li>

					<li><a href="#">Bakery</b></a></li>

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Category<b class="caret"></b></a>
						<ul class="dropdown-menu multi-column columns-3">
							<div class="row">
								<div class="multi-gd-img">
									<ul class="multi-column-dropdown">
										<h6>All Category</h6>

										<?php
										$categoryq = mysqli_query($connection, "select * from tbl_category");
										while ($cdata = mysqli_fetch_array($categoryq)) {
											echo "<li><a href='shop.php?categoryid={$cdata['cat_id']}'><i class='fa fa-arrow-right' aria-hidden='true'></i>{$cdata['cat_name']}</a></li>";
										}
										?>
									</ul>
								</div>

							</div>
						</ul>
					</li>

					<li><a href='Cart.php'>Cart</a></li>

					<!-- <li><a href='contact.php'>contact</a></li> -->




					<?php
					if (isset($_SESSION['uid'])) {
					?>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Hi <?php echo $_SESSION['uname'] ?><b class="caret"></b></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href='cart.php'>Myorder</a></li>
											<li><a href='chpassword.php'>change Password</a></li>
											<li><a href='logout.php'>Logout</a></li>

										</ul>
									</div>
									<!-- <li><a href='logout.php' >Logout</a></li> -->



								</div>

							<?php


							// echo "<li><a href='login.php' > Hi {$_SESSION['uname']} </a></li>";
							// echo "<li><a href='logout.php' >Logout</a></li>";

						} else {
							echo "<li><a href='login.php' >login</a></li>";
						}
							?>

							</ul>

			</div>




		</nav>



	</div>
</div>

<!-- //navigation -->
 <!-- breadcrumbs -->
 <div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="shop.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Singlepage</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->