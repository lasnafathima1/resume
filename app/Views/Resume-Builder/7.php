<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link href="<?= base_url(); ?>/new2/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/new2/css/style.css" rel="stylesheet">

       <title>RESUME PRO</title>
    

    <!-- Firebase App is always required and must be first -->
    <script src="https://www.gstatic.com/firebasejs/5.9.0/firebase-app.js"></script>

    <!-- Add additional services that you want to use -->
    <script src="https://www.gstatic.com/firebasejs/5.9.0/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.9.0/firebase-database.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.9.0/firebase-firestore.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.9.0/firebase-messaging.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.9.0/firebase-functions.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>/new2/js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url(); ?>/new2/functions1.js"></script>
    <script src="<?= base_url(); ?>/new2/app.js"></script>


</head>

<body class="my-resume-bg">

    <!--template's name is stored in this tag-->
    <h1 id="template-name" class="invisible">resume_daiict_regular</h1>
    <div id="save-message-div" class="save-message">Saved!</div>

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

    <main class="my-main my-resume-bg">
        <div id="controlls" class="my-controls sticky inline-block">
            <ul style="padding-left:0%">
                <li><button style="background:linear-gradient(to right,#302350,#bb0000);color:white" id="save-doc" class="btn-select" onclick="saveResume()">Save</button></li>
                <li><button style="background:linear-gradient(to right,#302350,#bb0000);color:white"  id="preview-doc" class="btn-select" onclick="previewResume()">Preview</button>
                </li>
                <li><button style="background:linear-gradient(to right,#302350,#bb0000);color:white"   id="download-doc" class="btn-select">Download</button></li>
                <li><button   style="background:linear-gradient(to right,#302350,#bb0000);color:white" id="print-doc" class="btn-select" onclick="printResume()">Print/Save
                        PDF</button></li>
                <li style="display:none">
                    <script src="https://apis.google.com/js/platform.js" async defer></script>
                    <div id="savetodrive" class="g-savetodrive" data-src="/files/resume_daiict_classic.pdf"
                        data-filename="Resume_Daiict.pdf" data-sitename="CVMaker">
                    </div>
                </li>
            </ul>
        </div>

        <div id="message" class="message-section invisible"style="display:none">
            
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div style="background-color:#BFACBC;border-radius:5px;border-width: 20px;"id="resume" class="container my-resume-page" style="padding:5%">
                        <div id="resume-page-1" class="row">
                            <div class="col-md-12">
                                <table class="main">
                                    <tr>
                                        
                                        <td class="intro w-70">
                                            <h1 id="stud-name" class="input-field head-field" contenteditable="true"
                                                spellcheck="true" onclick="selectAll()">Enter Full Name</h1>
                                           
                                            <p>
                                                <span class="w-60 inline-block">
                                                    <span><b>Email:</b></span>
                                                    <span id="e-mail" class="input-field head-field"
                                                        contenteditable="true" spellcheck="true"
                                                        onclick="selectAll()"></span>
                                                </span>
                                                <span class="w-40 text-right"><b>DOB:</b>
                                                    <span id="dob" class="input-field head-field" contenteditable="true"
                                                        spellcheck="true" onclick="selectAll()"> </span>
                                                </span>
                                            </p>
                                            <p>
                                                <b>Address:</b>
                                                <span id="address" contenteditable="true" class="input-field head-field"
                                                    spellcheck="true" onclick="selectAll()"></span>
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                                <hr>
                                <table id="education-table" class="w-100 section">
                                    <tr>
                                        <td style="background-color:#46354F;color:white;border-radius:5px;"colspan="4" class="section-header">
                                            <h3>EDUCATION</h3>
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <th colspan="1" class="text-left">Degree</th>
                                        <th colspan="1">University/Institute</th>
                                        <th colspan="1">Year</th>
                                        <th colspan="1">CPI/Aggregate</th>
                                    </tr>

                                   
                                    <tr>
                                        <td colspan="4" class="text-right">
                                            <button id="add-education" class="addButton"
                                                onclick="addEducation()">Add</button>
                                            <button id="remove-education" class="removeButton"
                                                onclick="removeRow('education-table')">Remove</button>
                                        </td>
                                    </tr>
                                </table>
                                <br>
                                <table id="skills-table" class="w-100 section">
                                    <tr>
                                        <td style="background-color:#46354F;color:white;border-radius:5px;" colspan="2" class="section-header">
                                            <h3>SKILLS</h3>
                                        </td>
                                    </tr>
                                   
                                    <tr>
                                        <td colspan="2">
                                            <button id="add-skill" class="addButton" onclick="addSkills()">Add Skills</button>
                                            <button id="remove-skill" class="removeButton invisible"
                                                onclick="removeRow('skills-table')">Remove</button>
                                        </td>
                                    </tr>
                                    <!---->
                                </table>
                                <hr>
                                <div class="page-break"></div>
                                <table id="internships-table" class="w-100 section">
                                    <tr>
                                        <td style="background-color:#46354F;color:white;border-radius:5px;" colspan="3" class="section-header">
                                            <h3>PROFESSIONAL EXPERIENCE/INTERNSHIPS</h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top" class="w-20 input-field" contenteditable="true"
                                            spellcheck="true" onclick="selectAll()">
                                            <b>Name of Organization</b>
                                        </td>
                                        <td valign="top" class="w-60">
                                            <p contenteditable="true" spellcheck="true" class="input-field"
                                                onclick="selectAll()">
                                                <b>Description</b>
                                            </p>
                                           

                                        </td>
                                        <td valign="top" class="w-20 text-right input-field" contenteditable="true"
                                            spellcheck="true" onclick="selectAll()">
                                            <p><b>Duration</b></p>
                              
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="text-right">
                                            <button id="add-internship" class="addButton"
                                                onclick="addInternships()">Add</button>
                                            <button id="remove-internship" class="removeButton"
                                                onclick="removeRow('internships-table')">Remove</button>
                                        </td>
                                    </tr>
                                </table>
                                <hr>
                            </div>
                        </div>
                        <div id="resume-page-2" class="row">
                            <div class="col-md-12">
                                <table id="projects-table" class="w-100 section">
                                    <tr>
                                        <td style="background-color:#46354F;color:white;border-radius:5px;" colspan="2" class="section-header">
                                            <h3>PROJECTS</h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top" class="w-25">
                                            <p contenteditable="true" spellcheck="true" class="input-field"
                                                onclick="selectAll()"><b>Name of
                                                    the
                                                    Project</b></p>
                                           
                                        </td>
                                        <td valign="top" class="w-50 input-field" contenteditable="true"
                                            spellcheck="true" onclick="selectAll()">
                                            <p>
                                                <b>Description</b>
                                            </p>
                                        </td>
                                        <td valign="top" class="w-25 text-right input-field" contenteditable="true"
                                            spellcheck="true" onclick="selectAll()">
                                            <p><b>Duration</b></p>
                                   
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="text-right">
                                            <button id="add-project" class="addButton"
                                                onclick="addProjects()">Add</button>
                                            <button id="remove-project" class="removeButton"
                                                onclick="removeRow('projects-table')">Remove</button>
                                        </td>
                                    </tr>
                                </table>
                                <hr>
                                <table class="w-100 section">
                                    <tr>
                                        <td style="background-color:#46354F;color:white;border-radius:5px;" colspan="2" class="section-header">
                                            <h3>POSITIONS OF RESPONSIBILITY</h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <ul id="positions-list" class="list">

                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button id="add-position" class="addButton small-btn"
                                                onclick="addtoList('positions-list')">Add</button>
                                            <button id="remove-position" class="removeButton small-btn"
                                                onclick="removeRow('positions-list')">Remove</button>
                                        </td>
                                    </tr>
                                </table>
                                <!---->
                                <hr>
                                <button id="ach-btn" class="addButton invisible"
                                    onclick="addAchievements()">Achievements</button>
                                <table id="awards-table" class="w-100 section">
                                    <tr>
                                        <td style="background-color:#46354F;color:white;border-radius:5px;"colspan="2" class="section-header">
                                            <h3>AWARDS AND ACHIEVEMENTS<button id="remove-awards" class="removeButton"
                                                    onclick="removeAchievements()">Delete</button></h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top" id="awards-list" contenteditable="true" spellcheck="true"
                                            class="input-field" onclick="selectAll()">
                                            <p>Describe here</p>
                                            
                                        </td>
                                    </tr>
                                </table>
                                <hr>
                                <table class="w-100 section">
                                    <tr>
                                        <td style="background-color:#46354F;color:white;border-radius:5px;"colspan="2" class="section-header">
                                            <h3>INTERESTS AND HOBBIES</h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <ul id="hobbies-list">

                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button id="add-hobby" class="addButton small-btn"
                                                onclick="addtoList('hobbies-list')">Add</button>
                                            <button id="remove-hobby" class="removeButton small-btn"
                                                onclick="removeRow('hobbies-list')">Remove</button>
                                        </td>
                                    </tr>
                                </table>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="editor"></div>
    </main>
    <footer class="page-footer font-small special-color-dark pt-4 my-footer">
        <!-- Footer Elements -->
        <div class="container text-center">
          <!-- Social buttons -->
         
          <br><br>
          <ul class="list-unstyled list-inline text-center">
            <li class="list-inline-item">
              <a href="" class="btn-floating btn-fb mx-1" data-js="facebook-share">
         
              </a>
            </li>
            <li class="list-inline-item">
              <a href="" class="btn-floating btn-tw mx-1" data-js="twitter-share">
      
              </a>
            </li>
          </ul>
          <!-- Social buttons -->
        </div>
    
       
      </footer>
      
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
    <script src="createPDF.js"></script>

    <script>
        document.body.onload = function () {
            document.getElementById('message').classList.remove('invisible');
            setTimeout(() => {
                document.getElementById('message').style.opacity = 1;
            }, 10);

            setTimeout(() => {
                $("html,body").animate({
                    scrollTop: $('#message').offset().top
                }, 1000);
            }, 2000);
            setTimeout(() => {
                document.getElementById('resume').style.opacity = 1;
            }, 2500);
        }

        //controls handler
        var isPreviewClicked = true;

        var user;
        var dbref;
        var isUserExists = true;
        var snapshotloaded = false;
        firebase.auth().onAuthStateChanged(function (curruser) {
            if (curruser) {
                user = curruser;
                dbref = firebase.database().ref("users/" + user.uid);

                // this is not working as desired------
                //checking if user is not first time visitor
                if (dbref != null) {
                    loadResume();
                } else
                    console.log("First time visitor | Default data loaded");
                //for first time user
                //--------

                console.log(user.displayName);
            } else {
                console.log("Not logged In");
            }
        });



        /*function removeContent(id) {
            document.getElementById(id).innerHTML = "";
        }
        $('#stud-name').one("click",removeContent('stud-name'));*/
    </script>
</body>

</html>