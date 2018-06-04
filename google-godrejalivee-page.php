<?php
error_reporting(0);

// Include the random string file
include 'captcha/rand.php';

// Begin the session
session_start();

// Set the session contents
$_SESSION['random_number'] = $str;
?>


<?php 
$actual_link = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if($actual_link == 'http://godrejalivee.com/google-godrejalivee-page.php'){
    header("location:http://godrejalivee.com/google-2bhk-3bhkcompact-3bhk-4bhk");
}

?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="">
      <meta name="keywords" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Godrej Alive, Mulund Thane</title>
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
      <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
       <link rel="shortcut icon" href="images/happy-dusshera.png">
      <!-- Optional theme -->
      <!-- animate start end-->
      <!--link href="css/style.css" rel="stylesheet"-->
      <link href="css/style.css" rel="stylesheet">
      <!--link href="css/custom.css" rel="stylesheet"-->
      <link href="css/custom.css" rel="stylesheet">
      <link href="css/captcha.css" rel="stylesheet">
      <link href="css/slick.css" rel="stylesheet">
      <link href="css/slick-theme.css" rel="stylesheet">

       <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700|Merriweather+Sans:300,400,700,800" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,700,900" rel="stylesheet">
       <link href="css/form-popup.css" rel="stylesheet">
        <script src="js/jquery-1.2.6.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function(){

                $("#contactLink").click(function(){
                    if ($("#contactForm").is(":hidden")){
                        $("#contactForm").slideDown("slow");
                    }
                    else{
                        $("#contactForm").slideUp("slow");
                    }
                });
                
            });
            
            function closeForm(){
                $("#messageSent").show("slow");
                setTimeout('$("#messageSent").hide();$("#contactForm").slideUp("slow")', 2000);
           }
        </script>
   </head>
   <body>
       <div class="box1 hidden-xs">
            <div id="contactFormContainer">
                <div id="contactForm">
                    <fieldset>
                        <!--<label for="Name">Name *</label>-->
                        <!--<input id="name" type="text" />-->
                        <!--<label for="Email">Email address *</label>-->
                        <!--<input id="Email" type="text" />-->
                        <!--<label for="Message">Your message *</label>-->
                        <!--<textarea id="Message" rows="3" cols="20"></textarea>-->
                        <!--<input id="sendMail" type="submit" name="submit" onclick="closeForm()" />-->
                        <!--<span id="messageSent">Your message has been sent successfully!</span>-->
                      <div class="enq-wrapper text-center contactLink btn-hide" id="enquiry">                 
                        <div class="form-wrapper color-form">                    
                           <form class="form-section enq-form" id="enquiry-form-1" action="submit-godrejalivee.php" name="enquiry-form" method="POST">
                              <h5>Enquire Now</h5>
                              <h3 class="tenpercent1">Register for Pre Launch Offers</h3>
                              <div class="form-row">
                                 <div class="form-group col-md-12">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name*">
                                 </div>
                              </div>
                              <div class="form-group col-md-12">
                                 <input type="email" class="form-control" id="email" name="email" placeholder="Email Id*">
                              </div>
                              <div class="form-group col-md-12">
                                 <input type="text" class="form-control" id="contact" name="contact" placeholder="Mobile*">
                              </div>
                              <!--<div class="form-group col-md-12 ">-->
                                <!-- <img src="http://godrejprime-chembur.com/captcha/get_captcha.php" alt="" id="captcha" />-->
                                <!-- <a id="refresh" title="Click to refresh image"><i class="fa fa-refresh" aria-hidden="true"></i></a>-->
                              <!--</div>-->
                              <!--<div class="form-group col-md-12 ">-->
                                <!-- <input type="text" maxlength="6" name="captcha" class="form-control" id="captcha" placeholder="Captcha code*">-->
                              <!--</div>-->
                              <!--div class="form-group col-sm-12">
                                 <select class="form-control" id="exampleFormControlSelect1" name= "unit">
                                    <option value="">Unit*</option>
                                    <option>2 BHK (S)</option>
                                    <option>2 BHK (M) & 2 BHK (L)</option>
                                    <option>3 BHK (S)</option>
                                    <option>3 BHK (M)</option>
                                    <option>4 BHK</option>
                                 </select>
                              </div-->
                              <!--div class="form-group col-md-12">
                                 <textarea class="form-control" id="message" rows="3" name="message" placeholder="Message"></textarea>
                              </div-->
                              <input type="hidden" value="Google" name="campaign">
                               <input type="hidden" value="<?php echo $_GET['utm_source']; ?>" name="utm_source"><input type="hidden" value="<?php echo $_GET['utm_medium']; ?>" name="utm_medium"><input type="hidden" value="<?php echo $_GET['utm_campaign']; ?>" name="utm_campaign">
                              <div class="col-sm-12">
                                 <button type="submit" class="btn  btn-submit" name="enquiry-1">Submit</button>
                                 <?php $error11 = $_GET['error11']; if($error11 == '1'){ echo "<label style='margin:5px 0px;' class='error'>Please enter all the data in proper format<label>"; } ?>
                              </div>
                              <!--<div class="form-check">-->
                              <!--   <label class="form-check-label" style="font-weight: 400; font-family: din-regular;" >-->
                              <!--   <input type="hidden" value="0" name="keep_you_posted">-->
                              <!--   <input type="checkbox" value="1" name="keep_you_posted" checked class="form-check-input">-->
                              <!--   Please Click Here, To Keep You Posted-->
                              <!--   </label>-->
                              <!--</div>-->
                           </form>              
                        </div>
                      </div>
                   </fieldset>                   
                </div>
                <div id="contactLink" class="contactLink btn-hide">Enquire Now</div>
            </div>  
        </div>
        
      <section class="landing-banner-section" id="header">
         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-6 col-sm-push-1">
                   
                  <img src="images/mulund/mini-theater.png" class="main-logo" alt="logo"/>
                  <img src="images/Screen Shot 2018-05-11 at 11.33.36 PM.png" class="main-logo" alt="logo"/>
                  <p class="banner-title banner-title-background">

               </div>
            
               <div class="col-lg-4 col-lg-offset-2 col-sm-6 col-sm-offset-0 enq-wrapper  text-center" id="enquiry">
                  <form class="form-inline call-me-form" action="submit-godrejalivee.php" method="POST" id="call-me">
                     <div class="form-group error-msg">
                        <input type="hidden" name="form_type" value="Callme">
                        <input type="hidden" value="Google" name="campaign">
                        <input type="hidden" value="<?php echo $_GET['utm_source']; ?>" name="utm_source"><input type="hidden" value="<?php echo $_GET['utm_medium']; ?>" name="utm_medium"><input type="hidden" value="<?php echo $_GET['utm_campaign']; ?>" name="utm_campaign">
                        <input type="text" class="form-control tx-white" name="callme" id="inputPassword2" placeholder="Call me for Pre Launch Offers" onfocus="this.placeholder = 'Enter your phone no.'"
