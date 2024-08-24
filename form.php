<?php 
include "db_connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	if (isset($_POST["submit"])) {

		function validate($data){
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

		$uname = validate($_POST['uname']);
		$pass = validate($_POST['password']);
		$email = validate($_POST['email']);

		$user_data = 'uname='. $uname. '& name='. $name . '&email='. $email;

		if (empty($uname)) {
			header("Location: index.php?error=User Name is required&$user_data");
			exit();
		}else if(empty($email)){
			header("Location: index.php?error=Email is required&$user_data");
			exit();
		}else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				header("Location: index.php?error=Email is Invalid&$user_data");
				exit();
		} else if(empty($pass)){
			header("Location: index.php?error=Password is required&$user_data");
			exit();
		} else {
			$pass = md5($pass);

			$sql = "SELECT * FROM rest WHERE username='$uname' ";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) > 0) {
				header("Location: index.php?error=The username is taken try another&$user_data");
			    exit();
			} 

            else {
			   $sql2 = "INSERT INTO rest(username, email, password) VALUES('$uname', '$email', '$pass')";
			   $result2 = mysqli_query($conn, $sql2);
			   if ($result2) {
			   	 header("Location: index.php?success=Your account has been created successfully");
			     exit();
			   }else {
			       	header("Location: index.php?error=unknown error occurred&$user_data");
			        exit();
			   }
			}
		}
	}	
}else{
	header("Location: index.php");
	exit();
}