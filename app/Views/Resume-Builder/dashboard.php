<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta http-equiv="pragma" content="no-cache" />
      <title>RESUME PRO</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <link href="<?= base_url(); ?>/new2/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/new2/css/style.css" rel="stylesheet">

 
  <!-- Firebase App is always required and must be first -->
  <script src="https://www.gstatic.com/firebasejs/5.9.0/firebase-app.js"></script>
  <!-- Add additional services that you want to use -->
  <script src="https://www.gstatic.com/firebasejs/5.9.0/firebase-auth.js"></script>
  <script src="https://www.gstatic.com/firebasejs/5.9.0/firebase-database.js"></script>
  <script src="https://www.gstatic.com/firebasejs/5.9.0/firebase-firestore.js"></script>
  <script src="https://www.gstatic.com/firebasejs/5.9.0/firebase-messaging.js"></script>
  <script src="https://www.gstatic.com/firebasejs/5.9.0/firebase-functions.js"></script>
  <script src="functions.js"></script>
  <script src="app.js"></script>
</head>

<body>

  <!--
  <a href="<?= base_url(); ?>/new2/helpPage.html" class="my-help"><b>?</b></a>
  <!--Main Navigation-->

  <header class="my-fixed-tab">



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
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255,255,255, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
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






  </header>
  <!--Main Navigation-->







  <div id="prev-cover" class="preview-cover">
    <div id="preview-div" class="my-quickpreview">
      <img id="preview-frame" src="" style="width: 100%; overflow:hidden;">
    </div>
  </div>

  <a id="close-preview" class="my-close-preview">X</a>

  <!--Main layout-->
  <main class="my-main" id="home" style="min-height:1500px">
    <!--Main container-->
    <div class="container">
      <!--Grid row-->
      <div class="row">
        <div class="col-md-4"style="margin-bottom:10px;">
          <div class="card text-center black-transparent"style="background-color:#302350;color:white">
            <div class="card-body">
              <h4 class="card-title">RESUME TEMPLATE 1</h4>
             
              <a id="prev-resume-daiict" title="Click to preview" href="#">
                <img style="height:400px;" src="<?= base_url(); ?>/new2/img/1.png" class="card-img-top get-big">
              </a>
              <a style="background:linear-gradient(to right,#302350,#bb0000);color:white" id="select-link-1" href="<?=base_url()?>/Temp1/Temp1" class="btn-select fontwhite">Select</a>
            </div>
          </div>
        </div>
