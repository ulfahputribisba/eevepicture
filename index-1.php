<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Gallery</title>
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no">
		<link rel="icon" href="pictures/evefavicon.jpg">
		<link rel="shortcut icon" href="pictures/evefavicon.jpg">
		<link rel="stylesheet" href="css/stuck.css">
		<link rel="stylesheet" href="css/form.css">
		<link rel="stylesheet" href="css/touchTouch.css">
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
		<script src="js/touchTouch.jquery.js"></script>
		<script src="js/sForm.js"></script>
		<script>
		$(document).ready(function(){
			$().UItoTop({ easingType: 'easeOutQuart' });
			$('#stuck_container').tmStickUp({});
			$('.gallery a.gal_item').touchTouch();
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
			<section class="content cont_pad1">
				<div class="container">
					<div class="gallery gall__1">
						<div class="row">
                            <div class="grid_4">
								<h3>Our Photo</h3>
							</div>
							<div class="clear"></div>
                            <?php
                            include"mimin/koneksi.php";
                            $result=mysql_query('select * from galeri');
                            while ($row=mysql_fetch_array($result))
                            { 
                                if($result==0)
                                    $aktif = "active";
                                else 
                                    $aktif =  '';
                                
                                echo "<tr>";
                                ?>
							
                           
                            <div class="grid_4">              
                                <a href="foto/<?php echo $row['judulfoto']?>" class="gal_item">
									<img src="foto/<?php echo $row['judulfoto']?>">
                                <span class="gal_magnify"></span>
                                </a>    
				
							</div>
                        
                            
                            <?php
                            echo "</tr>";
                            }
                         ?>
							</div>
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