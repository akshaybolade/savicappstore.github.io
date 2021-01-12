<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&amp;display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="css/custom.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>FAQs with Filter</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<?php
		
		include('css/header/header.php');
		
		?>
		
		
		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Frequently Asked Questions</h1>
				<span>All your Questions answered in one place</span>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item">Pages</li>
					<li class="breadcrumb-item active" aria-current="page"><a href="faqs.php">FAQs</a></li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<div class="row gutter-40 col-mb-80">
						<!-- Post Content
						============================================= -->
						<div class="postcontent col-lg-9">

							<div class="grid-filter-wrap">
								<ul class="grid-filter style-4 customjs">

									<li class="activeFilter"><a href="#" data-filter="all">All</a></li>
									<!--<li><a href="#" data-filter=".faq-marketplace">Marketplace</a></li>
									<li><a href="#" data-filter=".faq-authors">Authors</a></li>
									<li><a href="#" data-filter=".faq-legal">Legal</a></li>
									<li><a href="#" data-filter=".faq-itemdiscussion">Item Discussion</a></li>
									<li><a href="#" data-filter=".faq-affiliates">Affiliates</a></li>
									<li><a href="#" data-filter=".faq-miscellaneous">Miscellaneous</a></li>-->

								</ul>
							</div>

							<div class="clear"></div>

							<div id="faqs" class="faqs">

								<div class="toggle faq faq-marketplace faq-authors">
									<div class="toggle-header">
										<div class="toggle-icon">
											<i class="toggle-closed icon-question-sign"></i>
											<i class="toggle-open icon-question-sign"></i>
										</div>
										<div class="toggle-title">
											What is SAVIC App Center?
										</div>
									</div>
									<div class="toggle-content">SAVIC App Center is the digital marketplace where you can discover, try and buy trusted partner solutions that extend your existing SAVIC technology and solutions.</div>
								</div>

								<div class="toggle faq faq-authors faq-miscellaneous">
									<div class="toggle-header">
										<div class="toggle-icon">
											<i class="toggle-closed icon-comments-alt"></i>
											<i class="toggle-open icon-comments-alt"></i>
										</div>
										<div class="toggle-title">
											What can I find on SAVIC App Center?
										</div>
									</div>
									<div class="toggle-content">At SAVIC App Center, we’re bringing together customers and partners on a single, easy-to-use, global online platform. There, you can discover, try, and buy more than 1,500 SAVIC-validated partner solutions from more than 1,000 SAVIC partners built on or that extend SAVIC solutions. Customers can extend their digital core with a mix of free trials and paid apps, services and solutions, intelligently searchable by SAVIC product, publisher, certification type, and more.</div>
								</div>

								<div class="toggle faq faq-miscellaneous">
									<div class="toggle-header">
										<div class="toggle-icon">
											<i class="toggle-closed icon-lock3"></i>
											<i class="toggle-open icon-lock3"></i>
										</div>
										<div class="toggle-title">
											How can I benefit from SAVIC App Center?
										</div>
									</div>
									<div class="toggle-content">We make it easy for you to discover solutions that digitally transform your business by extending the SAVIC technology you own already. On the site, customers around the world can discover, try, and buy applications developed by our partners, safe in the knowledge that each app has been tested for quality and suitability – all designed to help SAVIC customers enhance and extend their enterprise and line-of-business solutions.</div>
								</div>

								<div class="toggle faq faq-authors faq-legal faq-itemdiscussion">
									<div class="toggle-header">
										<div class="toggle-icon">
											<i class="toggle-closed icon-download-alt"></i>
											<i class="toggle-open icon-download-alt"></i>
										</div>
										<div class="toggle-title">
											How does SAVIC App Center work?
										</div>
									</div>
									<div class="toggle-content">At SAVIC App Center, you can learn more about solutions by clicking the “Contact Us” button, and you’ll be connected with the partner directly. You can try more than 350 solutions that are available for free trial here. Or you can purchase a solution on SAVIC App Center by clicking the “Get it Now” button. You will be asked to provide basic contact information, and the respective partner will respond to your request within two business days.</div>
								</div>

								<div class="toggle faq faq-marketplace faq-authors">
									<div class="toggle-header">
										<div class="toggle-icon">
											<i class="toggle-closed icon-ok"></i>
											<i class="toggle-open icon-ok"></i>
										</div>
										<div class="toggle-title">
											Who can buy from SAVIC App Center?
										</div>
									</div>
									<div class="toggle-content">Anyone can purchase solutions from SAVIC App Center. SAVIC partners that offer solutions on SAVIC App Center are able to serve customers across the globe.</div>
								</div>

								<div class="toggle faq faq-affiliates faq-miscellaneous">
									<div class="toggle-header">
										<div class="toggle-icon">
											<i class="toggle-closed icon-money"></i>
											<i class="toggle-open icon-money"></i>
										</div>
										<div class="toggle-title">
											Do I need to be a customer of SAVIC to buy from SAVIC App Center?
										</div>
									</div>
									<div class="toggle-content">No, you do not need to be an SAVIC customer to buy from SAVIC App Center. However, existing customers will benefit the most since most of the partner solutions offered on SAVIC App Center build or extend SAVIC solutions.</div>
								</div>

								<div class="toggle faq faq-legal faq-itemdiscussion">
									<div class="toggle-header">
										<div class="toggle-icon">
											<i class="toggle-closed icon-picture"></i>
											<i class="toggle-open icon-picture"></i>
										</div>
										<div class="toggle-title">
											How do I buy from SAVIC App Center?
										</div>
									</div>
									<div class="toggle-content">After the initial contact is made via SAVIC App Center, you and partner will come to an agreement off of the platform. The terms and conditions will be delivered on the partner’s contract/paper, and the partner is responsible for billing, delivery and support of the solution.</div>
								</div>

								<div class="toggle faq faq-legal faq-authors faq-itemdiscussion">
									<div class="toggle-header">
										<div class="toggle-icon">
											<i class="toggle-closed icon-file3"></i>
											<i class="toggle-open icon-file3"></i>
										</div>
										<div class="toggle-title">
											How do I pay for purchases made via SAVIC App Center?
										</div>
									</div>
									<div class="toggle-content">Invoicing and payments are handled off the platform, directly between you and the partner. Invoicing from the partner to you is based on actuals according to the agreed-upon invoicing schedule between the two parties.</div>
								</div>

								<div class="toggle faq faq-affiliates">
									<div class="toggle-header">
										<div class="toggle-icon">
											<i class="toggle-closed icon-bar-chart"></i>
											<i class="toggle-open icon-bar-chart"></i>
										</div>
										<div class="toggle-title">
											How do I renew a product on SAVIC App Center?
										</div>
									</div>
									<div class="toggle-content">The partner will contact you at the appropriate time, based on the agreed-upon renewal schedule. You may also contact the partner to increase or decrease the number of users or licenses of the purchased application.</div>
								</div>

								<div class="toggle faq faq-authors faq-itemdiscussion">
									<div class="toggle-header">
										<div class="toggle-icon">
											<i class="toggle-closed icon-phone3"></i>
											<i class="toggle-open icon-phone3"></i>
										</div>
										<div class="toggle-title">
											How do I find the solution(s) I need?
										</div>
									</div>
									<div class="toggle-content">SAVIC App Center provides extensive search and app-discovery capabilities. You can search for solutions by the following categories:

									
									<ul style="margin-left:20px;"><li>SAVIC product categories</li>
