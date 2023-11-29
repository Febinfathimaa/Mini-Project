<?php
session_start();
include("config/db.php");
$user=$_SESSION['id'];
echo "$user<br>";
$jobid = $_GET['ji'];
$query = "DELETE FROM userapply WHERE j_id=$jobid AND userid=$user";
$data = mysqli_query($conn, $query) ;
if($data)
{
    echo "Record deleted from table";
}
else
{
    echo "Delete procees failed";
}
$conn-> close();
?>