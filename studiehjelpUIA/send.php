<?php


$name = $_POST ['name'];
$email = $_POST ['email'];
$web = $_POST ['web'];
$text = $_POST ['text'];
$to = "hvorerdu@hotmail.com";
$subject = "StudiehjelpenUIA";

mail ($to, $subject, $text, "from:" . $name, $email, $web);
echo "Your message has been sent";
?>
