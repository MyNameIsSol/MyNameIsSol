<?php
	include 'db.php';



	if(isset($_POST['fund'])){
		// GET THE DATA

	$name=mysqli_real_escape_string($conn,$_POST['name']);
	$uid=mysqli_real_escape_string($conn,$_POST['uid']);
	$email=mysqli_real_escape_string($conn,$_POST['email']);
	$amount=mysqli_real_escape_string($conn,$_POST['amount']);
	$method=mysqli_real_escape_string($conn,$_POST['method']);
	
	

	$mailTo = "support@profitorients.com";
	$header = "From: ".$email;
	$sub = "You have recieved a Funding Request from".$name;
	$txt = "USERNAME:". $uid ."\n\n". "AMOUNT:" . $amount ."\n\n"."METHOD OF FUNDING:".$method;

	mail($mailTo,$sub,$txt,$header);

	header("Location:../fund.php?fund=sucess");
	exit();







	}else{
		header("Location:../fund.php?error");
		exit();
	}