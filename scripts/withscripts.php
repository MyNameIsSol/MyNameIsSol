<?php
	include 'db.php';



	if(isset($_POST['with'])){
		// GET THE DATA

	$name=mysqli_real_escape_string($conn,$_POST['name']);
	$uid=mysqli_real_escape_string($conn,$_POST['uid']);
	$email=mysqli_real_escape_string($conn,$_POST['email']);
	$amount=mysqli_real_escape_string($conn,$_POST['amount']);
	$method=mysqli_real_escape_string($conn,$_POST['method']);

	



	$mailTo = "contact@algrocryptofund.com";
	$header = "From: ".$email;
	$sub = "You have recieved a Withdrawal Request from".$name;
	$txt = "USERNAME:". $uid ."\n\n". "AMOUNT:" . $amount ."\n\n"."METHOD OF FUNDING:". $method;

	mail($mailTo,$sub,$txt,$header);







	header("Location:../with.php?withdraw=sucess");
	exit();





	}else{
		header("Location:../with.php?error");
		exit();
	}