<?php

	include 'db.php';

	// session_start();


	if(isset($_POST['adminupdate'])){

		$firstnam = mysqli_real_escape_string($conn,$_POST['firstnam']);
		$lastnam = mysqli_real_escape_string($conn,$_POST['lastnam']);
		$emai = mysqli_real_escape_string($conn,$_POST['emai']);
		$phon = mysqli_real_escape_string($conn,$_POST['phon']);
		$us = mysqli_real_escape_string($conn,$_POST['us']);
		$pw = mysqli_real_escape_string($conn,$_POST['pw']);
		$countr = mysqli_real_escape_string($conn,$_POST['countr']);
		$stat = mysqli_real_escape_string($conn,$_POST['stat']);
		$cit = mysqli_real_escape_string($conn,$_POST['cit']);
		$walletba = mysqli_real_escape_string($conn,$_POST['walletba']);
		$totalwit = mysqli_real_escape_string($conn,$_POST['totalwit']);
		$btcadd = mysqli_real_escape_string($conn,$_POST['btcadd']);
		

		$earns = mysqli_real_escape_string($conn,$_POST['earns']);
		// $tearns = mysqli_real_escape_string($conn,$_POST['tearns']);

		$withdrawal = mysqli_real_escape_string($conn,$_POST['withdrawa']);
		



		// $us = $_SESSION['usd'];

		$sql = "UPDATE register

				SET firstname='$firstnam',lastname='$lastnam',email='$emai',phone='$phon',usd='$us',pwd='$pw',country='$countr',state='$stat',city='$cit',walletbal='$walletba',totalwith='$totalwit',btcaddr='$btcadd',earns='$earns',withdrawal='$withdrawal'

				WHERE usd = '$us'
		";

		mysqli_query($conn,$sql);

        header("Location:../admin.php?update=success");
		exit();




	}else{
		header("Location:../adminupdate.php?error");
		exit();
	}