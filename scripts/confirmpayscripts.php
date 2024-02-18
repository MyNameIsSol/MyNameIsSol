<?php
session_start();
include 'db.php';

	if(isset($_POST['ccpay'])){
		$usd=mysqli_real_escape_string($conn,$_POST['usd']);
		$usdemail=mysqli_real_escape_string($conn,$_POST['usdemail']);
		$walletbal=mysqli_real_escape_string($conn,$_POST['walletbal']);
		$btcaddr=mysqli_real_escape_string($conn,$_POST['btcaddr']);
		$statusofwith=mysqli_real_escape_string($conn,$_POST['statusofwith']);
		$amount=mysqli_real_escape_string($conn,$_POST['amount']);
		$withid=mysqli_real_escape_string($conn,$_POST['withid']);




			$latestranstactstatus="PAID";

			// CALACULATE DEPOSIT PLUS CURRENT BALANCE

			$currentwalletbalance=$walletbal-$amount;


			// UPDATE TRANSACTION STATUS
			 $sql = "UPDATE withdawalrequest

        SET statusofwith ='$latestranstactstatus'

        WHERE withid='$withid'

        ";




$to = $usdemail;
$subject = 'Successful Withdrawal';
$from = 'support@profitorients.com';
 
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
$message.=  "<h3 style='padding: 1px;font-family: Georgia;'>Profit Orients Trading Firm</h3>";
// LOGO HERE
$message.=  "<img src='https://www.profitorients.com/img/logo/faviconi.png' alt='Profit Orients Trading Firm' width='70' height='70'>";
$message.=  "<h4 style='padding: 1px;'>Dear ".$usd. ",</h4> ";
$message.= " <br>";
$message.=  "<div style='width:100%;height: auto;box-shadow: 0px 0px 3px rgb(253, 150, 26);margin: auto;border-radius: 6px;'>";

// $message.="<p>You have initiated a withdrawal of $".$amount." to your wallet address ".$btcaddr. " Kindly be patient while the withdrawal is processed.</p>";

$message.="<p>Your withdrawal of  $".$amount." has been sent.</p>";

$message.="<p>The payment is currently being processed...</p>";

$message.="<p>Please, check your Bitcoin wallet with the address ".$btcaddr ."</p>";

// $message.="<p>from CRYPT BLOCK PAY</p>";

// $message.="<p>contact@lunatradeoptions.com</p>";

// $message.="<p>www.cryptblockpay.com</p>";


$message.= "</div> ";
$message .=  "<p style='text-align:center;'>Profitorients.com © 2015-2021 All Rights Reserved</p> ";
$message.=  " </div>";
$message.=  "</div>";
$message.=  "</body></html>";


mail($to, $subject, $message, $headers);






	 mysqli_query($conn,$sql);



$sql = "SELECT * FROM register WHERE usd ='$usd' ";
						$result = mysqli_query($conn,$sql);
						$result_check = mysqli_num_rows($result);

						if($result_check > 0){
							while($data = mysqli_fetch_assoc($result)){

								// $id = $data['id'];
								$firstname = $data['firstname'];
								$lastname = $data['lastname'];
								$email = $data['email'];
								$phone = $data['phone'];
								$usd = $data['usd'];
								$pwd = $data['pwd'];
								$country = $data['country'];
								$state = $data['state'];
								$city = $data['city'];
								$walletbal = $data['walletbal'];
								$totalwith = $data['totalwith'];
								$btcaddr = $data['btcaddr'];

								$earns = $data['earns'];
								$tearns = $data['tearns'];
								$refcode = $data['refcode'];
								$whorefu = $data['whorefu'];
								$withdrawal = $data['withdrawal'];

								$balancedearn = $walletbal - $amount;

								$balancedwithdrawal = $withdrawal + $amount;


								  $sql = "UPDATE register

        					SET walletbal='$balancedearn', withdrawal = '$balancedwithdrawal'

       				 WHERE usd='$usd'

        			 ";
        			 mysqli_query($conn,$sql);






	header("Location:../adminwithdrawalrequest.php?pay=sucess");
	exit();
















	}
	}
	}else{
		header("Location:../adminwithdrawalrequest.php?error");
		exit();
	}
