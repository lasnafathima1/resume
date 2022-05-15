<?= $this->extend("base");?>

<?= $this->section("content");?>
<div class="container">
<h1>Reset Password</h1>


<?php  if(isset($validation)):?>
<div class="alert alert-danger">
	<?= $validation->listErrors()?>
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

<?php if(isset($error)):   ?>
<div class="alert alert-danger"><?= $error;   ;?></div>

	<?php else:?>
<?= form_open();?>


<h1>Enter new password</h1>
<br>
<input type="password" name="pwd">
<br>
<h1>Confirm new password</h1>
<br>
<input type="password" name="cpwd">
<br>
<input type="submit" value="Update">

<?= form_close();?>


	<?php endif;?>





</div>


<?= $this->endSection()?>