onblur="this.placeholder = 'Call me for Pre Launch Offers'">
                  <?php $error1 = $_GET['error1']; if($error1 == '1'){ echo "<label class='error'>Please enter data in proper format<label>"; }?>
                     </div>
                     <button style="border-radius:0px;" type="submit" class="btn btn-call-submit pull-right" name="Callme">Submit</button>
                  </form>
                  <div class="form-wrapper mob-wrapper">
                    
                     <form class="form-section enq-form" id="enquiry-form" action="submit-godrejalivee.php" name="enquiry-form" method="POST">
                        <h5>Enquire Now</h5>
                        <h3 class="tenpercent">Register for Pre Launch Offers</h3> 
                        <div class="form-row">
                           <div class="form-group col-md-12">
                              <input type="text" class="form-control" id="name" name="name" placeholder="Name*">
                           </div>
                        </div>
                        <div class="form-group col-md-12">
                           <input type="email" class="form-control" id="email" name="email" placeholder="Email Id*">
                        </div>
                        <div class="form-group col-md-12">
                           <input type="text" class="form-control" id="contact" name="contact" placeholder="Mobile No*">
                        </div>
               
                        <input type="hidden" value="Google" name="campaign">
                       <input type="hidden" value="<?php echo $_GET['utm_source']; ?>" name="utm_source"><input type="hidden" value="<?php echo $_GET['utm_medium']; ?>" name="utm_medium"><input type="hidden" value="<?php echo $_GET['utm_campaign']; ?>" name="utm_campaign">

                        <div class="col-sm-12">
                           <button type="submit" class="btn  btn-submit" name="enquiry">Submit</button>
                           <?php $error2 = $_GET['error2']; if($error2 == '1'){ echo "<label style='margin:5px 0px;' class='error'>Please enter all the data in proper format<label>"; }?>
                        </div>
                        <div class="form-check">
                           <label class="form-check-label" style="font-weight: 400; font-family: din-regular;" >
                           <input type="hidden" value="0" name="keep_you_posted">
                           <input type="checkbox" value="0" name="keep_you_posted"  class="form-check-input" >
                           Please Click Here, To Keep You Posted
                           </label>
                        </div>
                     </form>
                     <p class="phone-number"><a href="tel:+919820851321"><span class="glyphicon glyphicon-earphone phone-icon"></span>+919820851321</a></p>
                     <p class="phone-number hidden-lg hidden-sm hidden-md"><a href="https://api.whatsapp.com/send?phone=+91982 085 1321&text=Hi, Kindly send me all details of Godrej Alive project, brochure and floor plans."><i class="fa fa-whatsapp"></i> +919820851321</a></p>
                  </div>

 
               </div>

            </div>
             <div class="main-cont">
                    <p>THE MULUND - THANE CIRCLE</p>
                  </div>
                  <!-- <div class="reg-patch">
                    <a href="#register-modal" data-toggle="modal" data-target="#register-modal"> <img src="images/mulund/patch1.jpg"></a>
                  </div> -->
                  <div class="plac-text"><p>COME HOME TO A BUSTLING LIFE<br>
                                    AT THE MULUND-THANE CIRCLE<br> 
                                    ONE LANDMARK ADDRESS
</p></div>
         </div>
        
         
          <div class="navigation nav-ul">

          <div class="prelaunch-msg-section text-center">
            <div class="row">
            <div class="col-sm-3">
              <div class="reg-patch1">
                <a href="#register-modal" data-toggle="modal" data-target="#register-modal"> 
                  <img src="images/mulund/godrej button.png" class="img-responsive center-block">
                </a>
              </div> 
            </div> 

            <div class="col-sm-6">
              <h3>Godrej Alive comes with 50+ amenities in 6 acres <br>
              Ultra Luxe 2, 3 & 4 BHK apartments with spacious bedrooms 1.89cr onwards.
              </h3>
            </div> 

            <div class="col-sm-3">
              <div class="reg-patch1">
                <a href="#register-modal" data-toggle="modal" data-target="#register-modal"> 
                  <img src="images/mulund/godrej button2.png" class="img-responsive center-block">
                </a>
              </div> 
            </div> 
          </div>
          </div>

             <div class="container">
               <nav class="navbar">
                  <div class="navbar-header">
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     </button>
                  </div>
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                       <ul class="nav navbar-nav nav-center " id="main-nav">
                        <li><a class="page-scroll" href="#overview">Overview</a></li>
                        <li><a class="page-scroll" href="#amenities">Amenities</a></li>
                      <li><a class="page-scroll" href="#gallery">Gallery</a></li>
                          <li><a class="page-scroll" href="#Video">Video</a></li>
                        <li><a class="page-scroll" href="#plans">Site Plan</a></li>
                        <li><a class="page-scroll" href="#floorplans">Floor Plans</a></li>
                        <li><a class="page-scroll" href="#price">Price</a></li>
                       <!--  <li><a class="page-scroll" href="#location">Location</a></li> -->
                    <!--     <li><a class="page-scroll" href="#connectivity
                        ">Connectivity</a></li> 
                        <li><a class="page-scroll" href="#enquiry-section
                        ">Enquire now</a></li>  -->
                     </ul>
                  </div>
               </nav>
            </div>
         
         </div>     
      </section>

       <!--<div class="navigation nav-ul">-->
      
       <!--     </div>-->
      <!-- Button trigger modal -->
      <!--button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
         Launch demo modal
         </button-->
      <!-- Modal -->
      <div class="modal fade schedule-modal-form" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header1">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               </div>
               <div class="modal-body ">
                  <section class="banner-section">
                     <div class="container">
                        <div class="row">
                           <div class="col-lg-4 col-sm-5 col-xs-12">
                              <img src="images/godrej-popup-logo.png" class="main-logo"/>
                           </div>
                           <div class="col-lg-4 col-lg-offset-0 col-sm-4 col-sm-offset-0  col-xs-12 text-center">
                              <div class="form-wrapper">
                                 <form class="form-section" id="site_visit" method="POST" action="submit-godrejalivee.php" name="site_visit">
                                    <div class="form-row">
                                       <div class="form-group col-md-12">
                                          <input type="text" class="form-control" id="name" name="name" placeholder="Name*">
                                       </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                       <input type="email" class="form-control" id="email" name="email" placeholder="Email Id*">
                                    </div>
                                    <div class="form-group col-md-12">
                                       <input type="text" class="form-control" id="contact" name="contact" placeholder="Mobile*">
                                    </div>
                                    <div class="form-group col-sm-12">
                                       <input class="form-control" id="datepicker" name="date" placeholder="Date*">
                                    </div>
                                    <div class="form-group col-sm-12">
                                       <input class="form-control" id="timepicker" name="time" placeholder="Time*">
                                    </div>
                                    <div class="form-group col-md-12">
                                       <input type="text" class="form-control" id="pickup_location" name="pickup_location" placeholder="Pickup Location*">
                                    </div>
                                    <input type="hidden" name="campaign" value="Google">
                                    <input type="hidden" value="<?php echo $_GET['utm_source']; ?>" name="utm_source"><input type="hidden" value="<?php echo $_GET['utm_medium']; ?>" name="utm_medium"><input type="hidden" value="<?php echo $_GET['utm_campaign']; ?>" name="utm_campaign">
                                    <div class="col-sm-12">
                                       <button type="submit" class="btn  btn-submit" name="site_visit">Submit</button>
                                       <p id="success_data"></p>
                                    </div>
                                    <!--div class="form-check">
                                       <label class="form-check-label">
                                        <input type="hidden" name="keep_you_posted" value="0">
                                       <input type="checkbox" class="form-check-input" name="keep_you_posted" value="1" checked>
                                       Please Click Here, To Keep You Posted
                                       </label>
                                    </div-->
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </section>
               </div>
               <!-- <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                  </div> -->
            </div>
         </div>
      </div>
     <!-- Overview start -->
     <section id="overview" class="overview-section parallax-bg">
         <div class="container">
            <div class="top-section">
               
              
               <h5>Project Highlights (Overview)<br>Mulund-Thane's Premium Residential Project</h5>
                
               <!--p class="p-small">Godrej Platinum offers the best of facilities and lavish apartments that exude a quiet sense of luxury and is located at Mumbai's most strategic location, Vikhroli. It offers Lavish 2 BHK, 3 BHK & 4 BHK duplex apartments.</p-->
               <div class="bullet-list-section">
                  <div class="row">
                      <div class="container">
                     <div class="col-sm-6">
                        <ul><li class="p-bullet">Residential development in the heart of Mulund-Thane.</li></ul>
                     </div>
                     <div class="col-sm-6">
                        <ul><li class="p-bullet"> 4 Towers of 35 Stories. </li></ul>
                     </div>

                      <div class="col-sm-6">
                        <ul><li class="p-bullet"> Work Live Play Grow with 50+ Amenities at Godrej Alive.</li></ul>
                     </div>

                      <div class="col-sm-6">
                        <ul><li class="p-bullet"> Live a lifestyle that is uncompromised on luxury and space.

                        </li></ul>
                     </div>
                    </div>
                  </div>
                  <div class="row">
                      <div class="container">
                     <div class="col-sm-6">
                        <ul><li class="p-bullet"> World Class Amenities.</li></ul>
                     </div>
                     <div class="col-sm-6">
                        <ul><li class="p-bullet"> Excellent rail, road and proposed Metro connectivity.</li></ul>
                     </div>

                     <div class="col-sm-6">
                        <ul><li class="p-bullet"> Future-Ready Location, being situated right at the gateway of Thane, on LBS Road.</li></ul>
                     </div>
                   </div>
                  </div>

               </div>
            </div>
             <!-- Bottom Section -->
             <div class="block-section">
               <div class="row first-block-section">
                  <div class="col-sm-5">
                     <div class="left-img-block">
                        <img class="img-responsive" src="images/Elevation-Image_457_291.jpg">
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <!--h2>Emerald Isle, Powai at a glance</h2-->
                     <h2>THE MULUND- THANE CIRCLE</h2>
                     <p>Welcome to a vibrant neighbourhood that brings together the best of two
                        cities – the Mulund-Thane circle. With social, corporate and retail setups
                        including major malls like Korum and Viviana, there’s a lot to do in and
                        around the locale. That's not all, by the virtue of being located at the
                        perimeter shared by Mulund and Thane, even hubs in Mumbai city are
                        easily accessible from this area.</p>
                    <a class="download-btn" href="" data-toggle="modal" data-target="#download-modal">Download Brochure</a>
                  <!--   <a class="download-btn" href="docs/Mulund-Thane Circle - Opportunity.pdf" target="_blank">Download Brochure</a>
 -->

                    
