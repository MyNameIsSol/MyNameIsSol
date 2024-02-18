<?php

  include "adminhead.php";

?>



        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
         
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary" >All REGISTERED INVESTORS</h6>


              <?php

$url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    if(strpos($url, 'update=success') == true){

        echo "<p style='padding:8px;color:green; font-size:20px;'> Update Successfully.. </p>";
    }

    if(strpos($url, 'del=succ') == true){

      echo "<p style='padding:8px;color:red; font-size:20px;'>Account Deleted Successfully.. </p>";
    }


?>
             
            </div>
            <div class="card-body">
            
              <div class="table-responsive">
                <table class="table table-bordered" id="myInput" width="100%" cellspacing="0" style="color:black">
                  <thead>
                    <tr>
                    <th>FIRST NAME</th>
										<th>LAST NAME</th>
										<th>EMAIL</th>
										<th>USERNAME</th>
										<!-- <th>PASSWORD</th> -->
										<th>WALLET BALANCE</th>
										<th>TOTAL WITHDRAWAL</th>
										<th>TOTAL EARNINGS</th>
                      <th colspan="3">OPERATION</th>
                    </tr>
                  </thead>
                 




<!-- row from DB -->

<?php
						$sql = "SELECT * FROM register ORDER BY id DESC";
						$result = mysqli_query($conn,$sql);
						$result_check = mysqli_num_rows($result);

						if($result_check > 0){
							while($data = mysqli_fetch_assoc($result)){

								
								$firstname = $data['firstname'];
								$lastname = $data['lastname'];
								$email = $data['email'];
								$phone = $data['phone'];
								$usd = $data['usd'];
								// $pwd = $data['pwd'];
								$country = $data['country'];
								$state = $data['state'];
								$city = $data['city'];
								$walletbal = $data['walletbal'];
								$totalwith = $data['totalwith'];
								$btcaddr = $data['btcaddr'];
								$earns = $data['earns'];
								$withdrawal = $data['withdrawal'];



								echo "<tr> ";
                echo '<td>'.$firstname. '</td>'; 
                echo '<td>'.$lastname. '</td>'; 
                echo '<td>'.$email. '</td>'; 
                 // echo '<td>'.$phone. '</td>'; 
                echo '<td>'.$usd. '</td>'; 
                 // echo '<td>'.$pwd. '</td>'; 
                  echo '<td>$'.$walletbal. '</td>'; 
                echo '<td>$'.$withdrawal. '</td>';
                echo '<td>$'.$earns. '</td>'; 

                                                                                     
                               
echo "<td>
<form method='POST' action='adminupdate.php' >

<input type='hidden' name='usd' value='$usd'>
<input class='btn btn-success' type='submit' name='edit' value='UPDATE' > 
</form>  </td>";

echo "<td>
<form method='POST' action='scripts/admindelete.php'>
<input type='hidden' name='usd' value='$usd'>

<input class='btn btn-danger' type='submit' name='delete' value='DELETE' class='exi_butt'>
 </form>  </td>";
                                                                                                                
                                                                                               
                                echo '</tr>';

							}

						}
					?>

                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

        <?php
 
 if(isset($_POST['edit'])){


    $usd = $_POST['usd'];


			$sql = "SELECT * FROM register WHERE usd ='$usd';";
			$result = mysqli_query($conn,$sql);
			$result_checker = mysqli_num_rows($result);

	if($result_checker > 0){
        while($data = mysqli_fetch_assoc($result)){

          $firstnam = $data['firstname'];
          $lastnam = $data['lastname'];
          $emai = $data['email'];
          $phon = $data['phone'];
          $us = $data['usd'];
          $pw = $data['pwd'];
          $countr = $data['country'];
          $stat = $data['state'];
          $cit = $data['city'];
          $walletba = $data['walletbal'];
          $totalwit = $data['totalwith'];
          $btcadd = $data['btcaddr'];
          $earns = $data['earns'];
          $withdrawal = $data['withdrawal'];



                                    


    echo "

    <div id='myModal3'  role='dialog' style='position:absolute; top:-450px;'>
      <div class='modal-dialog'>
        <div class='modal-content'>
          <div class='modal-header'>
         
            <button type='button' class='close' style='color:black; position:absolute; top:430px; font-size:40px; right:20px; z-index:5' data-dismiss='modal' ><a href='adminupdate.php'>&times;</a></button>

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
           <br>
           <br>
           <br>
           <br>
           <br>
           <h4 class='modal-title'>Update Details</h4>
           <br>
           <br>

  
    
    
          <form method='POST' action='scripts/adminupdatescript.php'>

          <label> Full Name </label> 
          <input type='text' name='firstnam' value='$firstnam' class='form-control'> <br> <br>



          <label> Last Name </label> 
          <input type='text' name='lastnam'  value='$lastnam' class='form-control'> <br> <br>



          <label> Email </label> 
          <input type='text' name='emai'  value='$emai' class='form-control'> <br> <br>


          <label> Phone </label> 
          <input type='text' name='phon'  value='$phon' class='form-control'> <br> <br>

          
          <label> Password </label> 
          <input type='text' name='pw'  value='$pw' class='form-control'> <br> <br>


          <label> BTC Address </label> 
          <input type='text' name='btcadd'  value='$btcadd' class='form-control'> <br> <br>


          <input type='hidden' name='us'  value='$us'> 

          
          <label>Wallet Balance </label> <input type='text' name='walletba'  value='$walletba' class='form-control'> <br> <br>

          <label>Current Investment</label> <input type='text' name='totalwit'  value='$totalwit' class='form-control'> <br> <br>

          <label> Earnings</label> <input type='text' name='earns'  value='$earns' class='form-control'> <br> <br>

          
          <label> Total Withdrawal</label> <input type='text' name='withdrawal'  value='$withdrawal' class='form-control'> <br> <br>


          <button class='btn btn-success btn-block loginbtn' name='adminupdate' style='background:green; border:none;'>UPDATE</button>
          
      


  </form>
  

    
    
          </div>
          <div class='modal-footer'>
            <button type='button' class='btn btn-default' data-dismiss='modal' id='close_1'><a href='adminupdate.php'>Close</a></button>
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
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span> &copy; profitorients.com</span>
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
  <!-- <script src="js/main.js"></script> -->

</body>

</html>
