
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
                                    <li class="breadcrumb-item"><a href="index.php" style='color:white; font-family: Georgia, serif;'>Dashboard</a></li>
                                                                                                                        <li class="breadcrumb-item"><a
                                                        href="index.php" style='color:white; font-family: Georgia, serif;'>Settings</a>
                                            </li>
                                                                                                                                                                <li class="breadcrumb-item active"
                                                aria-current="page" style='color:#000e2e; font-family: Georgia, serif;'>Profile</li>
                                                                                                                                                                </ul>
                    </div>
                </div>
            </div>

                <div class="row clearfix">



                <div class="col-md-6">
            <div class="card">
                <div class="header">
                    <h2 style='color:#000e2e; font-family: Georgia, serif;'>Edit Profile Details</h2> <br>
                    <p style='color:#000e2e; font-family: Georgia, serif;'>Fields with * are required.</p>
                </div>
                <div class="body">

                    <?php
                        if($profileimg == ""){

                            echo "<a href='profile.php'><img src='img/pro.png' class='rounded-circle user-photo' alt='User Profile Picture' width='100'></a>";
                        }else{

                            echo "<img src='../uploads/$profileimg' class='rounded-circle user-photo' alt='User Profile Picture' width='100'>";
                        }
                    ?>


                

                <br>
                <br>

                    <form method="post" action="../scripts/editprofilescripts.php" enctype="multipart/form-data">
                        <!-- <input type="hidden" name="_token" value="O2x8FMeyS6ilWfUBcHAjr6vk8GqZPKkx52Q46yrJ"> -->

                        <label for="basic-url" style='color:#000e2e; font-family: Georgia, serif;'>First Name</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3"><i style='color:#000e2e;' class="icon-note"></i></span>
                            </div>
                            <input type="text" name="firstname" value="<?php echo $firstname;?>"
                                   class="form-control " style='font-family: Georgia, serif;'>
                            
                            
                        </div>

                        <label for="basic-url" style='color:#000e2e; font-family: Georgia, serif;'>Last Name</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3"><i style='color:#000e2e;' class="icon-note"></i></span>
                            </div>
                            <input type="text" name="lastname" value="<?php echo $lastname;?>"
                                   placeholder="Your last name" class="form-control " style='font-family: Georgia, serif;'>
                            
                            
                        </div>

                        <label for="basic-url" style='color:#000e2e; font-family: Georgia, serif;'>Phone Number</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3"><i style='color:#000e2e;' class="icon-note"></i></span>
                            </div>
                            <input type="text" name="phone" value="<?php echo $phone;?>"
                                   placeholder="Phone Numer" class="form-control " style='font-family: Georgia, serif;'>
                            
                            
                        </div>




                        <label for="basic-url" style='color:#000e2e; font-family: Georgia, serif;'>Country</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3"><i style='color:#000e2e;' class="icon-note"></i></span>
                            </div>
                            <input type="text" name="country" value="<?php echo $country;?>"
                                   placeholder="Your Country" class="form-control " style='font-family: Georgia, serif;'>
                            
                            
                        </div>

                        <label for="basic-url" style='color:#000e2e; font-family: Georgia, serif;'>State</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3"><i style='color:#000e2e;' class="icon-note"></i></span>
                            </div>
                            <input type="text" name="state" value="<?php echo $state;?>"
                                   placeholder="Your state" class="form-control " style='font-family: Georgia, serif;'>
                            
                            
                        </div>

                        <label for="basic-url" style='color:#000e2e; font-family: Georgia, serif;'>City</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3"><i style='color:#000e2e;' class="icon-note"></i></span>
                            </div>
                            <input type="text" name="city" value="<?php echo $city;?>"
                                   class="form-control " placeholder="Your city" style='font-family: Georgia, serif;'>
                            
                            
                        </div>

                    

                        <label for="basic-url" style='color:#000e2e; font-family: Georgia, serif;'>Email</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3"><i style='color:#000e2e;' class="icon-note"></i></span>
                            </div>
                            <input type="email" name="email" value="<?php echo $email;?>"
                                   class="form-control " placeholder="Your email address" style='font-family: Georgia, serif;'>
                            
                            
                        </div>

                         <label for="basic-url" style='color:#000e2e; font-family: Georgia, serif;'>Password</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3"><i style='color:#000e2e;' class="icon-note"></i></span>
                            </div>
                            <input type="text" name="pwd" value="<?php echo $pwd;?>"
                                   class="form-control " placeholder="Your Password" style='font-family: Georgia, serif;'>
                            
                            
                        </div>


<!-- image -->

                        <label for="basic-url" style='color:#000e2e; font-family: Georgia, serif;'>Upload Profile Picture</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3"><i style='color:#000e2e;' class="icon-note"></i></span>
                            </div>
                            <input type="file" name="img"
                                   class="form-control ">
                            
                            
                        </div>








                         <input type="hidden" name="usd" value="<?php echo $usd;?>">
                    <input type="hidden" name="email" value="<?php echo $email;?>">

                        <button type="submit" name="profileupdate" class="btn btn-block btn-success" style='border:none; background:#000e2e; font-family: Georgia, serif;'>Update Profile</button>
                    </form>
                </div>
            </div>
        </div>








    </div>

        </div>
    </div>

</div>

<?php
    include "userfooter.php";
?>