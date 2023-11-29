<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "userregister");
if ($conn-> connect_error){
    die("connection failed:".$conn-> connect_error);
}
$userid=$_SESSION['cid'];
//echo "$userid<br>";

$sql = "SELECT * FROM userapply ";
    $result = $conn-> query($sql);
    if($result-> num_rows > 0)
    {
     while($row = $result-> fetch_assoc())
     {
         
        echo"<body style=background-image:url(images/VECTOR.jpg);background-attachment-fixed;background-size:cover;>
             &emsp;&emsp;
         <button style=margin-bottom:10px;margin-left:20px;text-align:left;padding:10px;>
         APPLICATION ID : ". $row["uaid"] ."<br>
         JOB ID : ". $row["j_id"] ."<br>
         USER NAME : ". $row["fname"] ."&nbsp;". $row["lname"] ."<br>
         EXPERIENCE : ". $row["expr"] ."<br>
         QUALIFICATION : ". $row["uquali"] ."<br>
         USER ID :".$row["userid"]."<br>
         CONTACT NO : ". $row["cno"] ."<br>
         E MAIL :". $row["aemail"] ."<br>
         <a href='rejectapp.php?ap=$row[uaid]&ji=$row[j_id]&fn=$row[fname]&ln=$row[lname]&ex=$row[expr]&uq=[uquali]&ui=[userid]&cn=[cno]&ae=[aemail]'>REJECT</a>
         </button>
         </body>
         ";
     }
    }
    else
    {
        echo "0 result";
    }

$conn-> close();
?>
