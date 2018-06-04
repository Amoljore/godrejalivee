<?php 
$actual_link = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if($actual_link == 'http://godrejplatinum-vikhroli.com/google-godrej-platinum-us.php'){
    header("location:http://godrejplatinum-vikhroli.com/luxury-apartments-mumbai-gus");
}

?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="Pre Launching Godrej Platinum (T 4) - a 28 storey tower with lavish 2, 3 & 4 BHK duplex apartments in one of Mumbai's best locations - Vikhroli.">
      <meta name="keywords" content="2 BHK Flats in Vikhroli. Mumbai,3 BHK Flats in Vikhroli, Mumbai,4 BHK Flats in Vikhroli, Mumbai,4 BHK duplex apartments in Vikhroli,Apartments in Vikhroli,Property in Vikhroli">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Godrej The Trees - 1 BHK, 2 BHK, 3 BHK, 4 BHK Duplex & Penthouses in Vikhroli, Mumbai
       </title>
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
      <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
       <link rel="shortcut icon" href="images/favicon.png">
      <!-- Optional theme -->
      <!-- animate start end-->
      <!--link href="css/style.css" rel="stylesheet"-->
      <link href="css/style-godrej-tree.css" rel="stylesheet">
      <!--link href="css/custom.css" rel="stylesheet"-->
      <link href="css/custom-godrej-tree.css" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700|Merriweather+Sans:300,400,700,800" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,700,900" rel="stylesheet">
   </head>
   <body>
      <section class="landing-banner-section " id="header">
         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-6 col-sm-push-1">
                   <p class="banner-title banner-title-background">
 <img src="images/godrej-tree/tree-logo.png" class="img-responsive tree-logo" alt="logo"/>
</p>
                  <img src="images/godrej-tree/godrej-main-logo.png" class="main-logo" alt="logo"/>
                        <!--div class="strip-1">
            <img src="images/zero-broker.png" class="img-responsive center-block zero-broker-strip" alt="strip">
         </div-->
          
               </div>
			   
               <div class="col-lg-4 col-lg-offset-2 col-sm-6 col-sm-offset-0 enq-wrapper  text-center" id="enquiry">
                  <form class="form-inline call-me-form" action="submit-tree.php" method="POST" id="call-me">
                     <div class="form-group error-msg">
                        <input type="hidden" name="form_type" value="Callme">
                        <input type="hidden" value="Google" name="campaign">
                        <input type="text" class="form-control" name="callme" id="inputPassword2" placeholder="Call me for Pre Launch Offers" onfocus="this.placeholder = 'Enter your phone no.'"
