<?php require_once 'contr/authorcntl.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Log In</title>
    <link rel="stylesheet" href="complog.css">
</head>
<body>

                <center>
            <form action="complogin.php" method="post">
            <pre>
            <fieldset class="fld">
            <legend class="text-center">Log In</legend>
            <?php if(count($errors) > 0): ?>
<div class="alert alert-danger">
<?php foreach($errors as $error): ?>
<li><?php echo $error; ?></li>
<?php endforeach; ?>
</div>
<?php endif;?>
            
<label for="cusername">Username or Email</label>
<input type="text" name="cusername" value="<?php echo $cusername; ?>" class="content">
            
<label for="cpasswrd">Password</label>
<input type="password" name="cpasswrd" class="content">
            
<button type="submit" name="login-btn" class="button login">Log In</button>
            
<p class="sign">Not yet a member? <a href="companreg.php">Sign Up</a></p>
            </form>
            </fieldset>
</pre>
</center>
       
</html>