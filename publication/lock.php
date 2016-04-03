<?php

include('config.php');
$con = mysqli_connect("localhost","root","","publication3");
session_start();
$user_check=$_SESSION['login_user'];

$sql="select LDAP from register where LDAP='$user_check'";

$ses_sql=mysqli_query($con,$sql);

$row=mysqli_fetch_assoc($ses_sql);

$login_session=$row['LDAP'];

if(!isset($login_session))
{
header("Location: index.php");
}
 
?>