<?php include 'include/header.php';?>
<body>
	<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
	<?php include 'include/nav.php';?>
	
	<div class="prime">
		<div class="banner">
			<img id="background" src="images/ind.jpg" alt="background"/>

			<h1 class="bannertext"><canvas id="canvas" width="150" height="150"></canvas><br>The Power To Be The Best</h1>
		</div>
		<div class="info">
			<h1> What Is GRAPE</h1>
			<p> Grape is a multinational gadget company which provides quality tech for the new generation.</p>
			<h1>Our Slogan</h1>
			<p>The Power To Be Your Best</p>
			<h1>Our Objective</h1>
			<p>Provide The Latest Tech To Our Customers.</p>
			<h1>Our Vision </h1>
			<p>The Future With Just A Single Touch.</p>
			<h1> Our Products</h1>
		</div>
		
			
		
<!--clickable link-->	
		<section id="service">
		<div class="services">
			<a href ="phone.php#"><h2 class="text">Mobile Phones</h2>
			<img class="click" src="images/pphone.jpg" alt="Phone Image"/></a>
		</div>

		<div class="services">
			<a href="laptop.php">
			<h2 class="text">Laptops</h2>
			<img class="click" src="images/lappyy.jpg" alt="Laptop Image"/></a>
		</div>

		<div class="services">
			<a href="tablet.php">
			<h2 class="text">Tablets</h2>
			<img class="click" src="images/tablett.jpg" alt="Tablet Image"/></a>
		</div>
		<div class="services">
			<a href="music.php">
			<h2 class="text">Music Accessories</h2>
			<img class="click" src="images/headphonee.jpg" alt="Music Image"/></a>
		</div>
	</section>

	<div>
			<div id="slidShow">
			<span id="proLatest">Our latest products</span>


<div id="my-custom-slider-demo" class="sidebar-slider">
	<a id="sidebar-slider-prev" onclick="customNavToPrevSlide()"> ❮ </a>
	<a id="sidebar-slider-next" onclick="customNavToNextSlide()"> ❯ </a>

	<div id="demo-slide1" class="widget_media_image">
		<a href="#"><img width="200" height="200" alt="slide" src="images/ipadair.jpg"></a>
	</div>
	<div id="demo-slide2" class="widget_media_image">
		<a href="#"><img width="200" height="200" alt="slide" src="images/iphone.jpg"></a>
	</div>
	<div id="demo-slide3" class="widget_media_image">
		<a href="#"><img width="200" height="200" alt="slide" src="images/laptopback.jpg"></a>
	</div>
</div>
</div>
	</div>

		<div id="googlemap">
			<h1>We're Located</h1>
		<div id="google_map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3318.560249698737!2d73.05337341493004!3d33.72032618069757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfbf0350a14be1%3A0x7f4c4d76afb2cad4!2sApple%20Store!5e0!3m2!1sen!2s!4v1649644648601!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</div>

		</div>
		
	</div>
 <!--footer-->	
 
 <?php include 'include/footer.php';?>


<script src="js/enhancement2.js"></script>
</body>
</html>