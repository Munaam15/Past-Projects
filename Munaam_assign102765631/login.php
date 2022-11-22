<?php include 'include/header.php';?>
<body>

	<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
	<?php include 'include/nav.php';?>


	<div class="prime">	
		
		<form action="" method="post">		
			<fieldset>
				<legend><h1 class="form">Login</h1></legend>
				<div class="formdetails">
					<label for="uname"> User Name:* </label><input  type="text" id="username" name="username"  placeholder="User Name"  maxlength="25"   required1="required1"/><br/><br/><br/>
					<label for="fmname"> Password:* </label><input id="password" name="password" type="password"  maxlength="25"  placeholder="Password" required1="required1"/><br/><br/><br/>
				</div>
                <?php
                   
                    if(isset($_POST['login'])){
                    include_once('dbconfig.php');

                        $username=$_POST['username'];
                        $password=$_POST['password'];
                        $role=$_POST['role'];
                       
                        $errorMessage = '';
                        // if ( empty($username) || strlen($username) > 25 || strlen($username) < 5)
                        // {
                        //     $errorMessage .= 'Your User Name must contain between 5 to 25 characters <br>';
                        // }                        
                        // if ( empty($password) || strlen($password) > 25 || strlen($password) < 8)
                        // {
                        //     $errorMessage .= 'Your password must contain between 8 to 25 characters <br>';
                        // }
                        // if ( empty($role) )
                        // {
                        //     $errorMessage .= 'Please select role <br>';
                        // } 
                        
                        //echo '<p style="color:red; font-size:14px;">'. $errorMessage .'</p>'; 

                        if (empty($errorMessage))
                        {
                            //$sql='';

                            $sql = "SELECT * FROM users WHERE ur_username='{$username}' AND ur_password = '{$password}'";
                            //echo $sql;
                            $result = mysqli_query($dbCon,$sql) or die("Query unsuccessful") ;
                            
                            if (mysqli_num_rows($result) > 0) {
                                //echo "Username is already exist";
                                session_start();
                                $_SESSION['loggedin'] = 'true';

                                $r = mysqli_fetch_assoc($result);
                                $role = $r['ur_role'];

                               
                                if (strcmp($role, 'admin') !== 0)
                                {
                                    echo "<script>window.location.href='logged_user.php';</script>";
                                }
                                else
                                {
                                    echo "<script>window.location.href='logged_admin.php';</script>";
                                    
                                }
                                //echo $result[0]['role'];
			                    //

                            } else {

                                echo '<p style="color:red; font-size:14px;"> Wrong user name or password</p>';                                 
                            }

                        }

                            
                        //echo $enquiry_Query;
                

                    }
                ?>

			</fieldset>
				<fieldset id="buttons">					
					<input class="buyButton" name="login" type="submit" value="Login"/>	
				</fieldset>
		</form>				
	</div>

    
			 <!--footer-->	
 <?php include 'include/footer.php';?>
			


<script src="js/enhancement2.js"></script>

</body>
</html>
<!-- learning for enhancement has been done using https://www.tutorialspoint.com/php/index.htm and https://www.w3schools.com/php/ -->