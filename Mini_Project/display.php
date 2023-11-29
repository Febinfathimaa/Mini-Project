<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "userregister");
if ($conn-> connect_error){
    die("connection failed:".$conn-> connect_error);
}
$userid=$_SESSION['cid'];
//echo "$userid<br>";

$sql = "SELECT * FROM userapply WHERE j_id IN (SELECT jid FROM jobadd WHERE c_id='$userid')";
    $result = $conn-> query($sql);
    if($result-> num_rows > 0)
    {
     while($row = $result-> fetch_assoc())
     {
         
        echo"<body style=background-image:url(images/blue.jpg);background-attachment-fixed;background-size:cover;>
             &emsp;&emsp;
         <button style=margin-bottom:10px;margin-left:20px;text-align:left;padding:10px;>JOB ID : ". $row["j_id"] ."<br>
         USER NAME : ". $row["uname"] ."<br>
         EXPERIENCE : ". $row["expr"] ."<br>
         QUALIFICATION : ". $row["uquali"] ."<br>
         USER ID :".$row["userid"]."<br>
         CONTACT NO : ". $row["cno"] ."<br>
         E MAIL :". $row["aemail"] ."<br>
         <center><a href='reject.php?un=$row[uname]&exp=$row[expr]&qu=$row[uquali]&uid=$row[userid]&cn=$row[cno]&em=$row[aemail]'>DELETE</a></center>
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
