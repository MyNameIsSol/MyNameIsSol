<?php

  include "adminhead.php";

?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
         
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Withdrawal Request</h6>
              <?php

$url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    if(strpos($url, 'pay=sucess') == true){

        echo "<p style='padding:8px;color:green; font-size:20px;'> Withdrawal Request Approved Successfully.. </p>";
    }

    if(strpos($url, 'del=succ') == true){

      echo "<p style='padding:8px;color:red; font-size:20px;'> Deposit Request Deleted Successfully.. </p>";
    }

    if(strpos($url, 'update=success') == true){

      echo "<p style='padding:8px;color:red; font-size:20px;'> Withdrawal Date Updated </p>";
    }
?>
              
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="color:black">
                  <thead>
                    <tr>
                    <th>USERNAME</th>
										<th>BTC ADDR</th>
										<th>REQUESTED AMOUNT</th>
										<th>EARNINGS</th>
										<th>DATE OF WITHDRAWAL</th>
                    <th>EDIT WITHDRAWAL DATE</th>
										<th>TRANSACTION STATUS</th>
                      <th colspan="3">OPERATION</th>
                      
                    </tr>
                  </thead>
                


                  <?php

$sql = "SELECT * FROM withdawalrequest ORDER BY id DESC";
$result= mysqli_query($conn,$sql);
$result_checker= mysqli_num_rows($result);

if($result_checker > 0){
    while($data = mysqli_fetch_assoc($result)){

           
      $btcaddr = $data['btcaddr'];
      $btcaddr = $data['btcaddr'];
     $usd = $data['usd'];
    $amount= $data['amount'];
    $dateofwith= $data['dateofwith'];
    $statusofwith= $data['statusofwith'];
     $walletbal= $data['walletbal'];

     $withid = $data['withid'];
      $usdemail = $data['usdemail'];



                            echo "<tr> ";
                                           
                            echo '<td>'.$usd. '</td>'; 
                            echo '<td>'.$btcaddr. '</td>'; 
                            // echo '<td>'.$plan. '</td>';   
                            echo '<td>$'.$amount. '</td>'; 
                             echo '<td>'.$walletbal. '</td>'; 
                             echo '<td>'.$dateofwith. '</td>';



                             echo "<td> 
                             <form method='POST' action='adminwithdrawalrequest.php'>   

                            <input type='hidden' name='usd' value='$withid'>
 <input type='hidden' name='usdemail' value='$usdemail'>
 <input type='hidden' name='walletbal' value='$walletbal'>
 <input type='hidden' name='btcaddr' value='$btcaddr'>
 <input type='hidden' name='statusofwith' value='$statusofwith'>
 <input type='hidden' name='withid' value='$withid'>
                  <input type='hidden' name='amount' value='$amount'>

                  <input class='btn btn-success' type='submit' name='edit' value='EDIT DATE' > 
           
                               </form>  </td>";

                              echo '<td>'.$statusofwith. '</td>';

                                            if($statusofwith == "PAID"){
                                              
echo "<td>

<p>Withdrawal has been Approved</p>

</td>";

                                            }else{

                                              echo "<td> 
                                              <form method='POST' action='scripts/confirmpayscripts.php'>   

                                             <input type='hidden' name='usd' value='$usd'>
									<input type='hidden' name='usdemail' value='$usdemail'>
									<input type='hidden' name='walletbal' value='$walletbal'>
									<input type='hidden' name='btcaddr' value='$btcaddr'>
									<input type='hidden' name='statusofwith' value='$statusofwith'>
                  <input type='hidden' name='withid' value='$withid'>
                  <input type='hidden' name='dateofwith' value='$dateofwith'>
                                   <input type='hidden' name='amount' value='$amount'>

                                   <input class='btn btn-success' type='submit' name='ccpay' value='PAY' > 

                                           
                                                </form>  </td>";

                                            }

                                                 echo "<td> 
                                                 <form method='POST' action='scripts/withdelete.php'>   
  
                                                  <input type='hidden' name='withid' value='$withid'>
  
                                                  <input type='hidden' name='usd' value='$username'>
                    
                    <input type='hidden' name='usdemail' value='$usdemail'>
                    
                    <input type='hidden' name='btcaddr' value='$btcaddr'>
                                      <input type='hidden' name='statusofwith' value='$statusofwith'>
                                      
                                      <input type='hidden' name='amount' value='$amount'>
  
                                      <input class='btn btn-success' type='submit' name='ccpay' value='DELETE' style='background:red; border:none;'> 
  
                                                   </form>  </td>";
       
                            echo '</tr>';

    }

}
?>

                </table>
              </div>

<!-- EDIT TIME OF WITHDRAWAL -->

<?php
 
 if(isset($_POST['edit'])){


    $usd = $_POST['usd'];


		$sql = "SELECT * FROM withdawalrequest WHERE withid = '$usd' ";
$result= mysqli_query($conn,$sql);
$result_checker= mysqli_num_rows($result);

	if($result_checker > 0){
        while($data = mysqli_fetch_assoc($result)){

          $btcaddr = $data['btcaddr'];
          $btcaddr = $data['btcaddr'];
         $usd = $data['usd'];
        $amount= $data['amount'];
        $dateofwith= $data['dateofwith'];
        $statusofwith= $data['statusofwith'];
         $walletbal= $data['walletbal'];
    
         $withid = $data['withid'];
          $usdemail = $data['usdemail'];

    echo "

    <div id='myModal3'  role='dialog' style='position:relative; top:-750px;'>
      <div class='modal-dialog'>
        <div class='modal-content'>
          <div class='modal-header'>
            <button type='button' class='close' data-dismiss='modal' ><a href='adminupdate.php'>&times;</a></button>
            <h4 class='modal-title'>Update Details</h4>
          </div>
    
    
          <div class='modal-body'>
    
  
          
           <br>
           <br>
           <br>
         
           
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <h4 class='modal-title'>Update Details</h4>
           <br>
           <br>

  
    
    
          <form method='POST' action='scripts/editdate.php'>

          <input type='hidden' name='withid' value='$withid' class='form-control'> <br> <br>



          <label> Date Of Withdrawal </label> 
          <input type='text' name='dateofwith'  value='$dateofwith' class='form-control'> <br> <br>

          <button class='btn btn-success btn-block loginbtn' name='adminupdate' style='background:green; border:none;'>UPDATE</button>
          

  </form>
          </div>
          <div class='modal-footer'>
            <button type='button' class='btn btn-default' data-dismiss='modal' id='close_1'><a href='adminwithdrawalrequest.php'>Close</a></button>
          </div>
        </div>
    
      </div>
    </div>
    ";

        }

     }

 }                        
?>
 
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>&copy; profitorients.com</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/main.js"></script>

</body>

</html>
