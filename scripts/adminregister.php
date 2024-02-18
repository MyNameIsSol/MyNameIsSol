<?php


	include 'db.php';

	if(isset($_POST['adminregister'])){

		$acctname = mysqli_real_escape_string($conn,$_POST['acctname']);
		$acctnumber = mysqli_real_escape_string($conn,$_POST['acctnumber']);
		$email = mysqli_real_escape_string($conn,$_POST['email']);
		$tel = mysqli_real_escape_string($conn,$_POST['tel']);
		$accttype = mysqli_real_escape_string($conn,$_POST['accttype']);
		$birth = mysqli_real_escape_string($conn,$_POST['birth']);
		$addr = mysqli_real_escape_string($conn,$_POST['addr']);
		$nation = mysqli_real_escape_string($conn,$_POST['nation']);
		$city = mysqli_real_escape_string($conn,$_POST['city']);
		$state = mysqli_real_escape_string($conn,$_POST['state']);
		$marital = mysqli_real_escape_string($conn,$_POST['marital']);
		$gender = mysqli_real_escape_string($conn,$_POST['gender']);
		$username = mysqli_real_escape_string($conn,$_POST['username']);
		$pwd = mysqli_real_escape_string($conn,$_POST['pwd']);
		$pin = mysqli_real_escape_string($conn,$_POST['pin']);

		$tac=rand(1000,5000);
		$tax=rand(3000,7000);
		$acct = 0;

		// IMAGE 
		$target = "../uploads/".basename($_FILES['img']['name']);
		$img = $_FILES['img']['name'];


		// INSERT INTO DB

		$sql ="INSERT INTO users (acctname,acctnumber,email,tel,accttype,birth,addr,nation,city,state,marital,gender,username,pwd,pin,acctbal,tac,tax,img) 
		VALUES ('$acctname','$acctnumber','$email','$tel','$accttype','$birth','$addr','$nation','$city','$state','$marital','$gender','$username','$pwd','$pin','$acct','$tac','$tax','$img')";

		move_uploaded_file($_FILES['img']['tmp_name'], $target);


		 $mailTo = $email;
    	$header = "From: support@profitorients.com";
    	$sub = " Your Account was successfully registered";
    	$txt = "Dear ".$acctname."\n\n"."Your account was successfully registered with Profitorients. These are your login details;"."\n\n"."Username: ".$username."\n\n"."Password: ".$pwd."\n\n"."Pin: ".$pin."\n\n"."Thanks"."\n\n"."From: profitorients";

         mail($mailTo,$sub,$txt,$header);

		mysqli_query($conn,$sql);
		
		header("Location:../admin.php?suc");
		 exit();

		










	}else{
		header("Location:../admin.php?error");
		exit();
	}