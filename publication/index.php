<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style>
      body {
        padding: 10px;
      }

      h1 {
          margin: 0 0 0.5em 0;
          color: #343434;
          font-weight: normal;
          font-family: 'Ultra', sans-serif;
          font-size: 36px;
          line-height: 42px;
          text-transform: uppercase;
          text-shadow: 0 2px white, 0 3px #777;
      }

      h2 {
          margin: 1em 0 0.3em 0;
          color: #343434;
          font-weight: normal;
          font-size: 30px;
          line-height: 40px;
          font-family: 'Orienta', sans-serif;
      }

      #employees {
        font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
        font-size: 12px;
        background: #fff;
        margin: 15px 25px 0 0;
        border-collapse: collapse;
        text-align: center;
        float: left;
        width: 1000px;
      }

      #employees th {
        font-size: 14px;
        font-weight: normal;
        color: #039;
        padding: 10px 8px;
        border-bottom: 2px solid #6678b1;
      }

      #employees td {
        border-bottom: 1px solid #ccc;
        color: #669;
        padding: 8px 10px;
      }

      #employees tbody tr:hover td {
        color: #009;
      }

      #filter {
        float:left;
      }
    </style>
  
  </head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Publication Management System</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

    <h1>Online Publications</h1>

    <div class="tab-pane" id="detail" style="width:1000px; float:left;">
			
			
			<?php
// Connect to the database
$dbLink = mysqli_connect("localhost","root","","publication3");
session_start();

if(mysqli_connect_errno()) {
    die("MySQL connection failed: ". mysqli_connect_error());
}
$user_check=$_SESSION['login_user'];
 
// Query for a list of all existing files
$sql = "SELECT `id`,`type`,`author`,`detail`,`title`,`created` FROM `publication`";
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
					<td><b>Upvote</b></td>
					<td><b>Comment</b></td>
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
					<td><a href='upvote.php'>Upvote</a></td>
					<td><a href='comment.php'>Comment</a></td>
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
//$dbLink->close();
?>
   </div> 

    <div id="filter" style="float:left;"> 
      <h2>Filter options</h2>
	  <form method="post">
      <div>
        <input type="checkbox" value="type" name="values">
        <label for="topic">Topic</label>
      </div>
      <div>
        <input type="checkbox" value="created" name="values">
        <label for="language"> Date</label>
      </div>
      <div>
        <input type="checkbox" value="title" name="values">
        <label for="nights">Title</label>
      </div>
      <div>
        <input type="checkbox" value="author" name="values">
        <label for="student"> Author</label>
      </div>
	  <input type="submit" name="formSubmit" value="Submit">
	  </form>
    </div>
<?php
if(isset($_POST['values']))
{
	$rk=$_POST['values'];
   if($_POST['values']!=""){
$query="SELECT `id`,`type`,`author`,`detail`,`title`,`created` FROM `publication` ORDER BY title";
 }

@$result = mysqli_query($dbLink,$query); 
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
					<td><b>Upvote</b></td>
					<td><b>Comment</b></td>
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
					<td><a href='upvote.php'>Upvote</a></td>
					<td><a href='comment.php'>Comment</a></td>
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
 
}
?> 

</body>
</html>
