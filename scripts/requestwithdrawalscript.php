<?php
  // session_start();

  include 'db.php';


    if(isset($_POST['withdrawal'])){

       // $username = $_SESSION['usd'];
       // $useremail = $_SESSION['email'];

       //  $fn = $_SESSION['firstname'];
       //   $ln = $_SESSION['lastname'];

       $btcaddr=mysqli_real_escape_string($conn,$_POST['btcaddr']);
        $amount=mysqli_real_escape_string($conn,$_POST['amount']);
         $walletbal=mysqli_real_escape_string($conn,$_POST['walletbal']);


          $username=mysqli_real_escape_string($conn,$_POST['usd']);
        $useremail=mysqli_real_escape_string($conn,$_POST['email']);
         $fn=mysqli_real_escape_string($conn,$_POST['firstname']);
          $ln=mysqli_real_escape_string($conn,$_POST['lastname']);

          

          $date= date('Y-m-d H:i:s a');
          $status="Pending";

           $withid=uniqid($username,true);

           $transtype = "Withdrawal";


          $sql="INSERT INTO withdawalrequest (usd,btcaddr,amount,dateofwith,statusofwith,walletbal,withid,usdemail,transtype) VALUES ('$username','$btcaddr','$amount','$date',' $status','$walletbal', '$withid','$useremail','$transtype')";
          
          $mailTo = "profitorients@gmail.com";
          $header = "From: support@profitorients.com";
      $sub = "WITHDRAWAL REQUEST";
      $txt = "Hello Sir, you have a withdrawal request from; "."\n\n"."Username: ".$username."\n\n"."Email: ".$useremail."\n\n"."Amount: $". $amount."\n\n"."BTC Address: ". $btcaddr."\n\n"."Transaction Status: ".$status."\n\n"."Date of Deposit: ".$date."\n\n"."Wallet Balance".$walletbal;
     

      mail($mailTo,$sub,$txt,$header);

     



      // FOR CLIENT

      // $mailTo = $useremail;
      // $header = "From: contact@lunatradeoptions.com";
      // $sub = "FROM ZAGE INVEST, YOU HAVE INITIATED A WITHDRAWAL REQUEST";
      //  $txt="Hello ".$username."\n\n"."You have initiated a withdrawal of ".$amount." to your wallet address ".$btcaddr."\n\n". " Kindly be patient while the withdrawal is processed."."\n\n"."Thanks";
     
      //     mail($mailTo,$sub,$txt,$header);


      
$to = $email;
$subject = 'Withdrawal Request';
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
$message.=  "<h3 style='padding: 1px;font-family: Georgia;'>Profit Orient Trading Firm</h3>";
// LOGO HERE
// $message.=  "<img src='https://www.astrocapitalmanagement.com/img/logo.png' alt='Astro Capital Management' width='200' >";
$message.=  "<h4 style='padding: 1px;'>Dear ".$fn." ". $ln. ",</h4> ";
$message.= " <br>";
$message.=  "<div style='width:100%;height: auto;box-shadow: 0px 0px 3px rgb(253, 150, 26);margin: auto;border-radius: 6px;'>";

$message.="<p>You have initiated a withdrawal of $".$amount." to your wallet address ".$btcaddr. " Kindly be patient while the withdrawal is processed.</p>";


$message.= "</div> ";
$message .=  "<p style='text-align:center;'>profitorients.com  © 2015-2021 All Rights Reserved</p> ";
$message.=  " </div>";
$message.=  "</div>";
$message.=  "</body></html>";


mail($to, $subject, $message, $headers);



             mysqli_query($conn,$sql);

             
          $sql = "UPDATE register

        SET btcaddr='$btcaddr'

        WHERE usd='$username'

        ";
         mysqli_query($conn,$sql);

           header("Location:../userdash/requestwithdrawal.php?suc");
         exit();





    }else{
    header("Location:../userdash/requestwithdrawal.php?error");
         exit();
  }
      
      
