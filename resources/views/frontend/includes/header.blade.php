<header class="masthead" class="parallax-window" data-parallax="scroll" data-image-src="{{ @url(config('storage.images.general.image.url_path').$setting['home_background']) }}" speed="1" id="home">
	<div class="container h-100">
		<div class="row h-100">
			<div class="col-sm-12 my-auto pos-header">
				<div class="content-header">
					<h3>{{ @$setting['site_title'] }}</h3>
					<h1>{{ @$setting['tagline'] }}</h1>
					<ul class="list-inline list-unstyled">
						<li class="list-inline-item">
							<a href="#about" class="btn btn-header btn-outline-primary btn--left hvr-ripple-out js-scroll-trigger">Get Started</a>
						</li>
						<li class="list-inline-item">
							<a href="#contact" class="btn btn-sm btn-header btn--right btn-outline-primary hvr-ripple-out js-scroll-trigger">Contact Us</a>
						</li> 
					</ul>
				</div>
			</div>
		</div>
	</div>
</header>