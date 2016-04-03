<?php
// Check if a file has been uploaded

include("config.php");	

$dbLink = mysqli_connect("localhost","root","","publication3");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
{


$Name=$_POST['name']; 
$Department=$_POST['department'];

$Detail=$_POST['detail']; 
$Mobile=$_POST['mobile'];

$Email=$_POST['email']; 
$Address=$_POST['address']; 
$Research=$_POST['research']; 

$user_check=$_SESSION['login_user'];

// Make sure the file was sent without errors
    if($_FILES['cv']['error'] == 0) {
       
 
        // Gather all required data
        $filename = $dbLink->real_escape_string($_FILES['cv']['name']);
        $data = $dbLink->real_escape_string(file_get_contents($_FILES  ['cv']['tmp_name']));
 
        // Create the SQL query
	
$sql8="UPDATE `profile` SET `Address`='$Address',`Department`='$Department',`LDAP`='$user_check',`Detail`='$Detail',`Email`='$Email',`Mobile`='$Mobile',`Name`='$Name',`Research`='$Research',`Data`='$data',`filename`='$filename'  WHERE LDAP='$user_check'";

$result6=mysqli_query($dbLink,$sql8);
 if(! $result6 ) {
               die('Could not insert... data because for this ldap data already exist u can update data using update link : ' . mysql_error());
            }
}
 
    // Close the mysql connection
    $dbLink->close();
}

// Echo a link back to the main page
echo '<p>Click <a href="admin.php">here</a> to go back</p>';
?>
 