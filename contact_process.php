<?php

error_reporting(false);

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$body = "User name: $name. \n".
				"User Email: $email.\n".
					"User Message: $message. \n";

	$headers = "From: <'$email'>";
	$mail = mail("camayuraggarwal99@gmail.com", $subject, $body, $headers);
 }

?>