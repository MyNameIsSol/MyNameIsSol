<?php

    if(isset($_POST["register"])){
        include 'db.php';

        // GET THE DATA
        $fn=mysqli_real_escape_string($conn,$_POST['fn']);
        $ln=mysqli_real_escape_string($conn,$_POST['ln']);
        $email=mysqli_real_escape_string($conn,$_POST['email']);
        // $phone=mysqli_real_escape_string($conn,$_POST['phone']);
        $usd=mysqli_real_escape_string($conn,$_POST['usd']);
        $pwd=mysqli_real_escape_string($conn,$_POST['pwd']);
        $terms=mysqli_real_escape_string($conn,$_POST['agree']);


         // THIS IS REFERENC ID
         $refidd=mysqli_real_escape_string($conn,$_POST['refidd']);
        $walletbal = 0;
        $totalwith  = 0;
         $earns = 0;
         $withdrawal  = 0;


        //  $active ="active";

        //  $verify = 'unverified';

        
         //VALIDATE

         if (empty($fn)|| empty($ln)|| empty($email)||  empty($usd) || empty($pwd) || empty($terms)) {

                header ("Location:../signup.php?signupempty");
                exit();
             
         }else{
           //VALIDATE EMAIL
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){

                header ("Location:../signup.php?invalidemail");
                exit();

            }else{

                $sql = "SELECT * FROM register WHERE usd='$usd';";
                $result = mysqli_query($conn,$sql);
                $result_check = mysqli_num_rows($result);

                if($result_check > 0){

                    header ("Location:../signup.php?uidtaken");
                    exit();

                }else{

                    //harsh the password
                    // $hashpwd = password_hash($pwd, PASSWORD_DEFAULT);

                    // unique reference id
                      $refcode = uniqid($usd,true);

                   $sql = "INSERT INTO register (firstname,lastname,email,usd,pwd,walletbal,totalwith,earns,
                   refcode,whorefu,withdrawal,upline,terms) VALUES ('$fn','$ln','$email','$usd','$pwd',
                   '$walletbal','$totalwith','$earns','$refcode','$refidd','$withdrawal','$refidd','$terms')";

                    mysqli_query($conn,$sql);




$to = $email;
$subject = 'Welcome To Profitorients.com ';
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
$message.=  "<h3 style='padding: 1px;font-family: Georgia;'>profitorients.com </h3>";
$message.=  "<img src='https://www.profitorients.com/img/logo/faviconi.png' width='70' height='70' alt='Profitorients Management' >";
$message.=  "<h4 style='padding: 1px;'>Hello ".$fn." ". $ln. ",</h4> ";
$message.= " <br>";
$message.=  "<div style='width:100%;height: auto;box-shadow: 0px 0px 3px rgb(253, 150, 26);margin: auto;border-radius: 6px;'>";

$message.="<p><strong> Thank you for joining us </strong></p>";





$message.="<p>To start Earning, you need to make a deposit</p>";


$message.="<p>Choose an investment plan, invest and Earn</p>";

$message.="<p>Your Login details are: </p>"."\n\n". "Username: ".  $usd ."\n\n". "Password: ".$pwd;


// $message.="<p>from PROFITORIENTS INVEST</p>";


$message.= "</div> ";
$message .=  "<p style='text-align:center;'> &copy; 2015-2021 profitorients.com All rights reserved.</p> ";
$message.=  " </div>";
$message.=  "</div>";
$message.=  "</body></html>";


mail($to, $subject, $message, $headers);


                    
// admi recieve email
                    $mailTo = "profitorients@gmail.com";
                    $header = "From: support@profitorients.com";
       $sub = "New registration ";
       $txt = "Hello Sir, a new client just registered on your website."."\n\n"."Username: ".$usd;
         
             mail($mailTo,$sub,$txt,$header);





                    // WOEKING ON THE REFERENCE TABLE

                    if($refidd == ''){


                    }else{

                        $sql = "INSERT INTO reftable (usd,email,firstname,lastname,phone,linkrefid) VALUES ('$usd','$email','$fn','$ln','$phone','$refidd')";

                         mysqli_query($conn,$sql);



                         // sending referal mail notifications

                         if($refidd == ""){


                         }else{

                             $sql = "SELECT * FROM register WHERE usd='$refidd' ";
                            $result = mysqli_query($conn,$sql);
                             $result_check = mysqli_num_rows($result);

                              if($result_check > 0){

                                     while($data = mysqli_fetch_assoc($result)){
                                        $fnr = $data['firstname'];
                                         $lnr= $data['lastname'];
                                            $emailr= $data['email'];


                                            // REFERAL EMAIL MSGE

$to = $emailr;
$subject = 'REFERAL NOTIFICATION';
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
$message.=  "<h3 style='padding: 1px;font-family: Georgia;'>profitorients.com</h3>";

$message.=  "<h4 style='padding: 1px;'>Hello ".$fnr." ". $lnr. ",</h4> ";
$message.= " <br>";
$message.=  "<div style='width:100%;height: auto;box-shadow: 0px 0px 3px rgb(253, 150, 26);margin: auto;border-radius: 6px;'>";

$message.="<p>".$fn." ".$ln." "." just registered using your Referral Link</p>";


// $message.="<p>from PROFITORIENTS INVEST</p>";


$message.= "</div> ";
$message .=  "<p style='text-align:center;'> &copy; 2015-2021 profitorients.com All rights reserved.</p> ";
$message.=  " </div>";
$message.=  "</div>";
$message.=  "</body></html>";


mail($to, $subject, $message, $headers);

 mysqli_query($conn,$sql);

 $mailTo = "profitorients@gmail.com";
 $header = "From: support@profitorients.com";
      $sub = "New registration Via referral Link";
      $txt = "Hello Sir, a new client just registered using a referral link of your investor; "."\n\n"."The main investor username: ".$refidd."\n\n"."The new Downline or the new client: Username".$usd."\n\n"."First Name: $". $fn."\n\n"."Last Name: ". $ln;
        
            mail($mailTo,$sub,$txt,$header);



                                     }




                              }




                         }




                        //  END OF REFREAL LINL
                    }












                    header ("Location:../login.php?signupsuc");
                    exit();


                }


            }



         }


        
    }else{
        header ("Location:../signup.php?error");
        exit();
    }
