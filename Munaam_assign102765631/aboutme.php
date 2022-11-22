<?php include 'include/header.php';?>

<body>


	<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
	<?php include 'include/nav.php';?>


	
	<!--main content-->
	<div class="prime">
		<div class="banner">
		<img id="background" src="images/ind.jpg" alt="background"/>
		<h1 class="bannertext">About Me</h1>
		</div>
		<div id="myinfo">	
	<h1>Munaamullah Khan</h1>	
		<h2>102765631</h2>
		<section>
		<h2 class="course">Bachelors Of Computer Science</h2>
		<p>I am a 20 years old boy from Pakistan.Right now, in my third semester at Swinburne University of Technology Sarawak Campus, majoring in Artificial Intelligence.<br/><br/>I believe that as the world advances, the products made by computer will play a vital role in how this world functions.<br/><br/>I would say everyone should have a basic knowledge of coding now if they want to be ready for the future.</p>
		<br/><br/>
		</section>	
		<img id="mypic" src="images/me.jpg" alt="My Picture"/>
		
		<div id="otherinfo">
		<h2 class="course"> Other Information</h2>
		<table id="abouttable">
			<tr>
				<th>Date of Birth</th>
				<td colspan="3">15th-April-2001</td>
			</tr>
			<tr>
				<th>Place of Birth</th>
				<td colspan="3" rowspan="2">Rawalpindi-Pakistan</td>
			</tr>
			<tr>
				<th>Home Town</th>
			</tr>
	   		<tr>
				<th >Hobbies</th>
				<td >Football</td>
				<td >Gym</td>
				<td >Horse Riding</td>
			</tr>
			<tr>
				<th >Languages</th>
				<td >Urdu</td>
				<td >English</td>
				<td >Pashto</td>
			</tr>
		</table>
		</div>		
	</div>
	<div id="youtube">
		<h2 class="course"> Rawalpindi-Pakistan </h2>
		<iframe id="ytub" src="https://www.youtube.com/embed/_OnRsgKDgmE"></iframe>
	</div>
</div>
<!--footer-->	
<?php include 'include/footer.php';?>




<script src="js/enhancement2.js"></script>
</body>
</html>