onblur="this.placeholder = 'Call me for Pre Launch Offers'">
						<?php $error1 = $_GET['error1']; if($error1 == '1'){ echo "<label class='error'>Please enter data in proper format<label>"; }?>
                     </div>
                     <button style="border-radius:0px;" type="submit" class="btn btn-call-submit pull-right" name="Callme">Submit</button>
                  </form>
                  <div class="form-wrapper">
                    
                     <form class="form-section" id="enquiry-form" action="submit-tree.php" name="enquiry-form" method="POST">
                        <h5>Enquire Now</h5>
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
                        <div class="col-sm-12">
                           <button type="submit" class="btn  btn-submit" name="enquiry">Submit</button>
                           <?php $error2 = $_GET['error2']; if($error2 == '1'){ echo "<label style='margin:5px 0px;' class='error'>Please enter all the data in proper format<label>"; }?>
                        </div>
                        <div class="form-check">
                           <label class="form-check-label" style="font-weight: 400; font-family: din-regular;" >
                           <input type="hidden" value="0" name="keep_you_posted">
                           <input type="checkbox" value="1" name="keep_you_posted" checked class="form-check-input">
                           Please Click Here, To Keep You Posted
                           </label>
                        </div>
                     </form>
                     <p class="phone-number"><a href="tel:+91 99309 04488"><span class="glyphicon glyphicon-earphone phone-icon"></span>+91 9930 904 488</a></p>
                  </div>
 
               </div>
            </div>
         </div>
        
         <div class="navigation">

         <div class="prelaunch-msg-section text-center">
            <h3>LIVE IN THE HEART OF THE CITY. LIVE ADMIST NATURE </h3>
            <p>Godrej The Trees, Vikhroli, Mumbai</p>
              <p>1 BHK, 2 BHK, 3 BHK, 4 BHK Duplex & Penthouses Starting @ 1.5 Cr* Onwards</p>
         </div>
            
         </div>
      </section>
       <div class="navigation nav-ul">
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
                        <li><a class="page-scroll" href="google-overview.php">Overview</a></li>
                        <li><a class="page-scroll" href="google-amenities.php">Amenities</a></li>
                        <li><a class="page-scroll" href="google-gallery.php">Gallery</a></li>
                        <li><a class="page-scroll" href="google-plan.php">Plans</a></li>
                        <li><a class="page-scroll" href="google-price.php">Price</a></li>
                        <li><a class="page-scroll" href="google-location.php">Location</a></li>
                        <li><a class="page-scroll" href="google-enquiry.php
                        ">Enquire now</a></li>
                     </ul>
                  </div>
               </nav>
            </div>
            </div>
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
                                 <form class="form-section" id="site_visit" method="POST" action="submit-tree.php" name="site_visit">
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
     
      <section id="overview" class="overview-section">
         <div class="container">
            <div class="top-section">
               <!--img class="img-responsive center-block h1-img" src="images/godrej-imgs/border-bottom-black.png" /-->
               <h1>Mumbai's Premier Mixed Use Development</h1>
               <h5>Project Highlights</h5>
               <!--p class="p-small">Godrej Platinum offers the best of facilities and lavish apartments that exude a quiet sense of luxury and is located at Mumbai's most strategic location, Vikhroli. It offers Lavish 2 BHK, 3 BHK & 4 BHK duplex apartments.</p-->
               <div class="bullet-list-section">
                  <div class="row">
                     <div class="col-sm-4">
                        <ul><li class="p-bullet">Godrej Properties flagship development spread across 34 acres in Vikhroli</li></ul>
                     </div>
                     <div class="col-sm-4">
                        <ul><li class="p-bullet">Luxury Homes, Taj Hotel, cleaner air, convenience & high street retail, Godrej Group headquarters</li></ul>
                     </div>
                     <div class="col-sm-4">
                        <ul><li class="p-bullet">Limited units with spectacular views of mangroves available</li></ul>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-4">
                        <ul><li class="p-bullet">International award winning mixed used development</li></ul>
                     </div>
                     <div class="col-sm-4">
                        <ul><li class="p-bullet">Larsen & Tourbo is the construction partner for Godrej Origins at The Trees</li></ul>
                     </div>
                     <div class="col-sm-4">
                         <ul>
                             <li class="p-bullet">
                                 Construction in advance stages for Phase 1 and 2
                             </li>
                             
                         </ul>
                     </div>
                  </div>
                  
                  <div class="row">
                     <div class="col-sm-4">
                        <ul><li class="p-bullet">Over 700 happy families till date</li></ul>
                     </div>
                     <div class="col-sm-4">
                        <ul><li class="p-bullet">1.4 lakh sq. ft. of open spaces spread across the trees developments</li></ul>
                     </div>
                     
                  </div>
               </div>
            </div>
            <div class="block-section">
               <div class="row first-block-section">
                  <div class="col-sm-5">
                     <div class="left-img-block">
                        <img class="img-responsive" src="images/godrej-tree/box-1.png" />
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <!--h2>Emerald Isle, Powai at a glance</h2-->
                     <h2>The Trees, Vikhroli at a Glance.</h2>
                     <p>Spread across 34 acres in Vikhroli, Mumbai, The Trees is an international award-winning mixed use development that once completed will house luxury residences, a Taj hotel, convenience and high street retail, cultural spaces and premium office buildings. The project is being developed in association with illustrious international master planning and architectural firms who have been responsible for the Beijing Olympics masterplan, the Petronas Towers in Kuala Lumpur, and many other global landmarks. The Residences at the Trees have been one of Indias most successful recent real estate launches with 75% of the first phase being sold within one week of launch.</p>
                    <a class="download-btn" href="" data-toggle="modal" data-target="#download-modal">Download Brochure</a>


                    
