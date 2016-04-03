<?php
// Insert the recipient email inside the $emailTo variable
$emailTo = 'ug201310026@iitj.ac.in';
$emailSubject = 'Message from Contact Form';

// Required input fields
$requiredInputs = array('fullName','email','subject','message');

// Error messages
$errorMessages = array(
	'fullName' => '<i class="fa fa-times"></i> Oops! Please enter a Full Name!',
	'email' => '<i class="fa fa-times"></i> Oops! Please enter a valid Email Address!',
	'subject' => '<i class="fa fa-times"></i> Oops! Please enter your subject!',
	'message' => '<i class="fa fa-times"></i> Oops! Please enter your Message!'
);

// Form status
$formCompleted = false;

// Validation array
$Validation = array();

// Form submition
if(!empty($_POST)) {
	// POST array
	foreach($_POST as $key => $value) $_POST[$key] = removeEmailInjection(trim($value));
	
	// Check the required fields and make sure they match our needs
	foreach($requiredInputs as $field) {		
		// the field has been submitted
		if(!array_key_exists($field, $_POST)){ 
			array_push($Validation, $field);
		}
		// check if there is information in the field
		if($_POST[$field] == ''){
			array_push($Validation, $field);
		}
		// validate the email address supplied
		if($field == 'email'){
			if(!validateEmailAddress($_POST[$field])) array_push($Validation, $field);
		}
	}
	
	// basic validation result
	if(count($Validation) == 0) {
		// Prepare our content string
		$emailContent = 'New Website Comment: ' . "\n\n";
		
		// simple email content
		foreach($_POST as $key => $value) {
			if($key != 'submit') $emailContent .= $key . ': ' . $value . "\n";
		}
		
		// if validation passed the right way, then send the email
		mail($emailTo, $emailSubject, $emailContent);
		
		// Update form switch
		$formCompleted = true;
	}
}

function validateEmailAddress($email = false) {
	return (preg_match('/^[^@\s]+@([-a-z0-9]+\.)+[a-z]{2,}$/i', $email))? true : false;
}

function removeEmailInjection($field = false) {
   return (str_ireplace(array("\r", "\n", "%0a", "%0d", "Content-Type:", "bcc:","to:","cc:"), '', $field));
}

?>