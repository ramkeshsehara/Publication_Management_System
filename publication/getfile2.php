<?php
        
       if($_SERVER["REQUEST_METHOD"] == "POST")
{
       $dbLink = mysqli_connect("localhost","root","","publication2");
        $id=$_POST['down'];
        // Fetch the file information
        $query = "
            SELECT `filename`, `created`, `data`
            FROM `publication`
            WHERE `id` = {$id}";
        $result = $dbLink->query($query);
 
        if($result) {
            // Make sure the result is valid
            if($result->num_rows == 1) {
            // Get the row
                $row = mysqli_fetch_assoc($result);
 
                // Print headers
                
                header("Content-Time: ". $row['created']);
                header("Content-Disposition: attachment; filename=". $row['filename']);
 
                // Print data
                echo $row['data'];
            }
            else {
                echo 'Error! No image exists with that ID.';
            }
 
            // Free the mysqli resources
            @mysqli_free_result($result);
        }
        else {
            echo "Error! Query failed: <pre>{$dbLink->error}</pre>";
        }
        @mysqli_close($dbLink);
    
}
else
{
	print("not post ");
}
?>