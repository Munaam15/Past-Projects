<?php   

session_start(); //to ensure you are using same session
session_destroy(); //destroy the session
//header("index.php"); //to redirect back to "index.php" after logging out
//exit();
echo "<script>window.location.href='index.php';</script>";

?>

<!-- learning for enhancement has been done using https://www.tutorialspoint.com/php/index.htm and https://www.w3schools.com/php/ -->


