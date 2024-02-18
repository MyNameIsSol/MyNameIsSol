
<?php
include "userhead.php";


include '../scripts/db.php';


if(isset($_POST['fundpay'])){

$fundamount=mysqli_real_escape_string($conn,$_POST['fundamount']);
$paytype=mysqli_real_escape_string($conn,$_POST['paytype']);


$username=mysqli_real_escape_string($conn,$_POST['usd']);
$useremail=mysqli_real_escape_string($conn,$_POST['email']);

$fn=mysqli_real_escape_string($conn,$_POST['firstname']);
$ln=mysqli_real_escape_string($conn,$_POST['lastname']);

$depositid = uniqid($username,true);

$date= date('Y-m-d H:i:s a');
$status="Pending";

$sql = "SELECT * FROM register WHERE usd='$username' ";
$result= mysqli_query($conn,$sql);
$result_checker= mysqli_num_rows($result);

if($result_checker > 0){
while($data = mysqli_fetch_assoc($result)){

//  $firstname = $data['firstname'];
//  $lastname= $data['lastname'];
//  $email= $data['email'];
//  $usd= $data['usd'];

//  $pwd= $data['pwd'];
// $country= $data['country'];
// $state= $data['state'];
// $city= $data['city'];
$walletbal= $data['walletbal'];             
// $totalwith= $data['totalwith'];
// $btcaddr= $data['btcaddr'];

//  $earns= $data['earns'];
// $tearns= $data['tearns'];

// $totalearn = $totalwith +  $earns;

$transtype = "Deposit";
$adminBtcAdr = "bc1qcq4r0lw2r5c8lea8tfy02lpn8f9fe7h7hf4n69";
$adminEthAdr = "0x876b6A35Fe29906381E94C4C5A2ac03c875fCCD7";
// $adminBnbAdr = "0x58B7A0B551359ce38c0F852e94f6206d3C597";
$adminBnbAdr = "bnb1qptkm7su5feht67yp2k5euyfsptndc673l5g6g";


$sql="INSERT INTO depositrequest (usd,amount,dateofdep,statusofdep,depositid,walletbal,usdemail,transtype) VALUES ('$username','$fundamount','$date','$status','$depositid','$walletbal','$useremail','$transtype')";

// mysqli_query($conn,$sql);
mysqli_query($conn,$sql);

if($paytype == "btc"){

// MAIL TO ADMIN
$mailTo = "profitorients@gmail.com";
$header = "From: support@profitorients.com";
$sub = "DEPOSIT REQUEST VIA BITCOIN";
$txt = "Hello Sir, a client just initiated a new deposit request, here are the details of the clients; "."\n\n"."Username: ".$username."\n\n"."Email: ".$useremail."\n\n"."Amount: $". $fundamount."\n\n"."Transaction Status: ".$status."\n\n"."Date of Deposit: ".$date;

mail($mailTo,$sub,$txt,$header);

// MAIL TO USER

$to = $useremail;
$subject = 'Deposit Via Bitcoin';
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
$message.=  "<h3 style='padding: 1px;font-family: Georgia;'><span style='color:rgb(253, 150, 26);'> Profit Orients Trading firm</span> </h3>";
// LOGO HERE
// $message.=  "<img src='https://www.alvariumblockltd.com/img/logo.png' alt='Astro Capital Management' width='100' height='65'>";
$message.=  "<h4 style='padding: 1px;'>Dear ".$fn." ". $ln. ",</h4> ";
$message.= " <br>";
$message.=  "<div style='width:100%;height: auto;box-shadow: 0px 0px 3px rgb(253, 150, 26);margin: auto;border-radius: 6px;'>";

$message.="<p>You have initiated a deposit of $".$fundamount."BTC Kindly transfer exactly $".$fundamount. " worth of BTC to " .$adminBtcAdr. " to complete your deposit.</p>";

$message.= "</div> ";
$message .=  "<p style='text-align:center;'><span style='color:rgb(253, 150, 26);'>profitorients.com </span> 2015-2021 All rights reserved.</p> ";
$message.=  " </div>";
$message.=  "</div>";
$message.=  "</body></html>";


mail($to, $subject, $message, $headers);

}else if($paytype == "bnb"){

// MAIL TO ADMIN
$mailTo = "profitorients@gmail.com";
$header = "From: support@profitorients.com";
$sub = "DEPOSIT REQUEST VIA USDT";
$txt = "Hello Sir, a client just initiated a new deposit request, here are the details of the clients; "."\n\n"."Username: ".$username."\n\n"."Email: ".$useremail."\n\n"."Amount: $". $fundamount."\n\n"."Transaction Status: ".$status."\n\n"."Date of Deposit: ".$date;

mail($mailTo,$sub,$txt,$header);

// MAIL TO USER

$to = $useremail;
$subject = 'Deposit Via BNB';
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
$message.=  "<h3 style='padding: 1px;font-family: Georgia;'><span style='color:rgb(253, 150, 26);'> Profit Orients trading firm</span> </h3>";
// LOGO HERE
// $message.=  "<img src='https://www.alvariumblockltd.com/img/logo.png' alt='Astro Capital Management' width='100' height='65'>";
$message.=  "<h4 style='padding: 1px;'>Dear ".$fn." ". $ln. ",</h4> ";
$message.= " <br>";
$message.=  "<div style='width:100%;height: auto;box-shadow: 0px 0px 3px rgb(253, 150, 26);margin: auto;border-radius: 6px;'>";

$message.="<p>You have initiated a deposit of $".$fundamount." Kindly transfer exactly $".$fundamount. "  to " .$adminBnbAdr. " to complete your deposit.</p>";

$message.= "</div> ";
$message .=  "<p style='text-align:center;'><span style='color:rgb(253, 150, 26);'>profitorients.com </span> © 2015-2021 All Rights Reserved.</p> ";
$message.=  " </div>";
$message.=  "</div>";
$message.=  "</body></html>";

mail($to, $subject, $message, $headers);

}else if($paytype == "eth"){

// MAIL TO ADMIN
$mailTo = "profitorients@gmail.com";
$header = "From: support@profitorients.com";
$sub = "DEPOSIT REQUEST VIA ETHEREUM";
$txt = "Hello Sir, a client just initiated a new deposit request, here are the details of the clients; "."\n\n"."Username: ".$username."\n\n"."Email: ".$useremail."\n\n"."Amount: $". $fundamount."\n\n"."Transaction Status: ".$status."\n\n"."Date of Deposit: ".$date;

mail($mailTo,$sub,$txt,$header);

// MAIL TO USER

$to = $useremail;
$subject = 'Deposit Via Ethereum';
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
$message.=  "<h3 style='padding: 1px;font-family: Georgia;'><span style='color:rgb(253, 150, 26);'> Profit Orients Trading Firm</span> </h3>";
// LOGO HERE
// $message.=  "<img src='https://www.alvariumblockltd.com/img/logo.png' alt='Astro Capital Management' width='100' height='65'>";
$message.=  "<h4 style='padding: 1px;'>Dear ".$fn." ". $ln. ",</h4> ";
$message.= " <br>";
$message.=  "<div style='width:100%;height: auto;box-shadow: 0px 0px 3px rgb(253, 150, 26);margin: auto;border-radius: 6px;'>";

$message.="<p>You have initiated a deposit of $".$fundamount."ETH Kindly transfer exactly $".$fundamount. "ETH to  " .$adminEthAdr. "  to complete your deposit.</p>";

$message.= "</div> ";
$message .=  "<p style='text-align:center;'><span style='color:rgb(253, 150, 26);'>Profitorients.com </span> © 2015-2021 All Rights Reserved</p> ";
$message.=  " </div>";
$message.=  "</div>";
$message.=  "</body></html>";

mail($to, $subject, $message, $headers);

}

}

}

}else{
header("Location:deposit.php?error");
exit();
}
?>

