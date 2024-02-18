<?php
	
	include 'db.php';

	// session_start();

	if(isset($_POST['deactive'])){

         $usd=mysqli_real_escape_string($conn,$_POST['usd']);
         $email=mysqli_real_escape_string($conn,$_POST['email']);

        $active="deactive";
       



        //  $email =$_SESSION['email'] ;

        $sql = "UPDATE register

        SET active='$active'

        WHERE usd='$usd'

        ";

        // send mail

        
$to = $email;
$subject = 'ACCOUNT DEACTIVATION';
$from = 'contact@lunatradeoptions.com';
 
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
$message.=  "<h3 style='padding: 1px;font-family: Georgia;'><span style='color:rgb(253, 150, 26);'>Luna Trade </span> Options</h3>";

$message.=  "<h4 style='padding: 1px;'>Hello ".$usd. ",</h4> ";
$message.= " <br>";
$message.=  "<div style='width:100%;height: auto;box-shadow: 0px 0px 3px rgb(253, 150, 26);margin: auto;border-radius: 6px;'>";

// $message.="<p><strong> Thank you for joining us </strong></p>";


// $message.="<p>You have recieve a bonus of $2</p>";


$message.="<p> Your Trading account has been deactivated</p>";

$message.="<p>Kindly contact support to reactivate your account</p>";




// $message.="<p>Choose an investment plan, invest and Earn</p>";


// $message.="<p>from ZAGE INVEST</p>";


$message.= "</div> ";
$message .=  "<p style='text-align:center;'><span style='color:rgb(253, 150, 26);'>Profitorients.com</span> © 2015-2021 All Rights Reserved</p> ";
$message.=  " </div>";
$message.=  "</div>";
$message.=  "</body></html>";

mail($to, $subject, $message, $headers);



        mysqli_query($conn,$sql);

        header("Location:../admin.php?deactivate=success");
		exit();


	}