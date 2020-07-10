		<section class="footer p-0">
			<div class="footer-top text-center">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="item-footer-top">
								<div class="sr-icons">
									<i class="fas fa-phone"></i>
								</div>
								<p class="mb-0">
									<label class="">Phone</label>
								</p>
								<p>{{ @$setting['phone'] }}</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="item-footer-top">
								<div class="sr-icons">
									<i class="fas fa-map"></i>
								</div>
								<p class="mb-0">
									<label for="">Address</label>
									<p>{{ @$setting['address'] }}</p>
								</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="item-footer-top">
								<div class="sr-icons">
									<i class="far fa-envelope"></i>
								</div>
								<p class="mb-0">
									<label for="">Email</label>
								</p>
								<p>{{ @$setting['email'] }}</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom text-center pb-5 pt-5">
				<div class="container">
					<div class="sosmed pb-4">
						<ul class="list-inline">
							<li class="list-inline-item sr-icons">
								<a href="{{ @$setting['twitter'] }}">
									<i class="fab fa-twitter fa-2x"></i>
								</a>
							</li>
							<li class="list-inline-item sr-icons">
								<a href="{{ @$setting['facebook'] }}">
									<i class="fab fa-facebook fa-2x"></i>
								</a>
							</li>
							<li class="list-inline-item sr-icons">
								<a href="{{ @$setting['instagram'] }}">
									<i class="fab fa-instagram fa-2x"></i>
								</a>
							</li>
						</ul>
					</div>
					<div class="reserved">
						<small>© 2018 DIGITAL CREATIVE HUB. ALL RIGHTS RESERVED.</small>
					</div>
				</div>
			</div>
		</section>

		<p id="toTop">
			<a href="#" class="hvr-ripple-out" >
				<i class="fas fa-angle-up">
					
				</i>
			</a>
		</p>
        </div><!-- #app -->

        <!-- Scripts -->
        @stack('before-scripts')
        <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
        {!! script(mix('js/jquery.easing.js')) !!}
        {!! script(mix('js/frontend.js')) !!}
        {!! script(mix('js/parallax.js')) !!}
        @stack('after-scripts')

        @include('includes.partials.ga')
    </body>
</html>