<!-- Modal -->
<div id="download-modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header text-center">
        <button type="button" class="close" data-dismiss="modal">×</button>
        Download Brochure
            </div>
      <div class="modal-body download-modal-body">
        <form class="form-section" id="download_brochure" method="POST" action="submit-godrejalivee.php" name="download_brochure" novalidate="novalidate">
                    <input type="hidden" value="<?php echo $_GET['utm_source']; ?>" name="utm_source"><input type="hidden" value="<?php echo $_GET['utm_medium']; ?>" name="utm_medium"><input type="hidden" value="<?php echo $_GET['utm_campaign']; ?>" name="utm_campaign">
                  <div class="form-row">
                     <div class="form-group col-md-12">
                        <!-- <label for="inputEmail4" class="col-form-label">Email</label> -->
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name*">
                     </div>
                 </div>
                  <div class="form-group col-md-12">
                     <!-- <label for="inputAddress" class="col-form-label">Address</label> -->
                     <input type="email" class="form-control" id="email" name="email" placeholder="Email Id*">
                  </div>
                   <div class="form-group col-md-12">
                     <!-- <label for="inputAddress" class="col-form-label">Address</label> -->
                     <input type="text" class="form-control" id="number" name="number" placeholder="Mobile*">
                  </div>
                 <input type="hidden" name="campaign" value="Google">
                  <div class="col-sm-12 text-center">
                     <button type="submit" class="btn  btn-submit" name="download_brochure">Submit</button>
                     <!-- <span id="loader"></span> -->
                     <p id="success_data"></p>
                  </div>

                   <a style="display:none;" id="dp99" href="docs/Mulund-Thane Circle - Opportunity.pdf" class="links">Download make-Zip-in-PHP.jpg</a>
               </form>

      </div>
       </div>

  </div>
</div>
              </div>
               </div>
               <div class="row second-block-section hide">
                  <div class="col-sm-5">
                     <div class="left-img-block">
                        <img class="img-responsive" src="images/left-img2.jpg">
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <p>Emerald Isle Phase-2 - Powai, Mumbai is L&amp;T Realty's upcoming new residential development in Powai. Its name Emerald Isle Phase-2 is a perfect reflection of what this project at Powai  stands for - environmentally thoughtful design and serene green surroundings.</p>
                     <ul class="second-block-ul">
                        <li>A gated complex situated across the road from Powai Lake and Garden.</li>
                        <li>Apart from 2 &amp; 3 BHK apartments, it also offers exclusive lake facing 4 BHK apartments.</li>
                        <li>All apartments have beautiful aesthetics, finish &amp; modern conveniences.</li>
                        <li>The new residential project in Powai is conveniently located adjacent to L&amp;T Business Park, and close to key business district of MIDC, SEEPZ and BKC. district of MIDC, SEEPZ and BKC.</li>
                     </ul>
                     <h3>Get authentic information by our Sales Experts!</h3>
                     <form class="form-inline call-me-form col-lg-9 col-sm-12" id="request-call-me" method="POST" action="submit-us.php" novalidate="novalidate">
                     <div class="form-group error-msg">
                        <input type="hidden" name="form_name" value="Callback">
                        <input type="hidden" name="campaign" value="Google">
                        <input type="text" class="form-control" name="callback" id="inputPassword2" placeholder="Request a Call Back" onfocus="this.placeholder = 'Enter your phone no.'" onblur="this.placeholder = 'Request a Call'">
                     </div>
                     <button type="submit" class="btn btn-call-submit pull-right" name="Callback">Submit</button>
                  </form>
                  </div>
               </div>
            </div>
             <!-- End Section -->
  

       
         </div>
      </section>
     <!-- End -->
    
