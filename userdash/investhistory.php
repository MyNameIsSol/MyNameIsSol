
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
                                                aria-current="page" style='color:white; font-family: Georgia, serif;'>Withdrawals</li>
                                                                                                                                                                </ul>
                    </div>
                </div>
            </div>

                <div class="row clearfix">


                <div class="col-md-12">





            <div class="card">
                <div class="header">
                    <h2 style='color:#000e2e; font-family: Georgia, serif;'>Investments</h2> <br>
                    <p style='color:#000e2e; font-family: Georgia, serif;'> Below is a list of all your Investments</p>
                </div>
                <div class="body">
                    <div class="table-responsive">
                    <table class="table center-aligned-table">
                            <thead>
                            <tr>
                                <th style='color:#000e2e; font-family: Georgia, serif;'>PLAN</th>
                                <th style='color:#000e2e; font-family: Georgia, serif;'>AMOUNT</th>
                               
                                <th style='color:#000e2e; font-family: Georgia, serif;'>DATE OF INVESTMENT</th>
                                 <!-- <th>TRANSACTION STATUS</th> -->
                                  <!-- <th>DEPOSIT ID</th> -->
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                        $sql = "SELECT * FROM depositrequests WHERE usd='$username' ORDER BY id DESC";
                        $result = mysqli_query($conn,$sql);
                        $result_check = mysqli_num_rows($result);

                        if($result_check > 0){
                            while($data = mysqli_fetch_assoc($result)){

                                // $id = $data['id'];
                                $usd = $data['usd'];
                                $plan = $data['plan'];
                                $amount = $data['amount'];
                                $dateofdep = $data['dateofdep'];
                                $statusofdep = $data['statusofdep'];
                                 $depositid = $data['depositid'];
                              



                                echo "<tr> ";
                                                // echo '<td>'.$id. '</td>'; 
                                                echo '<td style="color:#000e2e; font-family: Georgia, serif;">'.$plan. '</td>'; 
                                                echo '<td style="color:#000e2e; font-family: Georgia, serif;">'.$amount. '</td>'; 
                                                echo '<td style="color:#000e2e; font-family: Georgia, serif;">'.$dateofdep. '</td>'; 
                                                
                                                // echo '<td>'.$statusofdep. '</td>'; 
                                                 // echo '<td>'.$depositid. '</td>'; 
                                                 
                                               
                                                
                                               
                                echo '</tr>';

                            }

                        }


                    ?>


                             </tbody>
                        </table>
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