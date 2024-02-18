<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>ProfitOrients - Admin Login</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=1280px", initial-scale=1, shrink-to-fit=no>


		<!-- favicon -->		
		<link rel="shortcut icon" type="image/x-icon" href="img/logo/faviconi.png">


<!-- Custom fonts for this template-->
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- Custom styles for this template-->
<link href="admin/css/sb-admin-2.min.css" rel="stylesheet">
<!-- <link href="css/maini.css" rel="stylesheet"> -->

</head>

<body style='background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)), url(img/background/btcmin.jpg); 
background-repeat:no-repeat; background-size:cover; background-position:center;'>


<div class="preloader"></div>
<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

<div class="col-xl-10 col-lg-12 col-md-9">

<div class="card o-hidden border-0 shadow-lg my-5">
<div class="card-body p-0">
<!-- Nested Row within Card Body -->
<div class="row">
<div class="col-lg-12 d-none d-lg-block bg-login"></div>
<div class="col-md-6 col-sm-12 col-xs-12 " style="margin:0 auto;">
<div class="p-5">
<div class="text-center">
<h1 class="h4 text-gray-900 mb-4">Welcome Admin</h1>
<h1 class="h4 text-gray-900 mb-4">Please Enter Account Details</h1>
</div>

<?php

$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if(strpos($url, "change=success")==true){
echo "<p style='color:green'>Password successfully changed, please login...</p>";
}
if(strpos($url, "mail=invalid")==true){
echo "<p style='color:red'>Invalid Login Details</p>";
}


?>

<form class="user" method="post" action="scripts/adminloginscript.php">

<div class="form-group">
<input type="text" class="form-control form-control-user" name="uid"  placeholder="Enter  Username...">
</div>
<div class="form-group">
<input type="text" class="form-control form-control-user" name="pwd" placeholder="Enter Password...">
</div>


<input type="submit" class="btn btn-primary btn-user btn-block" name="login" value="login">



</form>

</div>
</div>
</div>
</div>
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


</body>

</html>
