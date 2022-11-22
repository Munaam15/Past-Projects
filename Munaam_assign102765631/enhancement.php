<?php include 'include/header.php';?>

<body>


	<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
	<?php include 'include/nav.php';?>


	
	<div class="prime">
		<div class="banner">
		<img id="background" src="images/ind.jpg" alt="background"/>
		<h1 class="bannertext">Enhancements</h1>
		</div>
		<section id="enhance">
			<h2>List of the Enhancements</h2>
			<ol>
				<li class="enhance_box">
					<h3>Media Query and Drop Down Effect</h3>
					<p> Our webpage can be accessed on all the sorts of devices as we have used the media query technique which causes the webpage to reduce sizes then the resolution would fell under 900px. It has been used in the navigation bar,footer ,tabels and the google maps and youtube.</p>
					<p>Apart from this drop down affect has also been used on the products tab on the navigation using css. When we hover over it we can clearly see a drop down of the list of products offered by our company.</p>
					<h3>Code used</h3>
					<p>@media only screen and (max-width:900px){<br/>
						nav ul {<br/>
							flex-direction:column;<br/>
						}</p>
						<p>nav .link .dropbutton .dropdown-content li</p>

					<h3>Areas Covered</h3>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="phone.php">Phones</a></li>
						<li><a href="tablet.php">Tablets</a></li>
						<li><a href="laptop.php">Laptops</a></li>
						<li><a href="tablet.php">Tablets</a></li>
						<li><a href="enquiry.php">Enquiry</a></li>
						<li><a href="disclaimer.php">Disclaimer</a></li>
						<li><a href="enhancement.php">Enhancements</a>	</li>
					</ul>
					<h3>Learning from</h3>
					<a href="https://www.w3schools.com/css/css_rwd_mediaqueries.asp" target="_blank">W3schools</a>
					
				</li>

				<li class="enhance_box">
					<h3>Transitions and 2D Transform</h3>
					<p>This has been used on the index page which can we be seen when we hover over the products in the section. The colour changes and there is a zoom in on the text and the picture.</p>	
					<h3>Code used</h3>
					<p>transition: transform 0.5s;<br/>
						transform: scale(1.2);
						</p>
					<h3>Areas Covered</h3>
					<a href="index.php#service">Home Page</a>

					<h3>Learning from</h3>
					<a href="https://www.w3schools.com/css/css3_2dtransforms.asp" target="_blank">W3schools</a>

				</li>

				<li class="enhance_box">
					<h3>Embedded Materials</h3>
				<p>This is a simple and easy way to make external material available on your page like youtube and google maps are embedded into the website using the Iframe attribute.</p>
				<h3>Area Covered</h3>
				<a href="index.php#googlemap">Home Page</a>
				<a href="aboutme.php#youtube">About me</a>


				<h3>Material from</h3>
					<a href="https://www.youtube.com" target="_blank">Youtube</a>
					<a href="https://www.google.com/maps" target="_blank">Google Maps</a>
				</li>
				</ol>




		</section>

		
	</div>
	 <!--footer-->	
	 <?php include 'include/footer.php';?>



<script src="js/enhancement2.js"></script>


</body>
</html>