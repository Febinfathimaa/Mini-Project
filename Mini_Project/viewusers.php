<?php
session_start();
include("config/db.php");


$query = "SELECT * FROM employee";
$data = mysqli_query($conn, $query) ;

if($data-> num_rows > 0)
{
 while($row = $data-> fetch_assoc())
 {
     
    echo"<body style=background-image:url(images/VECTOR.jpg);background-attachment-fixed;background-size:cover;>
         &emsp;&emsp;
     <button style=margin-bottom:10px;margin-left:20px;text-align:left;>
     USER ID : ".$row["id"]."<br>
     USER NAME : ". $row["username"] ."<br>
     FIRST NAME : ".$row["first_name"]."<br>
     LAST NAME : ".$row["last_name"]."<br>
     E MAIL : ".$row["email"]."<br>
     PHONE NO : ". $row["phone"] ."<br>
     GENDER : ". $row["gender"] ."<br>
     AGE :".$row["age"]."<br>
     HOME ADDRESS : ". $row["haddress"] ."<br>
     POST OFFICE :". $row["poffice"] ."<br>
     CITY : ".$row["city"]."<br>
     STATE : ".$row["stat"]."<br>
     <center><a href='adeletuser.php?uid=$row[id]&us=$row[username]&fn=$row[first_name]&ln=$row[last_name]&em=$row[email]&ph=$row[phone]&gn=$row[gender]&ag=$row[age]&ha=$row[haddress]&po=$row[poffice]&ct=$row[city]&st=$row[stat]'>REMOVE USER</a></center>
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
