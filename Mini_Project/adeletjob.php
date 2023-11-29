<?php

include("config/db.php");
$jobid = $_GET['ji'];
$query = "DELETE FROM jobadd WHERE jid='$jobid'";
$data = mysqli_query($conn, $query) ;
if($data)
{
    echo "Record deleted from table";
    header('location:admin.php');
}
else
{
    echo "Delete procees failed";
}
?>