
<?php
include('lock.php');
$user_check=$_SESSION['login_user'];
?>

 <!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Comment </title>	
        <link rel="stylesheet" href="css/style2.css">

    
    
    
  </head>
  
<?php
//if "email" variable is filled out, send email
  if (isset($_POST['submit']))  {
  
 $to = "ug201310026@iitj.ac.in"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $subject = "Form submission";
    $subject2 = $_POST['Subject'];
    $message = " wrote the following:" . "\n\n" . $_POST['comment'];
    $message2 = "Here is a copy of your message "  . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you "  . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
  }
  
  //if "email" variable is not filled out, display the form
  else  {
?>


  <body background="images/B.jpg">

    <div id="form-main">
  <div id="form-div">
    <form class="form" method="post" id="form1" action="commentUpload.php">
      
      <p class="name">
        <input name="id" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="ID" id="name" />
      </p>
      
      <p class="email">
        <input name="Subject" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Subject" />
      </p>
      
      <p class="text">
        <textarea name="comment" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Comment"></textarea>
      </p>
      
      
      <div class="submit">
        <input type="submit" value="Submit" id="button-blue"/>
        <div class="ease"></div>
      </div>
    </form>
  </div>
  
  </body>
</html>


<?php
  }
?>
 