<li>Solutions that work with specific SAVIC solutions</li>
<li>Types of solutions (e.g., applications, APIs, microservices, etc.)</li>
<li>Publisher</li>
<li>Certification</li>
<li>Trial availability.</li></ul></div>
								</div>
								
								
								
								<div class="toggle faq faq-authors faq-itemdiscussion">
									<div class="toggle-header">
										<div class="toggle-icon">
											<i class="toggle-closed icon-phone3"></i>
											<i class="toggle-open icon-phone3"></i>
										</div>
										<div class="toggle-title">
											What types of solutions are offered on SAVIC App Center?
										</div>
									</div>
									<div class="toggle-content">You can find the following types of offerings from partners on SAVIC App Center:

									
									<ul style="margin-left:20px;"><li>APIs and micro-services</li>
<li>Applications</li>
<li>Content management solutions</li>
<li>Data management solution</li>
<li>Services</li>
<li>Tools.</li></ul></div>
								</div>
								
								
								

								<div class="toggle faq faq-marketplace faq-itemdiscussion">
									<div class="toggle-header">
										<div class="toggle-icon">
											<i class="toggle-closed icon-credit"></i>
											<i class="toggle-open icon-credit"></i>
										</div>
										<div class="toggle-title">
											What validation does SAVIC perform on partner solutions available on SAVIC App Center?
										</div>
									</div>
									<div class="toggle-content">All partners with published solutions on SAVIC App Center are required to pass a standard readiness check to ensure the solution meets SAVIC requirements and compliance criteria. This validation process verifies items including solution architecture, SAVIC technologies used, third-party technologies used, integration APIs, and UIs to security.</div>
								</div>
								
								
								
								
								
								<div class="toggle faq faq-marketplace faq-itemdiscussion">
									<div class="toggle-header">
										<div class="toggle-icon">
											<i class="toggle-closed icon-credit"></i>
											<i class="toggle-open icon-credit"></i>
										</div>
										<div class="toggle-title">
											What is an SAVIC Certified solution?
										</div>
									</div>
									<div class="toggle-content">An application that has achieved SAVIC-certified integration with one or more SAVIC applications has proven to interoperate with those SAVIC applications following SAVIC technical best practices and guidelines. SAVIC and partner have jointly tested the technical integration of the solution. These offerings follow SAVIC standards for integration, shorten implementation times, lower integration costs, and achieve compatibility with the infrastructure of customers using SAVIC technology. To learn more about certification, please visit the SAVIC Integration and Certification Center web page. To verify the certified scope of a particular partner solution, please visit the SAVIC Certified Solutions Directory.</div>
								</div>
								
								
								
								
								
								
								
								<div class="toggle faq faq-marketplace faq-itemdiscussion">
									<div class="toggle-header">
										<div class="toggle-icon">
											<i class="toggle-closed icon-credit"></i>
											<i class="toggle-open icon-credit"></i>
										</div>
										<div class="toggle-title">
