<?php require_once 'contr/authorcntl.php'; 
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign UP!</title>
   <link rel="stylesheet" type="text/css" href="compreg.css">
</head>
<body>
    <div id="menu" align="left">
        <a href="frame.html"><button class="button button1">HOME</button></a>
        <a href="register.html"><button class="button button1">REGISTER</button></a>
    </div>
    <form action="companreg.php" method="post">
    <center>   
<p>
    <fieldset class="fld">
    <legend>Register</legend>
    <?php if(count($errors) > 0): ?>
    <div class="alert alert-danger">
    <?php foreach($errors as $error): ?>
    <li><?php echo $error; ?></li>
    <?php endforeach; ?>
    </div>
    <?php endif;?>
<label for="c_name">Company name</label><br><br> 
<input type="text" name="c_name" value="<?php echo $c_name; ?>" class="content"><br><br><br>
            
<label for="cemail">Email</label><br><br>
<input type="email" name="cemail" placeholder="abc@email.com" value="<?php echo $cemail; ?>" class="content"><br><br><br>
            
<label for="cphone">Phone</label><br><br>
<input type="text" name="cphone" value="<?php echo $cphone; ?>" class="content"><br><br><br>
            
<label for="est">Year</label><br><br>
<input type="date" name="est" value="<?php echo $est; ?>" class="content"><br><br><br>
 
<label for="saddress">Street address</label><br><br>
<input type="text" name="saddress" value="<?php echo $saddress; ?>" class="content"><br><br><br>

<label for="cpoffice">Post Office</label><br><br>
<input type="text" name="cpoffice" value="<?php echo $cpoffice; ?>" class="content"><br><br><br>

<label for="ccity">City</label><br><br>
<input type="text" name="ccity" value="<?php echo $ccity; ?>" class="content"><br><br><br>

<label for="cstat">State</label><br><br>
<input type="text" name="cstat" value="<?php echo $cstat; ?>" class="content"><br><br><br>

<label for="cusername">Username</label><br><br>
<input type="text" name="cusername" placeholder="Use E mail" value="<?php echo $cusername; ?>" class="content"><br><br><br>
      
<label for="cpasswrd">Password</label><br><br>
<input type="password" name="cpasswrd" placeholder="PASSWORD" class="content"><br><br><br>

<label for="confcpassword">Confirm Password</label><br><br>
<input type="password" name="confcpassword" placeholder="PASSWORD" class="content"><br><br><br>

<button type="submit" name="signup-btn" class="button">Sign Up</button>   <button type="reset" class="button">Reset</button>

<p align="center">Already a member? <a href="complogin.php"  class="sign">Sign In</a></p>
     </fieldset>

</p>
</center>
    </form>
</body>
</html>