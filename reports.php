<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" style="min-height: 2106px;"><head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<title>Bangalore IAS Quiz</title>

        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"> 
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
        <link rel="apple-touch-icon" href="images/apple-touch-icon.png">  
        <script type="text/javascript" src="assets/dist/js/lightbox-plus-jquery.min.js"></script>   
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link id="headStyleCSSLink" href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="css/combined.css">
        <link rel="stylesheet" href="css/checkbox.css">
    <link rel="stylesheet" href="css/fuelux.min.css">
        <script type="text/javascript">
          $(window).load(function() {
            $(".se-pre-con").fadeOut("slow");;
          });
        </script>
        <!-- Bootstrap CSS -->
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="assets/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
	<link href="assets/css/responsive.css" rel="stylesheet" type="text/css">
	<link  href="assets/js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
	<link  href="assets/js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
	<link  href="assets/js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">
	<link href="assets/css/style-main005c.css?1547740461" rel="stylesheet" type="text/css">

	<!-- Latest Galleries -->
	<link rel="stylesheet" type="text/css" href="assets/dist/css/lightbox.min.css">
	<script src="assets/dist/js/lightbox-plus-jquery.min.js"></script>

	<!-- external javascripts -->
	<script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery-ui.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<!-- JS | jquery plugin collection for this theme -->
	<script src="assets/js/jquery-plugin-collection.js" type="text/javascript"></script>
	<script type="text/javascript" src="../ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.js"></script>
      <script type="text/javascript" src="../ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-animate.min.js"></script>
      <script src="assets/js/angular-sanitize.js"></script>
	<script src="assets/js/angular-app.js" type="text/javascript"></script>
	<link rel="canonical" href="daily-currentaffair.php" />

<style type="text/css">
        #slideshow {

    }

#slideshow > div {
  position: relative;
  top: 10px;
  left: 10px;
  right: 10px;
  bottom: 10px;
}
    </style>


<style>
.dropbtn {
     background-color: #202c45;
  color: white;

  padding: 10px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #ffc107;
  border-radius: 10px;
  margin-left: 10px;
}
</style>
 <link href="csss/bootstrap.min.css" rel="stylesheet" type="text/css">

