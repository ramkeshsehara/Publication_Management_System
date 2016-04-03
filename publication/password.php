<?php
// Check if a file has been uploaded

include("config.php");	

$dbLink = mysqli_connect("localhost","root","","publication3");
session_start();
$user_check=$_SESSION['login_user'];
if($_SERVER["REQUEST_METHOD"] == "POST")
{

$password=$_POST['password'];
$new_password=$_POST['new_password']; 
$confirm_password=$_POST['confirm_password'];

$user_check=$_SESSION['login_user'];

	

 
 
$sql="SELECT `Password` FROM `register` WHERE LDAP='$user_check'";

$result = $dbLink->query($sql);

$row = $result->fetch_assoc();
if($row['Password']==$password && $new_password==$confirm_password)
{
$sql="UPDATE `register` SET `Password`='$new_password' WHERE LDAP='$user_check'";
$result = $dbLink->query($sql);
}
else
{
	print('password do not match with previous password or dont match with confirm password');
}
 if(! $result ) {
               die('Could not update... password : ' . mysql_error());
            }


    }
 
    // Close the mysql connection
    $dbLink->close();


 
// Echo a link back to the main page
echo '<p>Click <a href="admin.php">here</a> to go back</p>';
 
 	
?>