<!-- Modal -->
<div id="download-modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header text-center">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        Download Brochure
            </div>
      <div class="modal-body download-modal-body">
        <form class="form-section" id="download_brochure" method="POST" action="submit-tree.php" name="download_brochure">
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

                   <a style="display:none;" id="dp99" href="http://www.whitespringestates.com/whise-pro/wp-content/themes/whitespring/download.php?filename=Whitespring-Estates-Project-Gateway-E-Brochure.pdf" class="links">Download make-Zip-in-PHP.jpg</a>
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
                        <img class="img-responsive" src="images/left-img2.jpg" />
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <p>Emerald Isle Phase-2 - Powai, Mumbai is L&T Realty's upcoming new residential development in Powai. Its name Emerald Isle Phase-2 is a perfect reflection of what this project at Powai  stands for - environmentally thoughtful design and serene green surroundings.</p>
                     <ul class="second-block-ul">
                        <li>A gated complex situated across the road from Powai Lake and Garden.</li>
                        <li>Apart from 2 & 3 BHK apartments, it also offers exclusive lake facing 4 BHK apartments.</li>
                        <li>All apartments have beautiful aesthetics, finish & modern conveniences.</li>
                        <li>The new residential project in Powai is conveniently located adjacent to L&T Business Park, and close to key business district of MIDC, SEEPZ and BKC. district of MIDC, SEEPZ and BKC.</li>
                     </ul>
                     <h3>Get authentic information by our Sales Experts!</h3>
                     <form class="form-inline call-me-form col-lg-9 col-sm-12" id="request-call-me" method="POST" action="submit-us.php">
                     <div class="form-group error-msg">
                        <input type="hidden" name="form_name" value="Callback">
                        <input type="hidden" name="campaign" value="Google">
                        <input type="text" class="form-control" name="callback" id="inputPassword2" placeholder="Request a Call Back" onfocus="this.placeholder = 'Enter your phone no.'"
onblur="this.placeholder = 'Request a Call'">
<?php $error3= $_GET['error3']; if($error3== '1'){ echo "<label class='error'>Please enter data in proper format<label>"; }?>
                     </div>
                     <button type="submit" class="btn btn-call-submit pull-right" name="Callback">Submit</button>
                  </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
<div class="nav-patch" id="ammenities"></div>
<section class="amenities-section">
     <h1>Amenities</h1>
     <div class="container">
            <div class="row conn-block">
               <div class="col-md-3 col-sm-3">
                  <img src="images/godrej-tree/amm-1.png"/>
                  <p class="conn-icon">Gymnasium</p>
               </div>
               <div class="col-md-3 col-sm-3">
                  <img src="images/godrej-tree/amm-2.png"/>
                  <p class="conn-icon">Swimming Pool</p>
               </div>
               <div class="col-md-3 col-sm-3">
                  <img src="images/godrej-tree/amm-3.png"/>
                  <p class="conn-icon">Squash Courts</p>
               </div>
               <div class="col-md-3 col-sm-3">
                  <img src="images/godrej-tree/amm-4.png"/>
                  <p class="conn-icon">Mini-theatre</p>
               </div>
              
            </div>
             <div class="row conn-block">
               <div class="col-md-3 col-sm-3">
                  <img src="images/godrej-tree/amm-5.png"/>
                  <p class="conn-icon">Cafeteria</p>
               </div>
               <div class="col-md-3 col-sm-3">
                  <img src="images/godrej-tree/amm-6.png"/>
                  <p class="conn-icon">Lounge Area</p>
               </div>
               <div class="col-md-3 col-sm-3">
                  <img src="images/godrej-tree/amm-7.png"/>
                  <p class="conn-icon">Children's play area</p>
               </div>
               <div class="col-md-3 col-sm-3">
                  <img src="images/godrej-tree/amm-8.png"/>
                  <p class="conn-icon">Multi-purpose hall</p>
               </div>
              
            </div>
 </section>      
      
	  <div class="nav-patch" id="gallery"></div>
	 
      <section class="gallery-section ">
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
        	<img src="images/godrej-tree/gallery-1.png" class="img-responsive img-100" />
        	<h2 class="gallery-block-text">Master bedroom</h2>
        </div>	
	
	</div>
	<div class="col-sm-4 col-gallery-img">
		<div class="gallery-img-block-godrej">
        	<img src="images/godrej-tree/gallery-2.png" class="img-responsive img-100" />
        	<h2 class="gallery-block-text">Club house</h2>
        </div>	
		
	</div>
	<div class="col-sm-4 col-gallery-img">
		<div class="gallery-img-block-godrej">
        	<img src="images/godrej-tree/gallery-3.png" class="img-responsive img-100" />
        	<h2 class="gallery-block-text">Origins street</h2>
        </div>	
	
	</div>
	</div>
	<div class="row">
	<div class="col-sm-4 col-gallery-img">
		<div class="gallery-img-block-godrej">
        	<img src="images/godrej-tree/gallery-4.png" class="img-responsive img-100" />
        	<h2 class="gallery-block-text">Swimming Pool</h2>
        </div>	
	
	</div>
	<div class="col-sm-4 col-gallery-img">
		<div class="gallery-img-block-godrej">
        	<img src="images/godrej-tree/gallery-5.png" class="img-responsive img-100" />
        	<h2 class="gallery-block-text">Kids Play Area</h2>
        </div>	
	
	</div>
	<div class="col-sm-4 col-gallery-img">
		<div class="gallery-img-block-godrej">
        	<img src="images/godrej-tree/gallery-6.png" class="img-responsive img-100" />
        	<h2 class="gallery-block-text">extendable living room</h2>
        </div>	
	
	</div>
	</div>
