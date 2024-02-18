<?php

	include 'db.php';
	session_start();

	//GET DATA

	if(isset($_POST['delete'])){
		$email = $_POST['email'];

		$sql = "SELECT * FROM register WHERE email='$email'";
		$result = mysqli_query($conn,$sql);
		$result_check = mysqli_num_rows($result);

		if($result_check > 0){

			while($data = mysqli_fetch_assoc($result)){

				$_SESSION['email'] = $data['email'];

				$email = $_SESSION['email'];

				$sql = "DELETE FROM register WHERE email='$email'";
				mysqli_query($conn,$sql);


				header("Location:../update.php?del=succ");
				exit();

			}

		}


		
	}