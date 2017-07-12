<!DOCTYPE html>
<html>
<head>
<title>AMERICAN BODY ART - TATOUEUR PARIS</title> <!-- add logo -->
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- //for-mobile-apps -->
<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
<!-- //js -->
<!-- animation-effect -->
<link href="{{asset('css/animate.min.css')}}" rel="stylesheet"> 
<script src="{{asset('js/wow.min.js')}}"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
<link href="{{asset('//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic')}}" rel='stylesheet' type='text/css'>
<link href="{{asset('//fonts.googleapis.com/css?family=Antic+Slab')}}" rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>
<!-- header -->
	<div class="header">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed animated flash" data-wow-duration="1500ms" data-wow-delay="500ms" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
					<div class="logo">
						<a class="navbar-brand animated wow wobble" data-wow-duration="1000ms" data-wow-delay="500ms" 
						href="{{asset('index.html')}}">American Body Art</a>
					</div>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--iris">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item menu__item--current"><a href="{{asset('index.html')}}" 
								class="menu__link">ACCUEIL</a></li>
							<li class="menu__item"><a href="about.html" class="menu__link">TATOUAGE</a></li>
							<li class="menu__item"><a href="about.html" class="menu__link">PIERCING</a></li>
							<li class="menu__item"><a href="short-codes.html" class="menu__link">GALERIE</a></li>
							<li class="menu__item"><a href="mail.html" class="menu__link">CONTACTS</a></li>
						</ul>
					</nav>
				</div>
				<!-- /.navbar-collapse -->
			</nav>
			
			<!-- banner -->
				<div class="banner animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
					<section class="slider">
						<div class="flexslider">
							<ul class="slides">
								<li>
									<div class="banner-info">
										<div class="col-md-8 banner-info-left">
											@yield('aba_innocent')
											<ul class="social-networks square spin-icon">
												<li><a href="#" class="icon-linkedin"></a></li>
												<li><a href="#" class="icon-twitter"></a></li>
												<li><a href="#" class="icon-facebook"></a></li>
											</ul>
										</div>
										<div class="col-md-4 banner-info-right">
											<img src="images/1.jpg" alt=" " class="img-responsive" />
										</div>
										<div class="clearfix"> </div>
									</div>
								</li>
								<li>
									<div class="banner-info">
										<div class="col-md-8 banner-info-left">
											@yield('aba_sebastopol')
											<ul class="social-networks square spin-icon">
												<li><a href="#" class="icon-linkedin"></a></li>
												<li><a href="#" class="icon-twitter"></a></li>
												<li><a href="#" class="icon-facebook"></a></li>
											</ul>
										</div>
										<div class="col-md-4 banner-info-right">
											<img src="images/2.jpg" alt=" " class="img-responsive" />
										</div>
										<div class="clearfix"> </div>
									</div>
								</li>
								<li>
									<div class="banner-info">
										<div class="col-md-8 banner-info-left">
											@yield('aba_opera')
											<ul class="social-networks square spin-icon">
												<li><a href="#" class="icon-linkedin"></a></li>
												<li><a href="#" class="icon-twitter"></a></li>
												<li><a href="#" class="icon-facebook"></a></li>
											</ul>
										</div>
										<div class="col-md-4 banner-info-right">
											<img src="images/3.jpg" alt=" " class="img-responsive" />
										</div>
										<div class="clearfix"> </div>
									</div>
								</li>
								<li>
									<div class="banner-info">
										<div class="col-md-8 banner-info-left">
											@yield('aba_magic')
											<ul class="social-networks square spin-icon">
												<li><a href="#" class="icon-linkedin"></a></li>
												<li><a href="#" class="icon-twitter"></a></li>
												<li><a href="#" class="icon-facebook"></a></li>
											</ul>
										</div>
										<div class="col-md-4 banner-info-right">
											<img src="images/3.jpg" alt=" " class="img-responsive" />
										</div>
										<div class="clearfix"> </div>
									</div>
								</li>
								<li>
									<div class="banner-info">
										<div class="col-md-8 banner-info-left">
											@yield('aba_lombard')
											<ul class="social-networks square spin-icon">
												<li><a href="#" class="icon-linkedin"></a></li>
												<li><a href="#" class="icon-twitter"></a></li>
												<li><a href="#" class="icon-facebook"></a></li>
											</ul>
										</div>
										<div class="col-md-4 banner-info-right">
											<img src="images/3.jpg" alt=" " class="img-responsive" />
										</div>
										<div class="clearfix"> </div>
									</div>
								</li>
								<li>
									<div class="banner-info">
										<div class="col-md-8 banner-info-left">
											@yield('aba_rambuteau')
											<ul class="social-networks square spin-icon">
												<li><a href="#" class="icon-linkedin"></a></li>
												<li><a href="#" class="icon-twitter"></a></li>
												<li><a href="#" class="icon-facebook"></a></li>
											</ul>
										</div>
										<div class="col-md-4 banner-info-right">
											<img src="images/3.jpg" alt=" " class="img-responsive" />
										</div>
										<div class="clearfix"> </div>
									</div>
								</li>
							</ul>
						</div>
					</section>
						<!--FlexSlider-->
								<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
								<script defer src="js/jquery.flexslider.js"></script>
								<script type="text/javascript">
								$(window).load(function(){
								  $('.flexslider').flexslider({
									animation: "slide",
									start: function(slider){
									  $('body').removeClass('loading');
									}
								  });
								});
							  </script>
						<!--End-slider-script-->
				</div>
			<!-- //banner -->
		</div>
	</div>
