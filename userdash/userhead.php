<?php
ob_start();

error_reporting(0);
session_start();

include '../scripts/db.php';


$username = $_SESSION['usd'];

if(isset($username)){


}else{
header("Location:../login.php?session_expire");
exit();

}

$sql = "SELECT * FROM register WHERE usd='$username' ";
$result= mysqli_query($conn,$sql);
$result_checker= mysqli_num_rows($result);

if($result_checker > 0){
while($data = mysqli_fetch_assoc($result)){

$firstname = $data['firstname'];
$lastname= $data['lastname'];
$email= $data['email'];
$usd= $data['usd'];
$pwd= $data['pwd'];
$country= $data['country'];
$state= $data['state'];
$city= $data['city'];
$walletbal= $data['walletbal'];             
$totalwith= $data['totalwith'];
$btcaddr= $data['btcaddr'];
$earns= $data['earns'];
$withdrawal= $data['withdrawal'];
$active= $data['active'];
$verify= $data['verify'];
$loanbal= $data['loanbal'];
$phone= $data['phone'];
$profileimg= $data['profileimg']; 
$statusofinvest = $data['statusofinvest'];


}

}
?>
<!doctype html>
<html lang="en">


<head>

<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>ProfitOrients - Best place to invest</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<!-- favicon -->		
<link rel="shortcut icon" type="image/x-icon" href="../img/logo/faviconi.png">

<link rel="stylesheet" href="dash/css/bootstrap.min.css">
<link rel="stylesheet" href="dash/css/font-awesome.min.css">

<link rel="stylesheet" href="dash/css/bootstrap-progressbar-3.3.4.min.css">
<link rel="stylesheet" href="dash/css/chartist.min.css">
<link rel="stylesheet" href="dash/css/chartist-plugin-tooltip.css">
<link rel="stylesheet" href="dash/css/jquery-jvectormap-2.0.3.min.css"/>
<link rel="stylesheet" href="dash/css/toastr.min.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="dash/css/main.css">
<link rel="stylesheet" href="dash/css/color_skins.css">
<link rel="stylesheet" href="dash/css/item-table.css">
<link rel="stylesheet" href="dash/css/navcss.css">
<link rel="stylesheet" href="../css/sweetalert.min.css">
<!-- <link rel="stylesheet" href="../css/main.css"> -->




</head>
<body class="theme-blush"  style='background:linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.4)), url("img/btcmin.jpg"); background-repeat: no-repeat;
background-size: 100% 2600px;
background-position: center; height:1500px;'>


<!-- Page Loader -->
<div class="preloader"></div>
<!-- Overlay For Sidebars -->

<div id="wrapper" >

<nav class="navbar navbar-fixed-top" >
<div class="container-fluid">
<div class="navbar-btn">
<button id="navbutton" type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
</div>

<div class="navbar-brand d-none d-sm-none d-md-none d-lg-block d-xl-block">
<a href="index.php"><img src="../img/logo/profitorientsblack.png" alt="" width="200px" height="60px" style="margin-left:90px"></a>
</div>
<div class="navbar-brand d-block d-sm-block d-md-block d-lg-none d-xl-none" >
<a href="index.php">  </a>
</div>



<div class="navbar-right" style=' text-align:right;' >


<style type="text/css">
a.gflag {vertical-align:middle;font-size:16px;padding:1px 0;background-repeat:no-repeat;background-image:url(gtranslate.net/flags/16.png);}
a.gflag img {border:0;}
a.gflag:hover {background-image:url(gtranslate.net/flags/16a.png);}
#goog-gt-tt {display:none !important;}
.goog-te-banner-frame {display:none !important;}
.goog-te-menu-value:hover {text-decoration:none !important;}
body {top:0 !important;}
#google_translate_element2 {display:none!important;}
</style>

<?php require_once('../googletrans.php') ?>


<script type="text/javascript">
/* <![CDATA[ */
eval(function(p,a,c,k,e,r){
	e=function(c){
		return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))
	};
	if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){
		return r[e]
	}];e=function(){
		return'\\w+'};c=1};
		while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);
		return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))
/* ]]> */
</script> 

<a href='index.php'>
<h5 style='color:#FC9353; margin-right:20px; font-family:monospace; font-weight:800'>profitorients.com  </h5>
</a>         
</div>
</div>
</nav>    


<!-- mobile nav -->
<nav id="mobilenav" >
<ul>
<div class="user-account" id='tt'>
<br>

<!-- profile image -->
<!-- <img src="https://www.gravatar.com/avatar/a91294d17661874e7ac70228236d4eff.jpg?s=200&amp;d=mm" class="rounded-circle user-photo" alt="User Profile Picture"> -->

<?php
if($profileimg == ""){

echo "<a href='profile.php'><img src='img/pro.png' class='rounded-circle user-photo' alt='User Profile Picture' width='100'></a>";
}else{

echo "<a href='profile.php'><img src='../uploads/$profileimg' class='rounded-circle user-photo' alt='User Profile Picture' width='100'></a>";
}
?>

<div class="dropdown">
<span style="color: #fff;">Welcome,</span>
<a href="index.php" class="dropdown-toggle user-name"
data-toggle="dropdown"><strong style="color: #fff; font-family: Georgia, serif;"><?php echo $username;?></strong></a>

</div> 
<hr>

</div>


