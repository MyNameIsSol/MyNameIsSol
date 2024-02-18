<?php
	
	include 'db.php';

	session_start();

	if(isset($_POST['update'])){

         $name=mysqli_real_escape_string($conn,$_POST['name']);
        $email=mysqli_real_escape_string($conn,$_POST['email']);
        $invest=mysqli_real_escape_string($conn,$_POST['invest']);
        $profit=mysqli_real_escape_string($conn,$_POST['profit']);
        $total=mysqli_real_escape_string($conn,$_POST['total']);
        $acct=mysqli_real_escape_string($conn,$_POST['acct']);
        $refb=mysqli_real_escape_string($conn,$_POST['refb']);
       




         $email =$_SESSION['email'] ;

        $sql = "UPDATE register

        SET name='$name',email='$email',invest='$invest',profit='$profit',total='$total',acct='$acct',refb='$refb'

        WHERE email='$email'

        ";

        mysqli_query($conn,$sql);

        header("Location:../update.php?update=success");
		exit();


	}