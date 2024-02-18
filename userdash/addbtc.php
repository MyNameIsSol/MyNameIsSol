
<?php
include "userhead.php";
?>


<div id="main-content">
<div class="container-fluid">
<div class="block-header">
<div class="row">
<div class="col-lg-5 col-md-8 col-sm-12"><br>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.phpm"><i class="icon-home"></i></a>
</li>
<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
<li class="breadcrumb-item active"
aria-current="page">Add Bitcoin Address</li>
</ul>
</div>
</div>
</div>

<div class="row clearfix">


<div class="col-md-6">
<div class="card">
<div class="header">
<h2>Enter Wallet Address</h2> <br>
<p>Fields with * are required.</p>
</div>
<div class="body">
<form method="post" action="../scripts/addingbtcscript.php">
<!-- <input type="hidden" name="_token" value="x4nd8mCJTmDnuaLrHUNwOx7csahtqyWdh4CwqP6N"> -->
<label for="basic-url">Wallet Address *</label>
<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon3"><i class="icon-note"></i></span>
</div>
<input type="text" name="btcaddr" value=""
class="form-control ">


</div>

<input type="hidden" name="usd" value="<?php echo $usd;?>">
<input type="hidden" name="email" value="<?php echo $email;?>">
<input type="hidden" name="firstname" value="<?php echo $firstname;?>">
<input type="hidden" name="lastname" value="<?php echo $lastname;?>">

<button type="submit" name='addbtc' class="btn btn-block btn-success">Add Wallet</button>
</form>
<br>
<br>
<br>
<br>

<p>Your Current BTC Address: <span style="font-weight: bold;"> <?php echo $btcaddr;?>  </span> </p>
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