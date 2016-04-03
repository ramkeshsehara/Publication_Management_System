<?php
  $con = mysqli_connect("localhost","root","","publication3") or die("Error " . mysqli_error($con));
    $sql = "select `id`,`type`, `author`, `detail`, `title`,`filename`, `created` from publication";
    $result = mysqli_query($con, $sql) or die("Error in Selecting " . mysqli_error($con));
   $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
	 echo json_encode($emparray);
?>