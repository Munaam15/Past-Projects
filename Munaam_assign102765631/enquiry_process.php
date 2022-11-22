<?php include 'include/header.php';?>
<body>
	<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
	<?php include 'include/nav.php';?>

	<div class="prime">
<br />
<br />
<br />
<br />
<br />
<br />

<?php 
    include_once('dbconfig.php');
	
    if (isset($_POST['saveEnquiry'])) 
    {
		$isValid = false;
		$errorMessage = '';

		$fname = trim($_POST['fname']);
		$mname = trim($_POST['fmname']);				 
		$lname = trim($_POST['flname']);
		$dob = trim($_POST['fdob']);
		$email = trim($_POST['femail']);
		$phonernumber = trim($_POST['fphone']);
		$streetaddress = trim($_POST['fstreet']);
		$city = trim($_POST['fcity']);
		$state = trim($_POST['fstate']);
		$postcode = trim($_POST['fpostcode']);
		$subject = trim($_POST['subject']);
		$service = trim($_POST['fservice']);		 
		$sdate = trim($_POST['fstartdate']);
		$edate = trim($_POST['fenddate']);
		$otherinfo = trim($_POST['otherInfo']);


		//echo 

		if ( empty($fname) || strlen($fname) > 25)
		{
			$errorMessage .= 'Your First Name must contain between 1 to 25 characters <br>';
		}
		else if (!ctype_alpha($fname))
		{
			$errorMessage .= "Your First Name must only contain letters <br>";
		}
		if ( empty($mname) || strlen($mname) > 25)
		{
			$errorMessage .= 'Your Middle Name must contain between 1 to 25 characters <br>';
		}
		else if (!ctype_alpha($mname))
		{
			$errorMessage .= "Your Middle Name must only contain letters <br>";
		}
		if ( empty($lname) || strlen($lname) > 25)
		{
			$errorMessage .= 'Your Last Name must contain between 1 to 25 characters <br>';
		}
		else if (!ctype_alpha($lname))
		{
			$errorMessage .= "Your Last Name must only contain letters <br>";
		}

		if ( empty($streetaddress) || strlen($streetaddress) > 60)
		{
			$errorMessage .= 'Your street address must contain between 1 to 60 characters <br>';
		}
		else if (!ctype_alpha($streetaddress))
		{
			$errorMessage .= "Your street address must only contain letters <br>";
		}

		if ( empty($city) || strlen($city) > 20)
		{
			$errorMessage .= 'Your city must contain between 1 to 20 characters <br>';
		}
		else if (!ctype_alpha($city))
		{
			$errorMessage .= "Your city must only contain letters <br>";
		}

		if ( empty($state) || strlen($state) > 20)
		{
			$errorMessage .= 'Your state must contain between 1 to 20 characters <br>';
		}
		else if (!ctype_alpha($state))
		{
			$errorMessage .= "Your state must only contain letters <br>";
		}

		if ( empty($subject) || strlen($subject) > 100)
		{
			$errorMessage .= 'Your subject must contain between 1 to 100 characters <br>';
		}

		if ( empty($service) || strlen($service) > 100)
		{
			$errorMessage .= 'Your service must contain between 1 to 100 characters <br>';
		}

		if ( empty($dob))
		{
			$errorMessage .= 'Please Fill in your date of birth <br>';
		}

		if ( empty($sdate))
		{
			$errorMessage .= 'Please Fill start date <br>';
		}

		if ( empty($edate))
		{
			$errorMessage .= 'Please Fill end date <br>';
		}

		if (!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$errorMessage .= 'Please Enter a valid Email address <br>';
		}

		if ( empty($phonernumber) || !is_numeric($phonernumber))
		{
			$errorMessage .= 'Your Phone Number must contain 1 to 10 digits only <br>';
		}

		if ( empty($postcode) || !is_numeric($postcode))
		{
			$errorMessage .= 'Your Phone Number must contain 1 to 7 digits only <br>';
		}		
	

		if (! empty($errorMessage))
		{
			echo $errorMessage;
			return;
		}

		//if (($fname == "" || name.length > 25 )

		//echo '======' ;//. $fname;

    	$enquiry_Query = "INSERT INTO enquiry(
				en_firstname,en_middleName,en_lastname,en_dob,en_email,en_phone,      en_streetaddress,en_city,en_state,en_postalcode,en_service,en_subject,en_startdate,en_enddate ,en_otherInfo)
			VALUES(
			'$fname',       '$mname',      '$lname','$dob',   '$email','$phonernumber','$streetaddress','$city','$state','$postcode','$service','$subject','$sdate','$edate','$otherinfo')";

		//echo $enquiry_Query;

    	$status  =  mysqli_query($dbCon,$enquiry_Query);


		if($status > 0)
		{
			//echo "<script>alert('Enquiry saved successfully');window.location.href='enquiry.php';</script>";
			echo '<p>Enquiry saved successfully.</p>';
			echo '<p><a href="#" onClick="history.go(-1)">Go to Enquiry Page</a></p>';
		}
		else
		{
			//echo "<script>alert('Failed to save.');</script>"; 
			echo "<p>'Failed to save.'</p>"; 
		}

		


    }




	function validate() {
		echo "Hello world!";
	}
	?>
<br />
<br />
<br />
<br />
<br />
<br />
	


	
</div>

<?php include 'include/footer.php';?>
 <script src="js/enhancement2.js"></script>
</body>
</html>