<!-- header -->
<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="col-md-6 banner-bottom-left animated wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="500ms">
				<div class="banner-bottom-left1">
					
					
					@yield('content')
					
					
					<!--
					<div class="more">
						<a href="single.html"><span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span></a>
					</div>
					<div class="banner-bottom-left1-pos">
						<img src="images/4.jpg" alt=" " class="img-responsive" />
					</div>-->
				</div>
			</div>
			<div class="col-md-6 banner-bottom-right animated wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="500ms">
				<ul id="sti-menu" class="sti-menu">
					<li data-hovercolor="#44A790">
						<a href="single.html">
							<h4 data-type="mText" class="sti-item">réserver tatouage</h4>
							<span data-type="icon" class="sti-icon sti-icon-care sti-item"></span>
						</a>
					</li>
					<li data-hovercolor="#44A790">
						<a href="single.html">
							<h4 data-type="mText" class="sti-item">résrver piercing</h4>
							<span data-type="icon" class="sti-icon sti-icon-alternative sti-item"></span>
						</a>
					</li>
				</ul>	
					<script type="text/javascript" src="js/jquery.iconmenu.js"></script>
					<script type="text/javascript">
						$(function() {
							$('#sti-menu').iconmenu({
								animMouseenter	: {
									'mText' : {speed : 400, easing : 'easeOutExpo', delay : 140, dir : -1},
									'sText' : {speed : 400, easing : 'easeOutExpo', delay : 280, dir : -1},
									'icon'  : {speed : 400, easing : 'easeOutExpo', delay : 0, dir : -1}
								},
								animMouseleave	: {
									'mText' : {speed : 400, easing : 'easeInExpo', delay : 140, dir : -1},
									'sText' : {speed : 400, easing : 'easeInExpo', delay : 0, dir : -1},
									'icon'  : {speed : 400, easing : 'easeInExpo', delay : 280, dir : -1}
								}
							});
						});
					</script>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //banner-bottom -->
<!-- services -->
	<div id="services" class="services">
		<div class="container">
			<h3 class="animated wow rollIn" data-wow-duration="1000ms" data-wow-delay="500ms">Featured Services</h3>
			<div class="services-grids">
				<div class="col-md-4 services-grid animated wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="500ms">
					<div class="services-grid1">
						<a href="single.html"><img src="images/6.jpg" alt=" " class="img-responsive" /></a>
						<div class="services-grid1-pos">
							<h5>40% <span>Off /-</span></h5>
						</div>
					</div>
					<div class="services-grid1-bottom">
						<h4><a href="single.html">Itaque earum rerum tenetur</a></h4>
						<ul>
							<li><i> rerum <span>15%</span></i></li>
							<li class="ser-1"><i> earum <span>12%</span></i></li>
							<li class="ser-2"><i> tener <span>14%</span></i></li>
						</ul>
					</div>
					<div class="address">
						<h4><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>United States / London</h4>
					</div>
				</div>
				<div class="col-md-4 services-grid animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
					<div class="services-grid1">
						<a href="single.html"><img src="images/7.jpg" alt=" " class="img-responsive" /></a>
						<div class="services-grid1-pos">
							<h5>60% <span>Off /-</span></h5>
						</div>
					</div>
					<div class="services-grid1-bottom">
						<h4><a href="single.html">Sed ut perspiciatis unde</a></h4>
						<ul>
							<li><i> rerum <span>15%</span></i></li>
							<li class="ser-1"><i> earum <span>12%</span></i></li>
							<li class="ser-2"><i> tener <span>14%</span></i></li>
						</ul>
					</div>
					<div class="address">
						<h4><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>United States / London</h4>
					</div>
				</div>
				<div class="col-md-4 services-grid animated wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="500ms">
					<div class="services-grid1">
						<a href="single.html"><img src="images/8.jpg" alt=" " class="img-responsive" /></a>
						<div class="services-grid1-pos">
							<h5>30% <span>Off /-</span></h5>
						</div>
					</div>
					<div class="services-grid1-bottom">
						<h4><a href="single.html">totam aperiam eaque ipsa</a></h4>
						<ul>
							<li><i> rerum <span>15%</span></i></li>
							<li class="ser-1"><i> earum <span>12%</span></i></li>
							<li class="ser-2"><i> tener <span>14%</span></i></li>
						</ul>
					</div>
					<div class="address">
						<h4><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>United States / London</h4>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //services -->
