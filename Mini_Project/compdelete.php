<?php
session_start();
error_reporting(0);
$conn = mysqli_connect("localhost", "root", "", "userregister");
if ($conn-> connect_error){
    die("connection failed:".$conn-> connect_error);
}

$userid=$_SESSION['cid'];
$sql = "SELECT jid,jobname,quali,salary,c_id FROM jobadd WHERE c_id IN (SELECT cid FROM recruiter where cid='$userid')";
$result = $conn-> query($sql);
if($result-> num_rows > 0){
    while($row = $result-> fetch_assoc()){
       echo"<body style=background-image:url(images/blue.jpg);background-repeat:no-repeat;background-size:cover;background-attachment:fixed;>
            &emsp;&emsp;
        <button style=margin-bottom:20px;margin-left:20px;text-align:left;>JOB ID : ". $row["jid"] ."<br>
        JOBNAME : ". $row["jobname"] ."<br>
        SALARY : ". $row["salary"] ."<br><br>
        QUALIFICATION : ". $row["quali"] ."<br><br>
        Company ID :".$row["c_id"]."<br><br>
        <a href='delet.php?ji=$row[jid]&jt=$row[jobname]&jd=$row[salary]&qu=$row[quali]&ci=$row[c_id]'>Delete</a>
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