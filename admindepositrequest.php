  <?php

  include "adminhead.php";

  ?>



  <!-- Begin Page Content -->
  <div class="container-fluid">

  <!-- Page Heading -->

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
  <div class="card-header py-3">
  <h6 class="m-0 font-weight-bold text-primary">Deposit Request</h6>

  <?php

  $url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

  if(strpos($url, 'suc') == true){

  echo "<p style='padding:8px;color:green; font-size:20px;'> Deposit Request Approved Successfully.. </p>";
  }

  if(strpos($url, 'del=succ') == true){

  echo "<p style='padding:8px;color:red; font-size:20px;'> Deposit Request Deleted Successfully.. </p>";
  }


  ?>



  </div>
  <div class="card-body">
  <div class="table-responsive">
  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="color:black">
  <thead>
  <tr>
  <th>USERNAME</th>
  <!-- <th>BTC ADDR</th> -->
  <!-- <th>PLAN</th> -->
  <th>AMOUNT</th>
  <th> WALLET BALANCE</th>
  <th>DATE OF DEPOSIT</th>
  <th>TRANSACTION STATUS</th>
  <th>TRANSACTION ID</th>
  <th colspan="3">OPERATION</th>

  </tr>
  </thead>



  <?php

  $sql = "SELECT * FROM depositrequest ORDER BY id DESC";
  $result= mysqli_query($conn,$sql);
  $result_checker= mysqli_num_rows($result);

  if($result_checker > 0){
  while($data = mysqli_fetch_assoc($result)){

  $plan = $data['plan'];
  $btcaddr = $data['btcaddr'];
  $usd = $data['usd'];
  $amount= $data['amount'];
  $dateofdep= $data['dateofdep'];
  $statusofdep= $data['statusofdep'];
  $depositid= $data['depositid'];
  $walletbal= $data['walletbal'];

  $usdemail= $data['usdemail'];

  // // SESSION
  // $ussd =  $username = $_SESSION['usd'];


  echo "<tr> ";

  echo '<td>'.$usd. '</td>'; 
  // echo '<td>'.$btcaddr. '</td>'; 
  // echo '<td>'.$plan. '</td>';   
  echo '<td>$'.$amount. '</td>'; 
  echo '<td>$'.$walletbal. '</td>';
  echo '<td>'.$dateofdep. '</td>';
  echo '<td>'.$statusofdep. '</td>';
  echo '<td>'.$depositid. '</td>';



  if($statusofdep == "Approved"){

  echo "<td>

  <p>Deposit has been Approved</p>

  </td>";

  }else{


  echo "<td>
  <form method='POST' action='scripts/depositrequestseenscripts.php' >
  <input type='hidden' name='depositid' value='$depositid'>

  <input class='btn btn-success' type='submit' name='seen' value='APPROVE' id='hi' onClick='hid()'> 
  </form>  </td>";





  }



  echo "<td>
  <form method='POST' action='scripts/depositdelete.php'>

  <input type='hidden' name='depositid' value='$depositid'>

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
  <!-- <script src="js/main.js"></script> -->

  </body>

  </html>
