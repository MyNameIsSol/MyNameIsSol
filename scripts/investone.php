<?php

	
	function one(){

		include 'db.php';

		$plan = "Key";

		$sql="SELECT * FROM register WHERE currentplan ='$plan' ";
		$result= mysqli_query($conn,$sql);
		$result_checker= mysqli_num_rows($result);

		if($result_checker > 0){

			while ($data = mysqli_fetch_assoc($result)) {

			$usd = $data['usd'];
			$currentplan = $data['currentplan'];
			 $investedamount = $data['investedamount'];
			$statusofinvest = $data['statusofinvest'];
			$coun = $data['coun'];
			$walletbal = intval($data['walletbal']);
			$earns = intval($data['earns']);
			$email = $data['email'];
			$timeofinvest = $data['timeofinvest'];
			$totalwith = intval($data['totalwith']);

			$investamou = intval($investedamount);

			$value = 0.03 * $investamou;
			
			$secondcal = $earns + $value; 

			$investvalue = 0;

			// echo $secondcal ;

			
			

			date_default_timezone_set('Africa/Lagos');
			$newdate= date('Y-m-d H:i:s');
			$current_datetime =  date_create(date('Y-m-d H:i:s', time())); 
			$investment_datetime = date_create($timeofinvest);
			 $date_diff = date_diff($investment_datetime,$current_datetime )->format("%R%a");
			 

			 if ($date_diff >= 1){

				if($statusofinvest == "Processing" && $coun >= 7){

					// TOTAL WALLETBAL WITH INVESTED AMOUNT  PLUS FORMER WALLETBAL
					$totalwalettsbal = $walletbal + $investamou;
					$finalwallet = $totalwalettsbal + $earns;
					
					$statusreached = "due";
					
					
					
					 $sql = "UPDATE register
					
						SET statusofinvest = '$statusreached', walletbal = '$finalwallet', totalwith = '$investvalue'
					
						WHERE usd='$usd'
					
						";

					mysqli_query($conn,$sql);
					
					// SEND MAIL TO ADMIN
					
					
					
					
					
		
					}else if($statusofinvest == "Processing"){

						$countingdays = $coun + 1;
					
						// updating of earning
						
						
					
						$sql = "UPDATE register
					
						   SET coun = '$countingdays', earns = '$secondcal', timeofinvest = '$newdate'
					
						   WHERE usd='$usd'
					
							";
						 mysqli_query($conn,$sql);
					
					
					
					
					}
					}
					
					
					
					
					
					

			 }


			}

		}


	one();






	// two

	
	
	function two(){

		include 'db.php';

		$plan = "Deluxe";

		$sql="SELECT * FROM register WHERE currentplan ='$plan' ";
		$result= mysqli_query($conn,$sql);
		$result_checker= mysqli_num_rows($result);

		if($result_checker > 0){

			while ($data = mysqli_fetch_assoc($result)) {

			$usd = $data['usd'];
			$currentplan = $data['currentplan'];
			 $investedamount = $data['investedamount'];
			$statusofinvest = $data['statusofinvest'];
			$coun = $data['coun'];
			$walletbal = intval($data['walletbal']);
			$earns = intval($data['earns']);
			$email = $data['email'];
			$timeofinvest = $data['timeofinvest'];
			$totalwith = intval($data['totalwith']);

			$investamou = intval($investedamount);

			$value = 0.045 * $investamou;
			
			$secondcal = $earns + $value; 

			$investvalue = 0;

			// echo $secondcal ;



			date_default_timezone_set('Africa/Lagos');
			$newdate= date('Y-m-d H:i:s');
			$current_datetime =  date_create(date('Y-m-d H:i:s', time())); 
			$investment_datetime = date_create($timeofinvest);
			 $date_diff = date_diff($investment_datetime,$current_datetime )->format("%R%a");
			 

			 if ($date_diff >= 1){



				if($statusofinvest == "Processing" && $coun >= 10){

					// TOTAL WALLETBAL WITH INVESTED AMOUNT  PLUS FORMER WALLETBAL
					$totalwalettsbal = $walletbal + $investamou;
					$finalwallet = $totalwalettsbal + $earns;
					
					$statusreached = "due";
					
					
					
					 $sql = "UPDATE register
					
						SET statusofinvest = '$statusreached', walletbal = '$finalwallet', totalwith = '$investvalue'
					
						WHERE usd='$usd'
					
						";

					mysqli_query($conn,$sql);
					
					// SEND MAIL TO ADMIN
					
				
					
					
					
					
					}else if($statusofinvest == "Processing"){

						$countingdays = $coun + 1;
					
						// updating of earning
						
						
					
						$sql = "UPDATE register
					
						   SET coun = '$countingdays', earns = '$secondcal', timeofinvest = '$newdate'
					
						   WHERE usd='$usd'
					
							";
						 mysqli_query($conn,$sql);
					
					
					
					
					}
					}
					
					
					
					
					
					

			 }


			}

		}


	two();





	// three

	
	function three(){

		include 'db.php';

		$plan = "Gold";

		$sql="SELECT * FROM register WHERE currentplan ='$plan' ";
		$result= mysqli_query($conn,$sql);
		$result_checker= mysqli_num_rows($result);

		if($result_checker > 0){

			while ($data = mysqli_fetch_assoc($result)) {

			$usd = $data['usd'];
			$currentplan = $data['currentplan'];
			 $investedamount = $data['investedamount'];
			$statusofinvest = $data['statusofinvest'];
			$coun = $data['coun'];
			$walletbal = intval($data['walletbal']);
			$earns = intval($data['earns']);
			$email = $data['email'];
			$timeofinvest = $data['timeofinvest'];
			$totalwith = intval($data['totalwith']);

			$investamou = intval($investedamount);

			$value = 0.06 * $investamou;
			
			$secondcal = $earns + $value; 

			$investvalue = 0;

			// echo $secondcal ;



			date_default_timezone_set('Africa/Lagos');
			$newdate= date('Y-m-d H:i:s');
			$current_datetime =  date_create(date('Y-m-d H:i:s', time())); 
			$investment_datetime = date_create($timeofinvest);
			 $date_diff = date_diff($investment_datetime,$current_datetime )->format("%R%a");
			 

			 if ($date_diff >= 1){



				if($statusofinvest == "Processing" && $coun >= 15){

					// TOTAL WALLETBAL WITH INVESTED AMOUNT  PLUS FORMER WALLETBAL
					$totalwalettsbal = $walletbal + $investamou;
					$finalwallet = $totalwalettsbal + $earns;
					
					$statusreached = "due";
					
					
					
					 $sql = "UPDATE register
					
						SET statusofinvest = '$statusreached', walletbal = '$finalwallet', totalwith = '$investvalue'
					
						WHERE usd='$usd'
					
						";

					mysqli_query($conn,$sql);
					
					// SEND MAIL TO ADMIN
					
				
					
					
					}else if($statusofinvest == "Processing"){

						$countingdays = $coun + 1;
					
						// updating of earning
						
						
					
						$sql = "UPDATE register
					
						   SET coun = '$countingdays', earns = '$secondcal', timeofinvest = '$newdate'
					
						   WHERE usd='$usd'
					
							";
						 mysqli_query($conn,$sql);
					
					
					
					
					}
					}
					
					
					
					
					
					

			 }


			}

		}


	three();


	// four

