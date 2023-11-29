<?php

include("config/db.php");
$userid = $_GET['uid'];
$query = "DELETE FROM employee WHERE id='$userid'";
$data = mysqli_query($conn, $query) ;
if($data)
{
    echo "Record deleted from table";
    header('location:admin.php');
}
else
{ 
    echo "<body style=background-image:url(images/VECTOR.jpg);background-attachment-fixed;background-size:cover;>
    Delete procees failed</body>";
}
?>