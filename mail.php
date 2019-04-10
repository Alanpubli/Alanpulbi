<!DOCTYPE html>
<html>
<meta charset="utf-8">
<title>Forms action page</title>
<link rel="stylesheet" href="/w3css/4/w3.css">
<body class="w3-container">


<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "evermake.io@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>


</body>
</html>
