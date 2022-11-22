<?php include 'include/header.php';?>

<body>

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>


<?php include 'include/nav.php';?>

	<div class="prime">	

    <br />
    <br />
    <br />
    <br />
<?php

include_once('dbconfig.php');


$sql = "SELECT * FROM enquiry";
if($result = mysqli_query($dbCon, $sql))
{
    if(mysqli_num_rows($result) > 0)
    {
        echo "<table>";
            echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>First Name</th>";
                echo "<th>Middle Name</th>";
                echo "<th>Last Name</th>";
                echo "<th>DOB</th>";
                echo "<th>Email</th>";
                echo "<th>Phone</th>";
                echo "<th>Street Address</th>";
                echo "<th>City/Town</th>";
                echo "<th>State</th>";
                echo "<th>Postal Code</th>";
                echo "<th>Service</th>";
                echo "<th>Subject</th>";
                echo "<th>Start Date</th>";
                echo "<th>End Date</th>";
                echo "<th>Other Info</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
                echo "<td>" . $row['en_id'] . "</td>";
                echo "<td>" . $row['en_firstname'] . "</td>";
                echo "<td>" . $row['en_middleName'] . "</td>";
                echo "<td>" . $row['en_lastname'] . "</td>";
                echo "<td>" . $row['en_dob'] . "</td>";
                echo "<td>" . $row['en_email'] . "</td>";
                echo "<td>" . $row['en_phone'] . "</td>";
                echo "<td>" . $row['en_streetaddress'] . "</td>";
                echo "<td>" . $row['en_city'] . "</td>";
                echo "<td>" . $row['en_state'] . "</td>";
                echo "<td>" . $row['en_postalcode'] . "</td>";
                echo "<td>" . $row['en_service'] . "</td>";
                echo "<td>" . $row['en_subject'] . "</td>";
                echo "<td>" . $row['en_startdate'] . "</td>";
                echo "<td>" . $row['en_enddate'] . "</td>";
                echo "<td>" . $row['en_otherInfo'] . "</td>";             
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
 
// Close connection
mysqli_close($dbCon);

?>

</div>
			 <!--footer-->	
			 <?php include 'include/footer.php';?>



<script src="js/enhancement2.js"></script>

</body>
</html>