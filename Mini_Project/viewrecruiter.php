<?php
session_start();
include("config/db.php");


$query = "SELECT * FROM recruiter";
$data = mysqli_query($conn, $query) ;

if($data-> num_rows > 0)
{
 while($row = $data-> fetch_assoc())
 {
     
    echo"<body style=background-image:url(images/VECTOR.jpg);background-attachment-fixed;background-size:cover;>
         &emsp;&emsp;
     <button style=margin-bottom:10px;margin-left:20px;text-align:left;>
     COMPANY ID : ".$row["cid"]."<br>
     USERNAME :". $row["cusername"] ."<br>
     COMPANY NAME : ". $row["c_name"] ."<br>
     E MAIL : ".$row["cemail"]."<br>
     CONTACT NO : ".$row["cphone"]."<br>
     ESTABLISHMENT YEAR : ".$row["est"]."<br>
     STREET : ". $row["saddress"] ."<br>
     POST OFFICE : ". $row["cpoffice"] ."<br>
     CITY :".$row["ccity"]."<br>
     STATE : ". $row["cstat"] ."<br>
     <center><a href='adeletcomp.php?id=$row[cid]&us=$row[cusername]&cn=$row[c_name]&em=$row[cemail]&ph=$row[cphone]&es=$row[est]&sa=$row[saddress]&po=$row[cpoffice]&ct=$row[ccity]&st=$row[cstat]'>REMOVE USER</a></center>
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
