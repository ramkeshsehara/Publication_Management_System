

<?php
// Check if a file has been uploaded

include("config.php");	

$dbLink = mysqli_connect("localhost","root","","publication3");
session_start();
$user_check=$_SESSION['login_user'];
if($_SERVER["REQUEST_METHOD"] == "POST")
{

$id=$_POST['id'];
$subject=$_POST['Subject']; 
$comment=$_POST['comment']; 
 
$sql="INSERT INTO `comment`(`id`, `subject`, `comment`) VALUES ('$id','$subject','$comment')";

$result = $dbLink->query($sql);



 if(! $result ) {
               die('Could not insert... comment : ' . mysql_error());
            }


    }
 
    // Close the mysql connection
    $dbLink->close();


 
 
 	
?>
    <script type="text/javascript">
   		setTimeout("afterSendingLocation()", 2000);
       	function afterSendingLocation() {
			// Replace this with the page you want to redirect to after sending the message
			location.href="index.php";
		}
     </script>