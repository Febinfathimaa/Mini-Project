<?php
session_start();
include("config/db.php");


$query = "SELECT * FROM jobadd";
$data = mysqli_query($conn, $query) ;

if($data-> num_rows > 0)
{
 while($row = $data-> fetch_assoc())
 {
     
    echo"<body style=background-image:url(images/VECTOR.jpg);background-attachment-fixed;background-size:cover;>
         &emsp;&emsp;
     <button style=margin-bottom:10px;margin-left:20px;text-align:left;>
     JOB ID : ".$row["jid"]."<br>
     JOB NAME : ". $row["jobname"] ."<br>
     COMPANY NAME : ".$row["c_name"]."<br>
     COMPANY ID : ".$row["c_id"]."<br>
     MINIMUM QUALIFICATION : ".$row["quali"]."<br>
     SALARY : ". $row["salary"] ."<br>
     <a href='adeletjob.php?ji=$row[jid]&jt=$row[jobname]&jd=$row[salary]&qu=$row[quali]&ci=$row[c_id]'>Delete</a>
     </button>
     </body>
     ";
 }
}
else
{
    echo "0 RESULT";
}

$conn-> close();
?>
