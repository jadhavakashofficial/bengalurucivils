<?php
session_start();
$type = $_GET['type'];
$date= $_GET['id'];
include("config/config.php");
                        $que11 = "SELECT * from quiz__days where date='$date'";
                        $query11 = mysqli_query($con1,$que11);
                        $row11 = mysqli_fetch_row($query11);
                        $que122 = "SELECT * from quiz__questions where day_id='$row11[0]'";
                        $query122 = mysqli_query($con1,$que122);
                        $row12 = mysqli_fetch_row($query122);
                        if (isset($row12)) {
?>

<!DOCTYPE html>
<html lang="en"><head>
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
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
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

<style type="text/css">


#slideshow > div {
  position: relative;
  top: 10px;
  left: 10px;
  right: 10px;
  bottom: 10px;
}
    
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
/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: none;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
<style>
*{margin:0px; padding:0px; font-family:Helvetica, Arial, sans-serif;}

/* Full-width input fields */
input[type=email], input[type=name], input[type=number] {
    width: 90%;
    padding: 12px 20px;
    margin: 8px 26px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
  font-size:16px;
}

/* Set a style for all buttons */
.loginid {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 26px;
    border: none;
    cursor: pointer;
    width: 90%;
  font-size:20px;
}
button:hover {
    opacity: 0.8;
}

/* Center the image and position the close button */
.imgcontainer1 {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}
.avatar {
    width: 200px;
  height:200px;
    border-radius: 50%;
}

/* The Modal (background) */
.modal {
  display:none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.4);
}

/* Modal Content Box */
.modal-content {
    background-color: #fefefe;
    margin: 4% auto 15% auto;
    border: 1px solid #888;
    width: 50%; 
  padding-bottom: 30px;
}


@media screen and (max-width: 600px) {
.modal-content {  
    width: 100%; 
  }
  input[type=email], input[type=password] {
    margin:  12px 20px;
  }
  .loginid {
    margin:  12px 20px;
  }
}
/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}
.close:hover,.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    animation: zoom 0.6s
}
@keyframes zoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}
</style>

<link href="csss/bootstrap.min.css" rel="stylesheet" type="text/css">

</head>
<body class="skin-blue fuelux  pace-done" style="min-height: 2106px;"><div class="pace  pace-inactive">
  <div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
    
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
        <nav class="megamenu navbar navbar-expand-lg navbar-light" style="border: 8px solid transparent;">
         
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
<div class="container"><br>
  <div>
                <div style="text-align: center;">
                  <?php if($type == 1){ ?>
                            <h3>Banking Daily Quiz</h3>
                          <?php }
                          else{ ?>
                            <h3>IAS/KAS Daily Quiz</h3>
                         <?php  } ?>
                </div>
            </div>
            
        <div class="row">
            <div class="col-sm-12 counterDiv">
                <div class="box outheBoxShadow">
                    <div class="box-body outheMargAndBox">
                        <div class="box outheBoxShadow">
                            <div class="box-header bg-white">
                                <h3 class="box-title fontColor" style="text-align: center;"> Time Status</h3>
                            </div>
                            <div class="timer-display">
              <div id="display" style="font-size: 25px; text-align: center;"></div>
                
            </div>
                        </div>
                    </div>
                </div>
            </div>


           

        </div>
    