<div id="main-content">
<div class="container-fluid">
<div class="block-header">
<div class="row">
<div class="col-lg-5 col-md-8 col-sm-12"><br>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.php"><i style='color:#000e2e; font-family: Georgia, serif;' class="icon-home"></i></a>
</li>
<li class="breadcrumb-item"><a href="index.php" style='color:white; font-family: Georgia, serif;'>Dashboard</a></li>
<li class="breadcrumb-item"><a
href="deposit.php" style='color:white; font-family: Georgia, serif;'>Fund With <?php echo $paytype ?></a>
</li>
<li class="breadcrumb-item active"
aria-current="page"></li>
</ul>
</div>
</div>
</div>

<div class="row clearfix">

<div class="col-md-12">
<div class="card">
<div class="header">
<h2 style='color:#000e2e; font-family: Georgia, serif;'>Proceed with Deposit </h2> <br>
<!-- <p> Below is a list of all your withdrawals</p> -->
</div>
<div class="body">
<div class="table-responsive">
<!-- THIS IS DEPOSIT INPUT -->

<div id="depo">
<!-- <p style="font-weight:bold;">Our Minimum Deposit amount is $100.00</p> -->
<!-- <p style="color:red;">Deposit may take up to 3 hours to reflect in your account. Please exercise patience while your transaction is processed after successful deposit.</p> -->

