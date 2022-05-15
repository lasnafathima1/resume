<?= $this->extend("base");?>

<?= $this->section("content");?>
<span>Welcome to <?= ucfirst($userdata->username)  ;?></span>


<div class="container">
<div class="row">
	<div class="col-md-12">
<h1>Edit profile</h1>

<?php  if(session()->getTempdata('success')):        ?>
<div class='alert alert-success'><?= session()->getTempdata('success'); ?></div>
<?php
endif;?>


<?php  if(session()->getTempdata('error')):        ?>
<div class='alert alert-danger'><?= session()->getTempdata('error'); ?></div>
<?php
endif;?>




<?=form_open();?>
<div class="form-group">
	<label>Username</label>
    <input  type="text" name="username" class="form-control"placeholder="Enter Username"value='<?= $userdata->username;?>'> 
          <span class="text-danger"><?= display_error($validation,'username')  ?></span>
</div>


<div class="form-group">
	<label>Mobile</label>
    <input  type="text" name="mobile" class="form-control"placeholder="Enter Mobile"value='<?= $userdata->mobile;?>'> 
          <span class="text-danger"><?= display_error($validation,'mobile')  ?></span>
</div>



<div class="form-group">
	<input type="submit" class="btn btn-primary" value="Update">
</div>


<?= form_close();?>






	</div>
</div>

	</div>









<?= $this->endSection()?>