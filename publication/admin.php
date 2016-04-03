
<?php
include('lock.php');
$user_check=$_SESSION['login_user'];
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<script>
	function show(id){
	
	if(id == 'profile'){
document.getElementById("page-wrapper").style.display = 'none';
document.getElementById("profile").style.display = 'block';
document.getElementById("account").style.display = 'none';
document.getElementById("change_password").style.display = 'none';
document.getElementById("earn").style.display = 'none';
document.getElementById("withdraw").style.display = 'none';
}

else if(id == 'account'){
document.getElementById("profile").style.display = 'none';
document.getElementById("page-wrapper").style.display = 'none';
document.getElementById("account").style.display = 'block';
document.getElementById("change_password").style.display = 'none';
document.getElementById("earn").style.display = 'none';
document.getElementById("withdraw").style.display = 'none';
}

else if(id == 'change_password'){
document.getElementById("profile").style.display = 'none';
document.getElementById("page-wrapper").style.display = 'none';
document.getElementById("account").style.display = 'none';
document.getElementById("change_password").style.display = 'block';
document.getElementById("earn").style.display = 'none';
document.getElementById("withdraw").style.display = 'none';
}

else if(id == 'earn'){
document.getElementById("profile").style.display = 'none';
document.getElementById("page-wrapper").style.display = 'none';
document.getElementById("account").style.display = 'none';
document.getElementById("change_password").style.display = 'none';
document.getElementById("earn").style.display = 'block';
document.getElementById("withdraw").style.display = 'none';
}

else if(id == 'withdraw'){
document.getElementById("profile").style.display = 'none';
document.getElementById("page-wrapper").style.display = 'none';
document.getElementById("account").style.display = 'none';
document.getElementById("change_password").style.display = 'none';
document.getElementById("earn").style.display = 'none';
document.getElementById("withdraw").style.display = 'block';
}
	
	else{
	
	document.getElementById("profile").style.display = 'none';
document.getElementById("page-wrapper").style.display = 'block';
document.getElementById("account").style.display = 'none';
document.getElementById("change_password").style.display = 'none';
document.getElementById("earn").style.display = 'none';
document.getElementById("withdraw").style.display = 'none';
	
	
	}
}
	
	</script>

</head>