<div class="nav-patch" id="amenities"></div>
<section class="amenities-section parallax-bg">
     <h1>Amenities</h1>
     <div class="container">
         <div class="row conn-block">
               <div class="col-md-3 col-sm-3">
                  <div class="am-img"><img src="images/mulund/am1.png"/></div>
                  <p class="conn-icon">Swimming Pool</p>
               </div>

               <div class="col-md-3 col-sm-3">
                 <div class="am-img"> <img src="images/mulund/am2.png"/></div>
                  <p class="conn-icon">Jogging Track</p>
              </div>

              <div class="col-md-3 col-sm-3">
                  <div class="am-img"><img src="images/mulund/am3.png"/></div>
                  <p class="conn-icon">Club House</p>
               </div>

               <div class="col-md-3 col-sm-3">
                  <div class="am-img"><img src="images/mulund/am4.png"/></div>
                  <p class="conn-icon">Mini-theatre</p>
               </div>

  
             
            </div>
             <div class="row conn-block">

                <div class="col-md-3 col-sm-3">
                  <div class="am-img"><img src="images/mulund/am5.png"/></div>
                  <p class="conn-icon">Indoor Games</p>
                </div>

                 <div class="col-md-3 col-sm-3">
                    <div class="am-img"><img src="images/mulund/am6.png"/></div>
                    <p class="conn-icon">Gym</p>
                 </div>
                <div class="col-md-3 col-sm-3">
                  <div class="am-img"><img src="images/mulund/am7.png"/></div>
                  <p class="conn-icon">Party Hall</p>
                </div>
               
              <div class="col-md-3 col-sm-3">
                  <div class="am-img"><img src="images/mulund/am8.png"/></div>
                  <p class="conn-icon">Garden</p>
               </div>

          
            </div>

     
 </section>    



<!-- Register modal -->
<div id="register-modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header text-center">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
         Please Register
            </div>
      <div class="modal-body download-modal-body pull-left">
        <form class="form-section1" id="register" method="POST" action="submit-godrejalivee.php">
      <!--   <input type="hidden" class="form-control" id="flat_type" name="flat_type"/> -->
        <input type="hidden" name="campaign" value="Google">
        <input type="hidden" value="<?php echo $_GET['utm_source']; ?>" name="utm_source"><input type="hidden" value="<?php echo $_GET['utm_medium']; ?>" name="utm_medium"><input type="hidden" value="<?php echo $_GET['utm_campaign']; ?>" name="utm_campaign">
                  <div class="form-row">
                     <div class="form-group col-md-12">
                        <!-- <label for="inputEmail4" class="col-form-label">Email</label> -->
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name*">
                     </div>
                 </div>
                  <div class="form-group col-md-12">
                     <!-- <label for="inputAddress" class="col-form-label">Address</label> -->
                     <input type="text" class="form-control" id="email" name="email" placeholder="Email Id*">
                  </div>
                   <div class="form-group col-md-12">
                     <!-- <label for="inputAddress" class="col-form-label">Address</label> -->
                     <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile*">
                  </div>
                  <div class="col-sm-12 text-center">
                     <button type="submit" class="btn  btn-submit" name="register">Submit</button>
                     <!-- <span id="loader"></span> -->
                     <p id="success_data"></p>
                  </div>
                
               </form>

      </div>
       </div>

  </div>
</div>

<!-- End  -->


 <div id="price-modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header text-center">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        Unit Pricing
            </div>
      <div class="modal-body download-modal-body">
        <form class="form-section1" id="price_form" method="POST" action="submit-godrejalivee.php">
        <input type="hidden" class="form-control" id="flat_type" name="flat_type"/>
        <input type="hidden" name="campaign" value="Google">
        <input type="hidden" value="<?php echo $_GET['utm_source']; ?>" name="utm_source"><input type="hidden" value="<?php echo $_GET['utm_medium']; ?>" name="utm_medium"><input type="hidden" value="<?php echo $_GET['utm_campaign']; ?>" name="utm_campaign">
                  <div class="form-row">
                     <div class="form-group col-md-12">
                        <!-- <label for="inputEmail4" class="col-form-label">Email</label> -->
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name*">
                     </div>
                 </div>
                  <div class="form-group col-md-12">
                     <!-- <label for="inputAddress" class="col-form-label">Address</label> -->
                     <input type="text" class="form-control" id="email" name="email" placeholder="Email Id*">
                  </div>
                   <div class="form-group col-md-12">
                     <!-- <label for="inputAddress" class="col-form-label">Address</label> -->
                     <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile*">
                  </div>
                  <div class="col-sm-12 text-center">
                     <button type="submit" class="btn  btn-submit" name="unit_pricing">Submit</button>
                     <!-- <span id="loader"></span> -->
                     <p id="success_data"></p>
                  </div>
                
               </form>

      </div>
       </div>

  </div>
</div>

<!-- Fllor Plan modal -->
 <div id="floor_plan" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header text-center">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        Floor Plans
            </div>
      <div class="modal-body download-modal-body">
        <form class="form-section1" id="floor_plan_form" name="floor_plan" method="POST" action="submit-godrejalivee.php">
        <input type="hidden" class="form-control" id="floor_plan_val" name="floor_plan_val"/>
        <input type="hidden" name="campaign" value="Google">
        <input type="hidden" value="<?php echo $_GET['utm_source']; ?>" name="utm_source"><input type="hidden" value="<?php echo $_GET['utm_medium']; ?>" name="utm_medium"><input type="hidden" value="<?php echo $_GET['utm_campaign']; ?>" name="utm_campaign">
                  <div class="form-row">
                     <div class="form-group col-md-12">
                        <!-- <label for="inputEmail4" class="col-form-label">Email</label> -->
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name*">
                     </div>
                 </div>
                  <div class="form-group col-md-12">
                     <!-- <label for="inputAddress" class="col-form-label">Address</label> -->
                     <input type="text" class="form-control" id="email" name="email" placeholder="Email Id*">
                  </div>
                   <div class="form-group col-md-12">
                     <!-- <label for="inputAddress" class="col-form-label">Address</label> -->
                     <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile*">
                     <input type="hidden" class="form-control" id="fp_path" name="fp_path" value="">
                  </div>
                  <div class="col-sm-12 text-center">
                     <button type="submit" class="btn  btn-submit" name="floor_plan">Submit</button>
                     <?php $error1 = $_GET['error_floor_plan']; if($error1 == '1'){ echo "<label style='margin:5px 0px;' class='error'>Please enter all the data in proper format<label>"; } ?>
                     <!-- <span id="loader"></span> -->
                     <p id="success_data"></p>
                  </div>
                
               </form>

      </div>
       </div>

  </div>
