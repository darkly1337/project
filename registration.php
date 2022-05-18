
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

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
<p id="validationText"></p>
</form>


</div>

<script src="js/sign-up-validation.js"></script>
<script src="js/validation-function.js"></script>

</body>
</html>