</head>
<body>


    
  <div class="top-bar">
    <div class="container">
      <div class="row">
        <div class="col-md-2 col-sm-2">
          <div class="right-top">
            <div class="social-box">
              <ul>
                <li><a href="https://www.facebook.com/bangalorecivils"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                <li><a href="https://www.instagram.com/bangaloreias/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="http://www.youtube.com/c/nammaKPSCacademy"><i class="fa fa-youtube-square" aria-hidden="true"></i></a></li>
                <li><a href="https://twitter.com/bangalorecivils"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li></ul>
            </div>
          </div>
        </div>
        <div class="col-md-10 col-sm-10">
          <div class="left-top">
            <div class="phone-box">
              <a href="uploads/brochure.pdf" target="_blank"><i class="fa fa-book"></i>Download e-Broucher</a>
            </div>&nbsp;
            <?php

            if(isset($_SESSION['email'])) { ?>
            
              <div class="email-box">
              <a href="logout.php"><i class="fa fa-user" aria-hidden="true"></i>Logout</a>
            </div>
          <?php  } else
           { ?>
            <div class="email-box">
              <a href="login.php"><i class="fa fa-user" aria-hidden="true"></i>Login</a>
            </div>
            <div class="phone-box">
              <a href="signup.php"><i class="fa fa-users" aria-hidden="true"></i>SignUp</a>
            </div> 
           <?php } ?>
            
            <div class="phone-box" style="padding-left: 10px;"> 

            </div>
          </div>
           
        </div>
      </div>

    </div>

  </div>

    <div class="header-middle p-0 bg-lightest xs-text-center">
      <div class="container pt-0 pb-0">
        <div class="row">
          <div class="col-xs-12 col-sm-3 col-md-3">
            <div class="widget no-border m-0">
              <a class="menuzord-brand pull-left flip xs-pull-center" href="index.php"><img src="uploads/logo.png" alt="" title="logo"></a>
            </div>
          </div>
          <div class="col-xs-6 col-sm-3 col-md-3">
            <div class="widget no-border pull-right sm-pull-none sm-text-center mt-10 mb-10 m-0">
              <ul class="list-inline">
                <li><i class="fa fa-phone text-theme-colored font-36 mt-5 sm-display-block"></i></li>
                <li>
                  <span class="font-12 text-gray text-uppercase">Call us today!</span>
                  <h5 class="font-14 m-0"> +(91) 98861-51564</h5>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-xs-6 col-sm-3 col-md-3">
            <div class="widget no-border pull-right sm-pull-none sm-text-center mt-10 mb-10 m-0">
              <ul class="list-inline">
                <li><i class="fa fa-clock-o text-theme-colored font-36 mt-5 sm-display-block"></i></li>
                <li>
                  <span class="font-12 text-gray text-uppercase">We are open!</span>
                  <h5 class="font-13 text-black m-0"> Mon-Sun 7:00-21:00</h5>
                </li>
              </ul>
            </div>
          </div>
  
        </div>
      </div>
    </div>



    <header class="header header_style_01">
        <nav class="megamenu navbar navbar-expand-lg navbar-light">
         
            <div class="container">
                

                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav ml-auto">
                        <li><a href="index.php">Home</a></li>
                        
                        <li><a href="about-us.php">About us</a></li>
                        <div class="dropdown">
                              <button class="dropbtn">Courses</button>
                              <div class="dropdown-content">
                              <a href="upsc.php">UPSC</a>
                              <a href="kpsc.php">KPSC</a>
                          
                              </div>
                        </div>
                        <li><a href="banking.php">Banking</a></li>
                        <li><a href="current_affairs.php">Current Affairs</a></li>
                        
                        <li><a href="quiz.php?id=2">IAS/KAS Quiz</a></li>
                        <!--<div class="dropdown">-->
                        <!--      <button class="dropbtn">Daily Quiz</button>-->
                        <!--      <div class="dropdown-content">-->
                        <!--      <a href="quiz.php?id=1">Banking Quiz</a>-->
                        <!--      <a href="quiz.php?id=2">IAS/KAS Quiz</a>-->
                          
                        <!--      </div>-->
                        <!--</div>-->

                        <li><a href="https://www.instamojo.com/bangalorecivils/">Store</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="gallery.php">Gallery</a></li>

                    </ul>
                </div>
                <div class="collapse navbar-collapse" id="navbar">


                </div>


            </div>
  </header>

  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>
        <div class="se-pre-con" style="display: none;"></div>
        <!-- header logo: style can be found in header.less -->
  <div class="wrapper row-offcanvas row-offcanvas-left" style="min-height: 603px;">
            <!-- Left side column. contains the logo and sidebar -->
          
        <aside class="right-side">
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <style type="text/css">
    .fuelux .wizard .step-content {
        border: 0px;
    }
