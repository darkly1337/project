
<?php 
if(!isset($success)){
    $success = '';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <title>Document</title>

</head>
<body class = "body">
<div  class = "register-box">
    <p class = "reg">Registration</p>
<form action="sign-up-validation.php" id="form" method="POST">
<p class="error_form" id="fname_error_message"></p>
<input class = "input" type="text" id="fname" name="fname" placeholder="First Name"><br><br>
<p class="error_form" id="sname_error_message"></p>
<input class = "input" type="text" id="sname" name="sname" placeholder="Second Name"><br><br>
<p class="error_form" id="email_error_message2"></p>
<input class = "input" type="text" id="email" name="email" placeholder="Email"><br><br>
<p class="error_form" id="password_error_message"></p>
<input class = "input"type="password" id="password" name="password" placeholder="Password"><br><br>
<p class="error_form" id="password_error_message2"></p>
<input class = "input" type="password" id="password2" name="password2" placeholder="Re-Enter Password"><br><br>
<input class = "reg-but" type="submit" id="submit" value="Send" name="submit">
<?php if(isset($fname_error)){ ?>
    <p class="php_error"> <?php echo $fname_error ?> </p>
<?php } ?>
<?php if(isset($sname_error)){ ?>
    <p class="php_error"> <?php echo $sname_error ?> </p>
<?php } ?>
<?php if(isset($email_error)){ ?>
    <p class="php_error"> <?php echo $email_error ?> </p>
<?php } ?>
<?php if(isset($password_error)){ ?>
    <p class="php_error"> <?php echo $password_error ?> </p>
<?php } ?>
<?php if(isset($password_error2)){ ?>
    <p class="php_error"> <?php echo $password_error2 ?> </p>
<?php } ?>
<?php if(!isset($fname_error) && !isset($semail_error) && !isset($email_error) && !isset($password_error) && !isset($password_error2)){ ?>
    <p class="php_error"> <?php echo $success ?> </p>
<?php } ?>
</form>


</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/sign-up-validation.js"></script> 

</body>
</html>