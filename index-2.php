<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Services</title>
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
			<section class="content cont__1">
				<div class="container">
					<div class="row">
                        
                        <div class="grid_4">
							<h3>Fotografi</h3>
                        </div>
                        
                        <div class="clear"></div>
				
                        <div class="grid_4">
                            <?php
                                include"mimin/koneksi.php";
                                $result=mysql_query('select * from services where id_pelayanan="foto"');
                                $row=mysql_fetch_array($result);
                            ?>
                            <p><?php echo $row['id_penjelasan']?></p>
						</div>
                        
                        <div class="grid_5 preffix_1">
                            <ul class="list2">
                                <?php
                                    include"mimin/koneksi.php";
                                    $result=mysql_query('select * from services where id_pelayanan="foto"');
                            
                                    while ($row=mysql_fetch_array($result))
                                    { 
                                        if($result==0)
                                            $aktif = "active";
                                        else 
                                            $aktif =  '';

                                        echo "<tr>";
                                        ?>
								    
                                        <li>
                                            <div class="row">
                                                <div class="grid_2">
                                                    <?php echo $row['id_jenis']?>
                                                </div>
                                                <div class="grid_3">
                                                    <?php echo $row['id_harga']?>
                                                </div>
                                            </div>
                                        </li>
                                        
                                        <?php
	                                    echo "</tr>";
	                       	         }
                                ?>
                            </ul>
                        </div>
						<div class="clear"></div>
						<div class="grid_4">
							<h3>Videografi</h3>
                        </div>
                        
                        <div class="clear"></div>
				
                        <div class="grid_4">
                            <?php
                                include"mimin/koneksi.php";
                                $result=mysql_query('select * from services where id_pelayanan="vido"');
                                $row=mysql_fetch_array($result);
                            ?>
                            <p><?php echo $row['id_penjelasan']?></p>
						</div>
                        
                        <div class="grid_5 preffix_1">
                            <ul class="list2">
                                <?php
                                    include"mimin/koneksi.php";
                                    $result=mysql_query('select * from services where id_pelayanan="vido"');
                            
                                    while ($row=mysql_fetch_array($result))
                                    { 
                                        if($result==0)
                                            $aktif = "active";
                                        else 
                                            $aktif =  '';

                                        echo "<tr>";
                                        ?>
								    
                                        <li>
                                            <div class="row">
                                                <div class="grid_2">
                                                    <?php echo $row['id_jenis']?>
                                                </div>
                                                <div class="grid_3">
                                                    <?php echo $row['id_harga']?>
                                                </div>
                                            </div>
                                        </li>
                                        
                                        <?php
	                                    echo "</tr>";
	                       	         }
                                ?>
                            </ul>
                        </div>
						
                        <div class="clear"></div>
                        
						<div class="grid_4">
							<h3>Buku Tahunan</h3>
                        </div>
                        
                        <div class="clear"></div>
				
                        <div class="grid_4">
                            <?php
                                include"mimin/koneksi.php";
                                $result=mysql_query('select * from services where id_pelayanan="bukutahunan"');
                                $row=mysql_fetch_array($result);
                            ?>
                            <p><?php echo $row['id_penjelasan']?></p>
						</div>
                        
                        <div class="grid_5 preffix_1">
                            <ul class="list2">
                                <?php
                                    include"mimin/koneksi.php";
                                    $result=mysql_query('select * from services where id_pelayanan="bukutahunan"');
                            
                                    while ($row=mysql_fetch_array($result))
                                    { 
                                        if($result==0)
                                            $aktif = "active";
                                        else 
                                            $aktif =  '';

                                        echo "<tr>";
                                        ?>
								    
                                        <li>
                                            <div class="row">
                                                <div class="grid_2">
                                                    <?php echo $row['id_jenis']?>
                                                </div>
                                                <div class="grid_3">
                                                    <?php echo $row['id_harga']?>
                                                </div>
                                            </div>
                                        </li>
                                        
                                        <?php
	                                    echo "</tr>";
	                       	         }
                                ?>
                            </ul>
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