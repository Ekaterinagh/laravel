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
							<li class="menu__item
							<?php
							if($curent_page== '/'){
								echo "menu__item--current";
							}
							?>">
							<a href="{{asset('/')}}" 
								class="menu__link">ACCUEIL</a></li>
							<li class="menu__item 
							<?php
							if($curent_page== '/tatouage'){
								echo "menu__item--current";
							}
							?>"><a href="about.html" class="menu__link">TATOUAGE</a></li>
							<li class="menu__item
							<?php
							if($curent_page== '/piercing'){
								echo "menu__item--current";
							}
							?>"><a href="about.html" class="menu__link">PIERCING</a></li>
							<li class="menu__item
							<?php
							if($curent_page== '/galerie'){
								echo "menu__item--current";
							}
							?>"><a href="short-codes.html" class="menu__link">GALERIE</a></li>
							<li class="menu__item
							<?php
							if($curent_page== '/contacts'){
								echo "menu__item--current";
							}
							?>"><a href="{{asset('contacts')}}" class="menu__link">CONTACTS</a></li>
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
											<h3><span>American body Art</span> Paris - Innocent</h3>
											<p>7 rue des Innocents Paris 1er tel: 01 40 26 51 94 <a href="#">innocent@americanbodyart.fr</a></p>
											<p>ACCES Paris Metro Chatelet: Ligne 1 - 4 - 7 - 14 Rer Chatelet les halles: Ligne A - B - D</p>
											<ul class="social-networks square spin-icon">
												<li><a href="#" class="icon-linkedin"></a></li>
												<li><a href="#" class="icon-twitter"></a></li>
												<li><a href="#" class="icon-facebook"></a></li>
											</ul>
										</div>
										<div class="col-md-4 banner-info-right">
											<img src="images/salon_innocents.jpg" alt=" " class="img-responsive" />
										</div>
										<div class="clearfix"> </div>
									</div>
								</li>
								<li>
									<div class="banner-info">
										<div class="col-md-8 banner-info-left">
											<h3><span>American body Art</span> Paris - Sebastopol</h3>
											<p>24 blvd de Sebatopol Paris 4e tel: 01 40 29 15 80
											<a href="#">sebastopol@americanbodyart.fr</a></p>
											<p>ACCES Paris Metro Chatelet: Ligne 1-4-7-14 Rer Chatelet les Halles: Ligne A-B-D</p>
											<ul class="social-networks square spin-icon">
												<li><a href="#" class="icon-linkedin"></a></li>
												<li><a href="#" class="icon-twitter"></a></li>
												<li><a href="#" class="icon-facebook"></a></li>
											</ul>
										</div>
										<div class="col-md-4 banner-info-right">
											<img src="images/salon_sebastopol.jpg" alt=" " class="img-responsive" />
										</div>
										<div class="clearfix"> </div>
									</div>
								</li>
								<li>
									<div class="banner-info">
										<div class="col-md-8 banner-info-left">
											<h3><span>American body Art</span> Paris - Opéra</h3>
											<p>4 Rue Joubert Paris 09 tel: 01 53 16 15 96 <a href="#">opera@americanbodyart.fr</a></p>
											<p>ACCES Paris Metro Opéra: Ligne 3 - 9 - 9  Rer Opéra: Ligne A</p>
											</br>
											<ul class="social-networks square spin-icon">
												<li><a href="#" class="icon-linkedin"></a></li>
												<li><a href="#" class="icon-twitter"></a></li>
												<li><a href="#" class="icon-facebook"></a></li>
											</ul>
										</div>
										<div class="col-md-4 banner-info-right">
											<img src="images/salon_opera.jpg" alt=" " class="img-responsive" />
										</div>
										<div class="clearfix"> </div>
									</div>
								</li>
								<li>
									<div class="banner-info">
										<div class="col-md-8 banner-info-left">
											<h3><span>American body Art</span> Paris - Magic Circus</h3>
											<p>44 rue des lombars Paris 01 tel: 01 40 26 48 38 <a href="#">magiccircus@americanbodyart.fr</a></p>
											<p>ACCES Paris Metro Chatelet: Ligne 1 - 4 - 7 - 14 Rer Chatelet les halles: Ligne A - B - D</p>
											<ul class="social-networks square spin-icon">
												<li><a href="#" class="icon-linkedin"></a></li>
												<li><a href="#" class="icon-twitter"></a></li>
												<li><a href="#" class="icon-facebook"></a></li>
											</ul>
										</div>
										<div class="col-md-4 banner-info-right">
											<img src="images/salon_magic.jpg" alt=" " class="img-responsive" />
										</div>
										<div class="clearfix"> </div>
									</div>
								</li>
								<li>
									<div class="banner-info">
										<div class="col-md-8 banner-info-left">
											<h3><span>American body Art</span> Paris - Lombard</h3>
											<p>25 rue des lombards Paris 4e tel: 01 40 29 15 <a href="#">lombard@americanbodyart.fr</a></p>
											<p>ACCES Paris Metro Chatelet: Ligne 1 - 4 - 7 - 14 Rer Chatelet les halles: Ligne A - B - D</p>
											<ul class="social-networks square spin-icon">
												<li><a href="#" class="icon-linkedin"></a></li>
												<li><a href="#" class="icon-twitter"></a></li>
												<li><a href="#" class="icon-facebook"></a></li>
											</ul>
										</div>
										<div class="col-md-4 banner-info-right">
											<img src="images/salon_lombard.jpg" alt=" " class="img-responsive" />
										</div>
										<div class="clearfix"> </div>
									</div>
								</li>
								<li>
									<div class="banner-info">
										<div class="col-md-8 banner-info-left">
											<h3><span>American body Art</span> Paris - Rambuteau</h3>
											<p>79 rue rambuteau Paris 1er tel: 01 40 26 54 83 <a href="#">@americanbodyart.fr</a></p>
											<p>ACCES Paris Metro Chatelet: Ligne 1 - 4 - 7 - 14 Rer Chatelet les halles: Ligne A - B - D</p>
											<ul class="social-networks square spin-icon">
												<li><a href="#" class="icon-linkedin"></a></li>
												<li><a href="#" class="icon-twitter"></a></li>
												<li><a href="#" class="icon-facebook"></a></li>
											</ul>
										</div>
										<div class="col-md-4 banner-info-right">
											<img src="images/salon_rambuteau.jpg" alt=" " class="img-responsive" />
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