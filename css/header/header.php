		
		
<!--- for icon red dot---->

<link rel="stylesheet" href="css/custom.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	

	<!-- Forum Demo Specific Stylesheet -->
	<link rel="stylesheet" href="demos/forum/forum.css" type="text/css" /> <!-- Forum Custom Css -->
	<link rel="stylesheet" href="demos/forum/css/fonts.css" type="text/css" /> <!-- Forum Custom Fonts -->
	<!-- / -->

		
		
		<!-- Login/Register Modal -->
		<div class="modal-register mfp-hide" id="modal-register">
			<div class="card mx-auto" style="max-width: 400px;">
				<div class="card-header py-3 bg-transparent center">
					<h3 class="mb-0 font-weight-normal">Hello, Welcome Back</h3>
				</div>
				<div class="card-body mx-auto p-5">

					<form id="login-form" name="login-form" class="mb-0 row" action="validation.php" method="post">

						<div class="col-12">
							<input type="text" id="login-form-username" name="firstname" value="" class="form-control not-dark" placeholder="Username" />
						</div>

						<div class="col-12 mt-4">
							<input type="password" id="login-form-password" name="pass" value="" class="form-control not-dark" placeholder="Password" />
						</div>

						<div class="col-12 text-right mt-2">
							<a href="#" class="text-dark font-weight-light text-smaller">Forgot Password?</a>
						</div>

						<div class="col-12 mt-4">
							<button class="button btn-block m-0" id="login-form-submit" name="login-form-submit" value="login">Login</button>
						</div>
					</form>
				</div>
				<div class="card-footer py-4 center">
					<p class="mb-0">Don't have an account? <a href="sign-up.php"><u>Sign up</u></a></p>
				</div>
			</div>
		</div>
<!-- Header
		============================================= -->
		<header id="header" class="full-header header-size-md" data-mobile-sticky="true">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row">

							<!-- Logo
						============================================= -->
						<div id="logo" class="mr-lg-7">
							<a href="index.php" class="standard-logo" data-dark-logo="demos/store/images/savic@logo.png"><img src="demos/store/images/savic@logo.png" alt="Canvas Logo"></a>
							<a href="index.php" class="retina-logo" data-dark-logo="demos/store/images/savic-logo@.png"><img src="demos/store/images/savic-logo@.png" alt="Canvas Logo"></a>
						</div><!-- #logo end -->
						
				<div class="row h-100">
					<div class="col-lg-10 d-flex align-self-center flex-column  pb-0 mb-0 mr-lg-6 ">
						<div class="input-group  border border-secondary  input-group-lg mt-1 mb-1">
							<input class="form-control rounded-left " type="search" placeholder="Search Your Topics.." aria-label="Search">
							<div class="input-group-append">
								<button class="btn btn-light border-0" type="submit"><i class="icon-line-search"></i></button>
							</div>
						</div>
						</div>
						
						
						
						</div>
					
						<div class="header-misc ml-0">

							<!-- Top Login
							============================================= -->
							<div id="top-account" class="px-4">
								<a href="#modal-register" data-lightbox="inline"><i class="icon-user21 icon-2x" title="login signup" ></i></a>
							</div><!-- #top-search end -->


