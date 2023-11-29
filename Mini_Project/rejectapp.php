<?php

include("config/db.php");
$uid = $_GET['ap'];
$query = "DELETE FROM userapply WHERE uaid='$uid'";
$data = mysqli_query($conn, $query) ;
if($data)
{
    echo "Record deleted from table";
    header('location:admin.php');
}
else
{
    echo "<body>
    Delete procees failed</body";
}
?>