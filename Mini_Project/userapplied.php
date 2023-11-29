<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "userregister");
if ($conn-> connect_error){
    die("connection failed:".$conn-> connect_error);
}
$user=$_SESSION['id'];
//echo "$user<br>";

 $sql="SELECT jid,jobname,salary,quali,c_id,c_name FROM jobadd WHERE jid IN(SELECT j_id FROM userapply WHERE userid='$user')";
    $result = $conn-> query($sql);
    if($result-> num_rows > 0)
    {
     while($row = $result-> fetch_assoc())
     {
         
        echo"<body style=background-image:url(images/blue.jpg);background-repeat:no-repeat;background-size:cover;background-attachment:fixed;>
             &emsp;&emsp;
         <button style=margin-bottom:10px;margin-left:20px;text-align:left;>
         JOB NAME : ". $row["jobname"] ."<br>
         SALARY : ". $row["salary"] ."<br>
         QUALIFICATION : ". $row["quali"] ."<br>
         COMPANY ID :".$row["c_id"]."<br>
         COMPANY NAME :". $row["c_name"] ."<br>
         <a href='userappdelete.php?ji=$row[jid]&jt=$row[jobname]&jd=$row[salary]&qu=$row[quali]&ci=$row[c_id]&cn=[c_name]'>Delete Application</a>         
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
