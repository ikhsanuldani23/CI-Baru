<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>About</title>
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no" />
		<link rel="icon" href="tema/site/images/favicon.ico">
		<link rel="shortcut icon" href="tema/site/images/favicon.ico" />
		<link rel="stylesheet" href="tema/site/booking/css/booking.css">
		<link rel="stylesheet" href="tema/site/css/camera.css">
		<link rel="stylesheet" href="tema/site/css/owl.carousel.css">
		<link rel="stylesheet" href="tema/site/css/style.css">
		<script src="tema/site/js/jquery.js"></script>
		<script src="tema/site/js/jquery-migrate-1.2.1.js"></script>
		<script src="tema/site/js/script.js"></script>
		<script src="tema/site/js/superfish.js"></script>
		<script src="tema/site/js/jquery.ui.totop.js"></script>
		<script src="tema/site/js/jquery.equalheights.js"></script>
		<script src="tema/site/js/jquery.mobilemenu.js"></script>
		<script src="tema/site/js/jquery.easing.1.3.js"></script>
		<script src="tema/site/js/owl.carousel.js"></script>
		<script src="tema/site/js/camera.js"></script>
		<!--[if (gt IE 9)|!(IE)]><!-->
		<script src="tema/site/js/jquery.mobile.customized.min.js"></script>
		<!--<![endif]-->
		<script src="tema/site/booking/js/booking.js"></script>
		<script>
			$(document).ready(function(){
			jQuery('#camera_wrap').camera({
				loader: false,
				pagination: false ,
				minHeight: '444',
				thumbnails: false,
				height: '48.375%',
				caption: true,
				navigation: true,
				fx: 'mosaic'
			});
			/*carousel*/
			var owl=$("#owl");
				owl.owlCarousel({
				items : 2, //10 items above 1000px browser width
				itemsDesktop : [995,2], //5 items between 1000px and 901px
				itemsDesktopSmall : [767, 2], // betweem 900px and 601px
				itemsTablet: [700, 2], //2 items between 600 and 0
				itemsMobile : [479, 1], // itemsMobile disabled - inherit from itemsTablet option
				navigation : true,
				pagination : false
				});
				
			$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
		<!--[if lt IE 8]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
				<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
			</a>
		</div>
		<![endif]-->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
	</head>
	<body class="page1" id="top">
<!--==============================header=================================-->
		<header>
			<div class="container_12">
				<div class="grid_12">
					<div class="menu_block">
						<nav class="horizontal-nav full-width horizontalNav-notprocessed">
							<ul class="sf-menu">
								<li class="current"><a href="#view">HOME</a></li>
								<li><a href="<?php echo site_url('outdor'); ?>">OUTDOOR</a></li>
								<li><a href="">CARD</a></li>
								<li><a href="">CONTACT</a></li>
								<li><a href="">LOGIN</a></li>
							</ul>
						</nav>
						<div class="clear"></div>
					</div>
				</div>
				<div class="grid_12">
					<h1>
						<a href="index.html">
							<img src="tema/site/images/logo.png" alt="Your Happy Family">
						</a>
					</h1>
				</div>
			</div>
		</header>
		<div class="slider_wrapper">
			<div id="camera_wrap" class="">
				<div data-src="img/slet.jpg">
					<div class="caption fadeIn">
						<h2>X- BANNER</h2>
						<div class="price">
							FROM
							<span></span>
						</div>
						<a href="#">CETAK SEKARANG</a>
					</div>
				</div>
				<div data-src="tema/site/images/slide1.jpg">
					<div class="caption fadeIn">
						<h2>Maldives</h2>
						<div class="price">
							FROM
							<span>$2000</span>
						</div>
						<a href="#">LEARN MORE</a>
					</div>
				</div>
				<div data-src="tema/site/images/slide2.jpg">
					<div class="caption fadeIn">
						<h2>Venice</h2>
						<div class="price">
							FROM
							<span>$1600</span>
						</div>
						<a href="#">LEARN MORE</a>
					</div>
				</div>
			</div>
		</div>
<!--==============================Content=================================-->
				<!-- <?php $this->load->view('konten') ?>; -->
<!--==============================footer=================================-->
		<footer>
			<div class="container_12">
				<div class="grid_12">
					<div class="socials">
						<a href="#" class="fa fa-facebook"></a>
						<a href="#" class="fa fa-twitter"></a>
						<a href="#" class="fa fa-google-plus"></a>
					</div>
					<div class="copy">
						Your Trip (c) 2014 | <a href="#">Privacy Policy</a> | Website Template Designed by <a href="http://www.templatemonster.com/" rel="nofollow">TemplateMonster.com</a>
					</div>
				</div>
			</div>
		</footer>
		<script>
			$(function (){
				$('#bookingForm').bookingForm({
					ownerEmail: '#'
				});
			})
			$(function() {
				$('#bookingForm input, #bookingForm textarea').placeholder();
			});
		</script>
	</body>
</html>

