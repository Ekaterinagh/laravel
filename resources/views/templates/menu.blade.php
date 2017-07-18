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
						href="{{asset('/')}}">American Body Art</a>
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