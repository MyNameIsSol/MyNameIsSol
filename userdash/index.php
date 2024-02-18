<?php
include "userhead.php";
?>

<!-- end of navbar -->

<div id="main-content">
<div class="container-fluid">
<div class="block-header">
<div class="row">
<div class="col-lg-5 col-md-8 col-sm-12"><br>
<ul class="breadcrumb">
<li  class="breadcrumb-item"><a href="index.php"></a>
</li>
<h6><span style='color:white; font-family: Georgia; font-weight:bold;'>Username:</span><strong style='color:#FF9800; font-family: Georgia; '> <?php echo $username;?></strong></h6>
    </ul>
</div>
</div>
</div>

<div class="row clearfix">

<div class="col-md-9">

<div class="row">


<h4 class="col-12"><a href="index.php"
class="btn btn-xs btn-link btn-toggle-fullwidth"><i style='color:#000e2e;'
class=" icon-bar-chart"></i></a> <span style='font-family: Georgia, serif; color:white;'>Dashboard </span></h4>

<div class="col-lg-4 col-md-6 col-sm-6" >
<div class="card overflowhidden number-chart" style='background:#000e2e;'>
<div class="body">
<div class="card overflowhidden">
<div class="body">
<h3 style='color:#000e2e;'>$<?php echo $walletbal;?> <i style='color:#000e2e;'
class=" icon-wallet float-right"></i></h3>
<span style='font-family: Georgia, serif;'>Wallet Balance</span>
</div>
<div class="progress progress-xs progress-transparent custom-color-green m-b-0">
<div class="progress-bar" data-transitiongoal="100"></div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6">
<div class="card overflowhidden number-chart" style='background:#000e2e;'>
<div class="body">
<div class="card overflowhidden">
<div class="body">
<h3 style='color:#000e2e;'>$<?php echo $totalwith;?> <i style='color:#000e2e;'
class=" icon-wallet float-right"></i></h3>
<span style='font-family: Georgia, serif;'>Current Investment</span>
</div>
<div class="progress progress-xs progress-transparent custom-color-green m-b-0">
<div class="progress-bar" data-transitiongoal="100"></div>
</div>
</div>
</div>

</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6">
<div class="card overflowhidden number-chart" style='background:#000e2e;'>
<div class="body">
<div class="card overflowhidden">
<div class="body">
<h3 style='color:#000e2e;'>$<?php echo $earns;?> <i style='color:#000e2e;'
class=" icon-wallet float-right"></i></h3>
<span style='font-family: Georgia, serif;'>Total Earnings</span>
</div>
<div class="progress progress-xs progress-transparent custom-color-green m-b-0">
<div class="progress-bar" data-transitiongoal="100"></div>
</div>
</div>
</div>

</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6">
<div class="card overflowhidden number-chart" style='background:#000e2e;'>
<div class="body">
<div class="card overflowhidden">
<div class="body">
<h3 style='color:#000e2e;'>$<?php echo $withdrawal;?> <i style='color:#000e2e;'
class=" icon-wallet float-right"></i></h3>
<span style='color:rgb(18, 29, 51); font-family: Georgia, serif;'>Total Withdrawals</span>
</div>
<div class="progress progress-xs progress-transparent custom-color-green m-b-0">
<div class="progress-bar" data-transitiongoal="100"></div>
</div>
</div>
</div>

</div>
</div>


</div>

</div>


<!-- 
<div class="col-md-3">
<br><br>
<div class="col-lg-12 col-md-12">
<div class="card overflowhidden">
<div class="body">
<h3>$0.00 <i
class=" icon-wallet float-right"></i></h3>
<span>Wallet Balance</span>
</div>
<div class="progress progress-xs progress-transparent custom-color-purple m-b-0">
<div class="progress-bar" data-transitiongoal="100"></div>
</div>
</div>
</div>

<div class="col-lg-12 col-md-12">
<div class="card overflowhidden">
<div class="body">
<h3>$0.00 <i
class=" icon-wallet float-right"></i></h3>
<span>Current Investment</span>
</div>
<div class="progress progress-xs progress-transparent custom-color-green m-b-0">
<div class="progress-bar" data-transitiongoal="100"></div>
</div>
</div>
</div>


<div class="col-lg-12 col-md-12">
<div class="card overflowhidden">
<div class="body">
<h3>$0.00 <i
class=" icon-wallet float-right"></i></h3>
<span>Total Earnings</span>
</div>
<div class="progress progress-xs progress-transparent custom-color-green m-b-0">
<div class="progress-bar" data-transitiongoal="100"></div>
</div>
</div>
</div>
</div> -->
</div>

<div class="row clearfix">

</div>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



<div class="col-md-6">
<div class="card" style="min-height: 20px; background: #fff; margin-bottom: 100px;">
<div class="card-header">
<div class="card-header-title"><h6 style="color: #111; margin-left: 10px;"> CURRENCY CONVERTER</h6>
</div>
</div>
<div class="card-content">


<!-- HERE -->

<div style="">
<script src="https://www.cryptonator.com/ui/js/widget/calc_widget.js"></script>

</div>

<div>
<div class="b-table">
<div class="table-wrapper">

<div style='font-size:80px; text-align:center; font-weight: bold;'>
<!--  <li class='fa fa-frown-o'></li><br>
<p style='font-size:16px;'>You have no Referrals yet!</p> -->
</div>



</div>

</div>
</div>
</div>
</div>
</div>


<br>
<br>
<br>
<br>


<div class="row clearfix" style="margin-top: -80px;">
<div class="col-lg-12 col-md-12 col-sm-12">
<div class="card">
<div class="header">
<h2 style='color:#000e2e; font-family: Georgia, serif;' >Bitcoin Live Chart</h2>
</div>
<div class="body">
<div class="bit-converter p-a40 p-b15" style='height:400px;'>

<iframe id="tradingview_dd6f1" src="https://s.tradingview.com/widgetembed/?frameElementId=tradingview_dd6f1&amp;symbol=COINBASE%3ABTCUSD&amp;interval=D&amp;symboledit=1&amp;saveimage=1&amp;toolbarbg=f1f3f6&amp;studies=%5B%5D&amp;theme=Dark&amp;style=1&amp;timezone=Etc%2FUTC&amp;studies_overrides=%7B%7D&amp;overrides=%7B%7D&amp;enabled_features=%5B%5D&amp;disabled_features=%5B%5D&amp;locale=en&amp;utm_source=www.bitlunaroptions.com&amp;utm_medium=widget_new&amp;utm_campaign=chart&amp;utm_term=COINBASE%3ABTCUSD" style="width: 100%; height: 100%; margin: 0 !important; padding: 0 !important;" allowtransparency="true" scrolling="no" allowfullscreen="" frameborder="0"></iframe>

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