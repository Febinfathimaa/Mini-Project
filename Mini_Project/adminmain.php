<?php
require_once 'contr/authorcntl.php'; ?>
<!DOCTYPE html>
<html>
<head>
<style>
    
        body{
            background-image:url(images/VECTOR.jpg);
	    background-attachment:fixed;
	    background-size:cover;
        }
        pre{
                font-size:20px;
                color:white;
                font-family:castellar;
                text-align:center;
                margin-left:250px;
                text-shadow:3px 3px 3px black;
        }
        .button1{
                border:solid;
                background-color:transparent;
                color:darksalmon;
                text-shadow:3px 3px 3px black;
                font-size:30px;
                font-family:IMPACT;
                transition-duration:0.4s;
        }
        .button1:hover{
                color:white;
        }
		
    
</style>
</head>
<body>
<pre>
All the jobs created by companies.<br><br>
<div class="main"><a href="jobs.php"><button class="button button1">JOBS</button></a></div>
All the job seekers registered. <br><br>
<div class="main"><a href="viewusers.php"><button class="button button1">JOB SEEKERS</button></a></div>
All the recruiters registered.<br><br>
<div class="main"><a href="viewrecruiter.php"><button class="button button1">RECRUITERS</button></a></div>
All the jobs that have been applied by different users.<br><br>
<div class="main"><a href="userappliedjobs.php"><button class="button button1">USER APPLIED JOBS</button></a></div>

</pre>
</body>
</html>