<br>
        <div class="col-md-4" style="margin-bottom:10px;">
          <div class="card text-center black-transparent"style="background-color:#302350;color:white">
            <div class="card-body">
               <h4 class="card-title">RESUME TEMPLATE 2</h4>
        
              <a id="prev-resume-daiict-classic" title="Click to preview">
                <img  style="height:400px;"src="<?= base_url(); ?>/new2/img/2.png" class="card-img-top get-big" alt=".......">
              </a>
              <a style="background:linear-gradient(to right,#302350,#bb0000);color:white" id="select-link-2" href="<?=base_url()?>/Temp1/Temp2" class="btn-select fontwhite">Select</a>
            </div>
          </div>
        </div>


        <div class="col-md-4"  style="margin-bottom:10px;">
          <div class="card text-center black-transparent"style="background-color:#302350;color:white">
            <div class="card-body">
              <h4 class="card-title">RESUME TEMPLATE 3</h4>
   
              <a id="prev-resume-daiict-classic" title="Click to preview">
                <img  style="height:400px;"src="<?= base_url(); ?>/new2/img/3.png" class="card-img-top get-big" alt=".......">
              </a>
              <a style="background:linear-gradient(to right,#302350,#bb0000);color:white" id="select-link-2" href="<?=base_url()?>/Temp1/Temp3" class="btn-select fontwhite">Select</a>
            </div>
          </div>
        </div>


       <!-- <div class="col-md-4">
          <div class="card text-center black-transparent">
            <div class="card-body">
              <h4 class="card-title">Elon Musk Style</h4>
              <p class="card-text">Standard one page resume. Best suited for professional employees.</p>
              <a id="prev-resume-elon-musk" title="Click to preview" href="#">
                <img style="height:400px;"src="<?= base_url(); ?>/new2/img/2.png" class="card-img-top get-big" alt=".......">
              </a>
              <a style="background:linear-gradient(to right,#302350,#bb0000);color:white" id="select-link-3" href="<?=base_url()?>/Temp1/Temp5">Select</a>
            </div>
          </div>
        </div>
      -->




        <div class="col-md-4"  style="margin-bottom:10px;">
          <div class="card text-center black-transparent"style="background-color:#302350;color:white">
            <div class="card-body">
               <h4 class="card-title">RESUME TEMPLATE 4</h4>
              
              <a id="prev-resume-daiict-classic" title="Click to preview">
                <img  style="height:400px;"src="<?= base_url(); ?>/new2/img/4.png" class="card-img-top get-big" alt=".......">
              </a>
              <a style="background:linear-gradient(to right,#302350,#bb0000);color:white"  id="select-link-2" href="<?=base_url()?>/Temp1/Temp4" class="btn-select fontwhite">Select</a>
            </div>
          </div>
        </div>



   <div class="col-md-4" style="margin-bottom:10px;">
          <div class="card text-center black-transparent"style="background-color:#302350;color:white">
            <div class="card-body">
              <h4 class="card-title">RESUME TEMPLATE 5</h4>
           
              <a id="prev-resume-daiict-classic" title="Click to preview">
                <img style="height:400px;" src="<?= base_url(); ?>/new2/img/5.png" class="card-img-top get-big" alt=".......">
              </a>
              <a  style="background:linear-gradient(to right,#302350,#bb0000);color:white" id="select-link-2" href="<?=base_url()?>/Temp1/Temp5" class="btn-select fontwhite">Select</a>
            </div>
          </div>
        </div>


   <div class="col-md-4" style="margin-bottom:10px;">
          <div class="card text-center black-transparent"style="background-color:#302350;color:white">
            <div class="card-body">
              <h4 class="card-title">RESUME TEMPLATE 6</h4>

              <a id="prev-resume-daiict-classic" title="Click to preview">
                <img style="height:400px;" src="<?= base_url(); ?>/new2/img/6.png" class="card-img-top get-big" alt=".......">
              </a>
              <a style="background:linear-gradient(to right,#302350,#bb0000);color:white"  id="select-link-2" href="<?=base_url()?>/Temp1/Temp6" class="btn-select fontwhite">Select</a>
            </div>
          </div>
        </div>



   <div class="col-md-4" style="margin-bottom:10px;">
          <div class="card text-center black-transparent"style="background-color:#302350;color:white">
            <div class="card-body">
               <h4 class="card-title">RESUME TEMPLATE 7</h4>
      
              <a id="prev-resume-daiict-classic" title="Click to preview">
                <img style="height:400px;" src="<?= base_url(); ?>/new2/img/7.png" class="card-img-top get-big" alt=".......">
              </a>
              <a style="background:linear-gradient(to right,#302350,#bb0000);color:white"  id="select-link-2" href="<?=base_url()?>/Temp1/Temp7" class="btn-select fontwhite">Select</a>
            </div>
          </div>
        </div>




   <div class="col-md-4" style="margin-bottom:10px;">
          <div class="card text-center black-transparent"style="background-color:#302350;color:white">
            <div class="card-body">
              <h4 class="card-title">RESUME TEMPLATE 8</h4>
    
              <a id="prev-resume-daiict-classic" title="Click to preview">
                <img style="height:400px;" src="<?= base_url(); ?>/new2/img/8.png" class="card-img-top get-big" alt=".......">
              </a>
              <a style="background:linear-gradient(to right,#302350,#bb0000);color:white"  id="select-link-2" href="<?=base_url()?>/Temp1/Temp8" class="btn-select fontwhite">Select</a>
            </div>
          </div>
        </div>



   <div class="col-md-4" style="margin-bottom:10px;">
          <div class="card text-center black-transparent"style="background-color:#302350;color:white">
            <div class="card-body">
              <h4 class="card-title">RESUME TEMPLATE 9</h4>
        
              <a id="prev-resume-daiict-classic" title="Click to preview">
                <img style="height:400px;" src="<?= base_url(); ?>/new2/img/9.png" class="card-img-top get-big" alt=".......">
              </a>
              <a style="background:linear-gradient(to right,#302350,#bb0000);color:white"  id="select-link-2" href="<?=base_url()?>/Temp1/Temp9" class="btn-select fontwhite">Select</a>
            </div>
          </div>
        </div>


   <div class="col-md-4" style="margin-bottom:10px;">
          <div class="card text-center black-transparent"style="background-color:#302350;color:white">
            <div class="card-body">
               <h4 class="card-title">RESUME TEMPLATE 10</h4>
          
              <a id="prev-resume-daiict-classic" title="Click to preview">
                <img style="height:400px;" src="<?= base_url(); ?>/new2/img/10.png" class="card-img-top get-big" alt=".......">
              </a>
              <a style="background:linear-gradient(to right,#302350,#bb0000);color:white"  id="select-link-2" href="<?=base_url()?>/Temp1/Temp10" class="btn-select fontwhite">Select</a>
            </div>
          </div>
        </div>


