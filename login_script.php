

<?php
session_start(); 


include("config/config.php");

if (isset($_POST["submit"])) {
	
	$email=$_POST["email"];
	$password=$_POST["password"];
	

	if ($email=="" || $password=="") {
		echo "Empty Details";
		exit();

	} else {
		
		$result = mysqli_query($con1,"SELECT * FROM users WHERE email='$email' and password = '$password' LIMIT 1");
		$que = "SELECT * from users WHERE email='$email' and password = '$password'";
		$query = mysqli_query($con1,$que);
        $row = mysqli_fetch_row($query);
		if (mysqli_num_rows($result)>0) {
			$dd = $row[0];
			$_SESSION["email"] = $dd;

			header("Location:index.php");
		} else {
		 echo "<script>
                alert('User Not Found Try Again');
                window.location.href='login.php';
            </script>";
		}
		
	}
	

	
} 




