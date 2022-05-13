
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
    <title>Contact</title>
</head>
<body>
<div class = "logo">

<div class = "nav-bar">
    <nav>
        <ul>
            <li><a href="home.php">HOME</a></li>
            <li><a href="nil.php">NIL</a></li>
            <li><a href="fauna.php">FAUNA</a></li>
            <li><a href="turism.php">LOCURI TURISTICE</a></li>
            <li><a href="contact.php">CONTACT</a></li>
            <li><a href="registration.php">REGISTRATION</a></li>
        </ul>
</nav>
</div>


<img src="img/Africa (1).png"></img>
</div>

<div class = "donate">
    <p  class = "p-don">Donate for Africa</p>
<form action="donations-validation.php" id="form" method="POST">
<input type="text" id="fname" name="fname" placeholder="First Name"><br><br>
<p class="error_form" id="fname_error_message"></p>
<input type="text" id="sname" name="sname" placeholder="Second Name"><br><br>
<p class="error_form" id="sname_error_message"></p>
<input type="text" id="email" name="email" placeholder="Email"><br><br>
<p class="error_form" id="email_error_message2"></p>
<input type="number" id="phone" name="phone" placeholder="Phone number"><br><br>
<p class="error_form" id="phone_error_message"></p>
<input type="text" id="address" name="address" placeholder="Address"><br><br>
<p class="error_form" id="address_error_message"></p>
<input type="number" id="donation_sum" name="donation_sum" placeholder="Donation Sum"><br><br>
<p class="error_form" id="donation_sum_error_message"></p>
<input class = "donate-but" type="submit" id="submit" value="Donate" name="submit">
<?php if(isset($fname_error)){ ?>
    <p class="php_error"> <?php echo $fname_error ?> </p>
<?php } ?>
<?php if(isset($sname_error)){ ?>
    <p class="php_error"> <?php echo $sname_error ?> </p>
<?php } ?>
<?php if(isset($email_error)){ ?>
    <p class="php_error"> <?php echo $email_error ?> </p>
<?php } ?>
<?php if(isset($phone_error)){ ?>
    <p class="php_error"> <?php echo $phone_error ?> </p>
<?php } ?>
<?php if(isset($address_error)){ ?>
    <p class="php_error"> <?php echo $address_error ?> </p>
<?php } ?>
<?php if(isset($donation_sum_error)){ ?>
    <p class="php_error"> <?php echo $donation_sum_error ?> </p>
<?php } ?>
<?php if(!isset($fname_error) && !isset($sname_error) && !isset($email_error) && !isset($phone_error) && !isset($donation_sum_error) && !isset($address_error)){ ?>
    <p class="php_error"> <?php echo $success ?> </p>
<?php } ?>
</form>



</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="js/donation-validation.js"></script>
</body>
</html>