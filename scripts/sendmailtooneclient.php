<?php
include 'db.php';
	
	if (isset($_POST['sendmail'])) {

		// $email=$_POST['email'];
        $mail=$_POST['mail'];
        $sub=$_POST['sub'];
		$msg=$_POST['msg'];


	


            		 // sendiong email


                     $to = $mail;
                     $subject = $sub;
                     $from = 'support@profitorients.com';
                      
                     // To send HTML mail, the Content-type header must be set
                     $headers  = 'MIME-Version: 1.0' . "\r\n";
                     $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
                      
                     // Create email headers
                     $headers .= 'From: '.$from."\r\n".
                         'Reply-To: '.$from."\r\n" .
                         'X-Mailer: PHP/' . phpversion();
                      
                     // Compose a simple HTML email message
                     
                     
                     $message = " <html><body style='width:100%;background:white'>";
                     $message.=  "<div style='width:90%; height: auto; margin: auto;margin-top: 20px;border-radius: 5px;'>";
                     $message.=  "<div style='width:100%;'>";
                     
                     $message.=  "<div style='padding:5px;'>";
                    //  $message.=  "<img src='https://alvariumblockltd.com/img/logo.png' width='100'>";
                     $message.=  "</div>";
                     
                     $message.=  "<div style='background:rgba(44,130,201,1); padding:5px;  width:50%;margin:auto; margin-top:20px;'>";
                     $message.=  "<h3 style='padding: 1px;font-family: Georgia; text-align:center; color:white;'> MAIL</h3>";
                     $message.=  "</div>";
                     
                     $message.=  "<div style='width:80%; margin:auto;'>";
                     
                    //  $message.=  "<h4 style='padding: 1px;'>Dear ".$fnr.",</h4> ";
                     
                     $message.= " <br>";
                     $message.="<br>";
                     
                     $message.="<div style='width:100%;height: auto; border-top: 1px solid #D3D3D3; margin: auto;border-radius: 6px;'>";
                     $message.="<br>";
                     
                         // <!-- inpput main content here -->
                     
                     
                         $message.="<p style='font-family:Arial, Helvetica, sans-serif;'>".$msg."</p>";
                     
                     
                        
                     
                     
                     
                     $message.=  "</div>";
                     
                     $message.="<br>";
                     $message.="<br>";
                     
                     // if didnt close well, add closing div here
                     $message .=  " <div style='background:#D3D3D3; padding:5px;'>";
                     
                     $message.=" <p style='text-align:center;'>profitorients.com © 2015-2021 All Rights Reserved</p> ";
                     $message.="</div>";
                     
                     $message.=  " </div>";
                     $message.=  "</div>";
                     $message.=  "</body></html>";
                     
                     mail($to, $subject, $message, $headers);






		header("Location:../sendmailtooneinvestor.php?success");
		exit();



	


	}else{
		// header("Location:../sendmail.php?error");
		// exit();
	}