</div>
         </div>
      </section>
      
	  <div class="nav-patch" id="plans" ></div>
      <section class="site-map-section">
         <h1>Site Plan</h1>
         <div class="container">
            <img src="images/godrej-tree/site-map.jpg" class="img-responsive center-block" />
         </div>
      </section>
	  <div id="price-modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header text-center">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        Unit Pricing
            </div>
      <div class="modal-body download-modal-body">
        <form class="form-section1" id="price_form" method="POST" action="submit-tree.php">
        <input type="hidden" class="form-control" id="flat_type" name="flat_type"/>
        <input type="hidden" name="campaign" value="Google">
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
                     <input type="text" class="form-control" id="number" name="mobile" placeholder="Mobile*">
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
	  <div class="nav-patch" id="price"></div>
      <section class="unit-pricing-section">
         <h1>Unit Pricing </h1>
         <div class="container">
            <div class="table-width">
                <table>
                  <tr>
                     <th>Type</th>
                     <th>Carpet Area (sq ft)</th>
                     <!--th>Reference Areas  (sq ft)</th-->
                     <th>Price</th>
                  </tr>
                  <tr>
                     <td><span>1 BHK</span></td>
                     <td>476 - 573</td>
                     <!--td>1,000</td-->
                     <td data-toggle="modal" data-target="#price-modal"><div class="anchor" onclick = "PutData('1 BHK');" >Click for Price</div></td>
                  </tr>
                  <tr>
                     <td><span>2 BHK</span></td>
                     <td>722 - 856</td>
                     <!--td>1,120 - 1,230</td-->
                   <td data-toggle="modal" data-target="#price-modal"><div class="anchor" onclick = "PutData('2 BHK');">Click for Price</div></td>
                  </tr>
                  <tr>
                     <td><span>2 BHK Compact</span></td>
                     <td>889 - 959</td>
                     <!--td>1,515 - 1,560</td-->
                    <td data-toggle="modal" data-target="#price-modal"><div class="anchor" onclick = "PutData('2 BHK Compact');">Click for Price</div></td>
                  </tr>
                  <tr>
                     <td><span>3 BHK</span></td>
                     <td>1077 - 1397</td>
                     <!--td>1,635 - 1,785</td-->
                     <td data-toggle="modal" data-target="#price-modal"><div class="anchor" onclick = "PutData('3 BHK');">Click for Price</div></td>
                  </tr>
                  <tr>
                     <td><span>4 BHK /Duplex /Penthouse</span></td>
                     <td>1754 -2338</td>
                     <!--td>1,515 - 1,560</td-->
                    <td data-toggle="modal" data-target="#price-modal"><div class="anchor" onclick = "PutData('4 BHK /Duplex /Penthouse');">Click for Price</div></td>
                  </tr>
                  
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
	  
	  <div class="nav-patch" id="location" ></div>
      <section class="map-section">
         <h1>Accessibility </h1>
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.309832994299!2d72.92051481498915!3d19.094058987077485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c7ca77aa6e8b%3A0x252682476d95209!2sGodrej+Origins+The+Trees!5e0!3m2!1sen!2sin!4v1510221408666" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </section>
	  
      <section class="connectivity-section">
         <h1>Connectivity</h1>
         <div class="container">
            <div class="row conn-block">
               <div class="col-md-2 col-sm-4">
                  <img src="images/godrej-tree/conn-1.png"/>
                  <p class="conn-icon">10 Mins<br>To Powai</p>
               </div>
               <div class="col-md-2 col-sm-4">
                  <img src="images/godrej-tree/conn-2.png"/>
                  <p class="conn-icon">10 Mins<br>To Chembur</p>
               </div>
               <div class="col-md-2 col-sm-4">
                  <img src="images/godrej-tree/conn-3.png"/>
                  <p class="conn-icon">15 Mins<br>To BKC</p>
               </div>
               <div class="col-md-2 col-sm-4">
                  <img src="images/godrej-tree/conn-4.png"/>
                  <p class="conn-icon">30 Mins<br>To International Airport</p>
               </div>
               <div class="col-md-2 col-sm-4">
                  <img src="images/godrej-tree/conn-5.png"/>
                  <p class="conn-icon">35 Mins<br>To Lower Parel </p>
               </div>
               <div class="col-md-2 col-sm-4">
                  <img src="images/godrej-tree/conn-6.png"/>
                  <p class="conn-icon">35 Mins<br>To Fort</p>
               </div>
            </div>
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
         </div>
      </section>
      <section class="footer-section">
         <div class="footer-section-h1">
            <a class="popup-btn schedule-btn" id="scroll-enquiry" href="#enquiry">
               <h1>Enquire Now</h1>
            </a>
         </div>
         <div class="container footer-rera-text">
             <p class="rera-num" style="color:#666666;">MahaRERA Registration No. of Godrej Trees Phase-1 P51800000165 | Phase-2 P51800000161, Origins P51800000158
             <br><br><span style="font-size:16px;">available at website:</span> <a style="color:#666666;font-size:16px;" href="http://maharera.mahaonline.gov.in">http://maharera.mahaonline.gov.in</a> </p>
             <p class="" style="color:#666666; font-size:20px;margin-top:25px;">Marketed By Rioga Premium</p>
              <img style="margin-bottom:20px;" class="img-responsive center-block" src="images/footer-logo.png" />
                <p style="color:#666666; font-size:13px;">MahaRERA No. A51800000974</p>
                
            <!--p class="footer-main-test">Marketed by Rioga Premium </p-->
            
           
            
           
            
            
            <p class="disclaimer">Disclaimer Project is being developed by Godrej Properties Ltd. This is not an offer, invitation to offer and/or commitment of any nature. The details herein are only indicative and are subject to change without notice. Recipients are advised to use their discretion in relying on the information/ amenities described/ shown therein.<br><br>
