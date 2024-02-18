<?php
	session_start();

	include 'db.php';

	 // $username = $_SESSION['usd'];
  //  $useremail = $_SESSION['email'];

	if(isset($_POST['addbtc'])){

		 // GET THE DATA
        $btcaddr=mysqli_real_escape_string($conn,$_POST['btcaddr']);
         $username=mysqli_real_escape_string($conn,$_POST['usd']);
          $useremail=mysqli_real_escape_string($conn,$_POST['email']);
        


         
        $sql = "UPDATE register

        SET btcaddr ='$btcaddr'

        WHERE usd='$username'

        ";



           mysqli_query($conn,$sql);

           header("Location:../userdash/addbtc.php?suc");
         exit();

	}else{
		header("Location:../userdash/addbtc.php?error");
         exit();
	}
      

