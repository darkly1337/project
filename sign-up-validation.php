<?php

$fname = $_POST['fname'];
$sname = $_POST['sname'];
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

$fname_error = "";
$sname_error = "";
$email_error = "";
$password_error = "";
$password_error2 = "";

include('validation-function.php');

if($fname_error == NULL && $sname_error == NULL && $email_error == NULL && $password_error == NULL
 && $password_error2 == NULL){
    $result = "Succes!";
    echo json_encode($result);
}else{
    $result = "Error";
    echo json_encode($result);
}
?>