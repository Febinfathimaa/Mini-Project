<?php require_once 'contr/authorcntl.php'; ?>            
<?php

$fname= filter_input(INPUT_POST, 'fname');
$lname= filter_input(INPUT_POST, 'lname');
$uquali = filter_input(INPUT_POST, 'uquali');
$expr = filter_input(INPUT_POST, 'expr');
$j_id = filter_input(INPUT_POST,'j_id');
$userid=filter_input(INPUT_POST,'u_id');
$cno=filter_input(INPUT_POST,'cno');
$aemail=filter_input(INPUT_POST,'aemail');
error_reporting(0);
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "userregister";
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error())
    {
        die('Connect Error ('. mysqli_connect_errno() .') 
            '. mysqli_connect_error());
    }
else
    {
        $sql = "INSERT INTO userapply (fname,lname,uquali,expr,j_id,userid,cno,aemail)
        values ('$fname','$lname','$uquali','$expr','$j_id','$userid','$cno','$aemail')";
        if ($conn->query($sql))
            {
                    header('location:userapplied.php');
            }
        else   
            {
                    echo "Error: ". $sql ."
                    ". $conn->error;
            }
    $conn->close();
    }
?>