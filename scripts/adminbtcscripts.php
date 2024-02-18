<?php
	
	include 'db.php';

	session_start();

	if(isset($_POST['updateadminbtc'])){

         $adminbtc=mysqli_real_escape_string($conn,$_POST['adminbtc']);
        




         $adminusd =$_SESSION['adminuid'];

        $sql = "UPDATE admin

        SET adminbtc='$adminbtc'
        WHERE usd='$adminusd'

        ";

        mysqli_query($conn,$sql);

        header("Location:../adminbtc.php?update=success");
		exit();


	}