<?php 
  
    $ToEmail = 'bangalorecivils@gmail.com'; 
    $EmailSubject = 'Site contact form'; 
    $mailheader = "From: ".$_POST["mail"]."\r\n"; 
    $mailheader .= "Reply-To: ".$_POST["mail"]."\r\n"; 
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
    $MESSAGE_BODY = "\r\n <br>Name: ".$_POST["name"].""; 
    $MESSAGE_BODY .= "\r\n <br>Email: ".$_POST["mail"]."";
    $MESSAGE_BODY .=  "\r\n <br>Message: ".$_POST["message"]."\r\n <br>Mobile Number: ".$_POST["mobile"].""; 
    
	
	
	
	mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 

echo"<script>alert('We will contact you as soon as possible')</script>";
echo"<script>window.location.href='index.php'</script>";

?>