<div class="col-md-4" style="margin-bottom:10px;">
          <div class="card text-center black-transparent"style="background-color:#302350;color:white">
            <div class="card-body">
               <h4 class="card-title">RESUME TEMPLATE 11</h4>
          
              <a id="prev-resume-daiict-classic" title="Click to preview">
                <img style="height:400px;" src="<?= base_url(); ?>/new2/img/11.png" class="card-img-top get-big" alt=".......">
              </a>
              <a style="background:linear-gradient(to right,#302350,#bb0000);color:white"  id="select-link-2" href="<?=base_url()?>/Temp1/Temp11" class="btn-select fontwhite">Select</a>
            </div>
          </div>
        </div>





<div class="col-md-4" style="margin-bottom:10px;">
          <div class="card text-center black-transparent"style="background-color:#302350;color:white">
            <div class="card-body">
               <h4 class="card-title">RESUME TEMPLATE 12</h4>
          
              <a id="prev-resume-daiict-classic" title="Click to preview">
                <img style="height:400px;" src="<?= base_url(); ?>/new2/img/12.png" class="card-img-top get-big" alt=".......">
              </a>
              <a style="background:linear-gradient(to right,#302350,#bb0000);color:white"  id="select-link-2" href="<?=base_url()?>/Temp1/Temp12" class="btn-select fontwhite">Select</a>
            </div>
          </div>
        </div>





      </div>
    </div>
    <!--Main container-->
  </main>
  <!--Main layout-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script src="<?= base_url(); ?>/new2/app.js"></script>
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <script>
    var previewisON = false;

    document.getElementById('prev-resume-daiict').onclick =
      function () {
        previewisON = true;
        console.log(1);
        document.getElementById('preview-frame').src="<?= base_url(); ?>/new2/img/resumes/daiict.png";
        document.getElementById('preview-div').style.opacity = 1;
        document.getElementById('prev-cover').style.opacity = 1;
        document.getElementById('preview-div').style.zIndex = 1000;
        document.getElementById('prev-cover').style.zIndex = 1000;
        document.getElementById('close-preview').style.opacity = 1;
        document.getElementById('close-preview').style.zIndex = 1000;
      };

    document.getElementById('prev-resume-daiict-classic').onclick =
      function () {
        previewisON = true;
        console.log(1);
        document.getElementById('preview-frame').src="<?= base_url(); ?>/new2/img/resumes/daiict_classic.png";
        document.getElementById('preview-div').style.opacity = 1;
        document.getElementById('prev-cover').style.opacity = 1;
        document.getElementById('preview-div').style.zIndex = 1000;
        document.getElementById('prev-cover').style.zIndex = 1000;
        document.getElementById('close-preview').style.opacity = 1;
        document.getElementById('close-preview').style.zIndex = 1000;
      };
    document.getElementById('prev-resume-elon-musk').onclick =
      function () {
        previewisON = true;
        console.log(1);
        document.getElementById('preview-frame').src="<?= base_url(); ?>/new2/img/resumes/elon-musk-one-page-resume.png";
        document.getElementById('preview-div').style.opacity = 1;
        document.getElementById('prev-cover').style.opacity = 1;
        document.getElementById('preview-div').style.zIndex = 1000;
        document.getElementById('prev-cover').style.zIndex = 1000;
        document.getElementById('close-preview').style.opacity = 1;
        document.getElementById('close-preview').style.zIndex = 1000;
      };
    document.getElementById('close-preview').onclick =
      function () {
        if (previewisON) {
          document.getElementById('preview-frame').src = "";
          document.getElementById('preview-div').style.opacity = 0;
          document.getElementById('prev-cover').style.opacity = 0;
          document.getElementById('preview-div').style.zIndex = -1;
          document.getElementById('prev-cover').style.zIndex = -1;
          document.getElementById('close-preview').style.opacity = 0;
          document.getElementById('close-preview').style.zIndex = -1;
          previewisON = false;
        }
      };
  </script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="<?= base_url(); ?>/new2/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="<?= base_url(); ?>/new2/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="<?= base_url(); ?>/new2/js/mdb.js"></script>
</body>


</html>