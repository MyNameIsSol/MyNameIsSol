<?php
    session_start();

    if(isset($_POST['login'])){

        include 'db.php';

        //get the user data
		$usd = mysqli_real_escape_string($conn,$_POST['usd']);
        $pwd = mysqli_real_escape_string($conn,$_POST['pwd']);
        
        if(empty($usd) || empty($pwd)){

            header("Location:../login.php?loginempty");
            exit();


        }else{

            $sql = "SELECT * FROM register WHERE usd='$usd'";
            $result = mysqli_query($conn,$sql);
            $result_check = mysqli_num_rows($result);

            if($result_check < 1){
                header("Location:../login.php?invaliduid");
                exit();

            }else{

               if($row=mysqli_fetch_assoc($result)){

                $cpwd = $row['pwd'];
                $username = $row['usd'];
                  $email = $row['email'];
                  $active = $row['active'];


                   
				//de-hashed the password
                // $hashedpwd = password_verify($pwd, $row['pwd']);
                
                if($pwd != $cpwd){
                header("Location:../login.php?invalidpwd");
                exit();

                }elseif($active == "deactivated"){
                    header("Location:../login.php?deactiveacct");
                    exit();



                }elseif($pwd == $cpwd){
                    
                    $_SESSION['usd'] =$row['usd'];
                     
                    $username = $_SESSION['usd'];
                   



    //  $mailTo = $useremail;
    // $header = "From: info@globalcryptoniche.com";
    // $sub = " You have successfully signed in";
    // $txt = " Hi ".$username."\n\n"."You have successfully signed in, if you believe you did not initiate this process, kindly contact us to change your password."."\n\n"."from Global Crypto Niche";

    //                 mail($mailTo,$sub,$txt,$header);




$to = $useremail;
$subject = 'signed in';
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
$message.=  "<h3 style='padding: 1px;font-family: Georgia;'> Profit Orients Trading Firm </h3>";
// LOGO HERE
$message.=  "<img src='https://www.profitorients.com/img/logo/faviconi.png' width='70' height='70' alt='Profitorients Management' >";
// LOGO HERE
// $message.=  "<img src='https://www.algrocryptofund.com/imgs/log.jpg'>";
$message.=  "<h4 style='padding: 1px;'>Dear " .$username. ",</h4> ";
$message.= " <br>";
$message.=  "<div style='width:100%;height: auto;box-shadow: 0px 0px 3px rgb(253, 150, 26);margin: auto;border-radius: 6px;'>";

$message.="<p> You have successfully signed in, if you believe you did not initiate this process, kindly contact us to change your password. </p>";


// $message.="<p>from CRYPT BLOCK PAY</p>";


$message.= "</div> ";
$message .=  "<p style='text-align:center;'>Astro Capital Management   © 2015 All Rights Reserved</p> ";
$message.=  " </div>";
$message.=  "</div>";
$message.=  "</body></html>";


mail($to, $subject, $message, $headers);

// $mailTo = "Anaekiioswald01@gmail.com";
// $header = "From: contact@astrocapitalmanagement.com";
// $sub = "New Login ";
// $txt = "Hello Sir, a new client just login to your website."."\n\n"."Username: ".$username;

// mail($mailTo,$sub,$txt,$header);



                    
                    header("Location:../userdash/index.php?loginsuc");
                    exit();
                }

               }
                
            }

        }

    }else{
        header("Location:../login.php?loginerror");
        exit();
    }

    ?>