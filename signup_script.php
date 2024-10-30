

<?php
session_start(); 


include("config/config.php");

if (isset($_POST["submit"])) {
	
	$email=$_POST["email"];
	$password=$_POST["password"];
	$first_name=$_POST["first_name"];
	$last_name=$_POST["last_name"];
	$phone_number = $_POST["phone_number"];
	

	if ($email=="" || $password=="" || $first_name=="" || $last_name=="" || $phone_number=="") {
		echo "Empty Details";
		exit();

	} else {
		
		$result = mysqli_query($con1,"INSERT INTO users (`email`, `password`, `first_name`, `last_name`, `phone_number`) VALUES ('$email', '$password','$first_name', '$last_name', '$phone_number')");
		

		
		 echo "<script>
                alert('Sign Up Successfull');
                window.location.href='index.php';
            </script>";
		}
		
	}
	

	
 




