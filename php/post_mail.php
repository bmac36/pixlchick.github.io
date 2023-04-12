<?php
$name = $_POST{'name'};
$email = $_POST{'email'};
$message = $_POST['message'];

$email_message = "
Name: ".$name."
Email: ".$email."
Message: ".$message."
";

  mail ("bmmdesign@gmail.com" , "Contact Me", $email_message);
  header("location: thank_you.html");



?>
