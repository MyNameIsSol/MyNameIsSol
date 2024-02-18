<?php
	
	if(isset($_POST['logoutt'])){
		
		session_start();
		session_unset();
		session_destroy();

		header("Location:../index.php?logoutsuc");
		exit();

	}
