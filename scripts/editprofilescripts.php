<?php

	include 'db.php';

	// session_start();


	//  $username = $_SESSION['usd'];
 //   $useremail = $_SESSION['email'];

	if(isset($_POST['profileupdate'])){


		$firstname = mysqli_real_escape_string($conn,$_POST['firstname']);
		$lastname = mysqli_real_escape_string($conn,$_POST['lastname']);
		$country = mysqli_real_escape_string($conn,$_POST['country']);
		$state = mysqli_real_escape_string($conn,$_POST['state']);
		$city = mysqli_real_escape_string($conn,$_POST['city']);
		$phone = mysqli_real_escape_string($conn,$_POST['phone']);
		$email = mysqli_real_escape_string($conn,$_POST['email']);
		$pwd = mysqli_real_escape_string($conn,$_POST['pwd']);

		$username = mysqli_real_escape_string($conn,$_POST['usd']);
		$useremail = mysqli_real_escape_string($conn,$_POST['email']);


		 $img =  $_FILES['img']['name'];


		// IMAGE 
		$target = "../uploads/".basename($_FILES['img']['name']);
		


		$sql = "UPDATE register

				SET firstname='$firstname',lastname='$lastname',country='$country',state='$state',city='$city',phone='$phone',email='$email',pwd='$pwd', profileimg = '$img'

				WHERE usd = '$username'
		";

		move_uploaded_file($_FILES['img']['tmp_name'], $target);


		mysqli_query($conn,$sql);

        header("Location:../userdash/profile.php?update=success");
		exit();




	}else{
		header("Location:../userdash/profile.php?error");
		exit();
	}