<?php

	include 'db.php';
	// session_start();

	//GET DATA

	if(isset($_POST['ccpay'])){
		$withid = $_POST['withid'];

		$sql = "SELECT * FROM withdawalrequest WHERE withid='$withid'";
		$result = mysqli_query($conn,$sql);
		$result_check = mysqli_num_rows($result);

		if($result_check > 0){

			while($data = mysqli_fetch_assoc($result)){

				// $_SESSION['withid'] = $data['withid'];

				// $depositi = $_SESSION['withid'];

				$sql = "DELETE FROM withdawalrequest WHERE withid='$withid'";
				mysqli_query($conn,$sql);


				header("Location:../adminwithdrawalrequest.php?del=succ");
				exit();

			}

		}


		
	}