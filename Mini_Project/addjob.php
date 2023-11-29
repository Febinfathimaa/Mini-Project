<?php require_once 'contr/authorcntl.php'; ?>
<!DOCTYPE html>
<html>
<head>
<style>
body
{
 background-image:url(images/blue.jpg);
 background-attachment:fixed;
 background-size:cover;
 color:white;
}
</style>
</head>
<body>
<form action="creatjobs.php" method="post">
    <h1><b>Add JOBS</b></h1><br>
Enter Job Name &emsp;&emsp;&emsp;&emsp;&nbsp;<input type="text"  name="jobname" placeholder="Enter job" required/> <br><br>
Enter Qualification &emsp;&emsp;&emsp;<input type="text"  name="quali" placeholder="Enter qualification" required/> <br><br>
Enter Salary &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<input type="text"  name="salary" placeholder="Enter Salary" required/> <br> <br>
Enter Company ID  &emsp;&emsp;&emsp;&nbsp;<input type="text"  name="c_id" placeholder="Enter User ID" required/> <br> <br>
Enter Company Name  &emsp;&emsp;<input type="text"  name="c_name" placeholder="Company name" required/> <br> <br>
<input type="submit" value="ADD ">
</form>
</body>
</html>
