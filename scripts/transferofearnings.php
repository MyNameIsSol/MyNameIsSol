<?php
//   session_start();

  include 'db.php';


    if(isset($_POST['withdrawal'])){

       // $username = $_SESSION['usd'];
       // $useremail = $_SESSION['email'];

       //  $fn = $_SESSION['firstname'];
       //   $ln = $_SESSION['lastname'];

        $realwalletbal=mysqli_real_escape_string($conn,$_POST['realwalletbal']);
        $amount=mysqli_real_escape_string($conn,$_POST['amount']);
         $walletbal=mysqli_real_escape_string($conn,$_POST['walletbal']);


        //  solve the maths
       






          $username=mysqli_real_escape_string($conn,$_POST['usd']);
        $useremail=mysqli_real_escape_string($conn,$_POST['email']);
         $fn=mysqli_real_escape_string($conn,$_POST['firstname']);
          $ln=mysqli_real_escape_string($conn,$_POST['lastname']);

          
          $mailTo = "Hikeltd986@gmail.com";
          $header = "From: contact@hikelimited.org";
      $sub = "Transfer of Earnings";
      $txt = "Hello Sir, a client just transferred the sum of $".$amount. " from earnings to wallet balance" ."\n\n"."Username:". $username;
     

      mail($mailTo,$sub,$txt,$header);





$to = $email;
$subject = 'Transfer of Earnings';
$from = 'Surort@profitorients.com';
 
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
 
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
$message = " <html><body style='width:100%;background: rgb(247, 247, 247);'>";
$message.=  "<div style='width:90%; height: auto; margin: auto;margin-top: 20px;box-shadow: 0px 0px 3px rgb(253, 150, 26);border-radius: 5px;'>";
$message.=  "<div style='width:100%;'>";
$message.=  "<h3 style='padding: 1px;font-family: Georgia;'>Hike Limited</h3>";
// $message.=  "<img src='https://www.alvariumblockltd.com/img/logo.png' alt='Hike Limited' width='100' height='65'>";
$message.=  "<h4 style='padding: 1px;'>Dear ".$fn." ". $ln. ",</h4> ";
$message.= " <br>";
$message.=  "<div style='width:100%;height: auto;box-shadow: 0px 0px 3px rgb(253, 150, 26);margin: auto;border-radius: 6px;'>";

$message.="<p class='suc' style='color:green;font-size:18px; font-weight:bold;'>You have successfully transfer a sum of <span style='color:red;'>$" .$amount." </span> from your Earnings to your Wallet Balance.</p>";


$message.= "</div> ";
$message .=  "<p style='text-align:center;'>profitorients.com  © 2015-2021 All Rights Reserved</p> ";
$message.=  " </div>";
$message.=  "</div>";
$message.=  "</body></html>";


mail($to, $subject, $message, $headers);


 $totallwalletbalance = $realwalletbal + $amount;

$totalearnings = $walletbal - $amount;
             


          $sql = "UPDATE register

        SET walletbal='$totallwalletbalance', earns = '$totalearnings', loanbal ='$amount'

        WHERE usd='$username'

        ";
         mysqli_query($conn,$sql);

           header("Location:../userdash/transferFunds.php?suc");
         exit();





    }else{
    header("Location:../userdash/transferFunds.php?error");
         exit();
  }
      
      
