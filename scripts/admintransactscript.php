<?php
	
	include 'db.php';

	if(isset($_POST['admintransact'])){

		// GET THE DATA
		$acctname = mysqli_real_escape_string($conn,$_POST['acctname']);
		$acctnumb = mysqli_real_escape_string($conn,$_POST['acctnumb']);
		$descrip = mysqli_real_escape_string($conn,$_POST['descrip']);
		$ref = mysqli_real_escape_string($conn,$_POST['ref']);
		$amount = mysqli_real_escape_string($conn,$_POST['amount']);
		$fee = mysqli_real_escape_string($conn,$_POST['fee']);
		$tdate = mysqli_real_escape_string($conn,$_POST['tdate']);


		// INSERT INTO DB

		$sql = "INSERT INTO transact (acctname,acctnumb,descrip,ref,amount,fee,tdate) VALUES ('$acctname','$acctnumb','$descrip','$ref','$amount','$fee','$tdate')";

		mysqli_query($conn,$sql);

		header("Location:../admintransact.php?suc");
		exit();






	}else{
		header("Location:../admintransact.php?error");
		exit();
	}
