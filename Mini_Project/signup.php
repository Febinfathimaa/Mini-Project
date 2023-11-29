<?php require_once 'contr/authcntl.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign UP!</title>
   <link rel="stylesheet" href="signup.css">
</head>
<body>
    <div id="menu" align="left">
    <a href="frame.html"><button class="button button1">HOME</button></a>
    <a href="register.html"><button class="button button2">REGISTER</button></a>
    </div>
    <div class="container" align="center">
        <div class="row">
            <div class="col-md-4 offset-md-4 form-div">
            <form action="signup.php" method="post">
            <fieldset>
             <legend>Register</legend>
            <?php if(count($errors) > 0): ?>
<div class="alert alert-danger">
<?php foreach($errors as $error): ?>
<li><?php echo $error; ?></li>
<?php endforeach; ?>
</div>
<?php endif;?>
            
            <label for="first_name">First name</label><br>
            <input type="text" name="first_name" value="<?php echo $first_name; ?>" class="content">
            <br>
            <br>
            <label for="last_name">Last name</label><br>
            <input type="text" name="last_name" value="<?php echo $last_name; ?>" class="content">
            <br>
            <br>
            <label for="email">Email</label><br>
            <input type="email" name="email" value="<?php echo $email; ?>" class="content">
            <br>
            <br>
            <label for="phone">Phone</label><br>
            <input type="text" name="phone" value="<?php echo $phone; ?>" class="content">
            <br>
            <br>
            <label for="gender">Gender</label><br>
            <input type="radio" name="gender" id="male" value="Male" class="gender" ><label class="gender">Male</label>&emsp;
            <input type="radio" name="gender" id="female" value="Female" class="gender"><label class="gender">Female</label>&emsp;
            <input type="radio" name="gender" id="other" value="Other" class="gender"><label class="gender">Other</label>
            <br>
            <br>
            <label for="age">Age</label><br>
            <input type="text" name="age" value="<?php echo $age; ?>" class="content">
            <br>
            <br>
            <label for="haddress">House name</label><br>
            <input type="text" name="haddress" value="<?php echo $haddress; ?>" class="content">
            <br>
            <br>
            <label for="poffice">Post Office</label><br>
            <input type="text" name="poffice" value="<?php echo $poffice; ?>" class="content">
            <br>
            <br>
            <label for="city">City</label><br>
            <input type="text" name="city" value="<?php echo $city; ?>" class="content">
            <br>
            <br>
            <label for="stat">State</label><br>
            <input type="text" name="stat" value="<?php echo $stat; ?>" class="content">
            <br>
            <br>
            <label for="username">Username</label><br>
            <input type="text" name="username" value="<?php echo $username; ?>" class="content">
            <br>
            <br>
            <label for="passwrd">Password</label><br>
            <input type="password" name="passwrd" class="content">
            <br>
            <br>
            <label for="confpassword">Confirm Password</label><br>
            <input type="password" name="confpassword" class="content">
            <br>
            <br>
            <button type="submit" name="signup-btn" class="button btn-signup">Sign Up</button>
            <br>
            <p class="text-center">Already a member? <a href="login.php">Sign In</a></p>
            </fieldset>
            </form>
            </div>
        </div>
    </div>
</body>
</html>