<?php
session_start();
include"config/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Alhamra resort | Room</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="keywords" content="Alhamra resort Cipanas">
		<meta name="description" content="Alhamra resort Cipanas">
		<meta name="author" content="Raihan">
		<meta name="format-detection" content="telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.2.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script>
		$(document).ready(function(){
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
	<body>
<!--==============================header=================================-->
		<header>
			<div class="container_12">
				<div class="grid_12">
					<div class="menu_block">
						<nav class="horizontal-nav full-width horizontalNav-notprocessed">
							<ul class="sf-menu">
								<li><a href="index.php">HOME</a></li>
								<li class="current"><a href="room.php">ROOM</a></li>
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
						<a href="index.html">
							<img src="images/log.png" alt="Your Happy Family">
						</a>
					</h1>
				</div>
			</div>
		</header>
<!--==============================Content=================================-->
		<div class="content">
			<div class="container_12">
				<div class="banners">
				<?php
				$query=mysql_query("select * from room order by rand()");
				while ($row=mysql_fetch_array($query)) {
				?>
					<div class="grid_4">
						<div class="banner">
							<img src="images/room/<?php echo $row['img']; ?>" alt="Gambar">
							<div class="label">
								<div class="title"><?php echo $row['kode_room']; ?></div>
								<div class="price"><span>Rp.<?php echo number_format($row['price'],2); ?>-</span>
								<a href="#">LEARN MORE</a>
							</div>

						</div>
					</div>

				</div>
<?php
	}
	?>
			</div>
			</div>
		</div>

			
					
			
<!--==============================footer=================================-->
		<?php
		include"system/foot.php"; ?>