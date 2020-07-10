@include('frontend.includes.head')
@include('includes.partials.logged-in-as')
@include('frontend.includes.nav')

<section class="single-post">
	<div class="container">
		<head>
			<div class="title">
				<h1>{{ $post->title }}</h1>
			</div>
			<p class="meta">
				Published on <time class="update" datetime="">{{ date('d F Y', strtotime($post->updated_at)) }}</time>
			</p>
		</head>
		<body class="body-post">
			<div class="img-content-post">
				<img src="{{ $post->thumbnail }}" alt="images-content-post" class="img-fluid">
			</div>
			<div class="content-post">
			{!! $post->content !!}
		</div>			
		</body>

	</div>
</section>

@include('frontend.includes.footer')