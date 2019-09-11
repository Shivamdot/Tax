<?php

    $to = "shivam231198@gmail.com";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    // $number = $_POST['number'];
    $message = $_POST['message'];

	$body = "User name: $name. \n".
				"User Email: $from.\n".
					"User Message: $message. \n";

	$from_shiv = "shivam231198@gmail.com";

    $headers = "From: $from_shiv \r\n";
	$headers .= "Reply-To: $from \r\n";
	// $headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	// $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $subject = "You have a message from your Bitmap Photography.";

    mail($to, $subject, $body, $headers);

	// header("Location: index.hmtl");
	return true;
?>