</div>
<!--  End -->

 <!-- Gallary -->
 <div class="nav-patch" id="gallery"></div>
    
      <section class="gallery-section parallax-bg">
         <h1>Gallery</h1>
         <div class="section-gallery">
         <!--<img src="images/godrej-imgs/border-bottom.png" />-->
         <div class="container-fluid">
          <!--div class="row">
             <div class="col-sm-6 gallery-img">
               <div class="gallery-img-block">
                  <img src="images/godrej-imgs/lobby.jpg" class="img-responsive img-100" />
                  <h2 class="gallery-block-text">Lobby</h2>
               </div>
               
               <div class="gallery-img-block">
                  <img src="images/godrej-imgs/club-house.jpg" class="img-responsive img-100" />
                  <h2 class="gallery-block-text">Club House</h2>
               </div>
             </div>
             <div class="col-sm-6 gallery-img">
               <div class="gallery-img-block">
                  <img src="images/godrej-imgs/play-area.jpg" class="img-responsive img-100" />
                  <h2 class="gallery-block-text">Play Area</h2>
               </div>
               
               <div class="gallery-img-block">
                  <img src="images/godrej-imgs/gym.jpg" class="img-responsive img-100" />
                  <h2 class="gallery-block-text">Gym</h2>
               </div>
             </div>
          </div-->
          <div class="row">
   <div class="col-sm-4 col-gallery-img">
      <div class="gallery-img-block-godrej">
         <img src="images/gallary/Gallery-Image_1.jpg" class="img-responsive img-100" />
         <h2 class="gallery-block-text">CHOOSE FROM A RANGE OF 2, 3 & 4 BHK HOMES</h2>
        </div> 
   
   </div>
   <div class="col-sm-4 col-gallery-img">
      <div class="gallery-img-block-godrej">
         <img src="images/gallary/Gallery-Image_2.jpg" class="img-responsive img-100" />
         <h2 class="gallery-block-text">WHERE WORK,TOO, IS NOT FAR FROM HOME</h2>
        </div> 
      
   </div>
   <div class="col-sm-4 col-gallery-img">
      <div class="gallery-img-block-godrej">
         <img src="images/gallary/Gallery-Image_3.jpg" class="img-responsive img-100" />
         <h2 class="gallery-block-text">WORK LIVE PLAY GROW</h2>
        </div> 
   
   </div>
   </div>
   <div class="row">
   <div class="col-sm-4 col-gallery-img">
      <div class="gallery-img-block-godrej">
         <img src="images/gallary/Gallery-Image_4.jpg" class="img-responsive img-100" />
         <h2 class="gallery-block-text">LIVE ACTIVE</h2>
        </div> 
   
   </div>
   <div class="col-sm-4 col-gallery-img">
      <div class="gallery-img-block-godrej">
         <img src="images/gallary/Gallery-Image_5.jpg" class="img-responsive img-100" />
         <h2 class="gallery-block-text">LIVE A LIFE THAT LEAPS WITH JOY & LIVE
INSPIRED</h2>
        </div> 
   
   </div>
   <div class="col-sm-4 col-gallery-img">
      <div class="gallery-img-block-godrej">
         <img src="images/gallary/Gallery-Image_6.jpg" class="img-responsive img-100" />
         <h2 class="gallery-block-text">NEW-AGE ADVENTURES</h2>
        </div> 
   
   </div>
   </div>
</div>
         </div>
      </section>
 <!-- End Gallary -->


<!-- Video -->
   <div class="nav-patch" id="Video" ></div>
      <section class="site-map-section parallax-bg">
         <h1>Video</h1>
         <div class="container">
            <video class="video-widt" controls>
              <source src="video/VIDEO-2018-05-13-16-09-29.mp4" type="video/mp4">
              <source src="mov_bbb.ogg" type="video/ogg">
              Your browser does not support HTML5 video.
            </video>
         </div>
      </section>
<!-- End Video -->
 <!-- Plan -->
   <div class="nav-patch" id="plans" ></div>
      <section class="site-map-section parallax-bg">
         <h1>Site Plan</h1>
         <div class="container">
            <img src="images/Site plan/Site_Plan.jpg" class="img-responsive center-block" />
         </div>
      </section>
 <!-- End Plan -->

 <!-- Floor Plan -->
 <div class="nav-patch" id="floorplans"></div>
  <section class="gallery-section  parallax-bg">
         <h1>Floor Plans</h1>
         <div class="section-gallery">
         <!--<img src="images/godrej-imgs/border-bottom.png" />-->
         <div class="container-fluid">
        
          <div class="row">
                 <div class="col-sm-6 col-gallery-img blue-effect">
                    <div class="">
                       <a href="" data-toggle="modal" data-target="#floor_plan" onclick="PutFloorPlan('2 BHK Premium', '/docs/Floor_Plan_1.pdf');"><img src="images/floor plan/Floor-Plans_1.png" class="img-responsive img-100" /></a>
                      </div> 
                 </div>
                 <div class="col-sm-6 blue-effect">
                    <div class="">
                       <a href="" data-toggle="modal" data-target="#floor_plan" onclick="PutFloorPlan('3 BHK Luxe', '/docs/Floor_Plan_2.pdf' );"><img src="images/floor plan/Floor-Plans_2.png" class="img-responsive img-100" /></a>
                      
                      </div> 
                    
                 </div>
  
         </div>
         <div class="row">
                <div class="col-sm-6 blue-effect">
                    <div class="">
                       <a href="" data-toggle="modal" data-target="#floor_plan" onclick="PutFloorPlan('3 BHK Ultra Luxe', '/docs/Floor_Plan_3.pdf');"><img src="images/floor plan/Floor-Plans_3.png" class="img-responsive img-100" /></a>
                      
                      </div> 
                    
                 </div>
                  <div class="col-sm-6 blue-effect">
                    <div class="">
                       <a href="" data-toggle="modal" data-target="#floor_plan" onclick="PutFloorPlan('4 BHK Ultra Luxe', '/docs/Floor_Plan_4.pdf');"><img src="images/floor plan/Floor-Plans_4.png" class="img-responsive img-100" /></a>
                      
                      </div> 
                    
                 </div>
  
   </div>