<!-- services-bottom 
	<div class="services-bottom">
		<div class="col-md-6 services-bottom-left animated wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="500ms">
			<div class="services-bottom-left1">
				<h3>But I must explain to you how all this mistaken idea</h3>
				<div class="more m1">
					<a href="single.html"><span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span></a>
				</div>
			</div>
			<div class="services-bottom-left2">
				<img src="images/3.png" alt=" " class="img-responsive animated wow rubberBand" data-wow-duration="1000ms" data-wow-delay="1000ms" />
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="col-md-6 services-bottom-right animated wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="500ms">
			<div class="services-bottom-left1">
				<h3>To take a trivial example, which of us ever undertakes</h3>
				<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis 
					suscipit laboriosam.</p>
			</div>
			<div class="services-bottom-left2">
				<img src="images/4.png" alt=" " class="img-responsive animated wow rubberBand" data-wow-duration="1000ms" data-wow-delay="1000ms" />
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
services-bottom -->
<!-- primary 
	<div class="primary">
		<div class="container">
			<div class="col-md-4 primary-left animated wow flipInY" data-wow-duration="1000ms" data-wow-delay="500ms">
				<div class="primary-left1">
					<h2>Primary Contacts</h2>
					<ul>
						<li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>1234 Avenue, 2K Street, London.</li>
						<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">info@example.com</a></li>
						<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+1234 567 789</li>
					</ul>
				</div>
			</div>
			<div class="col-md-8 primary-right animated wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="500ms">
				<div class="col-md-6 primary-right-grid">
					<a href="single.html"><img src="images/9.jpg" alt=" " class="img-responsive" /></a>
					<h4><a href="single.html">sunt in culpa qui officia velit</a></h4>
					<p>To take a trivial example, which of us ever undertakes laborious physical 
						exercise, except to obtain some advantage from it? But who has any right.</p>
				</div>
				<div class="col-md-6 primary-right-grid">
					<a href="single.html"><img src="images/10.jpg" alt=" " class="img-responsive" /></a>
					<h4><a href="single.html">Neque porro quisquam est dolorem</a></h4>
					<p>To take a trivial example, which of us ever undertakes laborious physical 
						exercise, except to obtain some advantage from it? But who has any right.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
 //primary -->
<!-- footer -->
	<div class="footer animated wow bounce" data-wow-duration="1000ms" data-wow-delay="500ms">
		<div class="footer-grids">
			<div class="container">
				<div class="col-md-3 footer-grid">
					<h4>About Us</h4>
					<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus 
						saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>
					<ul class="social-networks square spin-icon">
						<li><a href="#" class="icon-linkedin"></a></li>
						<li><a href="#" class="icon-twitter"></a></li>
						<li><a href="#" class="icon-facebook"></a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-grid">
					<h4>Recent Posts</h4>
					<div class="footer-grid1">
						<div class="footer-grid1-left">
							<a href="single.html"><img src="images/7.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="footer-grid1-right">
							<a href="single.html">eveniet ut molestiae</a>
							<div class="more m1">
								<a href="single.html"><span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span></a>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="footer-grid1">
						<div class="footer-grid1-left">
							<a href="single.html"><img src="images/6.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="footer-grid1-right">
							<a href="single.html">qui dolorem fugiat</a>
							<div class="more m1">
								<a href="single.html"><span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span></a>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="footer-grid1">
						<div class="footer-grid1-left">
							<a href="single.html"><img src="images/8.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="footer-grid1-right">
							<a href="single.html">voluptas nulla paria</a>
							<div class="more m1">
								<a href="single.html"><span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span></a>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-3 footer-grid">
					<h4>More details</h4>
					<ul class="foot">
						<li><a href="about.html">About us</a></li>
						<li><a href="short-codes.html">Short Codes</a></li>
						<li><a href="#services" class="scroll">Featured Services</a></li>
						<li><a href="mail.html">Map</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-grid contact-grid">
						<h4>Contact us</h4>
						<ul class="foot">
							<li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
								1234 Avenue, 2K Street,<i>4th Cross Building, London.</i></li>
							<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">info@example.com</a></li>
							<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+1234 567 789</li>
						</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<div class="copy animated wow bounceInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
		 <p>Copyright © 2016 Tattoo. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
	</div>
<!-- //footer -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>
		