<?php
	
	  // session_start();
	 include 'db.php';

	  // $walletbal = $_SESSION['walletbal'];
	   // $username = $_SESSION['usd'];
   // $useremail = $_SESSION['email'];

	  if(isset($_POST["seen"])){

	  $depositid =mysqli_real_escape_string($conn,$_POST['depositid']);

	  $sql = "SELECT * FROM depositrequest WHERE depositid='$depositid' ";
	$result= mysqli_query($conn,$sql);
	$result_checker= mysqli_num_rows($result);

	if($result_checker > 0){

		while($data = mysqli_fetch_assoc($result)){

			$usd = $data['usd'];
			$btcaddr = $data['btcaddr'];
			$plan = $data['plan'];
			$amount = $data['amount'];
			$dateofdep = $data['dateofdep'];
			$statusofdep = $data['statusofdep'];
			$usdemail = $data['usdemail'];
			$depositid = $data['depositid'];
			$walletbal = $data['walletbal'];

			// $fn = $data['firstname'];
			// $ln = $data['lastname'];

			
			
			$latestranstactstatus="Approved";

			// CALACULATE DEPOSIT PLUS CURRENT BALANCE
			// $walletbal = $data['walletbal'];

			$currentwalletbalance=$walletbal+$amount;

			$refbonusfirst = 0.06 * $amount;


			// UPDATE TRANSACTION STATUS
			 $sql = "UPDATE depositrequest

        SET statusofdep='$latestranstactstatus', walletbal='$currentwalletbalance'

        WHERE depositid='$depositid'

        ";



        //  $sql = "UPDATE depositrequest

        // SET statusofdep='$latestranstactstatus'

        // WHERE depositid='$depositid'

        // ";

     //    $mailTo = $usdemail;
    	// $header = "From:info@zageinvest.com";
    	// $sub = "FROM ZAGE INVEST YOUR ACCOUNT HAS BEEN CREDITED WITH ".$amount;
    	
    	// $txt="Hello ".$usd."\n\n"."Your ZAGE INVEST ACCOUNT has be credit with ".$amount."\n\n"."Your Wallet Balance is ".$currentwalletbalance."\n\n"."Thanks for trusting Zage Invest."."\n\n"."From: ZAGE INVEST";

    	//   mail($mailTo,$sub,$txt,$header);


$to = $usdemail;
$subject = 'Credit';
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
// $message.=  "<img src='https://www.alvariumblockltd.com/img/logo.png' alt='Astro Capital Management' width='100' height='65'>";
$message.=  "<h4 style='padding: 1px;'>Dear ". $usd .",</h4> ";
$message.= " <br>";
$message.=  "<div style='width:100%;height: auto;box-shadow: 0px 0px 3px rgb(253, 150, 26);margin: auto;border-radius: 6px;'>";

$message.="<p><strong>Your Deposit of  $".$amount."  has been confirmed </strong></p>";


$message.="<p>log in your dashboard to invest and start earning.</p>";



$message.= "</div> ";
$message .=  "<p style='text-align:center;'>Profitorients.com </span> © 2015-2021 All Rights Reserved</p> ";
$message.=  " </div>";
$message.=  "</div>";
$message.=  "</body></html>";


mail($to, $subject, $message, $headers);









		$currentwalletbal =  $walletbal + $amount;


         mysqli_query($conn,$sql);


          $sql = "UPDATE register

        SET walletbal='$currentwalletbal'

        WHERE usd='$usd'

        ";
         mysqli_query($conn,$sql);


         // INSERTING INTO CROB JOB

         // $count = 0;
         // $statusofinvest = "Processing";
         // $profit=0;

         // $sql ="INSERT INTO cronjob (usd,plan,amount,statusofdep,depositid,usdemail,count,profit) VALUES ('$usd','$plan','$amount','$statusofinvest','$depositid','$usdemail','$count',$profit)";

         //  mysqli_query($conn,$sql);



         $sql = "SELECT * FROM reftable WHERE usd='$usd' ";
                            $result = mysqli_query($conn,$sql);
                             $result_check = mysqli_num_rows($result);

                              if($result_checker > 0){

                              	while($data = mysqli_fetch_assoc($result)){


                              		$linkrefid = $data['linkrefid'];
                                      // $lnr= $data['lastname'];
                                      //  $emailr= $data['email'];



                             $sql = "SELECT * FROM register WHERE usd='$linkrefid' ";
                            $result = mysqli_query($conn,$sql);
                             $result_check = mysqli_num_rows($result);

                              if($result_checker > 0){

                              	while($data = mysqli_fetch_assoc($result)){

                              		$usdd = $data['usd'];
                              		$walletbal = $data['walletbal'];
                                      $emailr= $data['email'];
                                        $refpaid = $data['refpaid'];

                                        $firstname= $data['firstname'];
                                        $lastname = $data['lastname'];

                                       if($refpaid == "yesss"){


                                       }else{

                                         $sql = "UPDATE reftable

                                          SET amountpaid='$refbonusfirst'

                                            WHERE usd='$usd'

                                                 ";

                                            mysqli_query($conn,$sql);

                                       	$refbonusadding = $walletbal + $refbonusfirst;
                                       	$refstatus = "yes";


          $sql = "UPDATE register

        SET walletbal='$refbonusadding',refpaid='$refstatus'

        WHERE usd='$usdd'

        ";




// astrocapitalltd

$to = $emailr;
$subject = 'Referral Bonus';
$from = 'support@profitorients.com';
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
    
// Compose a simple HTML email message
// <img src="http://www.yourserver.com/myimages/image1.jpg

$message = " <html><body style='width:100%;background: rgb(247, 247, 247);'>";
$message.=  "<div style='width:90%; height: auto; margin: auto;margin-top: 20px;box-shadow: 0px 0px 3px rgb(253, 150, 26);border-radius: 5px;'>";
$message.=  "<div style='width:100%;'>";
$message.=  "<h3 style='padding: 1px;font-family: Georgia;'>Profit Orients Trading Firm</h3>";
// LOGO HERE
$message.=  "<img src='https://www.profitorients.com/img/logo/faviconi.png' alt='Profit Orients' width='70' height='70' >";
// LOGO HERE
// $message.=  "<img src='https://www.algrocryptofund.com/imgs/log.jpg'>";
$message.=  "<h4 style='padding: 1px;'>Hello ".$firstname." ". $lastname. ",</h4> ";
$message.= " <br>";
$message.=  "<div style='width:100%;height: auto;box-shadow: 0px 0px 3px rgb(253, 150, 26);margin: auto;border-radius: 6px;'>";

$message.="<p><strong>You have successfully received a referral bonus of $</strong>  ".$refbonusfirst."  from  ".$usd." Deposit.</p>";


$message.="<p>Refer and earn more!</p>";


$message.="<p>Thank you for partnering with us.</p>";


// $message.="<p>from CRYPT BLOCK PAY</p>";


$message.= "</div> ";
$message .=  "<p style='text-align:center;'> &copy; 2015-2021 profitorients.com All rights reserved.</p> ";
$message.=  " </div>";
$message.=  "</div>";
$message.=  "</body></html>";


mail($to, $subject, $message, $headers);
         mysqli_query($conn,$sql);










                                       }



                              	}



                              }






                              	}







                              }

          

        header ("Location:../admindepositrequest.php?suc");
        exit();








		}


	}


	  }else{
	  	header ("Location:../admindepositrequest.php?error");
        exit();
	  }