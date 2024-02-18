<?php
	
	include 'db.php';

	session_start();

	if(isset($_POST['active'])){

         $email=mysqli_real_escape_string($conn,$_POST['email']);
        $active="active";
       



         $email =$_SESSION['email'] ;

        $sql = "UPDATE register

        SET activate='$active'

        WHERE email='$email'

        ";

        mysqli_query($conn,$sql);

        header("Location:../activate.php?activate=success");
		exit();


	}