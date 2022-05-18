

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
            <li><a href="donate.php">DONATE</a></li>
        </ul>
</nav>
</div>


<img src="img/Africa (1).png"></img>
</div>

<div class = "box">
<p class = "contact">Contact</p>
<form action="contactform.php" id="form" method="POST">
<p class="error_form" id="name_error_message"></p>
<input type="text" id="name" name="name" placeholder="Name"><br><br>
<p class="error_form" id="email_error_message"></p>
<input type="text" id="email" name="email" placeholder="Email"><br><br>

<input type="text" id="message" name="message" placeholder="Message"><br><br>
<input type="submit" id="submit" value="Send" name="submit">
<p id="validationText"></p>


</form>



</div>

<script src="js/contacts-validation.js"></script>
<script src="js/validation.js"></script>
</body>
</html>