<div id="fundconfirm"> 

<h3 style='color:#000e2e; font-family: Georgia, serif;'>Invoice</h3>

<p id="sendinvestfirst"> </p>
<img src="" alt="">
<br>

<?php

if($paytype == "btc"){


echo "<p class='tf' style='font-size:18px; font-weight:bold; font-family: Georgia, serif;'>Transfer exactly <span style='color:#000e2e;'> $$fundamount </span> to <span style='color:#000e2e;'> " .$adminBtcAdr. " </span></p>";

    echo "<div>
    <br>
    <p style='font-size:20px; font-weight:500; margin-left:40px; font-family: Georgia, serif;'>Scan barcode:</p>
    <img src='../img/coin-barcode/btc-coin.jpg' width='180' height='180' alt='btc-barcode'>
    <span>OR COPY</span>
    </div>";

} else if($paytype == "eth"){

echo "<p class='tf' style='font-size:18px; font-weight:bold; font-family: Georgia, serif;'>Transfer exactly <span style='color:#000e2e;'> $$fundamount </span> to <span style='color:#000e2e;'> " .$adminEthAdr. " </span></p>";

echo "<div>
<br>
<p style='font-size:20px; font-weight:500; margin-left:40px; font-family: Georgia, serif;'>Scan barcode:</p>
<img src='../img/coin-barcode/ethereum.jpg' width='180' height='180' alt='ethereum-barcode'>
<span>OR COPY</span>
</div>";

}else if($paytype == "bnb"){

echo "<p class='tf' style='font-size:18px; font-weight:bold; font-family: Georgia, serif;'>Transfer exactly <span style='color:#000e2e;'> $$fundamount </span> to <span style='color:#000e2e;'> " .$adminBnbAdr. " </span></p>";

echo "<div>
<br>
<p style='font-size:20px; font-weight:500; margin-left:40px; font-family: Georgia, serif;'>Scan barcode:</p>
<img src='../img/coin-barcode/Binance-coin.jpg' width='180' height='180' alt='bnb-barcode'>
<span>OR COPY</span>
</div>";

}
?>

<br>
<input class="form-control " type="text" name="" value="<?php 

if($paytype == "btc"){

echo $adminBtcAdr;

}else if($paytype == "eth"){

echo $adminEthAdr;


}else if($paytype == "bnb"){
echo $adminBnbAdr;
} ?>" id="copybtc">
<br>

<span style='background:#000e2e; border:none;' class="btn btn-primary my-4" onClick="mycopy()"> COPY</span>


<script type="text/javascript">

function mycopy(){
var copyTxt = document.getElementById("copybtc");
copyTxt.select();
document.execCommand("copy");
}

</script>

<p class="ti" style='font-family: Georgia, serif;'>Transaction Id: <?php echo $depositid;?></p>

<p class="cot" style='font-family: Georgia, serif;'>Contact Us with the Transaction ID for faster confirmations</p>

<a href="index.php" id="dont" style='background:#000e2e; font-family: Georgia, serif; border:none; color:white;' class="btn btn-primary my-4"> DONE </a>  

</div>

</div>

</div>

</div>
</div>
</div>
</div>
</div>
</div>
</div>

</div>

<?php
include "userfooter.php";
?>