</div>
         </div>
      </section>
 <!-- End -->

 <!-- Video -->
  <!--   <div class="nav-patch" id="video" ></div>
      <section class="site-map-section parallax-bg">
         <h1>Video</h1>
         <div class="container">
            <img src="images/Site plan/Site_Plan.jpg" class="img-responsive center-block" />
         </div>
      </section> -->

 <!-- End Video -->



     <div class="nav-patch" id="price"></div>
      <section class="unit-pricing-section parallax-bg">
         <h1>Price </h1>
         <div class="container">
            <div class="table-width">
                <table>
                  <tr>
                     <th>Type</th>
                     <th>Carpet Area Sq. Ft.</th>
                     <!--th>Reference Areas  (sq ft)</th-->
                     <th>Price</th>
                  </tr>
                  <tr>
                     <td><span>2 BHK Premium</span></td>
                     <td>680 - 780</td>
                     <!--td>1,000</td-->
                     <td data-toggle="modal" data-target="#price-modal"><div class="anchor" onclick = "PutData('2 BHK Premium');" >Click for Price</div></td>
                  </tr>
                  <tr>
                     <td><span>3 BHK Luxe</span></td>
                     <td>900 - 1,000</td>
                 
                   <td data-toggle="modal" data-target="#price-modal"><div class="anchor" onclick = "PutData('3 BHK Luxe');">Click for Price</div></td>
                  </tr>
                   <tr>
                     <td><span>3 BHK Ultra Luxe</span></td>
                     <td>1,100 - 1,200</td>
               
                    <td data-toggle="modal" data-target="#price-modal"><div class="anchor" onclick = "PutData('3 BHK Ultra Luxe');">Click for Price</div></td>
                  </tr>
                    <tr>
                     <td><span>4 BHK Ultra Luxe</span></td>
                     <td>1,469</td>
               
                    <td data-toggle="modal" data-target="#price-modal"><div class="anchor" onclick = "PutData('4 BHK Ultra Luxe');">Click for Price</div></td>
                  </tr>
               <!-- <tr>
                     <td><span>3 BHK</span></td>
                     <td>1,100 - 1,400</td>
                   
                     <td data-toggle="modal" data-target="#price-modal"><div class="anchor" onclick = "PutData('3 BHK');">Click for Price</div></td>
                  </tr>  -->
                  <!-- <tr>
                     <td><span>4 BHK /Duplex /Penthouse</span></td>
                     <td>1754 -2338</td>
                       <td data-toggle="modal" data-target="#price-modal"><div class="anchor" onclick = "PutData('4 BHK /Duplex /Penthouse');">Click for Price</div></td>
                  </tr>
                   -->
                  <!--<tr>-->
                  <!--   <td><span>4 BHK</span></td>-->
                  <!--   <td>1,652</td>-->
                     <!--td>2,615</td-->
                  <!--  <td data-toggle="modal" data-target="#price-modal"><div class="anchor" onclick = "PutData('4 BHK');">Click for Price</div></td>-->
                  <!--</tr>-->
               </table>
            </div>
         </div>
      </section>
     
   
     <!--  <div class="nav-patch" id="connectivity" ></div> -->
      <!-- <section class="connectivity-section" id="connectivity">
         <h1>Connectivity</h1>
         <div class="container">
            <div class="row conn-block">
              <div class="col-md-2 col-sm-4 mg-b-20">
                  <img src="images/connectivity/aeroplane.png"/>
                  <p>Upcoming International <br>Airport (NMIA)</p>
               </div>
               <div class="col-md-3 col-sm-4 mg-b-20">
                  <img src="images/connectivity/bridge.png"/>
                  <p>Upcoming Nhava <br>Shewa Trans-harbour Link</p>
               </div>
              <div class="col-md-2 col-sm-4 mg-b-20">
                  <img src="images/connectivity/cargo-ship.png"/>
                  <p>JNPT: India's <br>Largest Container Port</p>
               </div>
               <div class="col-md-3 col-sm-4 mg-b-20">
                  <img src="images/connectivity/road2.png"/>
                  <p>Virar Alibaug <br>Multi Modal Corridor</p>
               </div>
               <div class="col-md-2 col-sm-4 mg-b-20">
                  <img src="images/connectivity/factory.png"/>
                  <p>Industrial Hubs: <br>NMSEZ Dronagiri &amp; Ulwe, <br>Taloja Ind. Area</p>
               </div>
             </div> -->
            
            <!--div class="row img-text-block">
               <div class="col-md-push-1 col-md-5 col-sm-6">
                  <p class="icon-text"><img src="images/godrej-imgs/logo-1.png" class="img-responsive" />Central Location</p>
                  <p class="clearfix"></p>
                  <ul>
                     <li>Excellent Proximity  to all parts of  Mumbai and Navi Mumbai.</li>
                     <li>Proximity to current and future airport
developments, the commercial hub of BKC
and residential clusters of Andheri and Powai.</li>
                     
                  </ul>
               </div>
               <div class="col-md-push-1 col-md-5 col-sm-6">
                  <p class="icon-text"><img src="images/godrej-imgs/logo-2.png" class="img-responsive" />Existing Infrastructure</p>
                  <p class="clearfix"></p>
                  <ul>
                     <li>Ready access to site location from the Eastern Express Highway.</li>
                     <li>Vikhroli Railway Station and Vikhroli Bus Depot  - a 5 mins walk away.</li>
                     <li>Close to Sion-Panvel Express Highway.</li>
                     <li>Easy access to several malls on LBS Marg.</li>
                  </ul>
               </div>
               <div class="col-md-push-1 col-md-5 col-sm-6">
                  <p class="icon-text"><img src="images/godrej-imgs/logo-3.png" class="img-responsive" />Future Infrastructure</p>
                  <p class="clearfix"></p>
                  <ul>
                     <li>Ghatkopar-Andheri-Versova Metro Rail Link.</li>
                     <li>Six lane direct Expressway that connects to  proposed Navi Mumbai airport.</li>
                     <li>Sewri-Nhava Sheva Trans-Harbour Link.</li>
                  </ul>
               </div>
               <div class="col-md-push-1 col-md-5 col-sm-6">
                  <p class="icon-text"><img src="images/godrej-imgs/logo-4.png" class="img-responsive" />Planned Development</p>
                  <p class="clearfix"></p>
                  <ul>
                     <li>Large continuous land ownership by Godrej, promises a  unique and mixed use destination.</li>
                     <li>Robust progress on multiple new and redevelopment projects across price segments.</li>
                     
                     
                  </ul>
               </div>
            </div-->
       <!--   </div>
      </section> -->
      <!-- <div class="nav-patch" id="enquiry-section"></div> -->
      <!-- <section class="footer-section parallax-bg" id="enquiry-section">
         <div class="footer-section-h1">
            <a class="popup-btn schedule-btn" id="enquiry-btn" href="#enquiry">
               <h1>Enquire Now</h1>
            </a>
         </div>
        <!--  <div class="home-design-section">
             <img  class="img-responsive center-block" src="images/u&us-home-design.png" />
         </div> -->
    <!--      <div class="container footer-rera-text">
             
            <p class="rera-num" style="color:#666666;">MahaRERA registration number :  P52000016199
             <br><br><span style="font-size:16px;">available at website:</span> <a style="color:#666666;font-size:16px;" href="http://maharera.mahaonline.gov.in">http://maharera.mahaonline.gov.in</a> </p> 
             <p class="" style="color:#666666; font-size:20px;margin-top:25px;">Marketed By Rioga Premium Real Estate Advisory LLP</p>
              <img style="margin-bottom:20px;" class="img-responsive center-block" src="images/footer-logo.png" />
                <p style="color:#666666; font-size:13px;">MahaRERA No: A51800000974
</p>
                
            <!--p class="footer-main-test">Marketed by Rioga Premium </p-->
            <!-- <p class="disclaimer">
             Disclaimer: The information provided in this advertisement, including all pictures, images, plans, drawings, amenities, dimensions, elevations, illustrations, facilities, features, specifications, other information, etc. mentioned are indicative of the kind of development that is proposed and are subject to the approval from the competent authorities. Pictures, visuals, perspective views of the building, model, furniture and maps are as per architectural drawings and the same shall be constructed subject to approvals of competent authorities and shall be in compliance of RERA Acts and Rules and Regulations. Furniture, Fixtures and Furnishings shown in the show flat are only for representation and shall not be provided in the actual flat. The Project is mortgaged to Indiabulls Housing Finance Ltd. *T&C Apply.

            </p>

         </div> -->
   <!--    </section>  -->

   <section class="footer-section parallax-bg">
    <hr></hr>
         <div class="container footer-rera-text">
             
            <p class="rera-num" style="color:#666666;">MahaRERA Registration No. of Godrej Alive Wing A- P51700010303 | Wing B- P51700005281 | Wing C- P51700009993 | Wing E- P51700009992
             <br><br><span style="font-size:16px;">available at website:</span> <a style="color:#666666;font-size:16px;" href="http://maharera.mahaonline.gov.in" target="_blank">http://maharera.mahaonline.gov.in</a> </p> 
             <p class="" style="color:#666666; font-size:20px;margin-top:25px;">Marketed by Rioga Premium </p>
              <img style="margin-bottom:20px;" class="img-responsive center-block" src="images/footer-logo.png" />
                <p style="color:#666666; font-size:13px;">MahaRERA No: A51800000974
