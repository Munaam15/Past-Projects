<?php include 'include/header.php';?>

<body>


	<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
	<?php include 'include/nav.php';?>


	<div class="prime">
		<div class="banner">
		<img id="background" src="images/ind.jpg" alt="background"/>
		<h1 class="bannertext">Enhancement 2</h1>
		</div>
		<section id="enhance">
			<h2>List of the Enhancements</h2>
			<ol>
				<li class="enhance_box">
					<h3>Page on top scroller</h3>
					<p> All pages have this function. When user scroll down to a any page automatically bottom coner of the right hand side will appear small red color button called top. When user clicks on it automatically user will be scroll up to the page. And also when user went to the top of the page that red color button will be disappear.</p>
					<p>This animation and scroll top part mainly running with javascript window.onscroll function. it helps to find out which time that red color button must appear on the right hand side of the page.</p>
				
					<h3>Code used</h3>
					<p>var mybutton = document.getElementById("myBtn");</p>

<p>window.onscroll = function() {scrollFunction()};</p>

<p>function scrollFunction() {</p>
 <p> if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {</p>
 <p>   mybutton.style.display = "block";</p>
 <p> } else {</p>
 <p>   mybutton.style.display = "none";</p>
  <p>}</p>
<p>}</p>


<p>function topFunction() {</p>
 <p> document.body.scrollTop = 0;</p>
 <p> document.documentElement.scrollTop = 0;</p>
<p>}</p>

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
					<a href="https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_scroll_to_top" target="_blank">W3schools</a>
					
				</li>

				<li class="enhance_box">
					<h3>Lucky winner drawer</h3>
					<p>This part is in the laptop page of product section. in laptop page's bottomm of the page there has a section for lucky laptop winner. It is mainly doing with the javascript time handling function. when user came to the laptop page it calculates the time of user waited in the purticular page. Laptop page's botton section has three images of question mark with blinking the images. suddenly one of that image will turn into lucky winner image. that lucky winner should take a screenshot and send it to the hotline number via whatsapp. The first winner will get a laptop.</p>	
					<h3>Code used</h3>
					<p>setInterval(myTimer, 12000);</p>

					<p>	function myTimer() {</p>

					<p>	  document.getElementById("setUp").src = 'images/lucky.jpg';</p>

					<p>	  setInterval(resetter, 3000);</p>
					<p>	}</p>

					<p>	function resetter(){</p>
					<p>	   document.getElementById("setUp").src = 'images/quiz.jpg';</p>
					<p>	}</p>
					<h3>Areas Covered</h3>
					<a href="laptop.php#winner">Laptops</a>

					<h3>Learning from</h3>
					<a href="https://www.w3schools.com/js/js_timing.asp" target="_blank">W3schools</a>

				</li>

				<li class="enhance_box">
					<h3>Latest products slide show</h3>
				<p>This part is in the index page. This is simply like a slide show. This part mainly done with the javascript. It changes the images in every single second.</p>
				<h3>Area Covered</h3>
				<a href="index.php#slidShow">Index Page</a>

				<h3>Code used</h3>
					<p>let currentSlide = 0, theSlides = document.getElementsByClassName('widget_media_image'), customSliderTimer, next, prev, theWrapper = document.getElementById('my-custom-slider-demo');</p>
