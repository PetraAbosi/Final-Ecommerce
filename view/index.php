
<?php
require('../controllers/product_controller.php');
?>



<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Welcome to Loozeele </title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content=" Loozeelee Initiative " />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="../css/style.css" rel='stylesheet' type='text/css' />
<!-- js -->
   <script src="../js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="../js/move-top.js"></script>
<script type="text/javascript" src="../js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
<!--- start-rate---->
<script src="js/jstarbox.js"></script>
	<link rel="stylesheet" href="../css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
		<script type="text/javascript">
			jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
					} 
				})
			});
		});
		</script>
<!---//End-rate---->

</head>
<body>
<a href="wishlist.php"><img src="../images/download.png" class="img-head" alt=""></a>
<div class="header">

		<div class="container">
			
			<div class="logo">
			<h1 ><a href="index.php"></b>LooZeeLee<span style="color:green">Act Transform Sustain</span></a></h1>
			</div>
			<div class="head-t">
				<ul class="card">
				<li><a href="wishlist.php" ><i class="fa fa-heart" aria-hidden="true"></i>Wishlist</a></li>
                <li><a href="login.php" ><i class="fa fa-user" aria-hidden="true"></i>Login</a></li>
                <li><a href="register.php" ><i class="fa fa-arrow-right" aria-hidden="true"></i>Register</a></li>
                <li><a href="shipping.php" ><i class="fa fa-ship" aria-hidden="true"></i>Shipping</a></li>
				<li><a href="cart.php" ><i class="fa fa-cart-plus" aria-hidden="true"></i>Cart</a></li>
				<li><a href="index.php" ><i class="fa fa-user" aria-hidden="true"></i>Logout</a></li>
				</ul>	
			</div>
			
			<div class="header-ri">
				<ul class="social-top">
					<li><a href="#" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i><span></span></a></li>
				</ul>	
			</div>
		

				<div class="nav-top">
					<nav class="navbar navbar-default">
					
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						

					</div> 
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav ">
							<li class=" active"><a href="index.php" class="hyper "><span>Home</span></a></li>	
							
							<!-- Cloth category -->
							<li class="dropdown ">
								<a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span>Cloth<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi">
									<div class="row">
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">
			
											<li><a href="fabric.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Fabrics</a></li>
											<li><a href="kimono.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Kimono</a></li>
										
											</ul>
										
										</div>
										
										<div class="col-sm-3 w3l">
											<a href="fabric.php"><img src="../images/cloth.jpeg" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
							</li>

							<!-- Cloth category -->
							<li class="dropdown">
							
								<a href="#" class="dropdown-toggle hyper" data-toggle="dropdown" ><span> Bags <b class="caret"></b></span></a>
								<ul class="dropdown-menu multi multi1">
									<div class="row">
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">

												<li><a href="weaved_bag.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Weaved Bags</a></li>
												<li><a href="leather_bag.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Leather</a></li>										
										
											</ul>											
										</div>

										<div class="col-sm-3 w3l">
											<a href="weaved_bag.php"><img src="../images/bag.jpg" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
							</li>

							<!-- Shea butter category -->
							<li class="dropdown">
								<a href="#" class="dropdown-toggle hyper" data-toggle="dropdown" ><span>Shea Products<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi multi2">
									<div class="row">
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">
												<li><a href="unrefined_shea.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Unrefined Shea Butter</a></li>
												<li><a href="processed_shea.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Processed Shea Butter</a></li>
											</ul>
										
										</div>
										
										<div class="col-sm-3">
										
										</div>

										<div class="col-sm-3 w3l">
											<a href="unrefined_shea.php"><img src="../images/shea.jpg" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
							</li>
							<li><a href="contact.html" class="hyper"><span>Contact Us</span></a></li>
						</ul>
					</div>
					</nav>

					<div class="clearfix"></div>
				</div>
					
				</div>			
</div>
  <!---->
<div data-vide-bg="../video/video">
    <div class="container">
		<div class="banner-info">
			<h3> Your Number One Authentic Traditional Shop </h3>	
			<div class="search-form">
				<form action="search.php" method="post">
					<input type="text" placeholder="Search..." name="Search...">
					<input type="submit" value=" " >
				</form>
			</div>		
		</div>	
    </div>
</div>

    <script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
    <script src="../js/jquery.vide.min.js"></script>

<!--content-->
<div class="content-top ">
	<div class="container ">
		<div class="spec ">
			<h3>Special Offers</h3>
			<div class="ser-t">
				<b></b>
				<span><i></i></span>
				<b class="line"></b>
			</div>
		</div>
			<div class="tab-head ">
				<nav class="nav-sidebar">
					<ul class="nav tabs ">
					<li class="active"><a href="#tab1" data-toggle="tab">Cloth</a></li>
					  <li class=""><a href="#tab2" data-toggle="tab">Kimono</a></li> 
					  <li class=""><a href="#tab3" data-toggle="tab">Bags</a></li>  
					  <li class=""><a href="#tab4" data-toggle="tab">Shea Products</a></li>
					</ul>
				</nav>
				<div class=" tab-content tab-content-t ">
					<div class="tab-pane active text-style" id="tab1">
						
					<?php
						displayAllProduct();
					?>
										
				
				</div>
			</div>
		
		</div>
	</div>
</div>

