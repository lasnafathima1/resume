
<section id="nav-bar"style="background-color:#302350">

<nav class="navbar navbar-expand-lg  "style="margin-right:10%;margin-left:10%;">

    <a class="ms-auto " href="#"style="padding-bottom: 0rem !important;"><img src="<?=base_url()?>/public/assests/images/nine.png"style="margin-top:10px;margin-left:10px;width:90%;height:80%;padding-bottom: 0rem !important;"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
     <!--<i class="fa fa-bars"></i>-->

    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="<?=base_url()?>/Home"style="color:#fff">Home</a>
        </li>


<style>.navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0,0,0, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
}</style>







<?php if(session()->has("logged_user")|| session()->has('google_user')):?>
 <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="<?=base_url()?>/dashboard" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"style="color:#fff">
          Dashboard
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?= base_url() ?>/dashboard/edit"style="color:#fff">Edit</a>
          <a class="dropdown-item" href="<?= base_url() ?>/dashboard/avatar"style="color:#fff">Upload Avatar</a>
         
          <a class="dropdown-item" href="<?= base_url() ?>/dashboard/change_password"style="color:#fff">Change password</a>
           <a class="dropdown-item" href="<?=base_url()?>/dashboard/login_activity"style="color:#fff">Login activity</a>
        </div>
      </li>












     


<li class="nav-item">
          <a class="nav-link" href="<?=base_url()?>/dashboard/logout"style="color:#fff">Logout</a>
        </li>




  <?php else: ?>
<li class="nav-item">
          <a class="nav-link" href="<?=base_url()?>/Log"style="color:#fff">Login</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?=base_url()?>/Register"style="color:#fff">Register</a>
        </li>
<?php endif;?>







        <!--<li class="nav-item">
          <a class="nav-link">Disabled</a>
        </li>-->
      </ul>
    </div>

</nav>
</section>

<style>.navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255,255,255, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
}</style>

