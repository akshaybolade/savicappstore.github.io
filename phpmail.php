<!DOCTYPE html>
<html dir="ltr" lang="en-US">


<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />
<!-- Start Favicon -->
		  <link rel="shortcut icon" href="images/demo-content/favicon.png">
	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Sansita:400,700|Roboto:400,500&amp;display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/swiper.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />

	<!-- Yoga Demo Specific Stylesheet -->
	<link rel="stylesheet" href="css/colors4e91.css?color=7E9680" type="text/css" /> <!-- Yoga Theme Color -->
	
	<link rel="stylesheet" href="demos/yoga/yoga.css" type="text/css" /> <!-- Yoga Theme Custom CSS -->
	<!-- / -->

	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="css/custom.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>Sign-up|SAVIC Technologies</title>

</head>

<body class="stretched sticky-footer">
<style>
.dark{
color:#000000;
}
.dark label {
color:#000000;	
}
.dark .line, .dark .double-line {
    border-top-color: rgba(0,0,0,0.15);
}
</style>
	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		

		<!-- Header
		============================================= -->
			
		<?php
		
		include('css/header/header.php');
		
		?>
			<!-- Content
		============================================= -->
		<section id="content" style="background-color:#E8E8E8;">
			
<?php
if(isset($_POST['submit']))
{
error_reporting(0);
$to      = 'meghan.nagvekar@savictech.com';
$subject = 'testing ';
$message = 'testing friday night';
$headers = 'From: smsmumbai@savictech.com' . "\r\n" .
    'Reply-To: smsmumbai@savictech.com.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers,'-fsmsmumbai@savictech.com');
echo"run";
}
else{
	
	echo"failed";
}
?>
<form method="POST">
<input type="submit" name="submit">
</form>
		</section><!-- #content end -->

		<?php

include('css/footer/footer.php')

?>

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="js/jquery.js"></script>
	<script src="js/plugins.min.js"></script>

	<!-- For Countdown -->
	<script src="js/components/moment.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="js/functions.js"></script>


</body>

</html>