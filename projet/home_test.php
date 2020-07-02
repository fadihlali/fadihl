<?php
if (empty($_POST["name"])) {
$nameError = "Name is required </br>";
} else {
$name = test_input($_POST["name"]);
// check name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z ]*$/",$name)) { //Perform a regular expression match
$nameError = "Only letters and white space allowed </br>";
}
}
if (empty($_POST["prenom"])) {
$prenomerror = "Last Name is required </br>";
} else {
$prenom = test_input($_POST["prenom"]);
// check name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z ]*$/",$prenom)) { //Perform a regular expression match
$prenomerror = "Only letters and white space allowed </br>";
}
}
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
}else{$password=test_input($_POST["password"]);}
if (empty($_POST["password1"])) {
$password1error = "password is required </br>";
}else{
	$password1=test_input($_POST["password1"]);
	if($password !== $password1){
		$password1error="invalid confirm";
	}
}

//define test validation function
function test_input($data) {
$data = trim($data); //The trim() function is used to remove the white spaces and other predefined characters from the left and right sides of a string
$data = stripslashes($data); //stripslashes() function removes backslashes added by the addslashes() function
$data = htmlspecialchars($data); //htmlspecialchars() function converts some predefined characters to HTML entities.
return $data;
}
?>