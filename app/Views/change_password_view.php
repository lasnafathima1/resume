<?= $this->extend("base");?>

<?= $this->section("content");?>
<span>Welcome to <?= ucfirst($userdata->username); ?></span>

<div clas="container">
<div class="row">
<div class="col-md-12">

	<h1>Change password</h1>
<?php if(isset($validation)):?>
	<div class='alert alert-danger'>
	<?= $validation->listErrors();?>
</div>
<?php endif;?>

<?php if(session()->getTempdata('success')): ?>
<div class="alert alert-success"><?= session()->getTempdata('success'); ?></div>
<?php endif;?>


<?php if(session()->getTempdata('error')): ?>
<div class="alert alert-danger"><?= session()->getTempdata('error'); ?></div>
<?php endif;?>




<?= form_open(); ?>
<div class="form-group">
	<label>Enter Old Password</label>
	<input type="password"name="old_password" class="form-control">
</div>


<div class="form-group">
	<label>New Password</label>
	<input type="password"name="new_password" class="form-control">
</div>

<div class="form-group">
	<label>Confirm New Password</label>
	<input type="password"name="confirm_new_password" class="form-control">
</div>


<div class="form-group">
	
	<input type="submit" value="Update"name="update" class="form-control">
</div>


<?= form_open();?>

</div>

</div>

</div>



<?= $this->endSection()?>