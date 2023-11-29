<?php
require_once 'contr/authcntl.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <link href="right.css" rel="stylesheet" type="text/css">
<style>
body
{
    background-image: url(images/blue.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed; 
}
</style>
</head>   
<body>
    <pre>

    Company Name: <?php echo $_SESSION['c_name']; ?><br><br>
    User ID: <?php echo $_SESSION['cid']; ?><br><br>
    City: <?php echo $_SESSION['ccity']; ?><br><br>
    State: <?php echo $_SESSION['cstat']; ?>
    </pre>
</body>
</html> 