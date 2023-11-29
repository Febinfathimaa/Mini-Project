<?php require_once 'contr/authcntl.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Log In</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<div id="menu" align="right">
<a href="frame.html" ><button class="button"><big>Home</big></button></a>
<a href="loginhome.html" ><button class="button"><big>LogIn</big></button></a>
</div>
<form action="login.php" method="post">
<pre>
<center>
<fieldset class="fld">
  <legend>Log In</legend>
        <?php if(count($errors) > 0): ?>
        <div class="alert alert-danger">
        <?php foreach($errors as $error): ?>
        <li><?php echo $error; ?></li>
        <?php endforeach; ?>
        </div>
        <?php endif;?>
        <label for="username">
Username or Email    :</label>  <input type="text" name="username" value="<?php echo $username; ?>" class="content">

<label for="passwrd">
Password             :</label>  <input type="password" name="passwrd" class="content"><br><br>
            
<button type="submit" name="login-btn" class="button button1">Log In</button>&emsp;&emsp;<button type="reset" name="reset-btn" class="button button1">Reset</button><br><br>
<a href="signup.php" class="sign">Sign Up!</a><br><br>
</form>
</fieldset>
</center>
</pre>
</body>
</html>