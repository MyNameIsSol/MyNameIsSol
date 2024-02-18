<?php
	function addsevent(){
		include 'db.php';

		$plan = "Bronze";
		// $countingdays= 7;
		$statusofcronjob = "Processing";

		$sql="SELECT * FROM cronjob WHERE plan ='$plan' ";
		$result= mysqli_query($conn,$sql);
		$result_checker= mysqli_num_rows($result);

		if($result_checker > 0){
			while($data = mysqli_fetch_assoc($result)){

			$usd = $data['usd'];
			$plan = $data['plan'];
			$amount = $data['amount'];
			$statusofdep = $data['statusofdep'];
			$depositid = $data['depositid'];
			$usdemail = $data['usdemail'];
			$count = $data['count'];
			$profit = $data['profit'];


			$countingdays = $count + 1;

			// CALCULATION

			 $firstcal = 0.05 * $amount;

			 // $secondcal = $firstcal + $amount;

			 $finalcal =  $firstcal + $profit;


			 // $thirdcal =  $secondcal + $amount;

			 // $forthcal = $thirdcal / 7;

			 // $earnprofit = $forthcal + $profit;

			 $realearnprofit = number_format($finalcal,1);


			 if($statusofdep == "Processing" && $count >= 3){


				$statusreached = "due";


					 $sql = "UPDATE cronjob

      			  SET statusofdep = '$statusreached'

       			 WHERE plan='$plan'

       			 ";

       			 mysqli_query($conn,$sql);



$to = $usdemail;
$subject = 'YOUR INVESTMENT IS DUE FOR WITHDRAWAL';
$from = 'support@cryptblockpay.com';
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message


$message = " <html><body style='width:100%;background: rgb(247, 247, 247);'>";
$message.=  "<div style='width:90%; height: auto; margin: auto;margin-top: 20px;box-shadow: 0px 0px 3px rgb(253, 150, 26);border-radius: 5px;'>";
$message.=  "<div style='width:100%;'>";
$message.=  "<h3 style='padding: 1px;font-family: Georgia;'><span style='color:rgb(253, 150, 26);'>CRYPT BLOCK</span>PAY</h3>";
$message.=  "<h4 style='padding: 1px;'>Dear ".$usd.",</h4> ";
$message.= " <br>";
$message.=  "<div style='width:100%;height: auto;box-shadow: 0px 0px 3px rgb(253, 150, 26);margin: auto;border-radius: 6px;'>";

$message.="<p> Your investment schedule has been completed and your Return of investment(ROI) have been funded to your wallet Balance, please login your account to view your new wallet balance. </p>";


$message.="<p>from CRYPT BLOCK PAY</p>";


$message.= "</div> ";
$message .=  "<p style='text-align:center;'><span style='color:rgb(253, 150, 26);'>CRYPT BLOCK </span>PAY  © 2020 All Rights Reserved</p> ";
$message.=  " </div>";
$message.=  "</div>";
$message.=  "</body></html>";


mail($to, $subject, $message, $headers);

$sql="SELECT * FROM register WHERE usd ='$usd' ";
		$result= mysqli_query($conn,$sql);
		$result_checker= mysqli_num_rows($result);

		if($result_checker > 0){

			while($data = mysqli_fetch_assoc($result)){

			$usd = $data['usd'];
			$earns = $data['earns'];
			$walletbal = $data['walletbal'];


			$investvalue=0;

			// $totalamountearning = $earns + $realearnprofit;




           $sql = "UPDATE register

       	SET walletbal='$amount',totalwith ='$investvalue'

       	 WHERE usd='$usd'

        ";
         
        














			}





		}







        		 mysqli_query($conn,$sql);


			 }else{

			 	$statusproecess= "Processing";

				if($statusofdep == "Processing"){


         	 $sql = "UPDATE cronjob

       	SET profit='$realearnprofit',count = '$countingdays'

       	 WHERE plan='$plan'

        ";

$to = $usdemail;
$subject = 'Investment Update';
$from = 'support@cryptblockpay.com';
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message


$message = " <html><body style='width:100%;background: rgb(247, 247, 247);'>";
$message.=  "<div style='width:90%; height: auto; margin: auto;margin-top: 20px;box-shadow: 0px 0px 3px rgb(253, 150, 26);border-radius: 5px;'>";
$message.=  "<div style='width:100%;'>";
$message.=  "<h3 style='padding: 1px;font-family: Georgia;'><span style='color:rgb(253, 150, 26);'>CRYPT BLOCK</span>PAY</h3>";
$message.=  "<h4 style='padding: 1px;'>Dear ".$usd.",</h4> ";
$message.= " <br>";
$message.=  "<div style='width:100%;height: auto;box-shadow: 0px 0px 3px rgb(253, 150, 26);margin: auto;border-radius: 6px;'>";

$message.="<p> Your daily investment profit has been added to your account, Please login your account to view your earnigs.  </p>";


$message.="<p>from CRYPT BLOCK PAYT</p>";


$message.= "</div> ";
$message .=  "<p style='text-align:center;'><span style='color:rgb(253, 150, 26);'>CRYPT BLOCK </span>PAY  © 2020 All Rights Reserved</p> ";
$message.=  " </div>";
$message.=  "</div>";
$message.=  "</body></html>";


mail($to, $subject, $message, $headers);


         mysqli_query($conn,$sql);



         	$sql="SELECT * FROM register WHERE usd ='$usd' ";
		$result= mysqli_query($conn,$sql);
		$result_checker= mysqli_num_rows($result);

		if($result_checker > 0){

			while($data = mysqli_fetch_assoc($result)){

			$usd = $data['usd'];
			$earns = $data['earns'];

			// $totalamountearning = $earns + $realearnprofit;




           $sql = "UPDATE register

       	SET earns='$realearnprofit'

       	 WHERE usd='$usd'

        ";
         
          mysqli_query($conn,$sql);














			}





		}












     }

			 }









			}





		}



	}

	addsevent();



?>