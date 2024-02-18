
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
<li class="breadcrumb-item"><a href="home" style='color:white; font-family: Georgia, serif;'>Dashboard</a></li>
<li class="breadcrumb-item active"
aria-current="page" style='color:white; font-family: Georgia, serif;'>Refer</li>
</ul>
</div>
</div>
</div>

<div class="row clearfix">






<div class="col-md-6">
<div class="card">
<div class="header">
<h2 style='color:#000e2e; font-family: Georgia, serif;'>Refer User</h2> <br>
<p style='color: white; border:none; background:#000e2e; font-family: Georgia, serif;' class="alert alert-info ">Your Referral Link: <span class="text-success">https://profitorients.com/signup.php?ref=<?php echo $username;?> </span></p>

<!--  <p class="alert alert-info">Your Referral ID is: <?php  $refcode?> </p> -->
<p style='font-family: Georgia, serif;'> Refer a friend and get instant 6% on their first deposit </p>
</div>
<!-- <div class="body">
<form method="post" action="refer">
<input type="hidden" name="_token" value="O2x8FMeyS6ilWfUBcHAjr6vk8GqZPKkx52Q46yrJ">
<label for="basic-url">Or Send a referral mail to your friend</label>
<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon3"><i class="icon-note"></i></span>
</div>
<input type="email" name="email" value="" class="form-control ">


</div>

<button type="submit" class="btn btn-block btn-success">Send Invitation</button>
</form>
</div> -->
</div>
</div>
</div>

<div style='width:100%; height:100px;'>

<h2 style='text-align:center; color:white; font-family: Georgia, serif;'>Your Downlines</h2>

<div style='width:100%;'>
<table class="table has-mobile-cards" style='font-size:10px; text-align:center; font-weight: bold;'>
<thead>
<tr>
<th style='color:white; font-family: Georgia, serif;'>
FIRST NAME
</th>
<th style='color:white; font-family: Georgia, serif;'>
LAST NAME
</th>
<th style='color:white; font-family: Georgia, serif;'>
USERNAME
</th>
<th style='color:white; font-family: Georgia, serif;'>
EMAIL
</th>

<!-- <th>
PHONE
</th> -->

<!-- <th>
Amount
</th> -->

</tr>
</thead>
<tbody style="text-align: center;">
<?php

$sql = "SELECT * FROM reftable WHERE linkrefid ='$username'";
$result= mysqli_query($conn,$sql);
$result_checker= mysqli_num_rows($result);

if($result_checker > 0){
while($data = mysqli_fetch_assoc($result)){

$firstname = $data['firstname'];
$lastname= $data['lastname'];
$usd= $data['usd'];
$email= $data['email'];
$phone= $data['phone'];
$amountpaid= $data['amountpaid'];



echo "<tr> ";

echo '<td style="color:white; font-family: Georgia, serif;">'.$firstname. '</td>'; 
echo '<td style="color:white; font-family: Georgia, serif;">'.$lastname. '</td>'; 
echo '<td style="color:white; font-family: Georgia, serif;">'.$usd. '</td>'; 

echo '<td style="color:white; font-family: Georgia, serif;">'.$email. '</td>';

// echo '<td>'.$phone. '</td>'; 

//  echo '<td> $'.$amountpaid. '</td>'; 


echo '</tr>';

}

}else{
echo "<p style='color:white; font-family: Georgia, serif;'>No Referrals yet</p>";
}
?>

</tbody>
</table>

</div>

</div>

</div>
</div>

</div>

<?php
include "userfooter.php";
?>x