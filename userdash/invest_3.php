
<?php
include "userhead.php";
?>  
<div id="main-content">
<div class="container-fluid">
<div class="block-header">
<div class="row">
<div class="col-lg-5 col-md-8 col-sm-12"><br>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.php"><i style='color:#000e2e;' class="icon-home"></i></a>
</li>
<li class="breadcrumb-item"><a href="index.php" style='color:white; font-family: Georgia, serif;'>Dashboard</a></li>
<li class="breadcrumb-item active"
aria-current="page"></li>
                                    </ul>
</div>
</div>
</div>




<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
//form one 
function checkamountbal_1(){

// var getamountbalance = document.getElementById("get_amoutbal").innerHTML;

var walletbals = document.forms['myform_1']['walletbal'].value;

var amouninvested = document.forms['myform_1']['invest_amount'].value;

var statusofinvest = document.forms['myform_1']['statusofinvest'].value;

var amountinvestnumber = parseInt(amouninvested,10);

// alert(getamountdeposit);

if(amouninvested == ""){
swal("Error!", "Please enter an amount", "error");
return false;

}else if(amountinvestnumber > walletbals){

// alert("insufficient fund");
swal("Error!", "Insufficient fund", "error");
return false;

}else if(amountinvestnumber < 10000 ){
swal("Error!", "Minimum investment is $10,000", "error");
return false;

}else if(amountinvestnumber > 49999){
swal("Error!", "Maximum investment is $49,999", "error");
return false;

}else if(statusofinvest == "Processing"){
swal("Error!", "Sorry, you can not make a new investment now, you have an ongoing current invstment.", "error");
return false;

}else{
swal("PROCESSING!", "Please wait while your request is been processed...", "success");
return true;
}

}

</script>

<div class="row clearfix">
<div class="col-md-6">
<div class="card">
<div class="header">
<h2 style='color:#000e2e; font-family: Georgia, serif;'> Gold  Plan</h2> <br>
<p class="alert alert-secondary" style='color:#000e2e; font-family: Georgia, serif;'>Enter an amount  you wish to invest and click invest to proceeed. </p>
</div>
<div class="body">
<p class="alert alert-danger" style='color:white; border:none; background:#000e2e; font-family: Georgia, serif;'>Wallet Balance: <span style="font-weight: 600; font-size: 20px;"> $<?php echo  $walletbal;?></span></p>
<form method="post" action="../scripts/depositdrivescript.php" onsubmit="return checkamountbal_1()" name='myform_1'>

<br>
<p style='font-family: Georgia, serif;'>Min Deposit: $10,000 </p>

<p style='font-family: Georgia, serif;'>Max Deposit : $49,999</p>

<p style='font-family: Georgia, serif;'>Duration:   8% Daily For 26 Days
<!-- After 7 Hours  -->
</p>



<br>
<label for="basic-url" style='color:#000e2e; font-family: Georgia, serif;'>Enter Amount</label>
<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text"></span>
</div>
<input type="text" name="invest_amount" value="" class="form-control " placeholder="Enter Amount" oninput="thirdinvest()">

<input type="hidden" name="plan" value="Gold">
<input type="hidden" name="walletbal" value="<?php echo  $walletbal;?>">
<input type="hidden" name="email" value="<?php echo  $email;?>">

<input type="hidden" name="usd" value="<?php echo $usd;?>">
<input type="hidden" name="firstname" value="<?php echo $firstname;?>">
<input type="hidden" name="lastname" value="<?php echo $lastname;?>">
<input type="hidden" name="statusofinvest" value="<?php echo $statusofinvest; ?>">


</div>
<p id="showval" style="font-weight:bold;"> </p>
<br>
<button style='color:white; border:none; background:#000e2e;' type="submit" name="invest" class="btn btn-block btn-success">Invest</button>
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