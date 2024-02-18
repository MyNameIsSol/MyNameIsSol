
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
                                                aria-current="page" style='color:white; font-family: Georgia, serif;'>Request Withdrawal</li>
                                                                                                                                                                </ul>
                    </div>
                </div>
            </div>

            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <script type="text/javascript">
                        

                        function checkamountbal_with(){
                                var walletbals = document.forms['withdrawal']['walletbal'].value;
           
                                 var amounwith = document.forms['withdrawal']['amount'].value;
           
                                 var amountinvestnumber = parseInt(amounwith,10);
           

           if(amountinvestnumber > walletbals){


            //  alert("insufficient fund");
             swal("Error!", "Insufficient fund", "error");
             // alert(walletbals);
           
                            
         return false;

           
         }else {

            swal("PROCESSING!", "Please wait while your request is been processed...", "success");
            return true;
           }




                        }





                           </script>
           
           
           
           
           
                           <div class="row clearfix">
                   <div class="col-md-6">
                       <div class="card">
                           <div class="header">
                               <h2 style='color:#000e2e; font-family: Georgia, serif;'> Request Withdrawal</h2> <br>
                                   <?php
           
                                               $url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
           
           
                                                   if(strpos($url, 'suc') == true){
                                                       echo "<p class='suc' style='color:green;font-size:15px;'>Your Withdrawal Request has been sent, please do not make another request. we will send you a mail shortly. Check your spam or junk folder incase. Do not send funds to accounts that do not originate from the company email domain (www.astrocapitalmanagement.com). </p>";
                                                    }
           
           
                                       ?>
                               <p class="alert alert-secondary" style='color:white;  border:none; background:#000e2e; font-family: Georgia, serif;'>Enter an amount in USD you wish to request for. Your withdrawal will be processed.</p>
                           </div>
                           <div class="body">
                           <!-- <p style='color:red;'>Minimum withdrawal amount is $10</p> -->
                               <p class="alert alert-danger" style='color: white; border:none; background:#000e2e; font-family: Georgia, serif;'>Withdrawable Balance: <span style="font-weight: 600; font-size: 20px;"> $<?php echo $walletbal;?></span></p>
                               <form name="withdrawal" method="POST" action="../scripts/requestwithdrawalscript.php" onsubmit="return checkamountbal_with()">
                                   <!-- <input type="hidden" name="_token" value="x4nd8mCJTmDnuaLrHUNwOx7csahtqyWdh4CwqP6N"> -->
                                   <label for="basic-url" style='color:#000e2e; font-family: Georgia, serif;'>Wallet Address</label>
                                   <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                           <span class="input-group-text"></span>
                                       </div>
                                       <input type="text" name="btcaddr" value="<?php echo $btcaddr;?>" class="form-control " placeholder="Your wallet address" style="font-family: Georgia, serif;">
                                       
                                       
                                   </div>
                                   <input type="hidden" name="walletbal" value="<?php echo $walletbal;?>">
           
                                   
                                   <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                           <span class="input-group-text" style="font-family: Georgia, serif;">$</span>
                                       </div>
                                       <input type="number" name="amount" value="" class="form-control " placeholder="0" style="font-family: Georgia, serif;">
                                       
                                       
                                   </div>
           
                                   <input type="hidden" name="usd" value="<?php echo $usd;?>">
                                   <input type="hidden" name="email" value="<?php echo $email;?>">
                                   <input type="hidden" name="firstname" value="<?php echo $firstname;?>">
                                   <input type="hidden" name="lastname" value="<?php echo $lastname;?>">
           
                                   <button type="submit" name='withdrawal' class="btn btn-block btn-success" style='border:none; color:white; background:#000e2e;'>Send</button>
                               </form>
                           </div>
           
           
           





    </div>

        </div>
    </div>

</div>

<?php
    include "userfooter.php";
?>