<section>
<div class="row">
    <div class="col-sm-19 fu-example section">

        <div class="">
            
            <div class="steps-container">
                <ul class="steps hidden" style="margin-left: 0">
                  <?php

                  $date= $_GET['id'];
                      
                        include("config/config.php");

                        $que = "SELECT * from quiz__days where date='$date'";
                        $query = mysqli_query($con1,$que);
                        $row = mysqli_fetch_row($query);

                                    $que2 = "SELECT * from quiz__questions where day_id='$row[0]'";
                                    $query2 = mysqli_query($con1,$que2);
                        
                                      $i=1;
                                      while($row2 = mysqli_fetch_array($query2)){
                                        if($i==1){
                                          echo '<li data-step="1" class="active"></li>';
                                        }
                                               else{
                                                echo '<li data-step="'.$i.'" class=""></li>';
                                               }
                                               $i++;
                                             }
                                             ?>
                                   
                                            </ul>
            </div>
            

            <form action="reports.php?id=<?php echo $date; ?>&type=<?php echo $type;?>" method="post">
 

            

                <div class="box-body step-content" style="text-align: center;">
                                            
                                

                    <?php 
                                    
                      $date= $_GET['id'];
                      $type=$_GET['type'];
                      
                        include("config/config.php");
                        if($type == 1){
                          $que = "SELECT * from quiz__days where date='$date' and type=1";
                        }
                        else{
                          $que = "SELECT * from quiz__days where date='$date' and type=2";
                        }
                        $query = mysqli_query($con1,$que);
                        $row = mysqli_fetch_row($query); 
                        echo '<input type="hidden" name="quiz_id" value="'.$row[0].'">';
                      
                        $que1 = "SELECT * from quiz__questions where day_id='$row[0]'";
                        $query1 = mysqli_query($con1,$que1);
                        $counter=1;
                            // if (isset($questions_all)): 
                                  $i = 1;
                        $que2 = "SELECT count(day_id) from quiz__questions where day_id='$row[0]'";
                        $query2 = mysqli_query($con1,$que2);
                        $row2 = mysqli_fetch_row($query2);
                        $question=$row2[0];

                            
                            
                        while($row1 = mysqli_fetch_array($query1)){
                        
                        if($counter == $question)
                        {
                          echo '<div class="clearfix step-pane sample-pane" data-questionid="'. $i .'" data-step="'. $i .'" style="border: 1px solid black;padding: 25px;">
                        <div class="question-body" style="text-align: left">
                              <label class="lb-title">Question '. $counter .'</label>
                              <label class="lb-content"> <span xss="removed" style="font-size:16px;">'.$row1["name"]. ' </span></label> </div>


                                 <div class="question-answer" id="step"'. $i .'">
                                    <table class="table">
                                        <tbody align="justify"><tr align="justify">
                                                  <td>
                                      <input id="option1'. $i .'" value="1" name="answer['. $i .'][]" type="radio">
                                                    <label for="option1'. $i .'">
                                                        <span class="fa-stack radio-button">
                                                            <i class="active fa fa-check">
                                                            </i>
                                                        </span>
                                                        <span>'. $row1["option1"]. '</span>
                                                        
                                                    </label>
                                                </td>
                                                   <td>
                                       <input id="option2'. $i .'" value="2" name="answer['. $i .'][]" type="radio">
                                                    <label for="option2'. $i .'">
                                                        <span class="fa-stack radio-button">
                                                            <i class="active fa fa-check">
                                                            </i>
                                                        </span>
                                                        <span>'. $row1["option2"]. '</span>
                                                        
                                                    </label>
                                                </td>
                                                </tr><tr>
                                                <td>
                                     <input id="option3'. $i .'" value="3" name="answer['. $i .'][]" type="radio">
                                                    <label for="option3'. $i .'">
                                                        <span class="fa-stack radio-button">
                                                            <i class="active fa fa-check">
                                                            </i>
                                                        </span>
                                                        <span>'. $row1["option3"]. '</span>
                                                        
                                                    </label>
                                                </td>
                                                 <td>
                                    <input id="option4'. $i .'" value="4" name="answer['. $i .'][]" type="radio">
                                                    <label for="option4'. $i .'">
                                                        <span class="fa-stack radio-button">
                                                            <i class="active fa fa-check">
                                                            </i>
                                                        </span>
                                                        <span>'. $row1["option4"]. '</span>
                                                        
                                                    </label>
                                                </td>
                                                </tr><tr>                                        </tr>
                                    </tbody></table>
                                </div>
                                 <div class="question-answer-button" style="text-align: center;">';
                        ?>

                
                <button onclick="document.getElementById('modal-wrapper').style.display='block'" class="btn oe-btn-notanswered">
                        Submit</button>
                        <div id="modal-wrapper" class="modal">
                  
  
                  
                    <div class="modal-content animate">
                    <div class="imgcontainer">
                      <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
                      <img>
                      
                      <h1 style="text-align:center">Enter Your Details</h1>
                    </div>

                    <div class="container1">
                      <label for="inputName" class="sr-only">Name</label>
                      <input type="name" name="name" id="inputName" class="form-control" placeholder="Full Name" required autofocus><br>
                      <label for="inputEmail" class="sr-only">Email address</label>
                      <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus><br>
                      <label for="inputNumber" class="sr-only">Phone Number</label>
                      <input type="number" name="number" id="inputNumber" class="form-control" placeholder="Phone Number" required>      
                      <button type="submit" name="submit" class="loginid">Submit</button>     
                      
                    </div>
                  </div>
                    
                </div>
                  <?php
               echo  '</div>
                            </div>';
                            $counter++;
                            $i++; ?>

                            

                <?php 

                     }

                      else
                            {
                          echo '<div class="clearfix step-pane sample-pane" data-questionid="'. $i .'" data-step="'. $i .'" style="border: 1px solid black;padding: 25px;">
                        <div class="question-body" style="text-align: left">
                              <label class="lb-title">Question '. $counter .'</label>
                              <label class="lb-content"> <span xss="removed" style="font-size:16px;">'.$row1["name"]. ' </span></label> </div>


                                 <div class="question-answer" id="step"'. $i .'">
                                    <table class="table">
                                        <tbody align="justify"><tr align="justify">
                                                  <td>
                                      <input id="option1'. $i .'" value="1" name="answer['. $i .'][]" type="radio">
                                                    <label for="option1'. $i .'">
                                                        <span class="fa-stack radio-button">
                                                            <i class="active fa fa-check">
                                                            </i>
                                                        </span>
                                                        <span>'. $row1["option1"]. '</span>
                                                        
                                                    </label>
                                                </td>
                                                   <td>
                                       <input id="option2'. $i .'" value="2" name="answer['. $i .'][]" type="radio">
                                                    <label for="option2'. $i .'">
                                                        <span class="fa-stack radio-button">
                                                            <i class="active fa fa-check">
                                                            </i>
                                                        </span>
                                                        <span>'. $row1["option2"]. '</span>
                                                        
                                                    </label>
                                                </td>
                                                </tr><tr>
                                                <td>
                                     <input id="option3'. $i .'" value="3" name="answer['. $i .'][]" type="radio">
                                                    <label for="option3'. $i .'">
                                                        <span class="fa-stack radio-button">
                                                            <i class="active fa fa-check">
                                                            </i>
                                                        </span>
                                                        <span>'. $row1["option3"]. '</span>
                                                        
                                                    </label>
                                                </td>
                                                 <td>
                                    <input id="option4'. $i .'" value="4" name="answer['. $i .'][]" type="radio">
                                                    <label for="option4'. $i .'">
                                                        <span class="fa-stack radio-button">
                                                            <i class="active fa fa-check">
                                                            </i>
                                                        </span>
                                                        <span>'. $row1["option4"]. '</span>
                                                        
                                                    </label>
                                                </td>
                                                </tr><tr>                                        </tr>
                                    </tbody></table>
                                </div>
                            

                             <div class="question-answer-button" style="text-align: center;">
                    

                  
                </div></div>';
                            $counter++;
                            $i++; ?>

                            
                       <?php   }
                          }  
                      ?>
                        
                                                                                         
         
            </div>
            </form>
          

        </div>
    </div>
    <div>
