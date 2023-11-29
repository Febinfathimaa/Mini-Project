<?php require_once 'contr/authorcntl.php'; ?>            
<?php

$jobname= filter_input(INPUT_POST, 'jobname');
$quali = filter_input(INPUT_POST, 'quali');
$salary = filter_input(INPUT_POST, 'salary');
$c_id = filter_input(INPUT_POST,'c_id');
$c_name= filter_input(INPUT_POST,'c_name');
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
        $sql = "INSERT INTO jobadd (jobname,quali,salary,c_id,c_name)
        values ('$jobname','$quali','$salary','$c_id','$c_name')";
        if ($conn->query($sql))
            {
             header('location: creatjobs.php');
             }
        else   
            {
                echo "Error: ". $sql ."
                  ". $conn->error;
            }
        $conn->close();
    } 
?>