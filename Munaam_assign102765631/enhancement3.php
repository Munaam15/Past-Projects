<?php include 'include/header.php';?>

<body>


	<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
	<?php include 'include/nav.php';?>


	<div class="prime">
		<div class="banner">
		<img id="background" src="images/ind.jpg" alt="background"/>
		<h1 class="bannertext">Enhancement 3</h1>
		</div>
		<section id="enhance">
			<h2>List of the Enhancements</h2>
			<ol>
				<li class="enhance_box">
					<h3>User Management</h3>
					<p> Implementing user authentication featuresfor business owner / operator / Web
					site administrator in order to view and manage publicenquiry. Create, View, and Delete user from thewebsite..</p>
					
				
					
<p>CREATE TABLE users(
		ur_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
		ur_username VARCHAR(25) NOT NULL,
		ur_password VARCHAR(25) NOT NULL,
		ur_role VARCHAR(25) NOT NULL	
	);</p>

<p>$sql = "SELECT * FROM users WHERE ur_username='{$username}' AND ur_password = '{$password}'";                           
                            $result = mysqli_query($dbCon,$sql) or die("Query unsuccessful") ;                            
                            mysqli_num_rows($result) </p>



					<h3>Areas Covered</h3>
					<ul>
						
						<li><a href="login.php">Login</a></li>
						<li><a href="signout.php">signout</a></li>
						<li><a href="user_manage.php">User manage</a></li>
						<li><a href="logged_admin.php">Admin Page</a></li>
						<li><a href="logged_user.php">User Page</a></li>
						<li><a href="">Create User Table</a>	</li>
						<li><a href="enhancement3.php">Enhancements</a>	</li>
						
					</ul>
					<h3>Learning from</h3>
					<a href="https://www.w3schools.com/php/" target="_blank">W3schools</a>
					<a href="https://www.tutorialspoint.com/php/index.htm" target="_blank">Tutorials Point</a>

					
					
				</li>

			

				
				
		</section>

		
	</div>
	 <!--footer-->	
	 <?php include 'include/footer.php';?>



<script src="js/enhancement2.js"></script>


</body>
</html>

<!-- learning for enhancement has been done using https://www.tutorialspoint.com/php/index.htm and https://www.w3schools.com/php/ -->