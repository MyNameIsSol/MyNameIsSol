<?php

  include "adminhead.php";

?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
         
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary" >DOWNLINER</h6>
             
            </div>
            <div class="card-body">
            
              <div class="table-responsive">
                <table class="table table-bordered" id="myInput" width="100%" cellspacing="0" style="color:black">
                  <thead>
                    <tr>
                    <th>
                                               FIRST NAME
                                            </th>
                                            <th>
                                               LAST NAME
                                            </th>
                                            <th>
                                               USERNAME
                                            </th>
                                            <th>
                                                EMAIL
                                            </th>
                                            <th>
                                                AMOUNT
                                            </th>
                     
                    </tr>
                  </thead>
                 
<!-- row from DB -->

<?php
                        
if(isset($_POST['active'])){
    $usd = mysqli_real_escape_string($conn,$_POST['usd']);

    $sql = "SELECT * FROM reftable WHERE linkrefid ='$usd'";
    $result= mysqli_query($conn,$sql);
    $result_checker= mysqli_num_rows($result);

    if($result_checker > 0){
        while($data = mysqli_fetch_assoc($result)){

           
          $firstname = $data['firstname'];
          $lastname= $data['lastname'];
          $usd= $data['usd'];
          $email= $data['email'];
          //  $phone= $data['phone'];
            $amountpaid= $data['amountpaid'];

             echo "<tr> ";
                                               
             echo '<td>'.$firstname. '</td>'; 
             echo '<td>'.$lastname. '</td>'; 
             echo '<td>'.$usd. '</td>'; 

             echo '<td>'.$email. '</td>'; 
             echo '<td>'.$username. '</td>'; 
             echo '<td>'.$amountpaid. '</td>'; 
                            
echo '</tr>';

        }
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
