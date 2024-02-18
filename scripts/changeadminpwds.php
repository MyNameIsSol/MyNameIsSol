<?php
	
	include 'db.php';

	// session_start();

	if(isset($_POST['chan'])){

         $npwd=mysqli_real_escape_string($conn,$_POST['chp']);

         $admin =  "admin";

         $sql = "UPDATE admin

        SET pwd='$npwd'

        WHERE usd='$admin'

        ";

        mysqli_query($conn,$sql);

        header("Location:../admin.php?change=success");
        exit();

	}