<!--content-->
<div class="content-mid">
	<div class="container">
		
		<div class="col-md-4 m-w3ls">
			<div class="col-md1 ">
				<a href="about.html">
					<img src="../images/loo1.jpg" class="img-responsive img" alt="">
					<div class="big-sa">
						<!--<h3><span>Learn more about our work</span></h3>-->
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-4 m-w3ls1">
			<div class="col-md ">
				<a href="fabric.php">
					<img src="../images/cloth6.jpg" class="img-responsive img" alt="">
					<div class="big-sale">
						<div class="big-sale1">
							<h3>Big <span>Sale</span></h3>
							<p> Designed with you in mind</p>
						</div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-4 m-w3ls">
			<div class="col-md2 ">
				<a href="unrefined_shea.php">
					<img src="../images/shea.jpg" class="img-responsive img1" alt="">
					<div class="big-sale2">
						<h3><span>Organically Made Oil</span></h3>	
					</div>
				</a>
			</div>
			<div class="col-md3 ">
				<a href="about.html">
					<img src="../images/fruit.png" class="img-responsive img1" alt="">
					<div class="big-sale3">
						<h3>The<span>Magic</span></h3>
					</div>
				</a>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!--content-->
  <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
		<a href="about.html"> <img class="first-slide" src="../images/teni.jpg" alt="First slide" ></a>
       
        </div>
        <div class="item">
		<a href="leather_bag.php"> <img class="second-slide " src="../images/banner5.jpg" alt="Second slide"></a>
         
        </div>
        <div class="item">
		<a href="fabric.php"><img class="third-slide " src="../images/banner6.PNG" alt="Third slide"></a>
          
        </div>
      </div>
    
    </div><!-- /.carousel -->

<!--content-->
<div>
	<div>
		<div>

		</div>
	</div>
</div>

 <!--footer-->
 <div class="footer">
	<div class="container">
		<div class="col-md-3 footer-grid">
			<h3>About Us</h3>
			<p>Loozeele, which means “there is hope”, trains and supports young women from the northern part of Ghana with vocational skills to enable them to create a source of income for themselves and their families.</p>
		</div>
		<div class="col-md-3 footer-grid ">
			<h3>Menu</h3>
			<ul>
				<li><a href="../index.php">Home</a></li>
				<li><a href="../view/fabric.php">fabrics</a></li>
				<li><a href="sheabutter.php"></a></li>
				<!-- <li><a href="hold.html">Household</a></li>						 
				<li><a href="codes.html">Short Codes</a></li> 
				<li><a href="contact.html">Contact</a></li> -->
			</ul>
		</div>
		<div class="col-md-3 footer-grid ">
			<h3>Customer Services</h3>
			<ul>
				<li><a href="shipping.html">Shipping</a></li>
				<li><a href="terms.html">Terms & Conditions</a></li>
				<li><a href="faqs.html">Faqs</a></li>
				<li><a href="contact.html">Contact</a></li>
				<li><a href="offer.html">Online Shopping</a></li>						 
				 
			</ul>
		</div>
		<div class="col-md-3 footer-grid">
			<h3>My Account</h3>
			<ul>
				<li><a href="login.html">Login</a></li>
				<li><a href="register.html">Register</a></li>
				<li><a href="wishlist.html">Wishlist</a></li>
				
			</ul>
		</div>
		<div class="clearfix"></div>
			<div class="footer-bottom">
				<h2 ><a href="index.html">Loozeele Initiative<span>ACT TRANSFORM SUSTAIN</span></a></h2>
				<p class="fo-para">Where your purchase contributes to changing the life of a girl child</p>
				<ul class="social-fo">
					<li><a href="#" class=" face"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#" class=" twi"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#" class=" pin"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
					<li><a href="#" class=" dri"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				</ul>
				<div class=" address">
					<div class="col-md-4 fo-grid1">
							<p><i class="fa fa-home" aria-hidden="true"></i>Accra Ghana.</p>
					</div>
					<div class="col-md-4 fo-grid1">
							<p><i class="fa fa-phone" aria-hidden="true"></i>+233 278899789</p>	
					</div>
					<div class="col-md-4 fo-grid1">
						<p><a href="mailto:info@example.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>loozele@gmail.com</a></p>
					</div>
					<div class="clearfix"></div>
					
					</div>
			</div>
		<div class="copy-right">
			<p> &copy; Loozeele. All Rights Reserved </p>
		</div>
	</div>
</div>
<!-- //footer-->

<!-- smooth scrolling -->
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
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!-- for bootstrap working -->
		<script src="../js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<script type='text/javascript' src="../js/jquery.mycart.js"></script>
  <script type="text/javascript">
  $(function () {

    var goToCartIcon = function($addTocartBtn){
      var $cartIcon = $(".my-cart-icon");
      var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
      $addTocartBtn.prepend($image);
      var position = $cartIcon.position();
      $image.animate({
        top: position.top,
        left: position.left
      }, 500 , "linear", function() {
        $image.remove();
      });
    }

    $('.my-cart-btn').myCart({
      classCartIcon: 'my-cart-icon',
      classCartBadge: 'my-cart-badge',
      affixCartIcon: true,
      checkoutCart: function(products) {
        $.each(products, function(){
          console.log(this);
        });
      },
      clickOnAddToCart: function($addTocart){
        goToCartIcon($addTocart);
      },
      getDiscountPrice: function(products) {
        var total = 0;
        $.each(products, function(){
          total += this.quantity * this.price;
        });
        return total * 1;
      }
    });

  });
  </script>



    <!--Start of Tawk.to Script-->
	<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/619ade546885f60a50bcd85a/1fl2f8ujm';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

  
</body>
</html>

