<?php
// Check if a file has been uploaded

include("config.php");	

$dbLink = mysqli_connect("localhost","root","","publication3");
session_start();
$user_check=$_SESSION['login_user'];
if($_SERVER["REQUEST_METHOD"] == "POST")
{

$id=$_POST['id'];
$type=$_POST['type']; 
$author=$_POST['author'];

$detail=$_POST['publication']; 
$title=$_POST['title'];
$user_check=$_SESSION['login_user'];

	
// Check if a file has been uploaded
if(isset($_FILES['papers'])) {
    // Make sure the file was sent without errors
    if($_FILES['papers']['error'] == 0) {
        // Connect to the database
        
 
        // Gather all required data
        $filename = $dbLink->real_escape_string($_FILES['papers']['name']);
       
        $data = $dbLink->real_escape_string(file_get_contents($_FILES  ['papers']['tmp_name']));
 
 
$sql="UPDATE `publication` SET `id`='$id',`LDAP`='$user_check',`type`='$type',`author`='$author',`detail`='$detail',`title`='$title',`data`='$data',`filename`='$filename' WHERE id='$id'";

$result6=mysqli_query($dbLink,$sql);
 if(! $result6 ) {
               die('Could not update... data : ' . mysql_error());
            }


    }
 
    // Close the mysql connection
    $dbLink->close();
}
else
{
    echo 'Error! A file was not sent!';
}
 
// Echo a link back to the main page
echo '<p>Click <a href="admin.php">here</a> to go back</p>';
 
 	

}
