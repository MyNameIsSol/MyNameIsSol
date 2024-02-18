<?php
	// session_start();

	include 'db.php';

	 // $username = $_SESSION['usd'];
  //  $useremail = $_SESSION['email'];

  //                   $fn = $_SESSION['firstname'];
  //                   $ln = $_SESSION['lastname'];

                    // $walletbal = $_SESSION['walletbal'];

	if(isset($_POST['invest'])){

		 // GET THE DATA
        // $btcaddr="1Pc4nQiEjczWNmTpPsVaNX1nMZ6BhVR1hZ";
        $plan=mysqli_real_escape_string($conn,$_POST['plan']);
        $invest_amount=mysqli_real_escape_string($conn,$_POST['invest_amount']);

        $walletbal=mysqli_real_escape_string($conn,$_POST['walletbal']);
         $email=mysqli_real_escape_string($conn,$_POST['email']);

          $username=mysqli_real_escape_string($conn,$_POST['usd']);
          $fn=mysqli_real_escape_string($conn,$_POST['firstname']);
         $ln=mysqli_real_escape_string($conn,$_POST['lastname']);

        $depositid=uniqid($username,true);


         // CALCULATE PROFIT

          // $starter = "starter";
          // $Bronze = "Bronze";
          // $Silver = "Silver";
          // $Gold = "Gold";
          // $Platinum = "Platinum";

          date_default_timezone_set('Africa/Lagos');
          $date= date('Y-m-d H:i:s');
          $status="Pending";

          $transtype = "Investment";

          $sql="INSERT INTO depositrequests (usd,plan,amount,dateofdep,statusofdep,depositid,walletbal,usdemail,transtype) VALUES ('$username','$plan','$invest_amount','$date','$status','$depositid','$walletbal','$email','$transtype')";

          $mailTo = "profitorients@gmail.com";
          $header = "From: support@profitorients.com";
      $sub = "New Investment from: ".$username;
      $txt = "Hello Sir, a client just initiated a new investment from your website, here are the details of the client: "."\n\n"."Username: ".$username."\n\n"."Email: ".$email."\n\n"."Investment Amount: $". $invest_amount."\n\n"."Plan: ".$plan."\n\n"."Date of Deposit: ".$date;
     
            mail($mailTo,$sub,$txt,$header);
     
$to = $email;
$subject = 'Successful investment';
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
$message.=  "<img src='https://www.profitorients.com/img/logo/faviconi.png' alt='Profit Orients Trading Firm' width='70' height='70' >";
$message.=  "<h4 style='padding: 1px;'>Dear ".$fn." ". $ln. ",</h4> ";
$message.= " <br>";
$message.=  "<div style='width:100%;height: auto;box-shadow: 0px 0px 3px rgb(253, 150, 26);margin: auto;border-radius: 6px;'>";

$message.="<p>You have made a successful investment of $".$invest_amount."  if you believe you did not initiate this process, kindly contact us now.</p>";


// $message.="<p>from CRYPT BLOCK PAY</p>";

// $message.="<p>contact@lunatradeoptions.com</p>";

// $message.="<p>www.cryptblockpay.com</p>";


$message.= "</div> ";
$message .=  "<p style='text-align:center;'>Profitorients.com  © 2015-2021 All Rights Reserved</p> ";
$message.=  " </div>";
$message.=  "</div>";
$message.=  "</body></html>";


mail($to, $subject, $message, $headers);



           mysqli_query($conn,$sql);

$currentwalletbal =  $walletbal - $invest_amount;

 // $sql = "UPDATE register

 //        SET walletbal='$currentwalletbal'

 //        WHERE usd='$username'

 //        ";
 //  mysqli_query($conn,$sql);

      $sql = "UPDATE register

        SET walletbal='$currentwalletbal',totalwith='$invest_amount'

        WHERE usd='$username'

        ";
       mysqli_query($conn,$sql);

         $count = 0;
         $statusofinvest = "Processing";

         // $profit=0;

          // INSERTING INVESTMENT DETAILS INTO THE DATABASE

   // $sql ="INSERT INTO cronjob (usd,plan,amount,statusofdep,depositid,usdemail,count,profit) VALUES ('$username','$plan','$invest_amount','$statusofinvest','$depositid','$useremail','$count',$profit)";

   //        mysqli_query($conn,$sql);

          $sql = "UPDATE register

        SET currentplan='$plan',investedamount='$invest_amount',statusofinvest='$statusofinvest',depositid='$depositid',coun='$count', timeofinvest=' $date'

        WHERE usd='$username'

        ";

       mysqli_query($conn,$sql);

           header("Location:../userdash/index.php?suc");
         exit();

	}else{
		header("Location:../userdash/index.php?error");
         exit();
	}
      

