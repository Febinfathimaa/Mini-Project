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

    Name: <?php echo $_SESSION['first_name']; ?>&nbsp;<?php echo $_SESSION['last_name']; ?><br><br>
    User ID: <?php echo $_SESSION['id']; ?><br><br>
    City: <?php echo $_SESSION['city']; ?>
    </pre>
</body>
</html> 