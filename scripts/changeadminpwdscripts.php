<?php
	
	include 'db.php';

	session_start();

	if(isset($_POST['chan'])){

         $npwd=mysqli_real_escape_string($conn,$_POST['chp']);

         $admin =  $_SESSION['adminuid'];

         $sql = "UPDATE admin

        SET pwd='$npwd'

        WHERE usd='$admin'

        ";

        mysqli_query($conn,$sql);

        header("Location:../change.php?change=success");
        exit();

	}