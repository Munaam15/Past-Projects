<?php include 'include/header.php';?>
<body>

	<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
	<?php include 'include/nav.php';?>


	<div class="prime">	
		
		<form action="enquiry_process.php" method="post">		
			<fieldset>
				<legend><h1 class="form">Personal Details</h1></legend>
				<div class="formdetails">
					<label for="fname"> First Name:* </label><input  type="text" id="fname" name="fname"   pattern="[a-zA-Z]+" placeholder="Asad"  maxlength="25"   required="required"/><br/><br/><br/>
					<label for="fmname"> Middle Name :* </label><input id="fmname" name="fmname" type="text"  pattern="[a-zA-Z]+" maxlength="25"  placeholder="Ullah" required="required"/><br/><br/><br/>
					<label for="flname">  Last Name :* </label><input id="flname" name="flname" type="text"  pattern="[a-zA-Z]+"  maxlength="25"  placeholder="Khan" required="required"/>
					<br/><br/><br/>
					<label for="fdob"> Date Of Birth:* </label><input id="fdob" name="fdob" type="date" required="required"/><br/><br/><br/>
					<label for="femail"> Email Address :* </label>
					<input onchange="validateEmail()" id="femail" name="femail" type="email"  placeholder="someone@example.com" required="required"/><br/><br/><br/>

					
					<label for="fphone"> Phone Number :*   </label><input onkeypress="return validateNumber(event)" id="fphone" name="fphone" type="tel" pattern="[0-9]{0-10}"  maxlength="10" placeholder="##########" required="required"/><br/><br/><br/>
					
				</div>
			</fieldset>
			<fieldset>
				<legend><h1 class="form">Address Details  </h1></legend>
				<div class="formdetails">
					
					
					<label for="fstreet"> Street Address : * </label><input id="fstreet" name="fstreet" type="text"  pattern="[a-zA-Z]+"  maxlength="40"  placeholder="Usman Street" required="required"/><br/><br/><br/>
					<label for="fcity"> City/Town :  * </label><input id="fcity" name="fcity" type="text"  pattern="[a-zA-Z]+" maxlength="20"  placeholder="Rawalpindi" required="required"/><br/><br/><br/>

					<label for="fstate">  State :* </label>
						<select name="fstate" id="fstate" required="required">
						<option value="">Select</option>
						<option value="Islamabad">Islamabad</option>
						<option value="Lahore">Lahore</option>
						<option value="Karachi">Karachi</option>
						<option value="Gujranwala">Gujranwala</option>
						<option value="Faislabad">Faislabad</option>
						<option value="Pehsawar">Pehsawar</option>
						<option value="Quetta">Quetta</option>
						<option value="Multan">Multan</option>
						<option value="Jhelum">Jhelum</option>
						<option value="Mardan">Mardan</option>
						<option value="Kashmir">Kashmir</option>
						<option value="Sialkot">Sialkot</option>
						<option value="Bahawalpur">Bahawalpur</option>
						<option value="Okara">Okara</option>
						<option value="Naran">Naran</option>
						<option value="Kaghan">Kaghan</option>
						</select>
					<br/><br/><br/>
					<label for="fpostcode"> Postal Code :*</label><input id="fpostcode" name="fpostcode" type="text"  pattern="[0-9]{5}" maxlength="5" placeholder="#####" required="required"/><br/><br/><br/>
					
					
					</div>
					
			</fieldset>
			<fieldset>
				<legend><h1 class="form"> Service Details </h1></legend>
				<div class="formdetails">
					<label for="fservice">Service *</label>
					<select required="required" name="fservice" id="fservice" onchange="setSubject()">
						<option value="">Select</option>
						
					</select><br/><br/><br/>
				<label for="femail"> Subject :* </label><input id="subject" name="subject" type="text"  placeholder="subject"  required="required"/><br/><br/><br/>
					<label for="fstartdate">Start Date : *</label><input id="fstartdate" name="fstartdate" type="date" required="required"/><br/><br/><br/>
					<label for="fenddate">  End Date :  * </label><input id="fenddate" name="fenddate" type="date" required="required"/>
					<br/><br/><br/>
					<textarea placeholder="Enter Any Other Information " id="otherInfo" name="otherInfo" cols="80" rows="3"></textarea>
				</div>
				</fieldset>
		

				<fieldset id="buttons">					
					<input class="buyButton" name="saveEnquiry" type="submit" value="Post Enquiry" onclick="return submitData()" />					
					<br /><br /><input class="buyButton" type="reset" value="Reset" />
					<!-- <button class="fbutton1" type="reset" value="reset">Reset</button> -->
				</fieldset>
		</form>
				
	</div>
			 <!--footer-->	
 <?php include 'include/footer.php';?>
			


<script src="js/enhancement2.js"></script>

</body>
</html>