</p>
                
            <!--p class="footer-main-test">Marketed by Rioga Premium </p-->
            <p class="disclaimer">
             Disclaimer Project is being developed by Godrej Properties Ltd. This is not an offer, invitation to offer and/or commitment of any nature. The details herein are only indicative and are subject to change without notice. Recipients are advised to use their discretion in relying on the information/ amenities described/ shown therein.
             *Source: Google map. Travel time basis normal traffic conditions.

            </p>

         </div>
      </section>



           <a href="#" class="scrollup"><span class="glyphicon glyphicon-chevron-down"></span></a>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="js/jquery.malihu.PageScroll2id.js" type="text/javascript"></script>
    
<script type="text/javascript">
   // refresh captcha
  $('#refresh').click(function() {
    change_captcha();
  });
    
  function change_captcha()
  {
    document.getElementById('captcha').src="http://godrejprime-chembur.com/captcha/get_captcha.php?rnd=" + Math.random();
  }
</script>
    
<script>
   (function ($) {
       $(window).load(function () {

           /* Page Scroll to id fn call */
           $("#main-nav a,a[href='#top'],a[rel='m_PageScroll2id']").mPageScroll2id({
               highlightSelector: "#main-nav a"
           });
           $("#main-nav-xs li a,a[href='#top'],a[rel='m_PageScroll2id']").mPageScroll2id({
               highlightSelector: "#main-nav-xs a"
           });
   
           /* demo functions */
           $("a[rel='next']").click(function (e) {
               e.preventDefault();
               var to = $(this).parent().parent("section").next().attr("id");
               $.mPageScroll2id("scrollTo", to);
           });
   
       });
   })(jQuery);
