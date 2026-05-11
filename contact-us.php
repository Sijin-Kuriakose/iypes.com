<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
        
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>IYPES HOLIDAY HOMES</title>

        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="vendors/stroke-icon/style.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        <link href="vendors/animate-css/animate.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="vendors/magnify-popup/magnific-popup.css" rel="stylesheet">
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        <link href="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
        <link href="vendors/bootstrap-selector/bootstrap-select.css" rel="stylesheet">
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <!--Start of Tawk.to Script-->
<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=d1140fnJH7WsgZm_AGmmgs3xe_RDQbrxL9cNSZj9nyriod8nFzTu5mhbF0h60jr_HrvjzfmDLWs8-swF8_5EsJJ-m5HJoxYN2POtD2xex_KY6oCEkOrVlUa-3oEyfnZglFtHuG6Lu9ZScd3VbxlLSWbqABpiU6tVOiFqUg8SHlvk5OgG-VSQ7FNpsOCPL579" charset="UTF-8"></script><script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5dc27a5b154bf74666b7bef8/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>



<?php
if(isset($_POST['submit2'])) {
  
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "irfan.machingal@vernus.ae";
    $email_subject = "Contact form Submission From FRG GLOBAL";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['email2']) ||
        !isset($_POST['telephone2']) ||
		 !isset($_POST['service2']) ||
        !isset($_POST['form_message'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $first_name = $_POST['first_name']; // required
    $email_from = $_POST['email2']; // required
    $telephone = $_POST['telephone2']; // not required
    $service2 = $_POST['service2']; // required
	$form_message = $_POST['form_message']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
 

  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Please contact us, We are intrested in your service.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Service: ".clean_string($service2)."\n";
	$email_message .= "Comments: ".clean_string($form_message)."\n";
    
   
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
$mail_ayach= mail($email_to, $email_subject, $email_message, $headers);
  if ($mail_ayach) { $success_msg2='Thank you !';}else{$success_msg2='Error';}
  

}
?>
<!--End of Tawk.to Script-->
    </head>
    <body>

        <!--================Header Area =================-->
        <header class="main_header_area">
            <div class="header_top">
                <div class="container">
                    <div class="header_top_inner">
                        <div class="pull-left">
                            <a href="#"><i class="fa fa-phone"></i>+91 6238776993</a>
                            <i class="fa fa-envelope-o"></i><a href="mailto:info@iypes.com" style="color:#fff" >info@iypes.com</a></a>
                        </div>
                        <div class="pull-right">
                            <ul class="header_social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header_menu">
                <nav class="navbar navbar-default">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="index.html">
                                <img src="img/logo.png" alt="">
                                <img src="img/logo-sticky.png" alt="">
                            </a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="">
                                    <a href="index.html">Home <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                                    
                                </li>
                                <li>
                                    <a href="about-us.html" >About Us<i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                                    
                                </li>
                                <li class="">
                                    <a href="rooms.html" >Room Tariff <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                                    
                                </li>
                                <li>
                                    <a href="places-to-visit.html" >Places to Visit <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                                    
                                </li>
                                <li><a href="packages.html">Packages</a></li>
                                <li class="active"><a href="contact-us.html">Contact Us</a></li>
                               
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div>
        </header>
        <!--================Header Area =================-->
        
        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_content">
                    <h3>Contact Us</h3>
                    <ul>
                        <li ><a href="index.html">Home</a></li>
                        <li class="active"><a href="contact-us.html">Contact us</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Get Contact Area =================-->
        <section class="get_contact_area">
            <div class="container">
                <div class="row get_contact_inner">
                    <div class="col-md-6">
                        <div class="left_ex_title">
                            <h2>get in <span>touch</span></h2>
                        </div>
                        <div class="form-outer">
                        <div class="default-form">
                            <form method="post" action="" id="consultation-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="first_name"  value="" placeholder="Name*" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                             <input type="email" name="email2" value="" placeholder="Email *" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="telephone2" value="" placeholder="Phone*" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select name="service2" value="">
                                                <option>Select Service</option>
                                                <option>Audit Services</option>
                                                <option>Accounting Services</option>
                                                <option>Financial Services</option>
                                                <option>Company Incorporation</option>
                                                <option>Advisory Services</option>
                                                <option>IT Services</option>
                                                <option>VAT in UAE</option>
                                                <option>Family Business Advisory</option>
                                                
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                           <textarea name="form_message" placeholder="Message..."></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        
                                        <button class="theme-btn btn-style-one" name="submit2" type="submit">SEND YOUR MESSAGE</button>
                                <div style="color:#fff;"><?php echo $success_msg2; ?>         </div>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="right_contact_info">
                            <div class="contact_info_title">
                                <h3>Contact info</h3>
                                <p>Have any Queries? Let us know. We will clear it for you at the best.</p>
                            </div>
                            <div class="contact_info_list">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4>Office</h4>
                                        <p>Edavaka P.O, Manathavady
Wayanad, Kerala,<br>

India - 670645</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4>Email</h4>
                                        <a href="mailto:info@iypes.com" style="color:#898989" >info@iypes.com</a>
                                        
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4>Phone/Whatsapp</h4>
                                        <a href="#">+91 7306225757</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Get Contact Area =================-->
        
        <!--================Map Area =================-->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3906.139542407243!2d75.96895891533781!3d11.755218643576624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba5d9cfab244cab%3A0x67f4c5f1a588897f!2sIypes%20Holiday%20Homes!5e0!3m2!1sen!2sae!4v1573105350273!5m2!1sen!2sae" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        <!--================End Map Area =================-->
        
        <!--================Footer Area =================-->
        <footer class="footer_area">
            <div class="footer_widget_area" style="text-align:center" >
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-xs-12" >
                            <aside class="f_widget about_widget">
                                <img src="img/footer-logo.png" alt="">
                                <div class="ab_wd_list">
                                    <div class="media">
                                        
                                        <div class="media-body">
                                            <h4>Edavaka P.O, Manathavady
Wayanad, Kerala,
India - 670645
</h4>
                                        </div>
                                    </div>
                                    <div class="media" >
                                       
                                        <div class="media-body">
                                           <h4><i class="fa fa-envelope-o"></i> <a href="mailto:info@iypes.com" style="color:#898989" >info@iypes.com</a> / <i class="fa fa-phone"></i>+91 6238776993</h4>
                                        </div>
                                    </div>
                                    
                                    <h6 style="padding-top:20px;">copyright © Iypes Holiday Homes. All rights reserved. </h6>
                                </div>
                                
                            </aside>
                        </div>
                        
                        
                        
                    </div>
                </div>
            </div>
            
        </footer>
        <!--================End Footer Area =================-->
        
        <!--================Search Box Area =================-->
        <div class="search_area zoom-anim-dialog mfp-hide" id="test-search">
            <div class="search_box_inner">
                <h3>Search</h3>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><i class="icon icon-Search"></i></button>
                    </span>
                </div>
            </div>
        </div>
        <!--================End Search Box Area =================-->
        
        <!--================Contact Success and Error message Area =================-->
        <div id="success" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></span>
                        <h2 class="modal-title">Thank you</h2>
                        <p class="modal-subtitle">Your message is successfully sent...</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modals error -->

        <div id="error" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></span>
                        <h2 class="modal-title">Sorry !</h2>
                        <p class="modal-subtitle"> Something went wrong </p>
                    </div>
                </div>
            </div>
        </div>
        <!--================End Contact Success and Error message Area =================-->
        
        
        
        
        
        
        <!--================End Footer Area =================-->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-2.2.4.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        
        <script src="vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/counterup/waypoints.min.js"></script>
        <script src="vendors/counterup/jquery.counterup.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/bootstrap-selector/bootstrap-select.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="js/gmaps.min.js"></script>
        
        <!-- contact js -->
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/contact.js"></script>
        
        <!-- instafeed-->
        <script type="text/javascript" src="vendors/instafeed/instafeed.min.js"></script>
        <script type="text/javascript" src="vendors/instafeed/script.js"></script>
        
        <script src="js/theme.js"></script>
    </body>

</html>