<?php

// On submitting form below function will execute.
if (empty($_POST["email"])) {
$emailError = "Email is required </br>";
} else {
$email = test_input($_POST["email"]);
// check if e-mail address syntax is valid or not
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {//Filters a variable with a specified filter, Keep in mind that FILTER_VALIDATE_EMAIL will validate the email address according to standards.
$emailError = "Invalid email format </br>";
}
}
if (empty($_POST["password"])) {
$passworderror = "password is required </br>";
}
function test_input($data) {
$data = trim($data); //The trim() function is used to remove the white spaces and other predefined characters from the left and right sides of a string
$data = stripslashes($data); //stripslashes() function removes backslashes added by the addslashes() function
$data = htmlspecialchars($data); //htmlspecialchars() function converts some predefined characters to HTML entities.
return $data;
}
?>