<li><a href="index.php" style='color:white; font-family: Georgia, serif;'>Dashboard</a></li>
<li><a href="deposit.php" style='color:white; font-family: Georgia, serif;'>Make Deposit</a></li>
<li><a href="deposithistory.php" style='color:white; font-family: Georgia, serif;'> Deposits History</a></li>
<li><a href="dash.php" style='color:white; font-family: Georgia, serif;'>Initiate Investment </a></li>
<li> <a href="investhistory.php" style='color:white; font-family: Georgia, serif;'>Investments History</a></li>
<!-- <li><a href="transferFunds.php">Transfer Earnings</a></li> -->



<li><a href="requestwithdrawal.php" style='color:white; font-family: Georgia, serif;'>Request Withdrawal</a></li>

<li><a href="withhistory.php" style='color:white; font-family: Georgia, serif;'> Withdrawals History</a></li>

<!-- <li><a href="transferFunds.php" style='color:white; font-family: Georgia, serif;'>Transfer Earnings</a></li> -->

<li><a href="profile.php" style='color:white; font-family: Georgia, serif;'> My Profile  </a></li>

<li><a href="refer.php" style='color:white; font-family: Georgia, serif;'> Refer a Friend  </a></li>


<li><form method="POST" action="../scripts/loggout.php" id="user_fo">

<button type="submit" name="logoutt" value="LOGOUT" id="log" style='padding:8px; border:none; width:90px;  color:blue; font-weight:bold;'> LOGOUT
</button>

</form></li>
</ul>

</nav>


<div id="left-sidebar" class="sidebar" style='background:#000e2e; color:white;'>
<div class="sidebar-scroll">


<div class="user-account" id='tt'>
<br>

<!-- profile image -->
<!-- <img src="https://www.gravatar.com/avatar/a91294d17661874e7ac70228236d4eff.jpg?s=200&amp;d=mm" class="rounded-circle user-photo" alt="User Profile Picture"> -->

<?php
if($profileimg == ""){

echo "<a href='profile.php'><img src='img/pro.png' class='rounded-circle user-photo' alt='User Profile Picture' width='100'></a>";
}else{

echo "<a href='profile.php'><img src='../uploads/$profileimg' class='rounded-circle user-photo' alt='User Profile Picture' width='100'></a>";
}
?>

<div class="dropdown">
<span style="color: #fff;">Welcome,</span>
<a href="index.php" class="dropdown-toggle user-name"
data-toggle="dropdown"><strong style="color: #fff;"><?php echo $username;?></strong></a>

</div> 
<hr>

</div>


<!-- Tab panes -->
<div class="tab-content p-l-0 p-r-0" >
<div class="tab-pane active" id="menu">
<nav id="left-sidebar-nav" class="sidebar-nav">
<ul id="main-menu" class="metismenu">

<li class="active">

<ul>

<li class="active"><a href="index.php" style='color:white; font-family: Georgia, serif;'>Dashboard</a></li>
<!-- <li class="active"><a href="deposithistory.php">My Deposits</a></li> -->
</ul>
</li>


<li class="active">

<ul>

<li class="active"><a href="deposit.php" style='color:white; font-family: Georgia, serif;'>Make Deposit</a></li>
<li class="active"><a href="deposithistory.php" style='color:white; font-family: Georgia, serif;'> Deposits History</a></li>
</ul>
</li>



<li class="active">

<ul>

<li class="active"><a href="dash.php" style='color:white; font-family: Georgia, serif;'>Investment Plans</a></li>
<li class="active"><a href="investhistory.php" style='color:white; font-family: Georgia, serif;'>Investments History</a></li>
</ul>
</li>




<li class="active">
<!-- <a href="dash.php" class="has-arrow"><i class="icon-list"></i> <span>Withdrawal</span></a> -->
<ul>
<!--                                 
<li class="active"><a href="addbtc.php" style='color:white;'>Add Wallet Address</a>
</li> -->
<li class="active"><a href="requestwithdrawal.php" style='color:white; font-family: Georgia, serif;'>Request Withdrawal</a></li>
<li class="active"><a href="withhistory.php" style='color:white; font-family: Georgia, serif;'> Withdrawals History</a></li>




<!-- <li class="active"><a href="transferFunds.php" style='color:white; font-family: Georgia, serif;'>Transfer Earnings</a></li> -->

</ul>
</li>

<!-- <li>
<a href="dash/payouts"><i class="icon-notebook"></i> <span>My Payouts</span></a>
</li> -->
<li>
<a href="profile.php"><i style='color:white; font-family: Georgia, serif;' class="icon-user"></i>
<span style='color:white; font-family: Georgia, serif;'>My Profile</span></a>
</li>
<li>
<a href="refer.php"><i style='color:white; font-family: Georgia, serif;' class="icon-share"></i> <span style='color:white; font-family: Georgia, serif; '>Refer a Friend</span></a>
</li>

<li style="border-top: 1px solid #ccc;">
<li>

<form action="../scripts/loggout.php" method="POST" id="user_fo"><input type="submit" name="logoutt" value="LOGOUT" id="log" style="padding:10px;border:none; background: white; color:#000e2e; font-weight:bold; cursor: pointer; position: relative;left: 60px;top: 10px;"></form>

</li>
</li>



</ul>
</nav>
</div>


</div>
</div>
</div>    

