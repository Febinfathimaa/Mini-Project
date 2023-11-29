<?php
require_once 'contr/authcntl.php'; ?>
<!DOCTYPE html>
<html>
<head>
<style>
body
{
	background-image: url(images/blue.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
}

pre{
    font-family:Algerian;
    font-size: 20px;
    color:white;
    text-shadow:3px 3px 3px black;
}
p{
    font-family:Castellar;
    font-size:30px;
    text-shadow:3px 3px 3px black;
}
.button1
{
border-radius:10px;
background-color:transparent;
border:none;
font-size:20px; 
font-family:cursive;
transition-duration: 0.4s;
font-weight:bolder;
align:left;
color:darksalmon;
text-shadow:2px 2px 2px black;
}
.button1:hover
{
font-size:25px;
text-shadow:2px 2px 2px black;
}
</style>
</head>
<body>
<pre>
<p>Welcome User,</p><br>
How About looking for a job that suits you...? Click to Apply for jobs at ease..!<br><br>
<div class="main"><a href="userapply.php"><button class="button button1">APPLY FOR JOBS</button></a></div><br><br>
Not to worry if you applied for a wrong job. See all of your applied jobs and delete them if you wish. <br><br>
<div class="main"><a href="userapplied.php"><button class="button button1">APPLIED JOBS</button></a></div>
</div>
</pre>
</body>
</html>