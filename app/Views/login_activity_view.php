<?= $this->extend("base");?>

<?= $this->section("content");?>

<?php if($userdata->profile_pic !=''):?>
	<?php else: ?>
		<img src='<?= base_url()?>/public/assests/images/2rr.jpg' height='50'>
	<?php endif; ?>

<h1>Welcome to <?= ucfirst($userdata->username);?></h1>
<a href="<?= base_url()?>/dashboard/logout">Logout</a>


<h1>Login activity</h1>

<?php  if(count($login_info)>0): ?>
<table class="table"><tr>
	<th>Id</th>
	<th>Login time</th>
	<th>Logout time</th>
	<th>User agent</th>
	<th>Ip address</th>
</tr>
<?php foreach($login_info as $info):  ?>
	<tr>
	<td><?= $info->id; ?></td>	
<td><?= date("l d M Y h:i:s a",strtotime($info->login_time)); ?></td>
<td><?= $info->logout_time; ?></td>
<td><?= $info->agent; ?></td>
<td><?= $info->ip; ?></td>
	</tr>
<?php endforeach; ?>
</table>

<?php else: ?>
<h5>Sorry no information found</h5>
<?php endif;?>

<?= $this->endSection()?>