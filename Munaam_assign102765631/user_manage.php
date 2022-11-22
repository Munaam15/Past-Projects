<?php 
include_once('dbconfig.php');

include 'include/header.php';

if(isset($_GET['edit']))
{
    
}

?>


<body>

	<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
	<?php include 'include/nav.php';?>


	<div class="prime">	
		
		<form action="" method="post">		
			<fieldset>
				<legend><h1 class="form">New User</h1></legend>
				<div class="formdetails">
					<label for="uname">User Name:* </label><input  type="text" id="username" name="username"  placeholder="User Name"  maxlength="25"   required="required"/><br/><br/><br/>
					<label for="fmname"> Password:* </label><input id="password" name="password" type="password"  maxlength="25"  placeholder="Password" required="required"/><br/><br/><br/>
					
                    <label for="role">  Role :* </label>
						<select name="role" id="role" required="required">                            
                            <option value="admin">Admin</option>
                            <option value="operator">Operator</option>
                            <option value="owner">Owner</option>
                        </select>
				</div>
                <?php

                   


                    if(isset($_POST['login'])){
                    
                        $username=$_POST['username'];
                        $password=$_POST['password'];
                        $role=$_POST['role'];
                       
                        $errorMessage = '';
                        if ( empty($username) || strlen($username) > 25 || strlen($username) < 5)
                        {
                            $errorMessage .= 'Your User Name must contain between 5 to 25 characters <br>';
                        }                        
                        if ( empty($password) || strlen($password) > 25 || strlen($password) < 8)
                        {
                            $errorMessage .= 'Your password must contain between 8 to 25 characters <br>';
                        }
                        if ( empty($role) )
                        {
                            $errorMessage .= 'Please select role <br>';
                        } 
                        
                        echo '<p style="color:red; font-size:14px;">'. $errorMessage .'</p>'; 

                        if (empty($errorMessage))
                        {
                            $sql = "insert into users (ur_username, ur_password, ur_role)
                            values ('$username', '$password', '$role');";
                            //echo $sql;
                            $status  =  mysqli_query($dbCon,$sql);

                            if($status > 0)
                            {
                                echo '<p style="font-size:14px;">User created successfully.</p>'; 
                            }
                            else
                            {
                                echo '<p style="color:read; font-size:14px;">Fail to create user.</p>'; 
                            }
                       } 
                    }
                ?>
			    </fieldset>
				<fieldset id="buttons">					
					<input class="buyButton" name="login" type="submit" value="Save"/>	
<?php
                    

                    ?>
				</fieldset>

                <?php
                

                if(isset($_GET['delete']))
                {
                    $id = $_GET['id'];

                    $sql = "DELETE FROM users WHERE ur_id= '$id';";
                            //echo $sql;
                    $status  =  mysqli_query($dbCon,$sql);

                    if($status > 0)
                    {                       
                        echo "<script>window.location.href='user_manage.php';</script>";
                    }
                    else
                    {
                        echo '<p style="color:read; font-size:14px;">Fail to delete.</p>'; 
                    }
                }

                    $sql = "SELECT * FROM users";
                    if($result = mysqli_query($dbCon, $sql))
                    {
                        if(mysqli_num_rows($result) > 0)
                        {
                            echo "<table class='centerElement'>";
                                echo "<tr>";
                                    echo "<th>ID</th>";
                                    echo "<th>User Name</th>";
                                    echo "<th>Password</th>";
                                    echo "<th>Role</th>";
                                    //echo "<th>Edit</th>";
                                    echo "<th>Delete</th>";

                                echo "</tr>";
                            while($row = mysqli_fetch_array($result))
                            {
                                echo "<tr>";                               
                                    echo "<td>" . $row['ur_id'] . "</td>";
                                    echo "<td>" . $row['ur_username'] . "</td>";
                                    echo "<td>" . $row['ur_password'] . "</td>";
                                    echo "<td>" . $row['ur_role'] . "</td>";        
                                    //echo '<td><a href="user_manage.php?&id=' . $row['ur_id'] . '&edit=true?ur_username=' . $row['ur_username'] . '">Edit</a></td>';        
                                    echo '<td><a href="user_manage.php?&id=' . $row['ur_id'] . '&delete=true">Delete</a></td>';        
                                echo "</tr>";
                            }
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } 
                        else
                        {
                            echo "No records matching your query were found.";
                        }
                    } 
                    else
                    {
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbCon);
                    }

                    
                ?>
		</form>				
	</div>

    
			 <!--footer-->	
 <?php include 'include/footer.php';?>
			


<script src="js/enhancement2.js"></script>

</body>
</html>

<!-- learning for enhancement has been done using https://www.tutorialspoint.com/php/index.htm and https://www.w3schools.com/php/ -->