<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Publication Management System</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $login_session; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="javascript:show('profile')"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                          <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
				    <li>
                        <a href="index.php"><i class="fa fa-home"></i>Home</a>
                    </li>
                    <li class="active">
                        <a href="javascript:show('page-wrapper')"><i class="fa fa-fw fa-dashboard"></i> Welcome</a>
                    </li>
                    <li>
                        <a href="javascript:show('profile')"><i class="fa fa-user"></i>My Profile</a>
                    </li>
                    <li>
                        <a href="javascript:show('account')"><i class="fa fa-fw fa-table"></i>Publication detail</a>
                    </li>
                    <li>
                        <a href="javascript:show('change_password')"><i class="fa fa-fw fa-edit"></i>Change Password</a>
                    </li>
                    <!--<li>
                        <a href="javascript:show('earn')"><i class="fa fa-fw fa-desktop"></i>Earning</a>
                    </li> -->
                    
                   
                    <li>
                        <a href="logout.php"><i class="fa fa-sign-out"></i>Logout</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper" style="background-image:url(images/B.jpg)">

            <div class="container-fluid" style="background-image:url(images/B.jpg)">

               
                <div class="row">
                    <div class="col-lg-12">
                        
					 	<p style="font-size:30px; color:white; text-align:center; padding-top:200px; padding-bottom:200px;text-shadow: 0 0 10px #008b8b, 0 0 20px #008b8b, 0 0 30px #008b8b, 0 0 40px #008b8b, 0 0 70px #008b8b, 0 0 80px #008b8b, 0 0 100px #008b8b, 0 0 150px #008b8b;">WELCOME TO THE WORLD OF<br> SCIENCE & RESEARCH</p> 
                        
                    </div>
                </div>
                <!-- /.row -->


            </div>
            <!-- /.container-fluid -->

        </div>
		
		
		<div id="profile" style="display:none; background-color:white;">
		
            <div class="container-fluid">
			<div class="col-sm-9">
          
          <ul class="nav nav-tabs" id="myTab">
            <li class="active"><a href="#messages" data-toggle="tab">Profile</a></li>
            <li><a href="#settings" data-toggle="tab">Add Profile</a></li>
			<li><a href="#update" data-toggle="tab">Update Profile</a></li>
          </ul>
              
          <div class="tab-content">
		  
             <div class="tab-pane active" id="messages" style="padding-bottom:10%;">
                 
				 
              <?php 
	       $sql=" SELECT * FROM profile WHERE LDAP='$user_check'";
           $result=mysqli_query($con,$sql);		   
		   if (mysqli_num_rows($result) > 0) {
         // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
         echo "Address : " . $row["Address"]. "<br><br>"  . "Department : " . $row["Department"]."<br><br>" ."LDAP :". $row["LDAP"]."<br><br>"."Detail : ".$row["Detail"]."<br><br>"."Email :".$row["Email"]."<br><br>"."Mobile :".$row["Mobile"]."<br><br>"."Name :".$row["Name"]."<br><br>"."Research Interst :".$row["Research"]."<br><br>";
         }
         } 
	 
			  ?>
               
             </div><!--/tab-pane-->
			 
             <div class="tab-pane" id="settings">
            		
               	
                  <hr>
                  <form class="form" action="profile.php" method="POST" enctype="multipart/form-data" id="registrationForm">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>Name</h4></label>
                              <input type="text" class="form-control" name="name" id="first_name" placeholder="Name" title="enter your name">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Department</h4></label>
                              <input type="text" class="form-control" name="department" id="last_name" placeholder="department" title="enter your department if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Detail</h4></label>
                              <input type="text" class="form-control" name="detail" id="phone" placeholder="detail" title="enter your phone number if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Mobile</h4></label>
                              <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="location"><h4>Address</h4></label>
                              <input type="text" class="form-control" name="address" id="location" placeholder="address" title="enter a location">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="state_name"><h4>Research Interst</h4></label>
                              <input type="text" class="form-control" name="research" id="state_name" placeholder="enter your research interst" title="enter your state name">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="country"><h4>Upload CV</h4></label>
                              <input type="file" class="form-control" name="cv" id="uploaded_file" placeholder="upload cv">
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12" style="padding-bottom:10%;">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
              	</form>
              </div>
             

			 <div class="tab-pane" id="update">
            		
               	
                  <hr>
                  <form class="form" action="profileUpdate.php" method="POST" enctype="multipart/form-data" id="registrationForm">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>Name</h4></label>
                              <input type="text" class="form-control" name="name" id="first_name" placeholder="Name" title="enter your name if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Department</h4></label>
                              <input type="text" class="form-control" name="department" id="last_name" placeholder="department" title="enter your department if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Detail</h4></label>
                              <input type="text" class="form-control" name="detail" id="phone" placeholder="detail" title="enter your phone number if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Mobile</h4></label>
                              <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="location"><h4>Address</h4></label>
                              <input type="text" class="form-control" name="address" id="location" placeholder="Address" title="enter a location">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="state_name"><h4>Research Interst</h4></label>
                              <input type="text" class="form-control" name="research" id="state_name" placeholder="enter your research interst" title="enter your state name">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="country"><h4>Upload CV</h4></label>
                              <input type="file" class="form-control" name="cv" id="uploaded_file" placeholder="upload cv">
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12" style="padding-bottom:10%;">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
              	</form>
              </div>
             
			   
              </div><!--/tab-pane-->
			  
          </div><!--/tab-content-->

        </div><!--/col-9-->
		
		</div>
		
		<div id="account" style="display:none; background-color:white;">
		
	   <div class="container-fluid">
			<div class="col-sm-9">
          
          <ul class="nav nav-tabs" id="myTab">
            <li class="active"><a href="#detail" data-toggle="tab">Publication's</a></li>
            <li><a href="#edit" data-toggle="tab">Add Publication</a></li>
			<li><a href="#updates" data-toggle="tab">Update Publication</a></li>
			<li><a href="#deletes" data-toggle="tab">Delete Publication</a></li>
          </ul>
              
			  
          <div class="tab-content">
             <div class="tab-pane" id="detail">
			
			
			<?php
// Connect to the database
$dbLink = mysqli_connect("localhost","root","","publication3");

if(mysqli_connect_errno()) {
    die("MySQL connection failed: ". mysqli_connect_error());
}
 
// Query for a list of all existing files
$sql = "SELECT `id`,`type`,`author`,`detail`,`title`,`created` FROM `publication` where LDAP='$user_check'";
$result = $dbLink->query($sql);
 
// Check if it was successfull
if($result) {
    // Make sure there are some files in there
    if($result->num_rows == 0) {
        echo '<p>There are no files in the database</p>';
    }
    else {
        // Print the top of a table
        echo '<table width="100%">
                <tr>
				    <td><b>Id</b></td>
                    <td><b>Type</b></td>
                    <td><b>Author</b></td>
                    <td><b>Detail</b></td>
                     <td><b>Title</b></td>
					<td><b>Created</b></td>
					<td><b>Download</b></td>
                    <td><b>&nbsp;</b></td>
                </tr>';
 
        // Print each file
        while($row = $result->fetch_assoc()) {
            echo "
                <tr>
				    <td>{$row['id']}</td>
                    <td>{$row['type']}</td>
                    <td>{$row['author']}</td>
                    <td>{$row['detail']}</td>
                    <td>{$row['title']}</td>
					<td>{$row['created']}</td>
                    <td><a href='getfile.php?id={$row['id']}'>Download</a></td>
                </tr>";
        }
 
        // Close table
        echo '</table>';
    }
 
    // Free the result
    $result->free();
}
else
{
    echo 'Error! SQL query failed:';
    echo "<pre>{$dbLink->error}</pre>";
}
 
