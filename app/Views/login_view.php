<?= $this->extend("base");?>

<?= $this->section("content");?>

<?php if(isset($validation)):?>
    <div class="alert alert-danger">
<?= $validation->listErrors() ?>
</div>
<?php endif;?>

<?php if(isset($error)):?>
    <?= $error;?>
<?php endif;?>


<?php  if(session()->getTempdata('error')):        ?>
<div class='alert alert-danger'><?= session()->getTempdata('error'); ?></div>
<?php
endif;?>


<?= form_open(); ?>
<div class='form-group'>
<section id="banner" style="background-attachment: fixed;background-size:100% 100%;">
<?=$this->include("layouts/navbar");?>

<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-0 mx-auto"style="margin-top:0px;">
    <div class="card card0 border-0"style="background: rgba(255, 255, 255, 0.0);">
        <div class="row d-flex"style="background: rgba(255, 255, 255, 0.0);">
   
            <div class="col-lg-6"style="margin:auto;background: rgba(255, 255, 255, 0.0);">
                <div class="card2 card border-0 px-4 py-5"style="background: rgba(255, 255, 255, 0.6);border-radius:5%;">
                    <div class="row mb-4 px-3"style="background: rgba(255, 255, 255, 0.0);">
                        <h6 class="mb-0 mr-4 mt-2">Login with</h6>

                        <div class="facebook text-center mr-3">
                            <div class="fa fa-facebook"></div>
                        </div>
                   
<?php if (isset($loginButton)):?>
                        <div class="mail text-center mr-3">

<a href='<?= $loginButton; ?>'>
                            <div class="fa fa-envelope"></div>
</a>


                        </div>
                          <?php endif;?>
                    </div>
                    <div class="row px-3 mb-4">
                        <div class="line"></div> <small class="or text-center">Or</small>
                        <div class="line"></div>
                    </div>
                   
   <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Email</h6>
                        </label> <input class="mb-4" type="text" name="email" placeholder="Enter a valid email address"> </div>

<div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Password</h6>
                        </label> <input class="mb-4" type="password" name="password" placeholder="Enter Password"> </div>



                    <div class="row px-3 mb-4">
                        <div class="custom-control custom-checkbox custom-control-inline"> <input id="chk1" type="checkbox" name="chk" class="custom-control-input"> <label for="chk1" class="custom-control-label text-sm">Remember me</label> </div> <a href="<?=base_url()?>/Log/forgot_password" class="ml-auto mb-0 text-sm">Forgot Password?</a>
                    </div>
                    <div class="row mb-3 px-3">

                     <button class="glow-on-hover"type="submit" class="btn btn-blue text-center" name="log"style="display: block;margin:auto;margin-top:5%;color:white;background:linear-gradient(to right,#302350,#bb0000)">Login</button> 

                 </div>
                    <div class="row mb-4 px-3"> <small class="font-weight-bold">Don't have an account? <a class="text-danger ">Register</a></small> </div>
                </div>

            </div>
           <div class="col-md-6">
    <img src="<?=base_url()?>/public/assests/images/login1.png"style="margin-top:10px;margin-left:20px;width:100%;height:90%;padding-bottom: 0rem !important;">

</div>
        </div>
    

</div>

</div>
<?= form_close(); ?>

<br><br><br>
<?= $this->endSection()?>