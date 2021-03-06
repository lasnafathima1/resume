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

    <link href="<?= base_url(); ?>/new2/css/elonmusk.css" rel="stylesheet">
        <title>RESUME PRO</title>
    <!-- Firebase App is always required and must be first -->
    <script src="https://www.gstatic.com/firebasejs/5.9.0/firebase-app.js"></script>

    <!-- Add additional services that you want to use -->
    <script src="https://www.gstatic.com/firebasejs/5.9.0/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.9.0/firebase-database.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.9.0/firebase-firestore.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.9.0/firebase-messaging.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.9.0/firebase-functions.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.9.0/firebase-storage.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>/new2/js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url(); ?>/new2/functions.js"></script>
    <script src="<?= base_url(); ?>/new2/app.js"></script>
</head>

<body class="my-resume-bg">

    <!--template's name is stored in this tag-->
    <h1 id="template-name" class="invisible">resume_elon_musk</h1>
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
                <li><button id="save-doc" class="btn-select" onclick="SavetoDatabase()">Save</button></li>
                <li><button id="preview-doc" class="btn-select" onclick="previewResume()">Preview</button>
                </li>
                <li><button id="download-doc" class="btn-select">Download</button></li>
                <li><button id="print-doc" class="btn-select" onclick="printResume()">Print/Save
                        PDF</button></li>
                <li style="display:none">
                    <script src="https://apis.google.com/js/platform.js" async defer></script>
                    <div id="savetodrive" class="g-savetodrive" data-src="/files/resume_daiict_classic.pdf"
                        data-filename="Resume_Daiict.pdf" data-sitename="CVMaker">
                    </div>
                </li>
            </ul>
        </div>

        <div id="message" class="message-section invisible">
            <h5><b>Guidelines</b></h5>
            <ol class="text-left">
                <li>Use Google Chrome for Best experience.</li>
                <li>Spelling mistakes</li>
                <ul>
                    <li>right click for suggestions and select correct spelling</li>
                </ul>
                <li>Click on <b>Save</b> for saving data into database</li>
                <li>
                    While using <b>Print/Save PDF</b> kindly
                    <ul>
                        <li>
                            uncheck <b>header and footer</b>
                        </li>
                        <li>
                            check <b>Background graphics</b>
                        </li>
                        <li>
                            apply margins <b>zero</b>
                        </li>
                    </ul>
                    for best printing or Saving as <b>PDF</b>
                </li>
            </ol>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="resume" class="container my-resume-page">
                        <div class="row" style="padding-top:50px;">
                            <div class="col-md-6">
                                <div class="row side-design">
                                    <h1 id="name" contenteditable="true" onclick="selectAll()"
                                        class="head-field input-field"> Elon Musk</h1>
                                    <br>
                                    <h4 id="your-position" class="color-1 head-field input-field" contenteditable="true"
                                        onclick="selectAll()"> Entrepreneur, Engineer, Inventor and Investor</h4>
                                </div>
                                <div class="row pl-100">
                                    <p id="about" class="text-14 color-2 head-field input-field" contenteditable="true"
                                        onclick="selectAll()">
                                        Aiming to reduce global warming through sustainable energy production and
                                        consumption. Planning to Reduce the risk of human extinction by making life
                                        multi-planetary and setting up a human colony on Mars.</p>
                                </div>
                            </div>
                            <!---------------------------------------------------->
                            <div class="col-md-3">
                                <label for="inputphoto" class="text-center">
                                    <img id="photo" src="<?= base_url(); ?>/new2/img/daiictlogo.jpg" alt="...."><br>
                                    <small id="photocaption">Browse</small>
                                </label>
                                <input id="inputphoto" type="file" onchange="SaveandLoad()" accept="image/*"
                                    class="invisible">
                            </div>
                            <!---------------------------------------------------->
                            <div class="col-md-3 text-12" style="padding-top:35px">
                                <div class="text-right">
                                    <span id="e-mail" contenteditable="true" onclick="selectAll()"
                                        class="inline-block input-field">elon@teslamoters.com</span>
                                    <span class="contact-icons inline-block"><i class="fa fa-envelope"> </i></span>
                                </div>
                                <br>
                                <div class="text-right">
                                    <span id="phone" contenteditable="true" class="input-field"
                                        onclick="selectAll()">8457-343-4332</span>
                                    <span class="contact-icons"><i class="fa fa-mobile"> </i></span>
                                </div>
                                <br>
                                <div class="text-right">
                                    <span id="location" contenteditable="true" onclick="selectAll()">Los Angeles,
                                        USA</span>
                                    <span class="contact-icons"><i class="fa fa-map-marker"></i></span>
                                </div>
                                <br>
                                <div class="text-right">
                                    <span id="twitter-handle" contenteditable="true"
                                        onclick="selectAll()">@elonmusk</span>
                                    <span class="contact-icons">
                                        <i class="fab fa-twitter"></i></span>
                                </div>
                            </div>
                        </div>
                        <!-----------------------------------HEAD END----------------------------------------->
                        <hr style="border-bottom: 2px solid rgba(0,177,177,1)">

                        <div class="row">
                            <!----------------------------------LEFT SECTION--------------------------------->
                            <div class="col-md-7">
                                <h2 class="pl-75"><b>Work Experience</b></h2>
                                <table id="work-experience">
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="row side-design-2">
                                                    <h4 id="position-name" class="w-100 input-field"
                                                        contenteditable="true" onclick="selectAll()"><b>Founder, CEO &
                                                            Lead Designer</b></h4>
                                                    <h5 id="company" contenteditable="true" onclick="selectAll()">SpaceX
                                                        - Space Exploration Technologies</h5>
                                                    <div class="space-between text-12">
                                                        <span id="work-time" class="color-1" contenteditable="true"
                                                            onclick="selectAll()"><i>06/2002 -
                                                                Present</i></span>
                                                        <span id="work-location" class="color-1" contenteditable="true"
                                                            onclick="selectAll()"><i>Howthorne,
                                                                USA</i></span>
                                                    </div>
                                                </div>
                                                <div class="pl-75  text-12">
                                                    <span class="color-1"><i>Accomplishments</i></span>
                                                    <ul class="accomplishments" contenteditable="true"
                                                        onclick="selectAll()">
                                                        <li>Successfully launched Falcon Heavy, the most Powerful
                                                            operational rocket in the world by a factor of two, with the
                                                            ability to lift into orbit nearly 64 metric tons (141,000
                                                            lb)
                                                            -- a mass greater than a 737 jetliner loaded with
                                                            passangers, crew, luggage and fuel.</li>
                                                        <li>Plans to reduce space transportation costs to enable people
                                                            to colonize Mars.</li>
                                                        <li>Developed the Falcon 9 spacecraft which replaced the space
                                                            shuttle when it retired in 2011.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <!------------------------------2 ----------------------->

                                    <tr>
                                        <td>
                                            <button class="addButton" onclick="addWork()">Add Work</button>
                                            <button class="removeButton" onclick="removeWork()">Remove Work</button>
                                        </td>
                                    </tr>
                                </table>
                            </div>

                            <!-------------------------------RIGHT SECTION---------------------------/-->
                            <div class="col-md-5">
                                <h2><b>Skills and Competencies</b></h2>
                                <div id="skillset" class="input-field" contenteditable="true">

                                    <span class="skill">Thinking through first principles</span>
                                    <span class="skill">Marketing</span>
                                    <span class="skill">Micromanagement</span>
                                    <span class="skill">Goal Oriented</span>
                                    <span class="skill">Resiliency</span>
                                    <span class="skill">Future focused</span>
                                    <span class="skill">Leadership</span>
                                    <span class="skill">Creativity</span>
                                    <span class="skill">Time Management</span>
                                    <span class="skill">Persistence</span>
                                    <span class="skill">Turning ideas into companies</span>
                                    <span class="skill">Long-term thinking</span>
                                </div>
                                <input id="inputskill" type="text" placeholder="JavaScript, C++">
                                <button class="addButton" onclick="AddSkill3()">Add</button>

                                <hr>

                                <h2><b>Achievements & Certificates</b></h2>
                                <div id="achievements" class="text-achievements" contenteditable="true"
                                    onclick="selectAll()">
                                    <p>53rd Richest Person in the world -Forbes(2018)</p>
                                    <p>21st on the Forbes list of The World's Most Powerful People (2016)</p>
                                </div>

                                <hr>

                                <h2><b>Interests</b></h2>
                                <div id="interestset" class="text-interests" contenteditable="true">
                                    <span class="interest">Physics</span>
                                    <span class="interest">Alternative Energy</span>
                                    <span class="interest">Sustainability</span>
                                    <span class="interest">Space Engineering</span>
                                    <span class="interest">Philanthropy</span>
                                </div>
                                <input id="inputinterest" type="text" placeholder="Research and Developement">
                                <button class="addButton" onclick="Addinterest3()">Add</button>

                                <hr>
                                <div>
                                    <h3 class="CVMaker color-1">CVMaker.com</h3>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="page-footer font-small special-color-dark pt-4 my-footer">
        <!-- Footer Elements -->
        <div class="container text-center">
          <!-- Social buttons -->
          Share this Website
          <br><br>
          <ul class="list-unstyled list-inline text-center">
            <li class="list-inline-item">
              <a href="" class="btn-floating btn-fb mx-1" data-js="facebook-share">
                <i class="fab fa-facebook-f"> </i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="" class="btn-floating btn-tw mx-1" data-js="twitter-share">
                <i class="fab fa-twitter"> </i>
              </a>
            </li>
          </ul>
          <!-- Social buttons -->
        </div>
    
        <div class="footer-copyright text-center py-3">Designed & Developed by
          <a>Shivang Joshi</a>
          &nbsp;|&nbsp;
          Follow me on GitHub  
          <a href="https://github.com/shivang2joshi">  <i class="fab fa-github"></i></a>
        </div>
      </footer>
      


    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
    <script src="elonmusk.js"></script>

    <script>
        document.body.onload = function () {
            document.getElementById('message').classList.remove('invisible');
            setTimeout(() => {
                document.getElementById('message').style.opacity = 1;
            }, 500);
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
                var template = document.getElementById('template-name').innerText;
                var photourl = firebase.storage().ref(user.uid + "-" + template);
                if (photourl) {
                    photourl.getDownloadURL().then(function (url) {
                        document.getElementById('photo').src = url;
                    });
                } else {
                    document.getElementById('photo').src = user.photoURL;
                }

                dbref = firebase.database().ref("users/" + user.uid);
                // this is not working as desired------
                //checking if user is not first time visitor
                if (dbref != null) {
                    LoadfromDatabase();
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
