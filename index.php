
<html lang="en">
	<head>
		<title>Home</title>
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no">
		<link rel="icon" href="pictures/evefavicon.jpg">
		<link rel="shortcut icon" href="pictures/evefavicon.jpg">
		<link rel="stylesheet" href="css/stuck.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/form.css">
		<link rel="stylesheet" href="css/touchTouch.css">
		<link rel="stylesheet" href="css/camera.css">
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
		<script src="js/owl.carousel.js"></script>
		<script src="js/sForm.js"></script>
		<script src="js/camera.js"></script>
		<script src="js/jquery.mobile.customized.min.js"></script>
		
		<script>
		$(document).ready(function(){
			jQuery('#camera_wrap').camera({
				loader: false,
				pagination: false ,
				minHeight: '200',
				thumbnails: false,
				height: '39,0625%',
				caption: true,
				navigation: true,
				fx: 'mosaic'
			});
			var owl = $("#owl");
			owl.owlCarousel({
				items : 7, //10 items above 1000px browser width
				itemsDesktop : [995,5], //5 items between 1000px and 901px
				itemsDesktopSmall : [767, 3], // betweem 900px and 601px
				itemsTablet: [700, 3], //2 items between 600 and 0
				itemsMobile : [479, 2], // itemsMobile disabled - inherit from itemsTablet option
				navigation : true,
			});
			$().UItoTop({ easingType: 'easeOutQuart' });
			$('#stuck_container').tmStickUp({});
			$('.gallery a.gal_item').touchTouch();
		});
		</script>
		
	</head>
	<body class="page1" id="top">
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
 <div class="menu_block">
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
 <div class="slider_wrapper">
 <div id="camera_wrap" class="">
 <div data-src="pictures/layer1.jpg">
 <div class="caption fadeIn">
 <div class="title"> WELCOME </div>
 <p>Selamat datang di Website Eve Picture</p>
 <p>Kami menyediakan jasa photography dan videography</p>     
 
 </div>
 </div>
					
<div data-src="pictures/layer2.jpg">
<div class="caption fadeIn">
<div class="title">Photography</div>
<p>Kami melayani berbagai jenis foto yang anda inginkan, hasil photo yang kami berikan adalah hasil photo yang terbaik, dari beberapa jepretan dan pilihan photo yang tersedia, serta tentunya dengan photographer yang professional dalam bidang photography</p>
<p>dilengkapi pula dengan alat-alat pendukung photography lainnya, yang membuat hasil photo jauh lebih maksimal. Kami juga menawarkan konsep-konsep photo yang creative dan berbeda yang akan membuat hasil photo tidak monoton.</p>
</div>
</div>
					
<div data-src="pictures/layer3.jpg">
<div class="caption fadeIn">
<div class="title">Videography</div>
<p>Kami melayani berbagai jenis video editing yang anda inginkan, hasil video editing yang kami berikan adalah hasil yang terbaik, tentunya kami memiliki editor yang professional dalam bidang videography</p>
<p>dilengkapi pula dengan alat-alat pendukung videography lainnya, yang membuat hasil video dengan kualitas tinggi. Kami juga memberikan hasil video yang creative dan menarik yang akan membuat hasil video tidak bosan untuk ditonton.</p>
</div>
</div>
</div>
</div>

     <!--=====================Content======================-->
</div>
</div>
</div>
</div>
</div>
<section class="content">
<div class="container">
<div class="row">
<div class="grid_12">
<h2>Services</h2>
<div class="gallery">
<div class="row">
<div class="grid_4">
<a href="pictures/erin.jpg" class="gal_item">
<img src="pictures/eve26.jpg" alt="">
<div class="gal_caption">Photo Session</div>
<span class="gal_magnify"></span>
</a>
</div>
<div class="grid_4">
<a href="pictures/single1.jpg" class="gal_item">
<img src="pictures/single.jpg" alt="">
<div class="gal_caption">Photo Single</div>
<span class="gal_magnify"></span>
</a>
</div>
<div class="grid_4">
<a href="pictures/couple.jpg" class="gal_item">
<img src="pictures/couple1.jpg" alt="">
<div class="gal_caption">Photo Couple</div>
<span class="gal_magnify"></span>
</a>
</div>
<div class="grid_4">
<a href="pictures/wedding.jpg" class="gal_item">
<img src="pictures/wedding1.jpg" alt="">
<div class="gal_caption">Photo Wedding</div>
<span class="gal_magnify"></span>
</a>
</div>
<div class="grid_4">
<a href="pictures/product.jpg" class="gal_item">
<img src="pictures/product1.jpg" alt="">
<div class="gal_caption">Photo Product</div>
<span class="gal_magnify"></span>
</a>
</div>
<div class="grid_4">
<a href="pictures/school.jpg" class="gal_item">
<img src="pictures/school1.jpg" alt="">
<div class="gal_caption">Photo Bookyear</div>
<span class="gal_magnify"></span>
</a>
</div>
</div>
</div>
</div>
    </div>

    <section class="content cont_pad1">
		<div class="container">
			<div class="gallery gall__1">
				<div class="row">
	                <div class="grid_12">
						<h3>Testimoni</h3>
					</div>
					<div class="clear"></div>
	                
	                <ul class="list2">
		                <?php
		                    include"mimin/koneksi.php";
		                    $result=mysql_query('select * from testimoni');
		            
		                    while ($row=mysql_fetch_array($result))
		                    { 
		                        if($result==0)
		                            $aktif = "active";
		                        else 
		                            $aktif =  '';

		                        echo "<tr>";
		                        ?>
						    	<li>
						    	<div class="blog">
									<img src="pictures/danizar.jpg" alt="" class="img_inner fleft">
									<div >
										<h3 class="blog_head color1"><?php echo $row['nama']?> </a></h3>
		                                <a> Bekerja sebagai <?php echo $row['pekerjaan']?></a>
										<p><?php echo $row['komentar']?></p>
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