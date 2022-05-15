<?php $page_session=\Config\Services::session(); ?>
<?= $this->extend("base");?>

<?= $this->section("content");?>
<?php
if($page_session->getTempdata('success')):?>
<div class='alert alert-success'><?= $page_session->getTempdata('success'); ?></div>
<?php
endif;
?>

<?php
if($page_session->getTempdata('error')):?>
<div class='alert alert-danger'><?= $page_session->getTempdata('error'); ?></div>
<?php
endif;
?>




<?= form_open(); ?>
<div class='form-group'>
<section id="banner" style="background-attachment: fixed;background-size:100% 100%;">
<?=$this->include("layouts/navbar");?>

<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-0 mt-3 mx-auto">
    <div class="card card0 border-0"style="background: rgba(255, 255, 255, 0.0);">
        <div class="row d-flex"style="background: rgba(255, 255, 255, 0.0);">
       <div class="col-md-6">
    <img src="<?=base_url()?>/public/assests/images/image3.png"style="margin-top:10px;margin-left:20px;width:80%;height:80%;padding-bottom: 0rem !important;">

</div>


            <div class="col-lg-6"style="background: rgba(255, 255, 255, 0.0);">
                <div class="card2 card border-0 px-4 py-0"style="background: rgba(255, 255, 255, 0.6);border-radius:5%;">
                    <div class="row mb-0 px-3"style="background: rgba(255, 255, 255, 0.0);">
                        <h6 class="mb-0 mr-4 mt-1"></h6>
                        
                     
                    </div>
                    <div class="row px-3 mb-2">
                        
                    </div>
                   
<div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Username</h6>
                        </label> <input class="mb-4" type="text" name="username" placeholder="Enter Username"value='<?= set_value('username')?>'> 
                       <span class="text-danger"><?= display_error($validation,'username')  ?></span>
                    </div>

   <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Email</h6>
                        </label> <input class="mb-4" type="text" name="email" placeholder="Enter a valid email address"value='<?= set_value('email')?>'> 
 <span class="text-danger"><?= display_error($validation,'email')  ?></span>

                    </div>

<div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Password</h6>
                        </label> <input class="mb-4" type="password" name="password" placeholder="Enter Password"value='<?= set_value('password')?>'> 
 <span class="text-danger"><?= display_error($validation,'password')  ?></span>
                    </div>

                  
   <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Confirm Password</h6>
                        </label> <input class="mb-4" type="password" name="cpassword" placeholder="Confirm Password"value='<?= set_value('cpassword')?>'>
 <span class="text-danger"><?= display_error($validation,'cpassword')  ?></span>
                         </div>

<div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Mobile</h6>
                        </label> <input class="mb-4" type="text" name="mobile" placeholder="Enter Mobile"value='<?= set_value('mobile')?>'>
 <span class="text-danger"><?= display_error($validation,'mobile')  ?></span>
                         </div>

                    <div class="row px-3 mb-4">
                        <div class="custom-control custom-checkbox custom-control-inline"> <input id="chk1" type="checkbox" name="chk" class="custom-control-input"> <label for="chk1" class="custom-control-label text-sm">Remember me</label> </div> <a href="#" class="ml-auto mb-0 text-sm">Forgot Password?</a>
                    </div>
                    <div class="row mb-1 px-3">

                     <button class="glow-on-hover"type="submit" class="btn btn-blue text-center" name="register" value="Register"style="display: block;margin:auto;margin-top:0%;color:white;background:linear-gradient( to right,#302350,#bb0000)">Register</button> 

                 </div>
                    <div class="row mb-4 px-3"> <small class="font-weight-bold">Don't have an account? <a class="text-danger ">Register</a></small> </div>
                </div>

            </div>
           
        </div>
    

</div>

</div>
<?= form_close(); ?>

<br><br><br>
<?= $this->endSection()?>