<?php

	
$name = $_POST['name'];
$email_address = $_POST['mail'];
$phone = $_POST['mobile'];
$message = $_POST['message'];
	
// Create the email and send the message
$to = 'info@bangalorecivils.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Web Enquery:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: $email_address\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	

mail($to,$email_subject,$email_body,$headers) or die ("Failure"); 

echo"<script>alert('We will contact you as soon as possible')</script>";
echo"<script>window.location.href='contact.php'</script>";		
?>