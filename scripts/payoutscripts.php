<?php
	include 'db.php';



	if(isset($_POST['pay'])){
		// GET THE DATA

	$btc=mysqli_real_escape_string($conn,$_POST['btc']);
	$amount=mysqli_real_escape_string($conn,$_POST['amount']);
	$pin=mysqli_real_escape_string($conn,$_POST['pin']);
	$name=mysqli_real_escape_string($conn,$_POST['name']);
	$email=mysqli_real_escape_string($conn,$_POST['email']);
	

	



	$mailTo = "info@zageinvest.comm";
	$header = "From: ".$email;
	$sub = "You have recieved a Withdrawal Request from".$name;
	$txt = "Email:". $email ."\n\n". "AMOUNT:" . $amount ."\n\n"."BITCOIN ADDRESS:". $btc."\n\n"."Pin".$pin;

	mail($mailTo,$sub,$txt,$header);

	header("Location:../payout.php?withdraw=sucess");
	exit();





	}else{
		header("Location:../payout.php?error");
		exit();
	}