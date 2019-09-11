<?php

error_reporting(false);

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$number = $_POST['number'];

	$body = "User name: $name. \n".
				"User Email: $email.\n".
					"User Number: $number. \n";

    $subject = "You have a message from your Tax CLub Registration Form";

	$headers = "From: <'$email'>";
	$mail = mail("camayuraggarwal99@gmail.com", $subject, $body, $headers);
 }

?>