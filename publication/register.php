<?php
 $fname=$_POST['first_name'];
 $lname=$_POST['last_name'];
 $email=$_POST['email']; 
 $contact=$_POST['phone_number'];  
 $referral_id=$_POST['referral_id'];
 $user_password=$_POST['password']; 
$myemail='noreply@ug201310026@iitj.ac.in';


$ph = substr($contact, 0, 4);
$user_id=$fname.$ph;

if($referral_id==null)
{
$referral_id="ramkesh9672";
}
//echo $user_Id;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "socialmoney";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO register (User_Id,FirstName, LastName,Email,Phone_Number,Referral_Id,Password)
VALUES ('$user_id','$fname', '$lname', '$email','$contact','$referral_id','$user_password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


//$conn=null;
/*
 mysql_connect("172.16.100.4:3306","parivartan","p@r!v@rt@n") or die(mysql_error()); 
 mysql_select_db("parivartan") or die(mysql_error());  

mysql_query("INSERT INTO register (first_name,last_name,phone_number,email,password)
VALUES ('$fname', '$lname', '$contact', '$email', '$password')") ;  */


$to = $email; 
	$email_subject = "Registration form confirmation for Social Money 
  Dear: $fname";
	$email_body = "Thank you ! Your registration has been successful".
	" Here are the details of the registration form:\n First Name: $fname \n Last Name: $lname \n Contact Number :$contact \n E-mail: $email \n User Id:$user_id \n \n".
"Your these above information will be use further \n".
"If you want to change and edit your above  account information Please login on social money or ,Contact:9672107905)\n".
"\n ".
"Thanks \n".
" Regards\n".
"Social Money Team \n".
"IIT Jodhpur \n".

	
	$headers = "From: $myemail\n"; 
	$headers .= "Reply-To: $myemail";
	
	mail($to,$email_subject,$email_body,$headers);
	echo "Thanku for your Response";

header("Location: register_thanks.html");

 ?> 