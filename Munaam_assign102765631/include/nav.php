<?php
if(session_status() === PHP_SESSION_NONE) {
	session_start();
  }
   //session_start();
   //if (isset)
   //$isloggedin = $_SESSION['loggedin'];
   //$logornotlog = '';

   if (isset($_SESSION["loggedin"])) 
   {
		$logornotlog = '<a class="about" href="signout.php" >Sign out</a>';
   }
   else
   {
   		$logornotlog = '<a class="about" href="login.php" >Login</a>';
   }
   

echo '<header>
  <a href="index.php" ><h1 class="Logo"> GRAPE </h1></a>
     <nav>
			<div class="dropdown">
				<ul class="link">
					<li class="dropbutton">
					 	<a >Products</a>
						<div class="dropdown-content">
							<ul id="mainUl">
								<li>
							<select id = "mainDrop" class="drop" onchange="mainDropDown();">
								<script class = "navService">dropDownDataCaller();</script>
						</select>
									
								</li>
						</ul>
						</div>
					</li>
					<li><a href="enquiry.php">Enquiry</a></li>
					<li><a href="disclaimer.php">Disclaimer</a></li>
					<li><a href="enhancement.php">Enhancement 1</a></li>
					<li><a href="enhancement2.php">Enhancement 2</a></li>
					<li><a href="enhancement3.php">Enhancement 3</a></li>
				</ul>
			</div>
		</nav>
		<a class="about" href="aboutme.php" >About Me</a>' . $logornotlog . '

		
	</header>'
?>