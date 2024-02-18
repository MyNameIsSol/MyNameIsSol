<?php

  include "adminhead.php";

?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
         
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary" >SEND MAIL TO ALL REGISTERED INVESTORS</h6>
             
            </div>
            <div class="card-body">
            
              <div class="table-responsive">
                <table class="table table-bordered" id="myInput" width="100%" cellspacing="0" style="color:black">
                  <thead>
                   
                  <div class="hpanel">
                    <div class="panel-body">
                        <form action="scripts/sendmailtoclientscripts.php" method='POST' id="loginForm">
                            <div class="form-group">

                            
					<?php


				
$url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if(strpos($url, 'success') == true){
	echo "<p style='color:green; text-align:center; padding:10px; font-weight:bold;'> Mail Successfully Sent.</p>";
}




?>
                                <!-- <label class="control-label" for="username">Enter Email</label>
                                <input type="text" placeholder="Enter Email" title="Enter Email" name="mail" id="username" class="form-control"> -->
                                <!-- <span class="help-block small">Your unique username to app</span> -->
                            </div>
                           
                           
                            <div class="form-group">
                                <!-- <label class="control-label" for="username">Enter Subject</label> -->
                                <input type="text" placeholder="Enter Title" title="Enter Title" name="sub" id="username" class="form-control">
                                <!-- <span class="help-block small">Your unique username to app</span> -->
                            </div>
                           



                            <div class="form-group">


                            <textarea id="meg" name="msg" class="form-control" style='height:200px;'></textarea> 
                           
                        

 
<br>
<br>
            
                            <button class="btn btn-success btn-block loginbtn" name='sendmail'>SEND MAIL</button>
                           
                        </form>
                    </div>
                </div>
  
                  </thead>
                 
<!-- row from DB -->

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
  <script src="js/main.js"></script>

</body>

</html>
