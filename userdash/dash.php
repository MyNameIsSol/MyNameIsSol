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
         <li class="breadcrumb-item"><a href="index.php"><i style='color:#000e2e;' class="icon-home"></i></a> </li>
 <li class="breadcrumb-item active" aria-current="page" style='color:white; font-family: Georgia, serif;'>Dashboard</li>
              </ul>
                    </div>
                </div>
            </div>

                <div class="row clearfix">
        <div class="col-md-9">
<div class="row">
        <h4 class="col-12"><a href="dash/javascript:void(0);"
                            class="btn btn-xs btn-link btn-toggle-fullwidth"><i style='color:#000e2e;'
                        class=" icon-bar-chart"></i></a> <span style='color:white; font-family: Georgia, serif;'>Bitcoin Investment </span></h4>

                                <div class="col-lg-4 col-md-6 col-sm-6" >
                <div class="card overflowhidden number-chart" style='background:#000e2e;'>
                    <div class="body">
                        <div class="number">
                            <h6 style='color:rgba(254,206,66,0.9); font-family: Georgia, serif;'>Basic Plan</h6>
                            <span style='color:white; font-family: Georgia, serif;'>4% Daily For 5 Days
                            <!-- After 10 Hours -->
                            </span>
                            <span style="float: right;">
                            <a href='invest_1.php'>
                            <button class="btn btn-xs btn-dark" style='background:rgba(254,206,66,0.9); border:none; font-family: Georgia, serif;'>Invest</button>
                            </a>
                            </span>
                        </div>
                        <small  style='color:white; font-family: Georgia, serif;'>$100 min.
                            deposit
                        </small>
                        <br>
                        <small  style='color:white; font-family: Georgia, serif;'>$4,999 max.
                            deposit
                        </small>
                    </div>
                    
                </div>
            </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
    <div class="card overflowhidden number-chart" style='background:#000e2e;'>
        <div class="body">
            <div class="number">
                <h6 style='color:rgba(254,206,66,0.9); font-family: Georgia, serif;'>Deluxe  Plan</h6>
                <span style='color:white; font-family: Georgia, serif;'>6% Daily For 14 Days
                <!-- After 8 Hours  -->
            </span>
                <span style="float: right;">


                <a href='invest_2.php'>
                <button class="btn btn-xs btn-dark" style='background:rgba(254,206,66,0.9); border:none; font-family: Georgia, serif;'>Invest</button>
                </a>
                            
                            </span>
            </div>
            <small style='color:white; font-family: Georgia, serif;'>$5,000 min.
                deposit
            </small>
                <br>
            <small style='color:white; font-family: Georgia, serif;'>$9,999 max.
                deposit
            </small>
        </div>
        
    </div>
</div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
    <div class="card overflowhidden number-chart" style='background:#000e2e;'>
        <div class="body">
            <div class="number">
                <h6 style='color:rgba(254,206,66,0.9); font-family: Georgia, serif;'>Gold  Plan</h6>
                <span style='color:white; font-family: Georgia, serif;'>8% Daily For 26 Days
                <!-- After 7 Hours -->
            </span>
                <span style="float: right;">
                
                <a href='invest_3.php'>
                <button class="btn btn-xs btn-dark" style='background:rgba(254,206,66,0.9); border:none; font-family: Georgia, serif;'>Invest</button>
                </a>
                            
                            </span>
            </div>
            <small style='color:white; font-family: Georgia, serif;'>$10,000 min.
                deposit
            </small>

            <br>

            <small style='color:white; font-family: Georgia, serif;'>$49,000 max.
                deposit
            </small>
        </div>
        
    </div>
</div>
    
                    <div class="col-lg-4 col-md-6 col-sm-6">
    <div class="card overflowhidden number-chart" style='background:#000e2e;'>
        <div class="body">
            <div class="number">
                <h6 style='color:rgba(254,206,66,0.9); font-family: Georgia, serif;'>Ultimate  Plan</h6>
                <span style='color:white; font-family: Georgia, serif;'>10% After 30 Days</span>
                <span style="float: right;">
                
                <a href='invest_4.php'>
                <button class="btn btn-xs btn-dark" style='background:rgba(254,206,66,0.9); border:none; font-family: Georgia, serif;'>Invest</button>
                </a>
                            
                            </span>
            </div>
            <small style='color:white; font-family: Georgia, serif;'>$50,000 min.
                deposit
            </small>
            <br>
            <small style='color:white; font-family: Georgia, serif;'>Unlimited max.
                deposit
            </small>
        </div>
        
    </div>
</div>
                                            <!-- <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card overflowhidden number-chart">
                                <div class="body">
                                    <div class="number">
                                        <h6>Diamond</h6>
                                        <span>100% 7days</span>
                                        <span style="float: right;"><button
                                                    onclick="event.preventDefault(); joinTrade('invest-trade/17')"
                                                    class="btn btn-xs btn-dark">Invest</button></span>
                                    </div>
                                    <small class="text-muted">$16,000.00 min.
                                        deposit
                                    </small>
                                </div>
                               
                            </div>
                        </div>
                     -->
                
            </div>

        </div>

        <div class="col-md-3">
            <br><br>
            <div class="col-lg-12 col-md-12">
                <div class="card overflowhidden">
                    <div class="body">
                        <h3 style='color:#000e2e; font-family: Georgia, serif;'>$<?php echo $walletbal;?> <i style='color:#000e2e;'
                                    class=" icon-wallet float-right"></i></h3>
                        <span style='font-family: Georgia, serif;'>Wallet Balance</span>
                    </div>
                    <div class="progress progress-xs progress-transparent custom-color-purple m-b-0">
                        <div class="progress-bar" data-transitiongoal="100"></div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-12 col-md-12">
                <div class="card overflowhidden">
                    <div class="body">
                        <h3 style='color:#000e2e; font-family: Georgia, serif;'>$<?php echo $totalwith;?> <i style='color:#000e2e;'
                                    class=" icon-wallet float-right"></i></h3>
                        <span style='font-family: Georgia, serif;'>Current Investment</span>
                    </div>
                    <div class="progress progress-xs progress-transparent custom-color-green m-b-0">
                        <div class="progress-bar" data-transitiongoal="100"></div>
                    </div>
                </div>
            </div>


            <div class="col-lg-12 col-md-12">
                <div class="card overflowhidden">
                    <div class="body">
                        <h3 style='color:#000e2e; font-family: Georgia, serif;'>$<?php echo $earns;?> <i style='color:#000e2e;'
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

    <div class="row clearfix" style="margin-top: -80px;">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="header">
                    <h2 style='color:#000e2e; font-family: Georgia, serif;'>Bitcoin Live Chart</h2>
                </div>
                <div class="body">
                    <div id="world-map-markers" class="jvector-map" style="height: 290px">
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