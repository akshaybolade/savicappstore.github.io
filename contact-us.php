<!DOCTYPE html>
<html dir="ltr" lang="en-US">


<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Savicwebdesigners" />
	
		<!-- Start Favicon -->
		  <link rel="shortcut icon" href="images/demo-content/favicon.png">
	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700,800,900|Roboto:700,500,400&amp;display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="css/custom.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="include/rs-plugin/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
	<link rel="stylesheet" type="text/css" href="include/rs-plugin/fonts/font-awesome/css/font-awesome.css">

	<link rel="stylesheet" type="text/css" href="include/rs-plugin/css/settings.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="include/rs-plugin/css/layers.css">
	<link rel="stylesheet" type="text/css" href="include/rs-plugin/css/navigation.css">

<link rel="stylesheet" href="demos/coworking/coworking.css" type="text/css" /> <!-- Theme CSS -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/simplePagination.js/1.6/jquery.simplePagination.js"></script>

	<!-- Document Title
	============================================= -->
	<title>SAVIC App Center</title>

	<style type="text/css">
	
	
	</style>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		
		
		
		
		<?php
		
		include('css/header/header.php');
		
		?>
		



<!-- INTRO
			============================================= -->
			<section id="intro">
				<div class="overlay">
					<div class="container">
						<div id="intro_content" class="row">


							


							<!-- INTRO REGISTER FORM -->
							<div id="intro_form" class="col-md-8 form_register text-center">
<?php 
            //Mail Function
            ob_flush();
                                function getUserIP()
{
    // Get real visitor IP behind CloudFlare network
    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
              $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
              $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}


$user_ip = getUserIP();
                                
            if(isset($_POST['SubmitButton'])){
                $name = $_POST['first_name'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $dateTime = $_POST['datetime'];
                $to_bpt = "prathameshbolade@gmail.com\r\n";
                $email_body = "<html><body>";
                $email_body .= "<h3>SAVIC App Center Contact Us</h3>";
                $email_body .= '<table rules="all" border="1" style="border-color: #666;" cellpadding="10">';
                
                $email_body .= '<tr>';
                $email_body .= '<td><strong>Name</strong></td>';
                $email_body .= '<td>'.$name.'</td>';
                $email_body .= '</tr>';
                
                $email_body .= '<tr>';
                $email_body .= '<td><strong>Phone</strong></td>';
                $email_body .= '<td>'.$phone.'</td>';
                $email_body .= '</tr>';
                
                $email_body .= '<tr>';
                $email_body .= '<td><strong>Name</strong></td>';
                $email_body .= '<td>'.$email.'</td>';
                $email_body .= '</tr>';
                
                $email_body .= '<tr>';
                $email_body .= '<td><strong>Visitor IP</strong></td>';
                $email_body .= '<td>'.$user_ip.'</td>';
                $email_body .= '</tr>';
                
                $email_body .= '<tr>';
                $email_body .= '<td><strong>TimeStamp</strong></td>';
                $email_body .= '<td>'.$dateTime.'</td>';
                $email_body .= '</tr>';
                
                $email_body .= '</table>';
                $email_body .= "</html></body>";
                
                $headers = "From: $email" . "\r\n" . "bcc:prathameshbolade@gmail.com" . "\r\n";
                $headers .= "MIME-Version: 1.0". "\r\n";
                $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                $subject = "Lead Capture - SAVIC App Center ";
                $subject .= $name;
                
               if(mail($to_bpt, $subject, $email_body, $headers)){
                    
                    $success_message = "Thank you for signing up, " . $name . ". Our team will be in touch with you shortly" ;
                   
                }
                else {
                     $success_message = "Mail delivery failed";
               }
                
                
                
            }
            
            ?>
								
                                <!-- Register Form -->
								<form action="" name="contactform" class="row" method="post">
                                    <?php 
                                        if(isset($success_message))
                                        {
                                             
                                           echo '<div class="col-md-12">';
                                            echo '<p>'. $success_message. '</p>';
                                            echo '</div>';
                                        }
                                else{
                                ?>
									<h4>Contact Us</h4>
                                    
									<div id="input_name" class="col-md-12">
										<input id="name" class="form-control" type="text" name="first_name" placeholder="Full Name*">
									</div>

									<div id="input_email" class="col-md-12">
										<input id="email" class="form-control" type="text" name="email" placeholder="Enter your email*">
									</div>

									<div id="input_phone" class="col-md-12">
										<input id="phone" class="form-control" type="text" name="phone" placeholder="Phone Number*">
									</div>

									<p>By clicking "Sign Up" you agree to the Terms of Service & Privacy Policy</p>
                                    <!--Hidden Fields -->
                                    <?php
                                        $arrival = new DateTime(null, new DateTimeZone('Asia/Kolkata'));
                                        $arrivalString = $arrival->format("Y-m-d H:i:s");
                                    ?>
                                    
                                    <input type="hidden" name="datetime" value="<?php echo $arrivalString; ?>" />
                                    
									<!-- Submit Button -->
									<div id="form_register_btn" class="text-center button">
										<input class="btn btn-theme" type="submit" value="Sign Up" id="submit" name="SubmitButton">
									</div>
                                    <?php } ?>
								</form>	<!-- End Register Form -->
                                
							</div>    <!-- END INTRO REGISTER FORM -->


						</div>	 <!-- End Intro Content -->
					</div>    <!-- End container -->
				</div>	   <!-- End overlay-->
			</section>	<!-- END INTRO -->

			
			
			
			
			
			
			
			



<?php

include('css/footer/footer.php')

?>




	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	
	
	<!-- JavaScripts
	============================================= -->
	

	<script src="js/plugins.min.js"></script>
	<script src="https://maps.google.com/maps/api/js?key=AIzaSyBPHBkHbxlsp255-WwFSBcj4Eq3WUovF00"></script>
	
	
	<!-- Footer Scripts
	============================================= -->
	<script src="js/functions.js"></script>

	

	
</body>


</html>




            
            