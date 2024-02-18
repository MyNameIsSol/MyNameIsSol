<?php


	include 'db.php';

	if(isset($_POST['upload'])){

		$dtype = mysqli_real_escape_string($conn,$_POST['dtype']);
		$emai = mysqli_real_escape_string($conn,$_POST['emai']);
		
		// IMAGE 
		$target = "../uploads/".basename($_FILES['img']['name']);
		$img = $_FILES['img']['name'];


		// INSERT INTO DB

		$sql ="INSERT INTO verify (dtype,img,email) VALUES ('$dtype','$img','$emai')";

		move_uploaded_file($_FILES['img']['tmp_name'], $target);

		mysqli_query($conn,$sql);
		
		header("Location:../verify.php?uploadsuc");
		 exit();

		










	}else{
		header("Location:../verify.php?error");
		exit();
	}