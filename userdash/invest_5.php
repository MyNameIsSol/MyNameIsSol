
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

            



            <script type="text/javascript">


//form one 
function checkamountbal_1(){
    
    // var getamountbalance = document.getElementById("get_amoutbal").innerHTML;

     var walletbals = document.forms['myform_1']['walletbal'].value;

      var amouninvested = document.forms['myform_1']['invest_amount'].value;

      var amountinvestnumber = parseInt(amouninvested,10);

    // alert(getamountdeposit);

    if(amountinvestnumber > walletbals){

        alert("insufficient fund");

        // getamountdeposit.focus();

        return false;

    }

    return true;
}




</script>

                <div class="row clearfix">
        <div class="col-md-6">
            <div class="card">
                <div class="header">
                    <h2 style='color:#000e2e; font-family: Georgia, serif;'> Ultimate  Plan</h2> <br>
                    <p style='color:#000e2e; ' font-family: Georgia, serif; class="alert alert-secondary">Enter an amount  you wish to invest and click invest to proceeed. </p>
                </div>
                <div class="body">
                    <p class="alert alert-danger" style='color:white; border:none; background:#000e2e; font-family: Georgia, serif;'>Wallet Balance: <span style="font-weight: 600; font-size: 20px;"> $<?php echo  $walletbal;?></span></p>
                    <form method="post" action="../scripts/depositdrivescript.php" onsubmit="return checkamountbal_1()" name='myform_1'>

        <br>
        <p style='font-family: Georgia, serif;'>Min Deposit: $11,000</p>

        <p style='font-family: Georgia, serif;'>Max Deposit : $500,000</p>

        <p style='font-family: Georgia, serif;'>Duration:  50% After 10 Days </p>



                        <br>
                        <label for="basic-url" style='color:#000e2e; font-family: Georgia, serif;'>Enter Amount</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"></span>
                            </div>
                            <input type="text" name="invest_amount" value="" class="form-control " placeholder="Enter Amount">
                            
                            <input type="hidden" name="plan" value="Ultimate">
                            <input type="hidden" name="walletbal" value="<?php echo  $walletbal;?>">
                         <input type="hidden" name="email" value="<?php echo  $email;?>">

                          <input type="hidden" name="usd" value="<?php echo $usd;?>">
                        <input type="hidden" name="firstname" value="<?php echo $firstname;?>">
                        <input type="hidden" name="lastname" value="<?php echo $lastname;?>">

                           
                        </div>

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