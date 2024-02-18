<?php

	include 'db.php';
	session_start();

	//GET DATA

	if(isset($_POST['delete'])){
		$depositid = $_POST['depositid'];

		$sql = "SELECT * FROM cronjob WHERE depositid='$depositid'";
		$result = mysqli_query($conn,$sql);
		$result_check = mysqli_num_rows($result);

		if($result_check > 0){

			while($data = mysqli_fetch_assoc($result)){

				$_SESSION['depositid'] = $data['depositid'];

				$depositi = $_SESSION['depositid'];

				$sql = "DELETE FROM cronjob WHERE depositid='$depositi'";
				mysqli_query($conn,$sql);


				header("Location:../benet.php?del=succ");
				exit();

			}

		}


		
	}