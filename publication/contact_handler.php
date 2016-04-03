<?php 
$myemail ='ug201310026@iitj.ac.in';//<-----Put Your email address here.

$name = $_POST['name']; 
$email_address = $_POST['email'];
$phone_number=$_POST['phone_number']; 
$message = $_POST['message']; 


	//$to = $myemail; 
	$email_subject = "Contact form submission from social money site: $name";
	$email_body = "You have received a new message from social money site contact form. ".
	" Here are the details of the message:\n Name: $name \n Email: $email_address \n Phone Number:$phone_number \n Message \n $message"; 
	
	$headers = "From: $myemail\n"; 
	$headers .= "Reply-To: $email_address";
	
	mail($myemail,$email_subject,$email_body,$headers);
	echo "Thank you for submitting the form. We will contact you soon by mail!";
	//redirect to the 'thank you' page
	header('Location: contact_thanks.html');

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
	<title>Contact form handler</title>
</head>

<body>
<!-- This page is displayed only if there is some error -->
<?php
echo nl2br($errors);
?>


</body>
</html>