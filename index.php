<?php
session_start();
include"config/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Alhamra resort | Home</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="keywords" content="Alhamra resort Cipanas">
		<meta name="description" content="Alhamra resort Cipanas">
		<meta name="author" content="Raihan">
		<meta name="format-detection" content="telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="booking/css/booking.css">
		<link rel="stylesheet" href="css/camera.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.2.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/owl.carousel.js"></script>
		<script src="js/camera.js"></script>
		<!--[if (gt IE 9)|!(IE)]><!-->
		<script src="js/jquery.mobile.customized.min.js"></script>
		<!--<![endif]-->
		<script src="booking/js/booking.js"></script>
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
								<li class="current"><a href="index.php">HOME</a></li>
								<li><a href="room.php">ROOM</a></li>
								<li><a href="">ABOUT</a></li>
								<li><a href="">BLOG</a></li>
								<li><a href="">CONTACTS</a></li>
							</ul>
						</nav>
						<div class="clear"></div>
					</div>
				</div>
				<div class="grid_12">
					<h1>
						<a href="index.php">
							<img src="images/log.png" alt="Your Happy Family">
						</a>
					</h1>
				</div>
			</div>
		</header>
		<div class="slider_wrapper">
			<div id="camera_wrap" class="">
				<div data-src="images/slider.png">
					<div class="caption fadeIn">
						<h2>STANDARD ROOM</h2>
						<div class="price">
							FROM
							<span>Rp. 2.000.000,00-</span>
						</div>
						<a href="#">LEARN MORE</a>
					</div>
				</div>
				<div data-src="images/slider2.png">
					<div class="caption fadeIn">
						<h2>VIP ROOM</h2>
						<div class="price">
							FROM
							<span>Rp. 15.000.000,00-</span>
						</div>
						<a href="#">LEARN MORE</a>
					</div>
				</div>
				<div data-src="images/slider3.png">
					<div class="caption fadeIn">
						<h2>LUXURY ROOM</h2>
						<div class="price">
							FROM
							<span>Rp.100.000.000,00-</span>
						</div>
						<a href="#">LEARN MORE</a>
					</div>
				</div>
			</div>
		</div>
<!--==============================Content=================================-->
		
		<div class="content">
			<div class="container_12">
		 <?php
                $per_hal=3;
                $jumlah_record=mysql_query("SELECT COUNT(*) from category");
                $jum=mysql_result($jumlah_record, 0);
                $halaman=ceil($jum / $per_hal);
                $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
                $start = ($page - 1) * $per_hal;
                ?>
                <?php
                $pro=mysql_query("select * from category limit $start, $per_hal");
                while($pd=mysql_fetch_array($pro)){

                	echo '
                			<div class="grid_4">
                				<div class="banner">
                					<img src="images/category/'.$pd['img'].'">
                						<div class="label">
                							<div  class="title">'.$pd['name_cat'].'</div>
                							<a href="">LEARN MORE</a>';
                							
									echo "</div>
									</div>
									</div>
									";
							}
							?>
								<div class="clear"></div>
                				
                							
          
				<div class="center"><h3 class="head1">Why us?</h3></div>
				<div class="grid_4">
					<div class="block1">
						<center><span><i class="fa fa-mobile fa-5x"></i></span></center>
						<div class="extra_wrapper">
							<div class="center"><h6>Easy to reserve</h6></div>
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="block1">
						<center><span><i class="fa fa-map-marker fa-5x"></i></span></center>
						<div class="extra_wrapper">
							<div class="center"><h6>Strategic Location</h6></div>
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="block1">
						<center><span><i class="fa fa-money fa-5x"></i></span></center>
						<div class="extra_wrapper">
							<div class="center"><h6>Low price</h6></div>
						</div>
					</div>
				</div>
				
				<div class="grid_12">
					<h3 class="head1">Latest News</h3>
				</div>
				<div class="grid_4">
					<div class="block1">
						<time datetime="2014-01-01">10<span>Jan</span></time>
						<div class="extra_wrapper">
							<div class="text1 col1"><a href="#">Aliquam nibh</a></div>
							Proin pharetra luctus diam, any scelerisque eros convallisumsan. Maecenas vehicula egestas
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="block1">
						<time datetime="2014-01-01">21<span>Jan</span></time>
						<div class="extra_wrapper">
							<div class="text1 col1"><a href="#">Etiam dui eros</a></div>
							Any scelerisque eros vallisumsan. Maecenas vehicula egestas natis. Duis massa elit, auctor non
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="block1">
						<time datetime="2014-01-01">15<span>Feb</span></time>
						<div class="extra_wrapper">
							<div class="text1 col1"><a href="#">uamnibh Edeto</a></div>
							Ros convallisumsan. Maecenas vehicula egestas venenatis. Duis massa elit, auctor non
						</div>
					</div>
				</div>
			</div>
		</div>
			</div>

		</div>

		
		
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
						&copy; 2017. Alhamra | <a href="#">Privacy Policy</a> | Website Template Designed by <a href="http://www.templatemonster.com/" rel="nofollow">TemplateMonster.com</a>
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

