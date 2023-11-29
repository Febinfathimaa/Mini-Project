<?php
require_once 'contr/authorcntl.php'; ?>
<!DOCTYPE html>
<html>
<head>
<link href="main.css" rel="stylesheet" type="text/css" />
<style>
body
{
    background-image: url(images/blue.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    width:100px;
}
p
{
    color:floralwhite;
    font-size:25px;
    font-family:Cursive;
    text-shadow:4px 4px 3px black;
}
.button1{
    border:none;
    background-color:transparent;
    font-size:20px;
    font-family:impact;
    color:darkkhaki;
    transition-duration:0.4s;
}
.button1:hover{
font-size:22px;
}
.head
{
    font-size:35px;
    font-family:Castellar;
}
</style>
</head>
<body>
<pre>
<p class="head">Welcome User,</p>
<p>Create jobs that will help you in the process of recruiting users. 
Enter the details asked and wait for the users to see the job you created. </p>
<div class="main"><a href="addjob.php"><button class="button button1">Create Jobs</button></a></div>
<p>Check Out all the Applications that are submitted to you.</p>
<div class="main"><a href="display.php"><button class="button button1">Applied Applicants</button></a></div>
<p>Out dated Jobs... why wait? Remove them.!
<div class="main"><a href="compdelete.php"><button class="button button1">Delete Jobs</button></a></div>

</pre>
</body>
</html>