<?= $this->extend("base");?>

<?= $this->section("content");?>
<section id="banner" style="background-image: url(<?= base_url(); ?>/public/assests/images/log5.jpg);background-attachment: fixed;background-size:100% 100%;">
<?=$this->include("layouts/navbar");?>
<div class="container">
	<h1>Activation Process</h1>

<?php if(isset($error)):   ?>
	<div class="alert alert-danger">
		<?= $error; ?>
	</div>
<?php endif;?>
</div>

	
<?php if(isset($success)):   ?>
	<div class="alert alert-success">
		<?= $success ?>
	</div>
<?php endif;?>
</div>



<?= $this->endSection()?>