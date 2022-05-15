<?= $this->extend("base");?>

<?= $this->section("content");?>

<?php if(isset($validation)):?>
    <div class="alert alert-danger">
<?= $validation->listErrors() ?>
</div>
<?php endif;?>
<?php  if(session()->getTempdata('error')):        ?>
<div class='alert alert-danger'><?= session()->getTempdata('error'); ?></div>
<?php
endif;?>
<?php  if(session()->getTempdata('success')):        ?>
<div class='alert alert-success'><?= session()->getTempdata('success'); ?></div>
<?php
endif;?>

<?= form_open(); ?>
<div class='form-group'>
<section id="banner" style="background-attachment: fixed;background-size:100% 100%;">
<?=$this->include("layouts/navbar");?>

<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-0 mx-auto">
    <div class="card card0 border-0"style="background: rgba(255, 255, 255, 0.0);">
        <div class="row d-flex"style="background: rgba(255, 255, 255, 0.0);">
   
            <div class="col-lg-6"style="margin:auto;background: rgba(255, 255, 255, 0.0);">
                <div class="card2 card border-0 px-4 py-5"style="background: rgba(255, 255, 255, 0.6);border-radius:5%;">
                    <div class="row mb-4 px-3"style="background: rgba(255, 255, 255, 0.0);">
                       

                        

                    </div>
                    <div class="row px-3 mb-4">
                        <div class="line"></div> <small class="or text-center"></small>
                        <div class="line"></div>
                    </div>
                   
  

<div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Email</h6>
                        </label> <input class="mb-4" type="text" name="email" placeholder="Enter Email"> </div>



                    <div class="row px-3 mb-4">
                        <div class="custom-control custom-checkbox custom-control-inline"> <input id="chk1" type="checkbox" name="chk" class="custom-control-input"> <label for="chk1" class="custom-control-label text-sm">Remember me</label> </div> 
                    </div>
                    <div class="row mb-3 px-3">

                     <button class="glow-on-hover"type="submit" class="btn btn-blue text-center" name="log"style="display: block;margin:auto;margin-top:5%;color:white;background:linear-gradient(to right,#000000,#bb0000)">Reset password</button> 

                 </div>
                    <div class="row mb-4 px-3"> <small class="font-weight-bold">Don't have an account? <a class="text-danger ">Register</a></small> </div>
                </div>

            </div>
           <div class="col-lg-6"style="margin:auto;background: rgba(255, 255, 255, 0.0);">

            <img src="<?=base_url()?>/public/assests/images/passw.png"style="margin-top:60px;margin-left:20px;width:70%;height:60%;padding-bottom: 0rem !important;">

            </div>
        </div>
    

</div>

</div>
<?= form_close(); ?>

<br><br><br>
<?= $this->endSection()?>