</style>
<div class="container">
<section>
<div class="row">
    <div class="col-sm-9 fu-example section" >
      <div>
                <div style="text-align: center;">
                   <h3>Report</h3>
                </div>
            </div>
            
        <div class="box outheBoxShadow wizard" data-initialize="wizard" id="questionWizard">

                <div class="box-body step-content" style="text-align: center;">
                                            
                                

                    <?php 
                                    
                      $date= $_POST['quiz_id'];
                     $answer = $_POST['answer']; 
                      

                        include("config/config.php");

                        
                        $que1 = "SELECT * from quiz__questions where day_id='$date'";
                        $query1 = mysqli_query($con1,$que1);
                        $counter=1;
                            // if (isset($questions_all)): 
                                  $i = 1;
                        $que2 = "SELECT count(day_id) from quiz__questions where day_id='$date'";
                        $query2 = mysqli_query($con1,$que2);
                        $row2 = mysqli_fetch_row($query2);
                        $wrong = 0;
                        $correct = 0;

                            
                          $j = 1;  
                        while($row1 = mysqli_fetch_array($query1)){
                        

                        echo '<div class="clearfix step-pane sample-pane active" data-questionid="'. $i .'" data-step="'. $i .'">
                        <div class="question-body" style="text-align: left">
                              
                        <div class="box outheBoxShadow wizard" data-initialize="wizard" id="questionWizard">

                      <div class="box-body step-content" style="text-align: center;">';


                        	if($answer[$j][0] == $row1['correct_option'])
                          {
                            
                            echo '<label class="lb-title" style="text-align: left;color: #a3ff00; font-size:25px;font-family: Fjalla One;"">Correct <h4 class="col-md-10" style="color:skyblue;"> Question '. $counter .'</h4></label> ';
                            $correct++;
                          }
                          else
                          {
                            echo '<label class="lb-title" style="text-align: left;color: #ff5757; font-size:25px;font-family: Fjalla One;"">Wrong <h4 class="col-md-10" style="color:skyblue;"> Question '. $counter .'</h4></label>';
                            $wrong++;
                          }

                            echo '</div></div>';
                              echo '<label class="lb-content"> <span xss="removed" style="font-size:16px;">'.$row1["name"]. ' </span></label> </div>';

                           
                                 echo '<div class="question-answer" id="step"'. $i .'">
                                    <table class="table">
                                        <tbody align="justify"><tr align="justify">';

                                        if($answer[$j][0] == 1 &&  $row1['correct_option'] == 1) {
                                          echo '<td style="background-color:#a3ff00;">';
                                        } elseif ($answer[$j][0] == 1) {
                                          echo '<td style="background-color:#ff5757;">';
                                        } elseif ($row1['correct_option'] == 1) {
                                           echo '<td style="background-color:#a3ff00;">';
                                        }
                                        else
                                        {
                                           echo '<td style="padding:8px;">';
                                        }
                                        echo '
                                      <input id="option1'. $i .'" value="1" name="answer['. $i .'][]" type="radio">
                                                    <label style="font-size:18px;" for="option1'. $i .'">
                                                        <span class="fa-stack radio-button" checked></span>
                                                        <span>'. $row1["option1"]. '</span>
                                                        
                                                    </label>
                                                </td><td style="width: 1px; "></td>';

                                        if($answer[$j][0] == 2 &&  $row1['correct_option'] == 2) {
                                          echo '<td style="background-color:#a3ff00;">';
                                        } elseif ($answer[$j][0] == 2) {
                                          echo '<td style="background-color:#ff5757;">';
                                        } elseif ($row1['correct_option'] == 2) {
                                           echo '<td style="background-color:#a3ff00;">';
                                        }
                                        else
                                        {
                                           echo '<td>';
                                        }
                                        echo '
                                       <input id="option2'. $i .'" value="2" name="answer['. $i .'][]" type="radio">
                                                    <label style="font-size:18px;" for="option2'. $i .'">
                                                        <span class="fa-stack radio-button"> </span>
                                                        <span>'. $row1["option2"]. '</span>
                                                        
                                                    </label>
                                                </td>
                                                </tr><td></td>

                                                <tr align="justify">

                                      ';

                                        if($answer[$j][0] == 3 &&  $row1['correct_option'] == 3) {
                                          echo '<td style="background-color:#a3ff00;">';
                                        } elseif ($answer[$j][0] == 3) {
                                          echo '<td style="background-color:#ff5757;">';
                                        } elseif ($row1['correct_option'] == 3) {
                                           echo '<td style="background-color:#a3ff00;">';
                                        }
                                        else
                                        {
                                           echo '<td style="padding:8px;">';
                                        }
                                        echo '
                                     <input id="option3'. $i .'" value="3" name="answer['. $i .'][]" type="radio">
                                                    <label style="font-size:18px;" for="option3'. $i .'">
                                                        <span class="fa-stack radio-button"></span>
                                                        <span>'. $row1["option3"]. '</span>
                                                        
                                                    </label>
                                                </td><td style="width: 1px; "></td>

                                    ';

                                        if($answer[$j][0] == 4 &&  $row1['correct_option'] == 4) {
                                          echo '<td style="background-color:#a3ff00;">';
                                        } elseif ($answer[$j][0] == 4) {
                                          echo '<td style="background-color:#ff5757;">';
                                        } elseif ($row1['correct_option'] == 4) {
                                           echo '<td style="background-color:#a3ff00;">';
                                        }
                                        else
                                        {
                                           echo '<td>';
                                        }
                                        echo '
                                    <input id="option4'. $i .'" value="4" name="answer['. $i .'][]" type="radio">
                                                    <label style="font-size:18px;"for="option4'. $i .'">
                                                        <span class="fa-stack radio-button"></span>
                                                        <span>'. $row1["option4"]. '</span>
                                                        
                                                    </label>
                                                </td>
                                                </tr>
                                    </tbody></table>
                                </div>
                                
                            </div>';

                          if($answer[$j][0] == $row1['correct_option'])
                          {
                            
                            echo '<div class="box outheBoxShadow wizard"><h3 style="text-align:left;"> Description :</h3> <p style="text-align:left;">&nbsp;&nbsp;&nbsp;'.$row1['answer'].'</p></div>';
                            
                          }
                          else
                          {
                            echo '<div class="box outheBoxShadow wizard"><h3 style="text-align:left;">   Description :</h3> <p style="text-align:left;">&nbsp;&nbsp;&nbsp;'.$row1['answer'].'</p></div>';
                            
                          }
                          echo '<h1 style="color:orange;padding:15px;">______________________________________</h1>';

                            $counter++;
                            $i++;
                            $j++;
                          
                          
                        }
                       ?>  
            	</div>
        	</div>
          
    </div>
	<br><p></p>
      <div class="col-sm-3">
        <div class="row">
      <div class="col-sm-12">
                <div class="box outheBoxShadow">
                    <div class="box-body outheMargAndBox">

                         <div class="box-body margAndBox" style="">
                            <nav aria-label="Page navigation">
                                <ul class="examQuesBox questionColor">
                                  <?php 
 
					                        include("config/config.php");

					                        
					                        $que1 = "SELECT * from quiz__questions where day_id='$date'";
					                        $query1 = mysqli_query($con1,$que1);
					                        $row1 = mysqli_fetch_array($query1);

					                        $que2 = "SELECT count(day_id) from quiz__questions where day_id='$date'";
					                        $query2 = mysqli_query($con1,$que2);
					                        $row2 = mysqli_fetch_row($query2);
                                  $count = $counter-1;
                                  $per = ($correct/$count)*100;
                                      
                                      echo '<br><br><br><h2>Summary</h2>
                                            <h3 style="color:red;font-family: Fjalla One;"> Total number of Question-<a>'. $row2[0] .'</a> </h3>
                                            <h3 style="color:red;font-family: Fjalla One;"> Total Correct - <a>'. $correct .'</a> </h3>
                                            <h3 style="color:red;font-family: Fjalla One;"> Total wrong - <a>'. $wrong .'</a> </h3>
                                            <h3 style="color:red;font-family: Fjalla One;"> Percentage - <a>'. $per .'%</a></h3>';
                                  ?>
                                </ul>
                            </nav>           
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
  </div>

