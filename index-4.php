<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Contacts</title>
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no">
		<link rel="icon" href="pictures/evefavicon.jpg">
		<link rel="shortcut icon" href="pictures/evefavicon.jpg">
		<link rel="stylesheet" href="css/stuck.css">
		<link rel="stylesheet" href="css/form.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.1.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/tmStickUp.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/TMForm.js"></script>
		<script src="js/sForm.js"></script>
		<script>
			$(document).ready(function(){
			$().UItoTop({ easingType: 'easeOutQuart' });
			$('#stuck_container').tmStickUp({});
		});
		</script>
		
	</head>
	<body class="" id="top">
<!--==============================header=================================-->
		<header>
			<div id="stuck_container">
				<div class="container">
					<div class="row">
						<div class="grid_12">
							<h1>
								<a href="index.php">
									<img src="pictures/logo.jpg" alt="Your Happy Family">
								</a>
							</h1>
							<div class="menu_block ">
								<nav class="horizontal-nav full-width horizontalNav-notprocessed">
									<ul class="sf-menu">
										<li class="current"><a href="index.php">Home</a></li>
          <li><a href="index-1.php">Gallery</a></li>
          <li><a href="index-2.php">Services</a></li>
          <li><a href="index-3.php">About</a></li>
          <li><a href="index-4.php">Contacts</a></li>

									</ul>
								</nav>
								<div class="clear"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div class="main">
<!--=====================Content======================-->
			<section class="content">
				<div class="container">
					<div class="row">
						</div>
						<div class="clear"></div>
						<div class="grid_5">
							<h3>Our Workshop</h3>
							Workshop Eve Picture.<br>
							di Jl.RA.Kartini Rt 05/26 No.06 ,<br>
							Kel.Margahayu Kec.Bekasi Timur 17113.<br>
						</div>
						<div class="grid_5 preffix_1">
							<h3>Contact Form</h3>
							<form action="send.php">
								<label class="name">
									<input name="nama" type="text" placeholder="Name" required  />
								</label>
								<label class="email">
									<input name="emil" type="email" placeholder="E-mail:" required />
								</label>
								<label class="message">
									<textarea name="isi" placeholder="Message:" required></textarea>
								</label>
								<div>
									<div class="clear"></div>
									<div class="btns">
										<button type="submit" class="btn bt__2">Submit</a>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>
<!--==============================Bot_block=================================-->
			
		</div>
<!--==============================footer=================================-->
		<footer>
<div class="container">
<div class="row">
<div class="grid_12">
<div class="footer_socials">
<a href="https://www.instagram.com/eve_picture/" class="fa fa-instagram"></a>
</div>
<div class="copy">
<span class="brand">Eve Picture</span> &copy; <span id="copyright-year"></span> | <a href="#">Privacy Policy</a>
<div class="sub_copy">
Website designed by Dhanis Al Ghifari</a>
</div>
</div>
</div>
</div>
</div>
</footer>
</body>
</html>