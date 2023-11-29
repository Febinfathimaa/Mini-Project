<?php
session_start();
error_reporting(0);
include("config/db.php");
$userid=$_SESSION['id'];
$jobid = $_GET['ji'];
$jobname=$_GET['jt'];
$salary=$_GET['jd'];
$quali=$_GET['qu'];
$c_id=$_GET['ci'];
$c_name=$_GET['cn'];
$query = "SELECT jid,jobname,quali,salary,c_id,c_name FROM jobadd WHERE jid='$jobid'";
$s= "SELECT id FROM employee WHERE id='$userid'";
$ss=mysqli_query($conn,$s);
while($row=$ss->fetch_assoc())
{
// echo "USER ID : ".$row["id"]."<br><br>";
}
$data = mysqli_query($conn, $query) ;
if($data-> num_rows > 0)
{
    while($row=$data-> fetch_assoc())
    {
        echo"<body style=background-image:url(images/blue.jpg);background-repeat:no-repeat;background-size:cover;background-attachment:fixed;>
        &emsp;&emsp;
        <div style=text-align:left;border:solid;width:300px;height:200px;>
        <p style=margin-left:20px;>
        JOB ID : ".$row["jid"]."<br><br>
        JOB NAME : ".$row["jobname"]."<br><br>
        MINIMUM QUALIFICATION : ".$row["quali"]."<br><br>
        COMPANY NAME : ".$row["c_name"]."<br><br>
        </p></div> </body>";
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
<style>
 body
	{
		color:white;
	}
</style>
</head>
<body>
<form action="application.php" method="post">
    <H1>APPLY FOR JOB</H1> <br><br>   
Enter First Name &emsp;&emsp;&emsp;<input type="text"  name="fname" placeholder="First name" required/> <br><br>
Enter Last Name &emsp;&emsp;&emsp;<input type="text"  name="lname" placeholder="Last name" required/> <br><br>
Enter Qualification &emsp;&emsp;&nbsp;<input type="text"  name="uquali" placeholder="Enter qualification" required/> <br><br>
Enter Your Experience &nbsp;&nbsp;&nbsp;<input type="text"  name="expr" placeholder="Experience" required/> <br> <br>
Enter JOB ID &emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;<input type="text"  name="j_id" placeholder="Job ID" required/> <br> <br>
Enter USER ID &emsp;&emsp;&emsp;&nbsp;&nbsp;<input type="text"  name="u_id" placeholder="USER ID" required/> <br> <br>
Enter CONTACT NO &emsp;<input type="text"  name="cno" placeholder="XXXXXXXXXX" required/> <br> <br>
Enter E MAIL ID &emsp;&emsp;&nbsp;&nbsp;&nbsp;<input type="text"  name="aemail" placeholder="abc@email.ccom" required/> <br> <br>
<input type="submit" value=" APPLY ">
</form>
</body>
</html>