</section>
</div>
<?php 
// $id = $_SESSION['email'];
$name = $_POST["name"];
$email = $_POST["email"];
$number = $_POST["number"];
$type = $_GET['type'];
if ($type == 1) {
  $quiztype="Banking";
}
else{
  $quiztype="IAS/KAS";
}
if (isset($_POST["submit"])) {
     
      include("config/config.php");
     $result = mysqli_query($con1,"INSERT INTO quiz__reports(name, email, number,quiz_type, correct, incorrect,created_at) VALUES ('$name','$email','$number','$quiztype','$correct','$wrong',CURRENT_TIMESTAMP)");
     }

 ?>

<footer class="footer" style="background: #111111a6;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <img src="images/logos/logo-2.png" alt="" />
                        </div>
                        <div class="widget footer-contact clearfix">
                        <div class="widget-title">
                            <b style="font-size: 12px; color: white;">Phone: +91 98861-51564 / +91 98867-77417 / 080 42103963</b><br>
                            <b style="font-size: 12px; color: white;">Email: bangalorecivils@gmail.com</b>
                        </div>

                        <div class="col-md-6 col-lg-12">

                 <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fbangalorecivils%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=337044099670516" width="800" height="150" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
              </div>
                        
                        
                    </div>
                    </div><!-- end clearfix -->
                </div><!-- end col -->

        <div class="col-md-2 col-lg-2">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.9692136514436!2d77.58747631473625!3d13.037631616953682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1794332dc63d%3A0x6345e7a2147dc0ed!2sBangalore+School+of+Civil+Services!5e0!3m2!1sen!2sin!4v1544682840208" width="120%" height="50%" frameborder="0" style="border:0" allowfullscreen></iframe><br>
                   <p style="font-size: 12px; color: white;">18, 2nd Floor, Near Hebbal Police Station Bellary Main Road, Hebbal, Bengaluru, Karnataka 560024</p>
                </div><!-- end col -->&nbsp;&nbsp;&nbsp;

                <div class="col-md-4 col-lg-2">
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.1152044194287!2d77.53763521473569!3d12.964479318542484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae3f886b253ab1%3A0xd7a6d97a83e5a4ce!2sBangalore+IAS+Academy!5e0!3m2!1sen!2sin!4v1544682673422" width="130%" height="50%" frameborder="0" style="border:0" allowfullscreen></iframe><br>
                 <p style="font-size: 12px; color: white;">2nd floor, 211, 5th Main Rd, Hampi Nagar, RPC Layout, Vijaya Nagar, Bengaluru, Karnataka 560104</p>
                </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              

