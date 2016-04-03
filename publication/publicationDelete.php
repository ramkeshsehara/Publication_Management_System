<?php
// Check if a file has been uploaded

include("config.php");	

$dbLink = mysqli_connect("localhost","root","","publication3");
session_start();
$user_check=$_SESSION['login_user'];
if($_SERVER["REQUEST_METHOD"] == "POST")
{

$id=$_POST['id'];
 
$sql="DELETE FROM `publication` WHERE id='$id'";

$result6=mysqli_query($dbLink,$sql);
 if(! $result6 ) {
               die('Could not delete... data : ' . mysql_error());
            }


    }
 
    // Close the mysql connection
    $dbLink->close();

 
// Echo a link back to the main page
echo '<p>Click <a href="admin.php">here</a> to go back</p>';
 
 	?>
