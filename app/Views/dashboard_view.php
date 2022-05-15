<?= $this->extend("base");?>

<?= $this->section("content");?>

<?php if(session()->has('google_user')): 
$uinfo=session()->get('google_user');
  ?>
<img src="<?= $uinfo['profile_pic']; ?>"height="100" width="100">
<p>Name:<?= $uinfo['first_name'];?><?= $uinfo['last_name']?></p>
<p>Email:<?= $uinfo['email']; ?></p>

<?php else:?>


<?php if($userdata->profile_pic !=''):?>
	<img src='<?= $userdata->profile_pic; ?>' height='100' width='100'>
	<?php else: ?>
		<img src='<?= base_url()?>/public/assests/images/2rr.jpg' height='50'>
	<?php endif; ?>

<h1>Welcome to <?= ucfirst($userdata->username);?></h1>
<a href="<?= base_url()?>/dashboard/logout">Logout</a>
<?php endif;?>

<?= $this->endSection()?>