<?php 
session_start();
$connection = mysqli_connect("localhost","root","","apdp");
?>

<!DOCTYPE html>
<html>
<head>

<!-- Favicon -->
<link href="C:\xampp\htdocs\ecommerce\images\Favicon.PNG" rel="icon">

<title>OM SWEETS </title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Super Market Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
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
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>

<!-- header -->

<?php
	include 'themepart/header.php'
?>
<!-- header -->

<!--- pakagedfoods --->
	<div class="agile_top_brands_grids">
		<h1>Products</h1>

                <!-- product start -->
<?php
	if(isset($_GET['categoryid'])){
		$cid = $_GET['categoryid'];
		$q = mysqli_query($connection,"select * from tbl_product where cat_id='{$cid}'");
	}else{
    $q = mysqli_query($connection,"select * from tbl_product");
}
	$count = mysqli_num_rows($q);
	echo "$count recodes found<br>";
    while($data = mysqli_fetch_array($q)){
?>

					<div class="col-md-4 top_brand_left">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid">
								<div class="agile_top_brand_left_grid_pos">
									<img src="images/offer.png" alt=" " class="img-responsive">
								</div>
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block">
											<div class="snipcart-thumb">
												<a href="details.php?pid=<?php echo $data['pro_id']  ?>"><img width="100"  height="100" style='margin-bottom: 20px;' src="admin/uploads/<?php echo $data['pro_photo'];?>"></a>		
												<a href="details.php?pid=<?php echo $data['pro_id']  ?>"><p><?php echo $data['pro_name'];?></p>
												<h4><?php echo $data['pro_price'];?>₹</h4>
											</div>
											
										</div>
									</figure>
								</div>
							</div>
						</div>
					</div>
                  
					<?php

}
?>      

                    <!-- product end -->


					

                     <!-- product start -->
					
                     <!-- product end -->


                       <!-- product start -->
					
                     <!-- product end -->
						<div class="clearfix"> </div>
				</div>
				




				<nav class="numbering">
					<ul class="pagination paging">
						<li>
							<!-- <a href="#" aria-label="Previous"> -->
								<span aria-hidden="true">&laquo;</span>
							</a>
						</li>
						<li class="active"><a href="#">1<span class="sr-only">(current)</span></a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li>
							<a href="#" aria-label="Next">
							<span aria-hidden="true">&raquo;</span>
							</a>
						</li>
					</ul>
				</nav>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
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
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
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
		jQuery(document).ready(function(){
			jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});
						
			jQuery('#responsive').change(function(){
			  $('#responsive_wrapper').width(jQuery(this).val());
			});
			
		});
</script>	
<!-- //main slider-banner --> 

</body>
</html>