<!-- Top Account
							============================================= -->
							<div class="header-misc-icon">
								<a href="#" id="notifylink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="12,12"><i class="icon-line-bell notification-badge icon-1x"></i></a>
								<div class="dropdown-menu dropdown-menu-right py-0 m-0 overflow-auto" aria-labelledby="notifylink" style="width: 320px; max-height: 300px">
									<span class="dropdown-header border-bottom border-f5 font-weight-medium text-uppercase ls1">Latest added Solution</span>
									<div class="list-group list-group-flush">
										<a href="partner-management-system.php" class="d-flex list-group-item">
											<i class="icon-line-check badge-icon bg-success text-white mr-3 mt-1"></i>
											<div class="media-body">
												<h5 class="my-0 font-weight-normal text-muted"><span class="text-dark font-weight-bold">partner-management-system </span> FMCG companies today are <span class="text-dark font-weight-bold">staring at a major disruption in their distribution model. </span></h5>
												<small class="text-smaller">2 days ago</small>
											</div>
										</a>
										<a href="whatsapp-integration.php" class="d-flex list-group-item">
											<i class="icon-line-check badge-icon bg-success text-white mr-3 mt-1"></i>
											<div class="media-body">
												<h5 class="my-0 font-weight-normal text-muted"><span class="text-dark font-weight-bold">WhatsApp Integration with ERP</span> Helps improvise relationship with customers in the digital Age.</h5>
												<small class="text-smaller">2 days ago</small>
											</div>
										</a>
									</div>
								</div>
							</div>

							<!-- Top Account
							============================================= -->



						</div>

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu with-arrows">

							<ul class="menu-container">
								<li class="menu-item"><a class="menu-link" href="index.php"><div><b>Home</b></div></a></li>
								<li class="menu-item"><a class="menu-link" href="About.php"><div><b>What We Do</b></div></a></li>
								<li class="menu-item mega-menu"><div class="menu-link"><div><b>Services</b></div></div>
									<div class="mega-menu-content mega-menu-style-2 px-0">
										<div class="container">
											<div class="row">
												<a href="Mobile-App-Development.php" class="mega-menu-column sub-menu-container col-lg-4 border-bottom h-bg-light py-4">
													<div class="feature-box">
														<div class="fbox-icon mb-2">
															<img src="demos/seo/images/icons/seo.svg" alt="Feature Icon" class="bg-transparent rounded-0">
														</div>
														<div class="fbox-content">
															<h3 class="nott ls0">Mobile App Development</h3>
															<p>We Develop native and hybrid mobile apps as per customer need. We extensively focus on UX-UI and deliver customer expectations.</p>
														</div>
													</div>
												</a>
												<a href="Web-Application-Development.php" class="mega-menu-column sub-menu-container col-lg-4 border-bottom h-bg-light py-4">
													<div class="feature-box">
														<div class="fbox-icon mb-2">
															<img src="demos/seo/images/icons/social.svg" alt="Feature Icon" class="bg-transparent rounded-0">
														</div>
														<div class="fbox-content">
															<h3 class="nott ls0">Web Application Development</h3>
															<p>The quality and features of a website gives the first impression for any organization. In today's world business can develop and become simpler, and achieve objectives much faster by using web applications.</p>
														</div>
													</div>
												</a>
												<a href="integration.php" class="mega-menu-column sub-menu-container col-lg-4 border-bottom h-bg-light py-4">
													<div class="feature-box">
														<div class="fbox-icon mb-2">
															<img src="demos/seo/images/icons/adword.svg" alt="Feature Icon" class="bg-transparent rounded-0">
														</div>
														<div class="fbox-content">
															<h3 class="nott ls0">Integration</h3>
															<p>Integrating two or more systems are very important for any enterprise as they use most effective individual tools/software to run their business efficiently.</p>
														</div>
													</div>
												</a>
												<!--<a href="emerging-technologies.php" class="mega-menu-column sub-menu-container col-lg-4 border-bottom h-bg-light py-4">
													<div class="feature-box">
														<div class="fbox-icon mb-2">
															<img src="demos/seo/images/icons/experience.svg" alt="Feature Icon" class="bg-transparent rounded-0">
														</div>
														<div class="fbox-content">
															<h3 class="nott ls0">Emerging Technologies</h3>
															<p>Chat-bot development, Block-chain development, AR/VR development, IoT development, Cloud computing and migrations, Digital Marketing, Robotic Process Automation (RPA)</p>
														</div>
													</div>
												</a>
												<a href="apps-methodology.php" class="mega-menu-column sub-menu-container col-lg-4 border-bottom h-bg-light py-4">
													<div class="feature-box">
														<div class="fbox-icon mb-2">
															<img src="demos/seo/images/icons/analysis.svg" alt="Feature Icon" class="bg-transparent rounded-0">
														</div>
														<div class="fbox-content">
															<h3 class="nott ls0">Methodology</h3>
															<p>The application development methodology framework SAVIC use Agile and Waterfall depending on project/product development. By following a specific development methodology and its practices help organizations to deliver quality deliverables on time. </p>
														</div>
													</div>
												</a>
												<a href="ML-AL.php" class="mega-menu-column sub-menu-container col-lg-4 border-bottom h-bg-light py-4">
													<div class="feature-box">
														<div class="fbox-icon mb-2">
															<img src="demos/seo/images/icons/content_marketing.svg" alt="Feature Icon" class="bg-transparent rounded-0">
														</div>
														<div class="fbox-content">
															<h3 class="nott ls0">ML / AI</h3>
															<p>Artificial Intelligence (AI) and Machine Learning (ML) have a lot of share when it comes to revolutionizing the way software operates and functions within organizations.</p>
														</div>
													</div>
												</a>
												<div class="mega-menu-column sub-menu-container col-12 p-0">
													<a href="all-services.php" class="button button-rounded button-large nott ls0 btn-block text-center m-0 rounded-0 py-3 button-light ">View All <i class="icon-line-arrow-right"></i></a>
												</div>-->
											</div>
										</div>
									</div>
								</li>
							
							</ul>

						</nav><!-- #primary-menu end -->


						<form class="top-search-form bg-alt dark" action="http://themes.semicolonweb.com/html/canvas/search.html" method="get">
							<div class="container row justify-content-center">
								<div class="col-sm-8">
									<input type="text" name="q" class="form-control form-control-lg mb-5 border-color" value="" placeholder="Type Your Query &amp; Hit Enter.." autocomplete="off">
									<div class="row col-mb-30">
										<div class="col-md-6">
											<div class="widget widget_links clearfix">
												<h4 class="">Recent Topics</h4>
												<ul>
													<li><a href="demo-forum-single.html">Package Generator – Approx time for a file</a></li>
													<li><a href="demo-forum-single.html">Open sub-menu touching menu-item name</a></li>
													<li><a href="demo-forum-single.html">Portfolio Overlay Slide fadein fadeout</a></li>
													<li><a href="demo-forum-single.html">Show menu .dropdown-menu down only</a></li>
													<li><a href="demo-forum-single.html">Couldnt Generate Package Snippet</a></li>
												</ul>
											</div>
										</div>

										<div class="col-md-6">
											<div class="widget widget_links clearfix">
												<h4 class="">Helpful Documentation</h4>
												<ul>
													<li><a href="demo-forum-single.html">How to Install</a></li>
													<li><a href="demo-forum-single.html">How to setup Niche Demos</a></li>
													<li><a href="demo-forum-single.html">Header Layouts and Styles</a></li>
													<li><a href="demo-forum-single.html">Setup Forms</a></li>
													<li><a href="demo-forum-single.html">Setup RTL</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</form>

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->
		
		