<br><p></p>&nbsp;<br>&nbsp;
    </div>
  </div>
</section>
</div>

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

        <!-- Bootstrap js -->
        <script src="assets/dist/js/lightbox-plus-jquery.min.js"></script>

<!-- external javascripts -->
<script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
<script src="assets/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="assets/js/jquery-plugin-collection.js" type="text/javascript"></script>


<script src="assets/js/angular-sanitize.js"></script>
<script src="assets/js/angular-app.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Style js -->
        <script src="assets/js/style.js" type="text/javascript"></script>
<script type="text/javascript">
    $('#reviewbutton').on('click', function () {
        marked = 1;
        $('#questionWizard').wizard('next');
    });

    $('#clearbutton').on('click', function () {
        clearAnswer();
    });

    $('#questionWizard').on('actionclicked.fu.wizard', function (evt, data) {

        totalQuestions = parseInt(totalQuestions);
        var steps = 0;
        if(data.direction == "next") {
            steps = data.step+1;
        } else {
            steps = data.step-1;
        }

        if(steps == totalQuestions) {
            $('#nextbutton').removeClass('oe-btn-answered');
            $('#nextbutton').addClass('oe-btn-notanswered');
            $('#nextbutton i').remove();
            $('#finishedbutton').hide();
        } else if(steps == totalQuestions+1) {
            finished();
        } else {
            $('#nextbutton').removeClass('oe-btn-notanswered');
            $('#nextbutton').addClass('oe-btn-answered');
            $('#nextbutton i').remove();
            $('#nextbutton').append(' <i class="fa fa-angle-right"></i>');
            $('#finishedbutton').show();
        }
        NowStep = steps;

        changeColor(data.step);
        summaryUpdate();
    });

    function summaryUpdate() {
        var summaryNotVisited = $('.questionColor li .notvisited').length;
        var summaryAnswered = $('.questionColor li .answered').length;
        var summaryMarked = $('.questionColor li .marked').length;
        var summaryNotAnswered = $('.questionColor li .notanswered').length;
        $('#summaryNotVisited').html(summaryNotVisited);
        $('#summaryAnswered').html(summaryAnswered);
        $('#summaryMarked').html(summaryMarked);
        $('#summaryNotAnswered').html(summaryNotAnswered);
    }

    function changeColor(stepID) {
        list = $('#answerForm #step'+stepID+' input ');
        var have = 0;
        var result = $.each( list, function() {
            elementType = $(this).attr('type');
            if(elementType == 'radio' || elementType == 'checkbox') {
                if($(this).prop('checked')) {
                    have = 1;
                    return have;
                }
            } else if(elementType == 'text') {
                if($(this).val() != '') {
                    have = 1;
                    return have;
                }
            }
        });
        if(have) {
            $('#question'+stepID).removeClass('notvisited');
            $('#question'+stepID).removeClass('notanswered');
            $('#question'+stepID).removeClass('marked');
            $('#question'+stepID).addClass('answered');
        } else {
            $('#question'+stepID).removeClass('notvisited');
            $('#question'+stepID).removeClass('answered');
            if($('#question'+stepID).attr('class') != 'marked') {
                $('#question'+stepID).addClass('notanswered');
            }
        }

        if(marked) {
            marked = 0;
            if($('#question'+stepID).attr('class') != 'answered') {
                $('#question'+stepID).removeClass('notvisited');
                $('#question'+stepID).removeClass('notanswered');
                $('#question'+stepID).addClass('marked');
            }
        }
    }

    function jumpQuestion(questionNumber) {
        changeColor(NowStep);
        NowStep = questionNumber;
        $('#questionWizard').wizard('selectedItem', {
            step: questionNumber
        });
        changeColor(questionNumber);
        if(questionNumber == totalQuestions) {
            $('#nextbutton').removeClass('oe-btn-answered');
            $('#nextbutton').addClass('oe-btn-notanswered');
            $('#nextbutton i').remove();
            $('#finishedbutton').hide();
        } else {
            $('#nextbutton').removeClass('oe-btn-notanswered');
            $('#nextbutton').addClass('oe-btn-answered');
            $('#nextbutton i').remove();
            $('#nextbutton').append(' <i class="fa fa-angle-right"></i>');
            $('#finishedbutton').show();
        }
        summaryUpdate();
    }

    function clearAnswer() {
        list = $('#answerForm #step'+NowStep+' input ');
        $.each( list, function() {
            elementType = $(this).attr('type');
            switch(elementType) {
                case 'radio': $(this).prop('checked', false); break;
                case 'checkbox': $(this).attr('checked', false); break;
                case 'text': $(this).val(''); break;
            }
        });
        if($('#question'+NowStep).attr('class') == 'marked') {
            $('#question'+NowStep).removeClass('marked');
            $('#question'+NowStep).addClass('notanswered');
        }
    }

    function finished() {
        $('#answerForm').submit();
    }

    

    var duration = parseInt("50");
    var totalQuestions = parseInt("50");
    var seconds = 1;
    var hours = 0;
    var minutes = -1;
    var NowStep = 1;
    var marked = 0;
    durationUpdate();
    $('.duration').html(timeString());
    if(duration != 0) {
        counter();
    } else {
        $('.counterDiv').hide();
    }
    summaryUpdate();

    $('.sidebar-menu li a').css('pointer-events', 'none');


    document.onmousedown = Disable;

    if(totalQuestions == 1) {
        $('#nextbutton').removeClass('oe-btn-answered');
        $('#nextbutton').addClass('oe-btn-notanswered');
        $('#nextbutton i').remove();
        $('#finishedbutton').hide();
    }
</script>     
<script>
  function CountDown(duration, display) {
            if (!isNaN(duration)) {
                var timer = duration, minutes, seconds;
                
              var interVal=  setInterval(function () {
                    minutes = parseInt(timer / 60, 10);
                    seconds = parseInt(timer % 60, 10);

                    minutes = minutes < 10 ? "0" + minutes : minutes;
                    seconds = seconds < 10 ? "0" + seconds : seconds;

                    $(display).html("<b>" + minutes + "m : " + seconds + "s" + "</b>");
                    if (++timer < 0) {
                        timer = duration;
                       SubmitFunction();
                       $('#display').empty();
                       clearInterval(interVal)
                    }
                    },1000);
            }
        }
        
        
    
         CountDown(0,$('#display'));
      
</script>  
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

        <script type="text/javascript" src="assets/js/fuelux.min.js"></script>



</body></html>

<?php } else {
                		    echo "<script>alert('No Questions available for this exam!! Please try another exam');
                                        window.location.href='quiz.php?id=2';
                                </script>";
                		} ?>