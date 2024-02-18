<?php
include "userhead.php";
?>









<div id="main-content">
<div class="container-fluid">
<div class="block-header">
<div class="row">
<div class="col-lg-5 col-md-8 col-sm-12"><br>
<ul class="breadcrumb">
  <li class="breadcrumb-item"><a href="index.php"><i style='color:#000e2e; font-family: Georgia, serif;' class="icon-home"></i></a>
</li>
<li class="breadcrumb-item"><a style='color:white; font-family: Georgia, serif;' href="index.php">Dashboard</a></li>
 <li class="breadcrumb-item active"
aria-current="page" style='color:white; font-family: Georgia, serif;'>Fund</li>
  </ul>
</div>
</div>
</div>

<div class="row clearfix">
<div class="col-md-6">
<div class="card">
<div class="header">
<h2 style='color:#000e2e; font-family: Georgia, serif;'> Fund Wallet</h2> <br>
<p class="alert alert-secondary" style='background:#000e2e; color: white; font-family: Georgia, serif;'>Enter an amount in USD you wish to deposit to your trading account
with your card. You'll be redirect to make payment using your preferred method.</p>
</div>



<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
function CheckValid(){

var fundamount = document.forms['dep']['fundamount'].value;


if(fundamount < 100){
swal("Error!", "Minimum deposit is $100", "error");
return false;

}else{
swal("PROCESSING", "Please wait while your request is been processed...", "success");

return true;

}
}


</script>


<div class="body">
<form  method="POST" action="fund.php" id="funfr" name="dep" onsubmit="return CheckValid()">
<div class="form-group mb-3">
<label style='display:block; color:#000e2e;  font-family: Georgia, serif;'> Enter Amount</label>
<div class="input-group input-group-alternative">

<div class="input-group-prepend">
<span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
</div>
<input style="color:black; font-family: Georgia, serif;" class="form-control" placeholder="USD" type="number" name="fundamount"  id="input" onkeyup="toBTC();">


</div>
<!--  <br>
<p id="btcValue">&nbsp;</p> -->
</div>

<div class="form-group">


<label style='display:block; color:#000e2e; font-family: Georgia, serif;'> Select Method Of Method</label>                                
<tr>
<td colspan=2>
<table cellspacing=0 cellpadding=2 border=0>
<tr>
<td><input type=radio name=paytype value="btc" checked><br></td>
<td style='font-family: Georgia, serif;'>Deposit Via Bitcoin</td>
</tr>

<tr>
<td><input type=radio name=paytype value="eth"></td>
<td style='font-family: Georgia, serif;'>Deposit Via Ethereum</td>
</tr>  


<!-- <tr>
<td><input type=radio name=paytype value="litecoin" ></td>
<td style='font-family: Georgia, serif;'>Deposit Via Litecoin</td>
</tr>   -->


<!-- <tr>
<td><input type=radio name=paytype value="bitcoincash" ></td>
<td style='font-family: Georgia, serif;'>Deposit Via  Bitcoin Cash</td>
</tr>   -->

<!-- <tr>
<td><input type=radio name=paytype value="usdt" ></td>
<td style='font-family: Georgia, serif;'>Deposit Via USDT</td>
</tr>   -->

<tr>
<td><input type=radio name=paytype value="bnb" ></td>
<td style='font-family: Georgia, serif;'>Deposit Via Binance coin</td>
</tr>  

<!-- <tr>
<td><input type=radio name=paytype value="dogecoin" ></td>
<td style='font-family: Georgia, serif;'>Deposit Via Doge Coin</td>
</tr>   -->



</table>
</td>
</tr>

</div>

<div class="custom-control custom-control-alternative custom-checkbox">
<input class="custom-control-input" id=" customCheckLogin" type="checkbox" name="agree">
<!--  <label class="custom-control-label" for=" customCheckLogin">
<span style="color:black;" >By clicking, you agree to the <a href="terms-and-conditions.html">terms</a></span>
</label> -->
</div>
<div class="text-center">

<input type="hidden" name="usd" value="<?php echo $usd;?>">
<input type="hidden" name="email" value="<?php echo $email;?>">
<input type="hidden" name="firstname" value="<?php echo $firstname;?>">
<input type="hidden" name="lastname" value="<?php echo $lastname;?>">
<input type="submit" style='background:#000e2e; border:none; font-family: Georgia, serif;' class="btn btn-primary my-4" name="fundpay" id="pay" value="DEPOSIT" />
</div>
</form>

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