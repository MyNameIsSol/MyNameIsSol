<?php

	include 'db.php';
	// session_start();

	//GET DATA

	if(isset($_POST['delete'])){
		$usd = $_POST['usd'];

		$sql = "SELECT * FROM register WHERE usd='$usd'";
		$result = mysqli_query($conn,$sql);
		$result_check = mysqli_num_rows($result);

		if($result_check > 0){

			while($data = mysqli_fetch_assoc($result)){

				// $_SESSION['usd'] = $data['usd'];

				// $us = $_SESSION['usd'];

				$sql = "DELETE FROM register WHERE usd='$usd'";
				mysqli_query($conn,$sql);


				header("Location:../adminupdate.php?del=succ");
				exit();

			}

		}


		
	}