What are SAVIC Endorsed Apps?										</div>
									</div>
									<div class="toggle-content">SAVIC Endorsed Apps are a new category of solutions from SAP’s partner ecosystem to help customers become best-run, intelligent enterprises. They are premium certified by SAVIC with added security, in-depth testing and measurements against benchmark results.

You can learn more about SAVIC Endorsed Apps by reading this document of frequently asked questions.</div>
								</div>
								
								
								
								
								
								
								
								
								
								<div class="toggle faq faq-marketplace faq-itemdiscussion">
									<div class="toggle-header">
										<div class="toggle-icon">
											<i class="toggle-closed icon-credit"></i>
											<i class="toggle-open icon-credit"></i>
										</div>
										<div class="toggle-title">
											What are SAVIC Solution Extensions?
										</div>
									</div>
									<div class="toggle-content">This is a category term, not the name of a singular product offering. This names solutions developed by ISVs to integrate with SAVIC software and complement SAVIC solution capabilities. SAVIC premium qualifies, tests, validates, approves, markets, sells and supports these solutions.</div>
								</div>
								
								
								
								
								
								
								
								
								
								<div class="toggle faq faq-marketplace faq-itemdiscussion">
									<div class="toggle-header">
										<div class="toggle-icon">
											<i class="toggle-closed icon-credit"></i>
											<i class="toggle-open icon-credit"></i>
										</div>
										<div class="toggle-title">
											Can I make a purchase on SAVIC App Center from any location?
										</div>
									</div>
									<div class="toggle-content">Yes. Customers can purchase partner solutions from SAVIC App Center in more than 200 countries and/or territories globally.</div>
								</div>
								
								
								
								
								
								
								
								
								
								<div class="toggle faq faq-marketplace faq-itemdiscussion">
									<div class="toggle-header">
										<div class="toggle-icon">
											<i class="toggle-closed icon-credit"></i>
											<i class="toggle-open icon-credit"></i>
										</div>
										<div class="toggle-title">
											How can I learn the price of a solution in my local currency?
										</div>
									</div>
									<div class="toggle-content">When you are on the SAVIC App Center webpage, please make sure that the country selector at the top right of the page displays the country from which you will be purchasing. This will then reflect the pricing for that solution in the currency of that country.</div>
								</div>
								
								
								
								
								
								
								
								
								
								<div class="toggle faq faq-marketplace faq-itemdiscussion">
									<div class="toggle-header">
										<div class="toggle-icon">
											<i class="toggle-closed icon-credit"></i>
											<i class="toggle-open icon-credit"></i>
										</div>
										<div class="toggle-title">
											Must I tell my SAVIC representative that I’m buying from SAVIC App Center?
										</div>
									</div>
									<div class="toggle-content">It is always a good idea to keep your SAVIC representative informed about your requirements and decisions. Our representatives can also assist you in ensuring that you receive the best possible support from our partners.</div>
								</div>
								
								
								
								
								
								
								
								
								
								<div class="toggle faq faq-marketplace faq-itemdiscussion">
									<div class="toggle-header">
										<div class="toggle-icon">
											<i class="toggle-closed icon-credit"></i>
											<i class="toggle-open icon-credit"></i>
										</div>
										<div class="toggle-title">
											Can I buy from SAVIC App Center and also keep my SAVIC representative?
										</div>
									</div>
									<div class="toggle-content">Yes. All SAVIC App Center purchases (except purchases of SAVIC Solution Extensions) are transacted directly between you and the partner, whereas all purchases of SAVIC solutions are conducted between you and SAVIC. Your SAVIC representative can assist you with all SAVIC products and solutions and can also help facilitate communication between you and the partner.</div>
								</div>
								
								
								
								
								
								
								
								
								
								<div class="toggle faq faq-marketplace faq-itemdiscussion">
									<div class="toggle-header">
										<div class="toggle-icon">
											<i class="toggle-closed icon-credit"></i>
											<i class="toggle-open icon-credit"></i>
										</div>
										<div class="toggle-title">
											Can I make sure that you will not share my information with other parties?
										</div>
									</div>
									<div class="toggle-content">We strictly follow the General Data Protection Regulation (GDPR) rules and do not sell or share your information with other parties. For specific details, please read our privacy policy.</div>
								</div>
								
								
								
								
								
								
								
								
								
								<div class="toggle faq faq-marketplace faq-itemdiscussion">
									<div class="toggle-header">
										<div class="toggle-icon">
											<i class="toggle-closed icon-credit"></i>
											<i class="toggle-open icon-credit"></i>
										</div>
										<div class="toggle-title">
											Who can I contact if I have a question?
										</div>
									</div>
									<div class="toggle-content">If you have a question for an SAVIC partner, please click the “Contact Us” button on the product page. If you have a question about the marketplace in general, please click the question mark icon at the top right of this page and select "Contact Us" from the menu.</div>
								</div>
								
								
								
								
								

							</div>


						</div><!-- .postcontent end -->

						
					</div>

				</div>
			</div>
		</section><!-- #content end -->

		
		<?php
		
		include('css/footer/footer.php');
		
		?>

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="js/jquery.js"></script>
	<script src="js/plugins.min.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="js/functions.js"></script>

	<script>
		jQuery(document).ready(function($){
			var $faqItems = $('#faqs .faq');
			if( window.location.hash != '' ) {
				var getFaqFilterHash = window.location.hash;
				var hashFaqFilter = getFaqFilterHash.split('#');
				if( $faqItems.hasClass( hashFaqFilter[1] ) ) {
					$('.grid-filter li').removeClass('activeFilter');
					$( '[data-filter=".'+ hashFaqFilter[1] +'"]' ).parent('li').addClass('activeFilter');
					var hashFaqSelector = '.' + hashFaqFilter[1];
					$faqItems.css('display', 'none');
					if( hashFaqSelector != 'all' ) {
						$( hashFaqSelector ).fadeIn(500);
					} else {
						$faqItems.fadeIn(500);
					}
				}
			}

			$('.grid-filter a').on( 'click', function(){
				$('.grid-filter li').removeClass('activeFilter');
				$(this).parent('li').addClass('activeFilter');
				var faqSelector = $(this).attr('data-filter');
				$faqItems.css('display', 'none');
				if( faqSelector != 'all' ) {
					$( faqSelector ).fadeIn(500);
				} else {
					$faqItems.fadeIn(500);
				}
				return false;
		   });
		});
	</script>

</body>


</html>