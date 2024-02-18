<?php

	include 'db.php';

	// session_start();


	if(isset($_POST['adminupdate'])){

		$withid = mysqli_real_escape_string($conn,$_POST['withid']);
		$dateofwith = mysqli_real_escape_string($conn,$_POST['dateofwith']);
	
	
		$sql = "UPDATE withdawalrequest

				SET dateofwith='$dateofwith'
				
                WHERE withid = '$withid'
		";

		mysqli_query($conn,$sql);

        header("Location:../adminwithdrawalrequest.php?update=success");
		exit();




	}else{
		header("Location:../adminwithdrawalrequest.php?error");
		exit();
	}