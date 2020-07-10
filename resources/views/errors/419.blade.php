<!DOCTYPE html>
@langrtl
    <html lang="{{ app()->getLocale() }}" dir="rtl">
@else
    <html lang="{{ app()->getLocale() }}">
@endlangrtl
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', app_name())</title>
        <meta name="robots" content="noindex, nofollow">
        <meta name="description" content="@yield('meta_description', @$setting['tagline'])">
        <meta name="author" content="@yield('meta_author', '')">
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('images/favicon_digitalcrati.png') }}" sizes="256x256">
        @yield('meta')

        @stack('before-styles')

        <!-- Check if the language is set to RTL, so apply the RTL layouts -->
        <!-- Otherwise apply the normal LTR layouts -->
        {{ style(mix('css/frontend.css')) }}

        @stack('after-styles')
    </head>
    <body>
        <div id="app" class=" d-flex" style="height: 100vh;">
			<div class="container my-auto">
				<div class="row">
					<div class="col-lg-6 col-sm-12 mx-auto">
						<div class="error-template">
							<div class="content">
								<div class="title text-center">
									<h1 style="font-size: 160px;">404</h1>
									<h4 style="text-transform: capitalize;">page not Found</h4>
									<p class="p-3">Sory, the pacge you are looking for has note benn found. Try checking the URL code, then hit thre refresh button on your browser or come back to homepage</p>
									<a href="/" class="btn btn-success btn-xl">
										<i class="fas fa-home fa-2x"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		@stack('before-scripts')
	    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
	    {!! script(mix('js/jquery.easing.js')) !!}
	    {!! script(mix('js/frontend.js')) !!}
	    {!! script(mix('js/parallax.js')) !!}
	    @stack('after-scripts')

	    @include('includes.partials.ga')
    </body>
</html>
