<?php
/**
* Template Name: Home Page
 */

get_header(); ?>

	<ul id="menu" class="open">
		<!-- <li data-menuanchor = "Welcome" class = "active"><a href = "#Welcome">Welcome</a></li> -->
		<li data-menuanchor = "About"><a href = "#About">About</a></li>
		<li data-menuanchor = "Capabilities"><a href = "#Capabilities">Capabilities</a></li>
		<li data-menuanchor = "Blog"><a href = "/news-blog/">Blog</a></li>
		<li data-menuanchor = "Merch"><a href = "/merchandise/">Merch</a></li>
		<li data-menuanchor = "Contact"><a href = "#Contact">Contact</a></li>
	</ul>
	<div class="welcome">
		<!-- <video autoplay muted loop id="whapasoVideo">
			<source src="/wp-content/uploads/2018/11/whapaso.mp4" type="video/mp4">
			<source src="/wp-content/uploads/2018/11/whapaso.webm" type="video/webm">
			Your browser does not support HTML5 video.
		</video> -->
	</div>
	<div id="pagepiling">
	    <div class="section sec2" id="section1">
			<div class="container-fluid">
				<div class="text_sec2">
					<h4 class="textE">A</h4>
					<h1 class="textE">CULTURE</h1>
					<h1 class="textE">AD SHOP</h1>
					<div class="text-center pt-5"><img class="img-fluid" src="/wp-content/uploads/2018/11/logo.png" alt="" /></div>
				</div>
				<!-- <img src="/wp-content/uploads/2018/11/culture.jpg" alt=""> -->
			</div>
	    </div>
	    <div class="section sec3" id="section2">
			<div class="container">
				<div class="row">
					<div class="col-md-7 offset-md-5 text-white">
						<!-- <h1 class="textE">About Us</h1>	 -->
						<h4 class="textE">Whapaso is a full-service advertising agency that focus in culture.</h4>
						<p class="textE">We believe in actions, behaviors and cultures as true definitions of consumers. We help solve brand problems through culture-centric approach in media, creative and experiences.</p>
					</div>
				</div>
			</div>
	    </div>
	    <div class="section sec4 <?php if(strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false) { echo 'pp-scrollable'; } ?>" id="section3">
	    	<div class="container text-white">
				<h1 class="textE">Capabilities –</h1>
				<div class="row">
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-3 col-2 img-wrapper">
								<img class="img-fluid p-2" src="/wp-content/uploads/2018/11/creative.png">
							</div>
							<div class="col-md-9 col-10 text-wrapper">
								<h4 class="textE">Creative –</h4>
								<p>Our approach to creative is simple: more ideas are better than few. For every creative task or brand challenge all Whapaso employees have the chance to participate providing a solution or idea. We then filter the best for the client.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-3 col-2 img-wrapper">
								<img class="img-fluid p-2" src="/wp-content/uploads/2018/11/influencer.png">
							</div>
							<div class="col-md-9 col-10 text-wrapper">
								<h4 class="textE">Influencer –</h4>
								<p>Influencers take a big part in defining culture. We have a network of trend-setters who help enhance organically brand perception across multiple industries.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-3 col-2 img-wrapper">
								<img class="img-fluid p-2" src="/wp-content/uploads/2018/11/media.png">
							</div>
							<div class="col-md-9 col-10 text-wrapper">
								<h4 class="textE">Media –</h4>
								<p>We are all about precision and effectiveness. We leverage latest technology across digital, social and traditional to bring more value and minimize waste.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-3 col-2 img-wrapper">
								<img class="img-fluid p-2" src="/wp-content/uploads/2018/11/strategy.png">
							</div>
							<div class="col-md-9 col-10 text-wrapper">
								<h4 class="textE">Insights and Strategy –</h4>
								<p>Insights it’s at the base of everything we do. Our insights team leverage industry tools to uncover hidden potential, provide trends and define consumer actions and behavior. </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section sec5" id="section4">
			<div class="container">
				<div class="row">
					<div class="col-md-6 offset-md-6">
						<div class="blog-wrapper">
							<p class="text-muted m-0">BLOG</p>
							<h2>Brands Who Know How To Do Christmas</h2>
							<h4>A look at the top brands who know how to create an impact during the holidays.</h4>
							<a href="/news-blog/" class="btn btn-lg btn-outline-dark">See More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section sec6 pp-scrollable" id="section5">
			<div id="before-after">
				<div class="view view-after">
					<div class="wrapper-after">
						<div class="img-wrapper">
							<img src="/wp-content/uploads/2018/12/contact-orange.jpg" alt="">
						</div>
						<div class="content-before-after right-position">
							<div class="content-right">
								<div class="container-fluid text-center contact-info">
									<div class="row mb-3 justify-content-md-center">
										<div class="col-md-3">
											<a href="tel:+1 (347) 244 2287"><img src="/wp-content/uploads/2018/12/mobile-white.png" alt="" width="25px"> +1 (347) 244 2287</a>
										</div>
										<div class="col-md-3">
											<a href="mailto:hello@whapaso.com"><img src="/wp-content/uploads/2018/12/mail-white.png" alt="" width="25px"> hello@whapaso.com</a>
										</div>
										<div class="col-md-3">
											<a href="/careers/"><img src="/wp-content/uploads/2018/12/career-white.png" alt="" width="25px"> Careers</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="view view-before">
					<div class="wrapper-before">
						<div class="img-wrapper">
							<img src="/wp-content/uploads/2018/12/contact-white.jpg" alt="">
						</div>
						<div class="content-before-after left-position">
							<div class="content-right">
								<div class="container-fluid text-center contact-info">
									<div class="row mb-3 justify-content-md-center">
										<div class="col-md-3">
											<a href="tel:+1 (347) 244 2287"><img src="/wp-content/uploads/2018/11/mobile.png" alt="" width="25px"> +1 (347) 244 2287</a>
										</div>
										<div class="col-md-3">
											<a href="mailto:hello@whapaso.com"><img src="/wp-content/uploads/2018/11/mail.png" alt="" width="25px"> hello@whapaso.com</a>
										</div>
										<div class="col-md-3">
											<a href="/careers/"><img src="/wp-content/uploads/2018/11/career.png" alt="" width="25px"> Careers</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="dragme">
					<span class="icon-drag"></span>
				</div>
			</div>
			<div class="footer text-center" style="position: absolute;width: 100%;bottom: -214px;">
				<img src="/wp-content/uploads/2018/11/logo_sm_wh.png" alt="logo" class="mt-5 mb-3">
				<div class="social">
					<a href="https://twitter.com/whapaso" target="_blank"><i class="icofont-twitter"></i></a> 
					<a href="https://www.facebook.com/Whapaso-2191910221027232/" target="_blank"><i class="icofont-facebook"></i></a> 
					<a href="https://www.instagram.com/whapaso/" target="_blank"><i class="icofont-instagram"></i></a> 
				</div>
				<p class="text-muted m-0 p-2">© Copyright 2018 - Whapaso. All Rights Reserved </p>
			</div>
		</div>
	</div>
<?php
get_footer();