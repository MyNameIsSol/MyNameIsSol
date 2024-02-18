<?php
include 'db.php';
	
	if (isset($_POST['sendmail'])) {

		 //get the user data
        $name = mysqli_real_escape_string($conn,$_POST['name']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $sub = mysqli_real_escape_string($conn,$_POST['subject']);
        $msg = mysqli_real_escape_string($conn,$_POST['message']);



// MAIL TO ADMIN

$to = 'support@profitorients.com';
$subject = $sub;
$from = $email;

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
$message.=  "<h3 style='padding: 1px;font-family: Georgia;'><span style='color:rgb(253, 150, 26);'>" .$name. "  </span> </h3>";
// LOGO HERE
// $message.=  "<img src='https://www.alvariumblockltd.com/img/logo.png' alt='Astro Capital Management' width='100' height='65'>";
// $message.=  "<h4 style='padding: 1px;'>Dear ".$fn." ". $ln. ",</h4> ";
$message.= " <br>";
$message.=  "<div style='width:100%;height: auto;box-shadow: 0px 0px 3px rgb(253, 150, 26);margin: auto;border-radius: 6px;'>";

$message.="<p> $msg </p>";

$message.= "</div> ";
$message .=  "<p style='text-align:center;'><span style='color:rgb(253, 150, 26);'>profitorients.com </span> 2015-2021 All rights reserved.</p> ";
$message.=  " </div>";
$message.=  "</div>";
$message.=  "</body></html>";


mail($to, $subject, $message, $headers);

		header("Location:../contactus.php?success");
		exit();



	


	}else{
		header("Location:../contactus.php?error");
		exit();
	}