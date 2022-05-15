<?= $this->extend("base");?>
<?= $this->section('page_title') ;?>
<span>Welcome to <? ucfirst($userdata->username)  ;?></span>
<?= $this->endsection(); ?>

<?= $this->section("content");?>

<?php if(isset($validation)):?>
	<div class='alert alert-danger'>
	<?= $validation->listErrors();?>
</div>
<?php endif;?>

<?php if(session()->getTempdata('success')) :?>
<div class='alert alert-success'>
	<?= session()->getTempdata('success'); ?>
</div>
<?php endif;?>


<?php if(session()->getTempdata('error')) :?>
<div class='alert alert-danger'>
	<?= session()->getTempdata('error'); ?>
</div>
<?php endif;?>



<h1>Upload avatar</h1>
<?= form_open_multipart();?>
<input type="file" name='avatar' class='form-control'>

<input type="submit" name='upload' value='Upload'>

<?= form_close();?>



<?= $this->endSection()?>