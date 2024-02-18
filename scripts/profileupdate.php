<?php
	
	include 'db.php';

	session_start();

	if(isset($_POST['profile'])){

        $name=mysqli_real_escape_string($conn,$_POST['name']);
        $gender=mysqli_real_escape_string($conn,$_POST['gender']);
        $country=mysqli_real_escape_string($conn,$_POST['country']);
        $addr=mysqli_real_escape_string($conn,$_POST['addr']);
        $phone=mysqli_real_escape_string($conn,$_POST['phone']);
        $email=mysqli_real_escape_string($conn,$_POST['email']);
        $pwd=mysqli_real_escape_string($conn,$_POST['pwd']);
        $btc=mysqli_real_escape_string($conn,$_POST['btc']);
        $pin=mysqli_real_escape_string($conn,$_POST['pin']);




         $useremail=  $_SESSION['email'];

        $sql = "UPDATE register

        SET name='$name',gender='$gender',country='$country',addr='$addr',phone='$phone',email='$email',pwd='$pwd',btc='$btc',pin='$pin'

        WHERE email='$useremail'

        ";

        mysqli_query($conn,$sql);

        header("Location:../profile.php?update=success");
		exit();


	}