<?php

	include 'db.php';

	// session_start();


	if(isset($_POST['adminupdate'])){

		$firstnam = mysqli_real_escape_string($conn,$_POST['firstnam']);
		$lastnam = mysqli_real_escape_string($conn,$_POST['lastnam']);
		$emai = mysqli_real_escape_string($conn,$_POST['emai']);
		$phon = mysqli_real_escape_string($conn,$_POST['phon']);
		$us = mysqli_real_escape_string($conn,$_POST['us']);
		// $pw = mysqli_real_escape_string($conn,$_POST['pw']);
		$countr = mysqli_real_escape_string($conn,$_POST['countr']);
		$stat = mysqli_real_escape_string($conn,$_POST['stat']);
		$cit = mysqli_real_escape_string($conn,$_POST['cit']);
		$walletba = mysqli_real_escape_string($conn,$_POST['walletba']);
		$totalwit = mysqli_real_escape_string($conn,$_POST['totalwit']);
		$btcadd = mysqli_real_escape_string($conn,$_POST['btcadd']);
		

		$earns = mysqli_real_escape_string($conn,$_POST['earns']);
		// $tearns = mysqli_real_escape_string($conn,$_POST['tearns']);

		$withdrawal = mysqli_real_escape_string($conn,$_POST['withdrawal']);

		if($totalwit == 0 || $totalwit == ''){
			$statusofinvest = 0;

			$sql = "SELECT * FROM register WHERE usd='$us' ";
             $result= mysqli_query($conn,$sql);
             $result_checker= mysqli_num_rows($result);

             if($result_checker > 0){
             while($data = mysqli_fetch_assoc($result)){

                // $walletbal= $data['walletbal'];             
            $totalwith= $data['totalwith'];
			   $walletba = $walletba + $totalwith;
			 }

}
		}

		
		



		// $us = $_SESSION['usd'];

		$sql = "UPDATE register

				SET firstname='$firstnam',lastname='$lastnam',email='$emai',phone='$phon',usd='$us',country='$countr',state='$stat',city='$cit',walletbal='$walletba',totalwith='$totalwit',btcaddr='$btcadd',earns='$earns',withdrawal='$withdrawal',statusofinvest='$statusofinvest'

				WHERE usd = '$us'
		";

		mysqli_query($conn,$sql);

        header("Location:../adminupdate.php?update=success");
		exit();




	}else{
		header("Location:../adminupdate.php?error");
		exit();
	}