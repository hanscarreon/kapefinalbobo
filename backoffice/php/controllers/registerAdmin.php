<?php

include '../dbconn.php';

if(isset($_POST['register']))
{
	$username 	= $_POST['username'];
	$fname    	= $_POST['fname'];
	$lname    	= $_POST['lname'];
	$password 	= $_POST['password'];
	$password2	= $_POST['password2'];

	if(!preg_match("/^[a-zA-z0-9]*$/", $username))
	{
		header("Location: ../../register.php?error=invalidnameuser");
		exit();
	}
	else if($password !== $password2) {
		header("Location: ../../register.php?error=checkpassword");
		exit();
	}
	else
	{
		$ckusername = "SELECT * FROM admin WHERE username=?";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt,$ckusername))
		{
			header("Location: ../../register.php?error=sqlerr");
			exit();
		}else
		{
			mysqli_stmt_bind_param($stmt, "s", $username);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultCheck = mysqli_stmt_num_rows($stmt);

			if($resultCheck > 0)
			{
				header("Location: ../../register.php?error=usertaken");
				exit();
			}else
			{
				$registerAdmin = "INSERT INTO admin (username, password, fname, lname) VALUES (?,?,?,?) ";
				$stmt  = mysqli_stmt_init($conn);
				if(!mysqli_stmt_prepare($stmt,$registerAdmin))
				{
					header("Location: ../../register.php?error=sqlerrs");
					exit();
				}else
				{
					$hasspass = password_hash($password, PASSWORD_DEFAULT);
					mysqli_stmt_bind_param($stmt, "ssss", $username,$hasspass, $fname,$lname);
					mysqli_stmt_execute($stmt);
					header("Location: ../../register.php?success=created");
					exit();
				}
			}
		}
	}
	


}