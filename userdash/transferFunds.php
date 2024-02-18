
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
                                                aria-current="page" style='color:white; font-family: Georgia, serif;'>Transfer Earnings</li>
                                                                                                                                                                </ul>
                    </div>
                </div>
            </div>

                <div class="row clearfix">



       
                <div class="col-md-6">
            <div class="card">
                <div class="header">
                    <h2 style='color:#000e2e; font-family: Georgia, serif;'> Transfer Earnings</h2> <br>
                        <?php

                                    $url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";


                                        if(strpos($url, 'suc') == true){
                                            echo "<p class='suc' style='color:green;font-size:18px; font-weight:bold;'>You have successfully transfer a sum of <span style='color:#000e2e;'>$$loanbal</span> from your Earnings to your Wallet Balance.</p>";
                                         }


                            ?>
                    <p class="alert alert-secondary" style='color: white; border: none; background:#000e2e; font-family: Georgia, serif;'>Enter an amount you wish to transfer to your wallet balance and click proceed. </p>
                </div>
                <div class="body">
                    <p class="alert alert-danger" style='color:white; border: none; background:#000e2e; font-family: Georgia, serif;'>Total Earnings : <span style="font-weight: 600; font-size: 20px;"> $<?php echo $earns;?></span></p>
                    <form name="withdrawal" method="POST" action="../scripts/transferofearnings.php" onsubmit="return checkamountbal_with()">
                        <!-- <input type="hidden" name="_token" value="x4nd8mCJTmDnuaLrHUNwOx7csahtqyWdh4CwqP6N"> -->
                       
                        <input type="hidden" name="walletbal" value="<?php echo $earns;?>">

                        <label for="basic-url" style="font-family: Georgia, serif;">Enter Amount </label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                            </div>
                            <input type="number" name="amount" value="" class="form-control" style="font-family: Georgia, serif;">
                            
                            
                        </div>
                        
                        <input type="hidden" name="realwalletbal" value="<?php echo $walletbal;?>">
                        <input type="hidden" name="usd" value="<?php echo $usd;?>">
                        <input type="hidden" name="email" value="<?php echo $email;?>">
                        <input type="hidden" name="firstname" value="<?php echo $firstname;?>">
                        <input type="hidden" name="lastname" value="<?php echo $lastname;?>">

                        <button type="submit" name='withdrawal' class="btn btn-block btn-success" style='border:none; background:#000e2e; font-family: Georgia, serif;'>Proceed</button>
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