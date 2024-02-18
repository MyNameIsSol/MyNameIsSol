<?php
	include 'db.php';
	session_start();

	if(isset($_POST['login'])){
//GET DATA
		$uid = $_POST['uid'];
		$pwd = $_POST['pwd'];

		//CHECK EMPTY

		if(empty($uid) || empty($pwd)){
			header("Location:../adminlogin.php?empty");
			exit();

		}else{

			$sql= "SELECT * FROM admin WHERE usd='$uid' AND pwd='$pwd' ";
			$result = mysqli_query($conn,$sql);
			$result_checker = mysqli_num_rows($result);

			if($result_checker >0 ){
				while($row = mysqli_fetch_assoc($result)){

					 $_SESSION['adminuid'] = $row['usd'];

					 $_SESSION['pwd'] = $row['pwd'];


					 header("Location:../admindash.php?SUCCES");
						exit();

				}


			}else{
				header("Location:../admin.php?invalidusername");
				exit();
			}

		}
			

	}else{
		header("Location:../admin.php?error");
		exit();
	}