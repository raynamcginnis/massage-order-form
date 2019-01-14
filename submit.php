<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['phone'])     ||
   empty($_POST['email'])     ||
   empty($_POST['length'])   ||
   empty($_POST['pressure'])   ||
   empty($_POST['addons'])   ||
   empty($_POST['therapist'])   ||
   empty($_POST['availability'])   ||
   empty($_POST['extra'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$length = strip_tags(htmlspecialchars($_POST['length']));
$pressure = strip_tags(htmlspecialchars($_POST['pressure']));
$addons = strip_tags(htmlspecialchars($_POST['addons']));
$therapist = strip_tags(htmlspecialchars($_POST['therapist']));
$availability = strip_tags(htmlspecialchars($_POST['availability']));
$extra = strip_tags(htmlspecialchars($_POST['extra']));




   
// Create the email and send the message
$to = 'raynamcginnis@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;         
?>