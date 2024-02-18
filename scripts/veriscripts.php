<?php
	
	include 'db.php';

	// session_start();

	if(isset($_POST['verify'])){

         $usd=mysqli_real_escape_string($conn,$_POST['usd']);

        $verify="Verified";
       



        //  $email =$_SESSION['email'] ;

        $sql = "UPDATE register

        SET verify='$verify'

        WHERE usd='$usd'

        ";




        mysqli_query($conn,$sql);

        header("Location:../admin.php?verify=success");
		exit();


	}