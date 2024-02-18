<?php
	include 'db.php';



	if(isset($_POST['mail'])){
		// GET THE DATA

	$name=mysqli_real_escape_string($conn,$_POST['name']);
	$email=mysqli_real_escape_string($conn,$_POST['email']);
	$msg=mysqli_real_escape_string($conn,$_POST['msg']);

	if(empty($name) || empty($email) ||empty($msg)){
		header("Location:../contact.php?mail=empty");
		exit();

	}else{
		if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		header("Location:../contact.php?mail=invalidemail");
		exit();

		}else{

			$mailTo = "support@profitorients.com";
			$header = "From: ".$email;
			$txt = $msg;
			$sub = "FROM YOUR WEBSITE CONTACT";

			mail($mailTo,$sub,$txt,$header);

		header("Location:../contact.php?mail=sucess");
		exit();

		}

	}

	}else{
		header("Location:../contact.php?error");
		exit();
	}