</script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
      <script type="text/javascript">


      var dateToday = new Date();
      $('#datepicker').datepicker({                                     
    'startDate': dateToday
      });
        /* $(function() {
         $( "#datepicker" ).datepicker({ minDate: 0});
         });*/
        $(function() {
         $( "#timepicker" ).timepicker();
         });
         
         function PutData(val){
             $( "#flat_type" ).val(val);
         }

         function PutFloorPlan(val, url){
             $("#floor_plan_val").val(val);
             $("#fp_path").val(url);
         }
      </script>
      <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.min.js"></script>
      <!-- jQuery Form Validation code -->
     <script>
         jQuery(function() {
            // Setup form validation on the #register-form element
            jQuery("#enquiry-form").validate({
               // Specify the validation rules
               rules: {
                  name: {
                     required:true,
                     lettersonly:true
                  },
                  contact:{
                     required:true,
                     intlphone:true,
                     maxlength: 12,
                     minlength: 10
                  
                  },
                  email:{
                     required:true,
                     email:true
                  },
                  unit:{
                     required:true
                  },
                  captcha: {
                  required: true,
                    remote: "http://godrejprime-chembur.com/captcha/capt-process.php"
                  }
               },
               // Specify the validation error messages
               messages: {
                  name:{
                     required:'Please enter your name',
                     lettersonly:'Please enter name in proper format'
                  },
                  contact:{
                     required:'Please enter your mobile',
                     intlphone:'Please enter mobile in proper format',
                     maxlength: 'Mobile Number should be of maximum 12 digits',
                     minlength: 'Mobile Number should be of minimum 10 digits'
                  
                  },
                  email:{
                     required:'Please enter your email id',
                     email: 'Please enter email id on proper format'
                  },
                  unit:{
                     required: 'Please select unit'
                  },
                  captcha: {
                  required: 'Correct captcha is required',
                    remote: 'Please enter valid captcha'
                  }
               }
            });
         });
         // Added manual function to validator
         jQuery.validator.addMethod("lettersonly", function(value, element) {
            return this.optional(element) || /^[a-zA-Z ]*$/.test(value);
         });
       
       jQuery.validator.addMethod('intlphone', function(value, element) { 
         // return this.optional(element) || /^((\+)?[1-9]{1,2})?([-\s\.])?((\(\d{1,4}\))|\d{1,4})(([-\s\.])?[0-9]{1,12}){1,2}(\s*(ext|x)\s*\.?:?\s*([0-9]+))?$/.test(value);
         return this.optional(element) || /^[0-9\+-]+$/.test(value);
       });
          jQuery(function() {
            // Setup form validation on the #register-form element
            jQuery("#enquiry-form-1").validate({
               // Specify the validation rules
               rules: {
                  name: {
                     required:true,
                     lettersonly:true
                  },
                  contact:{
                     required:true,
                     intlphone:true,
                     maxlength: 12,
                     minlength: 10
                  
                  },
                  email:{
                     required:true,
                     email:true
                  },
                  unit:{
                     required:true
                  },
                  captcha: {
                   required: true,
                    remote: "http://godrejprime-chembur.com/captcha/capt-process.php"
                  }
               },
               // Specify the validation error messages
               messages: {
                  name:{
                     required:'Please enter your name',
                     lettersonly:'Please enter name in proper format'
                  },
                  contact:{
                     required:'Please enter your mobile',
                     intlphone:'Please enter mobile in proper format',
                     maxlength: 'Mobile Number should be of maximum 12 digits',
                     minlength: 'Mobile Number should be of minimum 10 digits'
                  
                  },
                  email:{
                     required:'Please enter your email id',
                     email: 'Please enter email id on proper format'
                  },
                  unit:{
                     required: 'Please select unit'
                  },
                  captcha: {
                   required: 'Correct captcha is required',
                    remote: 'Please enter valid captcha'
                  }
               }
            });
         });
         // Added manual function to validator
         jQuery.validator.addMethod("lettersonly", function(value, element) {
            return this.optional(element) || /^[a-zA-Z ]*$/.test(value);
         });
       
       jQuery.validator.addMethod('intlphone', function(value, element) { 
         // return this.optional(element) || /^((\+)?[1-9]{1,2})?([-\s\.])?((\(\d{1,4}\))|\d{1,4})(([-\s\.])?[0-9]{1,12}){1,2}(\s*(ext|x)\s*\.?:?\s*([0-9]+))?$/.test(value);
         return this.optional(element) || /^[0-9\+-]+$/.test(value);
       });
         
         jQuery(function() {
            // Setup form validation on the #register-form element
            jQuery("#call-me").validate({
               // Specify the validation rules
               rules: {
                  callme:{
                     required:true,
                     intlphone:true,
                     maxlength: 12,
                     minlength: 10
                  
                  }
               },
               // Specify the validation error messages
               messages: {
                  callme:{
                     required:'Please enter your mobile',
                     intlphone:'Please enter mobile in proper format',
                     maxlength: 'Mobile Number should be of maximum 12 digits',
                     minlength: 'Mobile Number should be of minimum 10 digits'
                  
                  }
               }
            });
         });
         
        jQuery(function() {
            // Setup form validation on the #register-form element
            jQuery("#request-call-me").validate({
               // Specify the validation rules
               rules: {
                  callback:{
                     required:true,
                     intlphone:true,
                     maxlength: 12,
                     minlength: 10
                     
                  }
               },
               // Specify the validation error messages
               messages: {
                  callback:{
                     required:'Please enter your mobile',
                     intlphone:'Please enter mobile in proper format',
                     maxlength: 'Mobile Number should be of maximum 12 digits',
                     minlength: 'Mobile Number should  be of minimum 10 digits'
                  
                  }
               }
            });
         });


          jQuery(function() {
            // Setup form validation on the #register-form element
            jQuery("#register").validate({
               // Specify the validation rules
               rules: {
                  name: {
                     required:true,
                     lettersonly:true
                  },
                  mobile:{
                     required:true,
                     digits:true,
                     maxlength: 12,
                     minlength: 10
                  },
                  email:{
                     required:true,
                     email:true
                  }
               },
               // Specify the validation error messages
               messages: {
                  name:{
                     required:'Please enter your name',
                     lettersonly:'Please enter name in proper format'
                  },
                  mobile:{
                     required:'Please enter your mobile',
                     digits:'Please enter mobile in proper format',
                     maxlength: 'Mobile Number should be of maximum 12 digits',
                     minlength: 'Mobile Number should be of minimum 10 digits'
                  
                  },
                  email:{
                     required:'Please enter your email id',
                     email: 'Please enter email id on proper format'
                  }
               }
            });
         });

         
         jQuery(function() {
            // Setup form validation on the #register-form element
            jQuery("#download_brochure").validate({
               // Specify the validation rules
               rules: {
                  name:{
                     required:true,
                     lettersonly:true
                  },
                  email:{
                      required: true,
                      email:true
                  },
                  number:{
                      required:true,
                     intlphone:true,
                     maxlength: 12,
                     minlength: 10
                  
                     
                  }
               },
               // Specify the validation error messages
               messages: {
                  name:{
                     required:'Please enter your name',
                     lettersonly:'Please enter name in proper format'
                  },
                  email:{
                      required: 'Please enter your email',
                      email:'Please enter email in proper format'
                  },
                  number:{
                     required:'Please enter your mobile',
                     intlphone:'Please enter mobile in proper format',
                     maxlength: 'Mobile Number should be of maximum 12 digits',
                     minlength: 'Mobile Number should be  of minimum 10 digits'
                     
                  }
               }
            });
         });
         
        jQuery(function() {
            // Setup form validation on the #register-form element
            jQuery("#site_visit").validate({
               // Specify the validation rules
               rules: {
                  name:{
                     required:true,
                     lettersonly:true
                  },
                  email:{
                      required: true,
                      email:true
                  },
                  contact:{
                     required:true,
                     intlphone:true,
                     maxlength: 15
                     
                  },
                  pickup_location:{
                     required:true,
                     lettersonly:true
                  },
                  date:{
                      required:true
                  },
                  time:{
                      required:true
                  }
               },
               // Specify the validation error messages
               messages: {
                  name:{
                     required:'Please enter your name',
                     lettersonly:'Please enter name in proper format'
                  },
                  email:{
                      required: 'Please enter your email',
                      email:'Please enter email in proper format'
                  },
                  contact:{
                     required:'Please enter your mobile',
                     intlphone:'Please enter mobile in proper format',
                     maxlength: 'Mobile Number should be of maximum 15 digits'
                  
                  },
                  pickup_location:{
                     required:'Please enter pickup location',
                     lettersonly:'Please enter pickup location in proper format'
                  },
                  date:{
                      required:'Please select date'
                  },
                  time:{
                      required:'Please select time'
                  }
               }
            });
         });
         
         
            jQuery(function() {
            // Setup form validation on the #register-form element
            jQuery("#price_form").validate({
               // Specify the validation rules
               rules: {
                  name: {
                     required:true,
                     lettersonly:true
                  },
                  mobile:{
                     required:true,
                     digits:true,
                     maxlength: 12,
                     minlength: 10
                  },
                  email:{
                     required:true,
                     email:true
                  }
               },
               // Specify the validation error messages
               messages: {
                  name:{
                     required:'Please enter your name',
                     lettersonly:'Please enter name in proper format'
                  },
                  mobile:{
                     required:'Please enter your mobile',
                     digits:'Please enter mobile in proper format',
                     maxlength: 'Mobile Number should be of maximum 12 digits',
                     minlength: 'Mobile Number should be of minimum 10 digits'
                  
                  },
                  email:{
                     required:'Please enter your email id',
                     email: 'Please enter email id on proper format'
                  }
               }
            });
         });

            jQuery(function() {
            // Setup form validation on the #register-form element
            jQuery("#floor_plan_form").validate({
               // Specify the validation rules
               rules: {
                  name: {
                     required:true,
                     lettersonly:true
                  },
                  mobile:{
                     required:true,
                     digits:true,
                     maxlength: 12,
                     minlength: 10
                  },
                  email:{
                     required:true,
                     email:true
                  }
               },
               // Specify the validation error messages
               messages: {
                  name:{
                     required:'Please enter your name',
                     lettersonly:'Please enter name in proper format'
                  },
                  mobile:{
                     required:'Please enter your mobile',
                     digits:'Please enter mobile in proper format',
                     maxlength: 'Mobile Number should be of maximum 12 digits',
                     minlength: 'Mobile Number should be of minimum 10 digits'
                  
                  },
                  email:{
                     required:'Please enter your email id',
                     email: 'Please enter email id on proper format'
                  }
               }
            }); 
         });
      </script>
 
      <script src="js/bootstrap.min.js"></script>
      <script src="js/slick.js"></script>
        <script>
          $(function() {
   $(window).scroll(function() {
      var scroll = $(window).scrollTop();

      if (scroll >= 600) {
         $(".nav-ul").addClass("fixed-header");
      } else {
         $(".nav-ul").removeClass("fixed-header");
      }
   });
});

      </script>
      <script type="text/javascript">
           $(document).ready(function () {

         $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
               $('.scrollup').fadeIn();
            } else {
               $('.scrollup').fadeOut();
            }
         });

         $('.scrollup').click(function () {
            $("html, body").animate({
               scrollTop: 0
            }, 600);
            return false;
         });

         $('.schedule-btn').click(function () {
            $("html, body").animate({
               scrollTop: 0
            }, 600);
            return false;
         });

      });
      </script>
      <script type="text/javascript">
            $(window).scroll(function() {
               $('.contactLink').addClass('btn-hide');
      if ($(document).scrollTop() > 700) {
      $('.contactLink').addClass('btn-show');
     $('.contactLink').removeClass('btn-hide');
      }
      else {
     
       $('.contactLink').removeClass('btn-show'); 
       $('.contactLink').addClass('btn-hide');
  }
      });
</script> 
 <script type="text/javascript">
    $(document).on('ready', function() {
     
      $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 2, 
        responsive:[
            {
              breakpoint:1030,
              settings:{
              slidesToShow: 2,
              slidesToScroll: 2,
              infinite: true,
              dots: false
            }
          },
            {
              breakpoint:992,
              settings:{
              slidesToShow: 2,
              slidesToScroll: 2,
              infinite: true,
              dots: false
            }
          },
          {
              breakpoint:800,
              settings:{
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
              dots: false
            }
          },

            {
              breakpoint:480,
              settings:{
              slidesToShow: 1,
              arrows : true,
              slidesToScroll: 1
            }
            }

          ]
        });

  
     
     
    });
</script>

<!-- Google Code for Remarketing Tag -->

<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 832170116;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/832170116/?guid=ON&amp;script=0"/>
</div>
</noscript>



<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/832170116/?guid=ON&amp;script=0"/>
</div>
</noscript>
   </body>
</html>