<p>function customNavToNextSlide() {</p>
 <p> next = ( currentSlide  theSlides.length - 1 ) ? currentSlide + 1 : 0;</p>
 <p> customSetCurrentSlide(next);</p>
<p>}</p>
<p>function customNavToPrevSlide() {</p>
 <p> prev = ( currentSlide > 0 ) ? currentSlide - 1 : theSlides.length - 1;</p>
 <p> customSetCurrentSlide(prev);</p>
<p>}</p>
<p>function customSetCurrentSlide(to) {</p>
<p>  clearInterval(customSliderTimer);</p>
 <p> for (let i = 0; i  theSlides.length; i ++) {</p>
 <p>   if ( currentSlide == i ) {</p>
 <p>     theSlides[currentSlide].classList.remove('active');</p>
 <p>   }</p>
 <p>   if ( next == i ) {</p>
 <p>     theSlides[to].classList.add('active');</p>
 <p>   }</p>
 <p> }</p>
 <p> currentSlide = to;</p>
 <p> customSliderStart();</p>
<p>}</p>
<p>function customSliderStart() {</p>
<p>  customSliderTimer = setInterval(function() {</p>
 <p>   customNavToNextSlide();</p>
 <p> }, 5000);</p>
<p>}</p>
<p>function customSliderInit() {</p>
 <p> let height = theSlides[0].getElementsByTagName('img')[0].height;</p>
 <p> theWrapper.style.height = height + 'px';</p>
 <p> for (let i = 0; i  theSlides.length; i ++) {</p>
 <p>   theSlides[i].style.height = height + 'px';</p>
 <p> }</p>
<p>}</p>
<p>if (typeof theSlides !== 'undefined') {</p>
 <p> window.addEventListener('resize', customSliderInit);</p>
 <p> customSliderInit();</p>
 <p> if ( theSlides.length > 1 ) {</p>
 <p>   customSliderStart();</p>
 <p> }</p>
<p>}</p>
					<h3>Learning from</h3>
					<a href="https://www.w3schools.com/w3js/w3js_slideshow.asp" target="_blank">W3schools</a>
				
			</li>

			<li class="enhance_box">
					<h3>Javascript Clock</h3>
				<p>This clock is in the index page. in the main header contains the analog type clock. it is purely design with the javascript.</p>

				<h3>Code used</h3>
					<p>function clock() {</p>
  <p>var now = new Date();</p>
  <p>var ctx = document.getElementById('canvas').getContext('2d');</p>
  <p>ctx.save();</p>
  <p>ctx.clearRect(0, 0, 150, 150);</p>
  <p>ctx.translate(75, 75);</p>
  <p>ctx.scale(0.4, 0.4);</p>
  <p>ctx.rotate(-Math.PI / 2);</p>
  <p>ctx.strokeStyle = 'black';</p>
  <p>ctx.fillStyle = 'white';</p>
  <p>ctx.lineWidth = 8;</p>
  <p>ctx.lineCap = 'round';</p>

  <p>ctx.save();</p>
 <p> for (var i = 0; i  12; i++) {</p>
   <p> ctx.beginPath();</p>
   <p> ctx.rotate(Math.PI / 6);</p>
   <p> ctx.moveTo(100, 0);</p>
   <p> ctx.lineTo(120, 0);</p>
   <p> ctx.stroke();</p>
 <p>}</p>
  <p>ctx.restore();</p>

  
  <p>ctx.save();</p>
 <p> ctx.lineWidth = 5;</p>
 <p> for (i = 0; i  60; i++) {</p>
  <p>  if (i % 5!= 0) {</p>
  <p>    ctx.beginPath();</p>
  <p>    ctx.moveTo(117, 0);</p>
  <p>    ctx.lineTo(120, 0);</p>
   <p>   ctx.stroke();</p>
   <p> }</p>
  <p>  ctx.rotate(Math.PI / 30);</p>
 <p> }</p>
  <p>ctx.restore();</p>

  <p>var sec = now.getSeconds();</p>
 <p> var min = now.getMinutes();</p>
 <p> var hr  = now.getHours();</p>
  <p>hr = hr >= 12 ? hr - 12 : hr;</p>

 <p> ctx.fillStyle = 'black';</p>

  
  <p>ctx.save();</p>
  <p>ctx.rotate(hr * (Math.PI / 6) + (Math.PI / 360) * min + (Math.PI / 21600) *sec);</p>
  <p>ctx.lineWidth = 14;</p>
  <p>ctx.beginPath();</p>
  <p>ctx.moveTo(-20, 0);</p>
  <p>ctx.lineTo(80, 0);</p>
  <p>ctx.stroke();</p>
  <p>ctx.restore();</p>

  <p>ctx.save();</p>
 <p> ctx.rotate((Math.PI / 30) * min + (Math.PI / 1800) * sec);</p>
  <p>ctx.lineWidth = 10;</p>
  <p>ctx.beginPath();</p>
  <p>ctx.moveTo(-28, 0);</p>
  <p>ctx.lineTo(112, 0);</p>
  <p>ctx.stroke();</p>
  <p>ctx.restore();</p>


  <p>ctx.save();</p>
  <p>ctx.rotate(sec * Math.PI / 30);</p>
  <p>ctx.strokeStyle = '#D40000';</p>
  <p>ctx.fillStyle = '#D40000';</p>
  <p>ctx.lineWidth = 6;</p>
  <p>ctx.beginPath();</p>
  <p>ctx.moveTo(-30, 0);</p>
  <p>ctx.lineTo(83, 0);</p>
  <p>ctx.stroke();</p>
  <p>ctx.beginPath();</p>
  <p>ctx.arc(0, 0, 10, 0, Math.PI * 2, true);</p>
  <p>ctx.fill();</p>
  <p>ctx.beginPath();</p>
  <p>ctx.arc(95, 0, 10, 0, Math.PI * 2, true);</p>
  <p>ctx.stroke();</p>
  <p>ctx.fillStyle = 'rgba(0, 0, 0, 0)';</p>
  <p>ctx.arc(0, 0, 3, 0, Math.PI * 2, true);</p>
  <p>ctx.fill();</p>
  <p>ctx.restore();</p>

  <p>ctx.beginPath();</p>
  <p>ctx.lineWidth = 14;</p>
  <p>ctx.strokeStyle = '#325FA2';</p>
  <p>ctx.arc(0, 0, 142, 0, Math.PI * 2, true);</p>
  <p>ctx.stroke();</p>

  <p>ctx.restore();</p>

  <p>window.requestAnimationFrame(clock);</p>
<p>}</p>

<p>window.requestAnimationFrame(clock);</p>
				<h3>Area Covered</h3>
				<a href="index.php">Index Page</a>

				
					<h3>Learning from</h3>
					<a href="https://developer.mozilla.org/en-US/docs/Web/API/Canvas_API/Tutorial/Basic_animations" target="_blank">Mozilla developer</a>
				
			</li>


		</ol>
		</section>

		
	</div>
	 <!--footer-->	
	 <?php include 'include/footer.php';?>



<script src="js/enhancement2.js"></script>


</body>
</html>