*Source: Google map. Travel time basis normal traffic conditions.
            </p>

         </div>
      </section>

           <a href="#" class="scrollup"><span class="glyphicon glyphicon-chevron-down"></span></a>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="js/jquery.malihu.PageScroll2id.js" type="text/javascript"></script>
    
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
         				maxlength: 'mobile should be of maximum 12 digits',
         				minlength: 'mobile should be of minimum 10 digits'
         			},
         			email:{
         				required:'Please enter your email id',
         				email: 'Please enter email id on proper format'
         			},
         			unit:{
         				required: 'Please select unit'
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
         				digits:true,
         				maxlength: 12,
         				minlength: 10
         			}
         		},
         		// Specify the validation error messages
         		messages: {
         			callme:{
         				required:'Please enter your mobile',
         				intlphone:'Please enter mobile in proper format',
         				maxlength: 'mobile should be of maximum 12 digits',
         				minlength: 'mobile should be of minimum 10 digits'
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
         				digits:true,
         				maxlength: 12,
         				minlength: 10
         			}
         		},
         		// Specify the validation error messages
         		messages: {
         			callback:{
         				required:'Please enter your mobile',
         				intlphone:'Please enter mobile in proper format',
         				maxlength: 'mobile should be of maximum 12 digits',
         				minlength: 'mobile should be of minimum 10 digits'
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
         				digits:true,
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
         				maxlength: 'mobile should be of maximum 12 digits',
         				minlength: 'mobile should be of minimum 10 digits'
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
         				digits:true,
         				maxlength: 12,
         				minlength: 10
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
         				maxlength: 'mobile should be of maximum 12 digits',
         				minlength: 'mobile should be of minimum 10 digits'
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
         			name:{
         				required:true,
         				lettersonly:true
         			},
         			email:{
         			    required: true,
         			    email:true
         			},
         			mobile:{
         			    required:true,
         				digits:true,
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
         			mobile:{
         				required:'Please enter your mobile',
         				intlphone:'Please enter mobile in proper format',
         				maxlength: 'mobile should be of maximum 12 digits',
         				minlength: 'mobile should be of minimum 10 digits'
         			}
         		}
         	});
         });
      </script>
 
      <script src="js/bootstrap.min.js"></script>
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
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109534524-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-109534524-1');
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
   </body>
</html>