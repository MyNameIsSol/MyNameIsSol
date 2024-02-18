<?php
    // session_start();

    if(isset($_POST['request'])){

         include 'db.php';

         $usd = mysqli_real_escape_string($conn,$_POST['usd']);

         if(empty($usd)){

             header("Location:../forgottenpwd.php?loginempty");
            exit();


         }else{

             $sql = "SELECT * FROM register WHERE usd='$usd'";
            $result = mysqli_query($conn,$sql);
            $result_check = mysqli_num_rows($result);

            if($result_check < 1){
                 header("Location:../forgottenpwd.php?invaliduid");
                exit();
            }else{
                while($data = mysqli_fetch_assoc($result)){
                    // $usd =$data['usd'];
                     $email =$data['email'];
                    $pwd =$data['pwd'];
                     $name =$data['usd'];



                    // SEND MAIL FOR FORGETTEN PASSWORD




                    $to = $email;
                    $subject = 'Password Recovery';
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
                   
                        $message.=  "<h4 style='padding: 1px;'>Dear ".$name.",</h4> ";
                    $message.= " <br>";
                    $message.=  "<div style='width:100%;height: auto;box-shadow: 0px 0px 3px rgb(253, 150, 26);margin: auto;border-radius: 6px;'>";
                    
                    
                       
                        $message.="<p> Your password is ". $pwd." </p>";


                    
                    $message.= "</div> ";
                    $message .=  "<p style='text-align:center;'>Profitorients.com</span> © 2015-2021 All Rights Reserved</p> ";
                    $message.=  " </div>";
                    $message.=  "</div>";
                    $message.=  "</body></html>";
                    
                    





    mail($to, $subject, $message, $headers);

                    
                    header("Location:../login.php?mailforgottensentsuc");
                    exit();

                }
            }




         }


    }else{
          header("Location:../forgottenpwd.php?loginempty");
            exit();
    }