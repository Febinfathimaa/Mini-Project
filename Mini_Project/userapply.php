<?php
session_start();
error_reporting(0);
$conn = mysqli_connect("localhost", "root", "", "userregister");
if ($conn-> connect_error){
    die("connection failed:".$conn-> connect_error);
}
$userid=$_SESSION['id'];
//echo "$userid";
$sql = "SELECT jid,jobname,quali,salary,c_id,c_name FROM jobadd";
$result = $conn-> query($sql);
if($result-> num_rows > 0){
    while($row = $result-> fetch_assoc()){
       echo"<body style=background-image:url(images/blue.jpg);background-repeat:no-repeat;background-size:cover;background-attachment:fixed;>
            &emsp;&emsp;
        <button style=text-align:left;margin-left:20px;margin-bottom:10px;>JOB ID : ". $row["jid"] ."<br>
        JOBNAME : ". $row["jobname"] ."<br>
        SALARY : ". $row["salary"] ."<br>
        QUALIFICATION : ". $row["quali"] ."<br>
        Company ID :".$row["c_id"]."<br>
        Company Name :".$row["c_name"]."<br>
        <a href='apply.php?ji=$row[jid]&jt=$row[jobname]&jd=$row[salary]&qu=$row[quali]&ci=$row[c_id]&cn=$row[c_name]'>Apply</a>
        </button>
</body>
         ";
    }
}else
{
    echo "0 result";
}
$conn-> close();
?>