// Close the mysql connection
$dbLink->close();
?>
  
             </div><!--/tab-pane-->
			 
             <div class="tab-pane" id="edit">
            		
               	
                  <hr>
                  <form class="form" action="publication.php" method="post" enctype="multipart/form-data" id="registrationForm">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="payee_name"><h4>Type of Publication</h4></label>
                              <input type="text" class="form-control" name="type" id="payee_name" placeholder="Type of Publication" title="Name which is on your Atm">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="acccount_number"><h4>Author</h4></label>
                              <input type="text" class="form-control" name="author" id="author" placeholder="Name of Author" title="Account number">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="bank_name"><h4> Related to publication</h4></label>
                              <input type="text" class="form-control" name="publication" id="bank_name" placeholder="Related to publication" title="Bank Name">
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="branch_name"><h4>Title</h4></label>
                              <input type="text" class="form-control" name="title" id="branch_name" placeholder="title" title="enter your Branch Nname">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="ifsc_code"><h4>Upload paper</h4></label>
                              <input type="file" class="form-control" name="papers" id="paper" placeholder="Upload paper">
                          </div>
                      </div>
                    
                      <div class="form-group">
                           <div class="col-xs-12" style="padding-bottom:10%;">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
              	</form>
              </div>   
              
			  <div class="tab-pane" id="updates">
            		
               	
                  <hr>
                  <form class="form" action="publicationUpdate.php" method="post" enctype="multipart/form-data" id="registrationForm">
				  
				     <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="payee_name"><h4>ID</h4></label>
                              <input type="number" class="form-control" name="id" id="payee_name" placeholder="Id pf publication" title="id">
                          </div>
                      </div>
					  
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="payee_name"><h4>Type of Publication</h4></label>
                              <input type="text" class="form-control" name="type" id="payee_name" placeholder="Type of Publication" title="Name which is on your Atm">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="acccount_number"><h4>Author</h4></label>
                              <input type="text" class="form-control" name="author" id="author" placeholder="Name of Author" title="Account number">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="bank_name"><h4> Related to publication</h4></label>
                              <input type="text" class="form-control" name="publication" id="bank_name" placeholder="Related to publication" title="Bank Name">
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="branch_name"><h4>Title</h4></label>
                              <input type="text" class="form-control" name="title" id="branch_name" placeholder="Title" title="enter your Branch Nname">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="ifsc_code"><h4>Upload paper</h4></label>
                              <input type="file" class="form-control" name="papers" id="paper" placeholder="Upload paper">
                          </div>
                      </div>
                   
                      <div class="form-group">
                           <div class="col-xs-12" style="padding-bottom:10%;">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
              	</form>
              </div>   
			  
			  <div class="tab-pane" id="deletes">
            		
               	
                  <hr>
                  <form class="form" action="publicationDelete.php" method="post" enctype="multipart/form-data" id="registrationForm">
				  
				     <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="payee_name"><h4>ID</h4></label>
                              <input type="number" class="form-control" name="id" id="payee_name" placeholder="Id pf publication" title="id">
                          </div>
                      </div>
					  
                      <div class="form-group">
                           <div class="col-xs-12" style="padding-bottom:10%;">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
              	</form>
              </div>   
			  
			  
              </div><!--/tab-pane-->
			  
			  
          </div><!--/tab-content-->

        </div><!--/col-9-->
		
		</div>
		
		<div id="change_password" style="display:none;">
		
		   <form class="form" action="password.php" method="post" id="registrationForm">
                      <div class="form-group">
                          
                          <div class="col-xs-12" style="background-color:white; padding-bottom:2%;">
                              <label for="password"><h4>Previous Password</h4></label>
                              <input type="password" class="form-control" name="password" id="password" placeholder="Previous Password" title="enter your previous Password.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-12" style="background-color:white;padding-bottom:2%;">
                            <label for="newpassword"><h4>New Password</h4></label>
                              <input type="password" class="form-control" name="new_password" id="newpassword" placeholder="New Password" title="enter your New Password.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-12" style="background-color:white;padding-bottom:2%;">
                              <label for="confirm_password"><h4>Confirm Password</h4></label>
                              <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password" title=" Confirm Password">
                          </div>
                      </div>
					  
					  <div class="form-group">
                           <div class="col-xs-12" style="background-color:white; padding-bottom:10%;">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
          
                   </form>
		
		</div>
		
			
		
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
