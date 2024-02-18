<?php
// include 'scripts/db.php';
include 'adminhead.php';



if(isset($_POST['edit'])){

                        $username=$_POST['username'];


                        $sql = "SELECT * FROM users WHERE username ='$username';";
                        $result = mysqli_query($conn,$sql);
                        $result_checker = mysqli_num_rows($result);

                if($result_checker > 0){

                    while($data = mysqli_fetch_assoc($result)){



                        
                    $id = $data['id'];
                    $acctname = $data['acctname'];
                    $acctnumber = $data['acctnumber'];
                    $email = $data['email'];
                    $tel = $data['tel'];
                    $accttype = $data['accttype'];
                    $birth = $data['birth'];
                    $addr = $data['addr'];
                    $nation = $data['nation'];
                    $city = $data['city'];
                    $state = $data['state'];
                    $marital = $data['marital'];
                    $gender = $data['gender'];
                    $username = $data['username'];
                    $pwd = $data['pwd'];
                    $pin = $data['pin'];
                    $acctbal = $data['acctbal'];
                    $book = $data['book'];								
                    $tac = $data['tac'];
                    $tax = $data['tax'];
                    $ip = $data['ip'];
                    



                        $_SESSION['acctname'] = $data['acctname'];
                         $_SESSION['acctnumber'] = $data['acctnumber'];
                          $_SESSION['email'] = $data['email'];
                           $_SESSION['tel'] = $data['tel'];
                            $_SESSION['accttype'] = $data['accttype'];
                             $_SESSION['birth'] = $data['birth'];
                              $_SESSION['addr'] = $data['addr'];
                               $_SESSION['nation'] = $data['nation'];
                                $_SESSION['city'] = $data['city'];
                                 $_SESSION['state'] = $data['state'];
                                  $_SESSION['marital'] = $data['marital'];
                                   $_SESSION['gender'] = $data['gender'];
                                   $_SESSION['username'] = $data['username'];
                                     $_SESSION['pwd'] = $data['pwd'];

                                      $_SESSION['pin'] = $data['pin'];
                                  $_SESSION['acctbal'] = $data['acctbal'];
                                   $_SESSION['book'] = $data['book'];
                                   $_SESSION['tac'] = $data['tac'];
                                     $_SESSION['tax'] = $data['tax'];
                                      $_SESSION['ip'] = $data['ip'];
                                    



                        $acctnam =$_SESSION['acctname'];
                         $acctnumbe =  $_SESSION['acctnumber'];
                         $emai = $_SESSION['email'];
                         $te = $_SESSION['tel'];
                         $accttyp = $_SESSION['accttype'];
                         $birt = $_SESSION['birth'];
                         $add = $_SESSION['addr'];
                         $natio = $_SESSION['nation'] ;
                         $cit =  $_SESSION['city'];
                         $stat = $_SESSION['state'];
                         $marita = $_SESSION['marital'];
                         $gende = $_SESSION['gender'];
                         $usernam=  $_SESSION['username'];
                         $pw =  $_SESSION['pwd'];

                          $pi = $_SESSION['pin'];
                         $acctba = $_SESSION['acctbal'];
                         $boo = $_SESSION['book'];
                         $ta=  $_SESSION['tac'];
                         $taxx =  $_SESSION['tax'];
                          $i =  $_SESSION['ip'];



                             echo "
                           
                             <body style='background-color:#4e73df'>
                             
                             <div class='container'>
                             <div class='container'>
                                       
                             <div class='card o-hidden border-0 shadow-lg my-5'>
                               <div class='card-body p-0'>
                                 <!-- Nested Row within Card Body -->
                                 <div class='row'>
                                   
                                   <div class='col-lg-7'>
                                     <div class='p-5'>
                                       <div class='text-center'>
                                         <h1 class='h4 text-gray-900 mb-4'>Update Customer Informations....</h1>
                                         
                                       </div>
         

            <form method='POST' class='user' action='scripts/adminupdatescript.php'>

                           <div class='form-group row'>
                            
                           <div class='col-sm-6 mb-3 mb-sm-0'>
                           <label style='color:black'>Account name</label>
                    <input type='text' class='form-control form-control-user' name='acctname' value='$acctnam' placeholder='account name'> 
            </div>

            <div class='col-sm-6'>
            <label style='color:black'>Email Address</label>
         <input type='text' class='form-control form-control-user' name='email'  value='$emai' placeholder='email'> 
                     </div>
                     </div>

                     <div class='form-group'>
                     <div>
                     <label style='color:black'>Phone Number</label>
                   <input type='text' name='tel' class='form-control form-control-user' value='$te' placeholder='phone'> 
                     </div>
                     </div>

                     <div class='form-group row'>
               <div class='col-sm-6 mb-3 mb-sm-0'>
               <label style='color:black'>Account Type</label>
                    <input type='text' name='accttype' class='form-control form-control-user' value='$accttyp' placeholder='account type'> 
                    </div>

                    <div class='col-sm-6'>
                    <label style='color:black'>Date of Birth</label>
                   <input type='date' name='birth' class='form-control form-control-user' value='$birt' placeholder='date of birth'> 
                   </div>
                   </div>

                   <div class='form-group row'>
                  <div class='col-sm-6'>
                  <label style='color:black'>Address</label>
                 <input type='text' name='addr' class='form-control form-control-user' value='$add'> 
                 </div>

                 <div class='col-sm-6'>
                 <div>
                 <label style='color:black'>Country</label>
                   <input type='text' name='nation' class='form-control form-control-user' value='$natio' placeholder='country'> 
                   </div>
                   </div>
                  </div>

                  <div class='form-group'>
                      <div>
                      <label style='color:black'>City</label>
                    <input type='text' name='city' class='form-control form-control-user' value='$cit' placeholder='city'> 
                    </div>
                    </div>

                    <div class='form-group row'>
                      <div class='col-sm-6'>
                      <label style='color:black'>State</label>
                <input type='text' name='state' class='form-control form-control-user' value='$stat' placeholder='state' > 
                </div>
                
                <div class='col-sm-6'>
                <label style='color:black'>Marital Status</label>
                   <input type='text' name='marital' class='form-control form-control-user' value='$marita' placeholder='marital'> 
                   </div>
                   </div>

                   <div class='form-group row'>
                    <div class='col-sm-6'>
                    <label style='color:black'>Gender</label>
                 <input type='text' name='gender' class='form-control form-control-user' value='$gende' placeholder='gender'> 
                 </div>

                 <div class='col-sm-6'>
                 <label style='color:black'>Username</label>
                   <input type='text' name='username' class='form-control form-control-user' value='$usernam' placeholder='username'>
                   </div>
                   </div>

                   <div class='form-group row'>
                   <div class='col-sm-6'>
                   <label style='color:black'>Password</label>
                <input type='password' name='pwd' class='form-control form-control-user' value='$pw' placeholder='password'>
                </div>

                <div class='col-sm-6'>
                <label style='color:black'>Pin</label>
                 <input type='password' name='pin' class='form-control form-control-user' value='$pi' placeholder='pin'> 
                 </div>
                 </div>

                 <div class='form-group row'>
                    <div class='col-sm-6'>
                    <label style='color:black'>Account Balance</label>
                    <input type='text' name='acctbal' class='form-control form-control-user' value='$acctba' placeholder='account balance'>
                        </div>
                    <br>
                  <div class='col-sm-6'>   
                  <label style='color:black'>Book</label>
            <input type='text' name='book' class='form-control form-control-user' value='$boo' placeholder='book'>
                        </div>
                        </div>

                        <div class='form-group row'>
                        <div class='col-sm-6'>
                        <label style='color:black'>Tac Code</label>
                 <input type='text' name='tac' class='form-control form-control-user' value='$ta' placeholder='tac code'> 
                     </div>

                     <div class='col-sm-6'>
                     <label style='color:black'>Tax Code</label>
                    <input type='text' name='tax' class='form-control form-control-user' value='$taxx' placeholder='tax code'> 
                        </div>
                        </div>

                        <div class='form-group'>
                        <label style='color:black'>Ip Number</label>
                 <input type='text' name='ip' class='form-control form-control-user' value='$i' placeholder='ip'> 
                        </div>

                    <input type='submit' name='adminupdate' value='UPDATE' class='btn btn-success'> 

                    <a class='btn btn-danger' href='update.php' > CLOSE </a>
                


            </form>
            
        </div>
   </body>
   </html>
";

                




        
















                     }




                }
}				


?>