<br>
              <div class="col-md-1 col-lg-3">
            <div class="widget dark">
            <h4 class="widget-title text-uppercase" style="color:white; font-size:20px;">Call Us Now</h4>
            <div class="text-white">
              +91 98861-51564<br>
              +91 98867-77417<br>&nbsp;&nbsp;
              &nbsp;080 42103963
            </div>
            <br>
            <h4 class="widget-title line-bottom-theme-colored-2 mt-10 text-uppercase" style="color:white; font-size:20px;">Opening Hours</h4>
            <div class="opening-hours">
              <ul class="list-border">
                <li class="clearfix text-white"> <span> Mon - Fri :  </span>
                  <div class="value pull-right text-white"> 7.00 am - 8.00 pm </div>
                </li>
                <li class="clearfix text-white"> <span> Sat - Sun :</span>
                  <div class="value pull-right text-white"> 9.00 am - 6.00 pm </div>
                </li>
              </ul>
            </div>
            <br>
            <h4 class="widget-title mt-10 text-uppercase" style="color:white; font-size:20px;">Connect With Us</h4>
            <ul class="styled-icons icon-bordered icon-sm">
              <li><a href="https://www.facebook.com/bangalorecivils/" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://twitter.com/bangalorecivils" target="_blank"><i class="fa fa-twitter"></i></a></li>
              <li><a href="http://www.youtube.com/c/nammaKPSCacademy" target="_blank"><i class="fa fa-youtube"></i></a></li>
              <li><a href="https://www.instagram.com/bangaloreias/" target="_blank"><i class="fa fa-instagram"></i></a></li>
            </ul>
        </div>
        </div>

            </div><!-- end row -->
           
        </div><!-- end container -->
    </footer><!-- end footer -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">                   
                    <p class="footer-company-name">All Rights Reserved. &copy; 2018 <a href="#">Bangalore IAS Academy</a> </p>
                </div>

                
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

               </div>
                </div>
            </section>
        </aside>

        
        </div><!-- ./wrapper -->


        


        <!-- Bootstrap js -->
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Style js -->
        <script src="assets/js/style.js" type="text/javascript"></script>

        
        <script>
        $(document).ready(function() {
          $('#example3, #example1, #example2').DataTable( {
              dom: 'Bfrtip',
              buttons: [
                  'copyHtml5',
                  'excelHtml5',
                  'csvHtml5',
                  'pdfHtml5'
              ],
              search: false
          } );
        } );
        </script>
        <!-- dataTable with buttons end -->

        <script type="text/javascript">
            $(function() {
                $("#withoutBtn").dataTable();
            });


        </script>

                
        <script type="text/javascript" src="assets/js/fuelux.min.js"></script>
        
    



</body></html>