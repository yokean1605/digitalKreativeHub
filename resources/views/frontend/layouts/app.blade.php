@include('frontend.includes.head')
@include('includes.partials.logged-in-as')
@include('frontend.includes.nav')
@include('frontend.includes.header')

<div class="container">
    @yield('content')
</div><!-- container -->

<!-- About -->
<section class="about" id="about">
    <div class="container">
        <div class="title text-center">
            <h4>{!! @json_decode($setting['about'])->title !!}</h4>
        </div>
        <h2 class="sub-title text-center">{{ @json_decode($setting['about'])->sub_title }}</h2>
        <p class="pb-3">{{ @json_decode($setting['about'])->description }}</p>

        <!-- service -->
        <div class="row pt-5">
            <?php if(!empty($setting['service'])) { ?>
                @forelse(json_decode($setting['service']) as $service)
                    <div class="col-lg-4 col-sm-6">
                        <div class="our-service-box">
                            <div class="media mb-4">
                                <img src="{{ URL::asset('images/business-presentation.svg') }}" alt="img-service" class="img-fluid img-service">
                                <div class="media-body">
                                    <h5 class="mt-0">{{ @$service->title }}</h5>
                                    {{ @$service->description }}
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-lg-4 col-sm-6">
                        <div class="our-service-box">
                            <div class="media mb-4">
                                <img src="{{ URL::asset('images/business-presentation.svg') }}" alt="img-service" class="img-fluid img-service">
                                <div class="media-body">
                                    <h5 class="mt-0">Digital Ads</h5>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum quibusdam, commodi officiis perspiciatis dolores.
                                </div>
                            </div>
                        </div>
                    </div>
                @endforelse
            <?php } ?>
        </div>
    </div>
</section><!-- End About -->

<!-- our team -->
<section class="our-team bg-light" id="our-team">
    <div class="title-team text-center mb-5">
        <h6>creative minds</h6>
        <h3>OUR <span>TEAM</span></h3>
    </div>
    <div class="container">
        <div class="row">
            <?php if(!empty($setting['team'])) { ?>
                @forelse(json_decode($setting['team']) as $team)
                    <div class="col-lg-3 col-md-3">
                        <div class="card h-100">
                            <div class="list-team">
                                <img src="{{ @url(config('storage.images.general.image.url_path').$team->image) }}" alt="images-team" class="img-fluid">
                                <ul class="medsos list-group">
                                    <li class="list-group-item">
                                        <a href="{{ $team->facebook }}">
                                            <i class="fab fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="{{ $team->twitter }}">
                                            <i class="fab fa-twitter"></i>             
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="{{ $team->instagram }}">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="{{ $team->linkedin }}">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body text-center">
                                <div class="card-title">
                                    <h4>{{ $team->fullname }}</h4>
                                </div>
                                <p class="card-text mb-0">
                                    {{ $team->role }}
                                </p>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>Please update on menu admin</p>
                @endforelse
            <?php } ?>
            </div>
        </div>
    </div>
</section>

<!-- Latest Post -->
<section class="latest-post" id="latest-post">
    <div class="container">
        <div class="title-post text-center mb-5">
            <h6>Latest Post</h6>
            <h3>OUR <span>NEWS</span></h3>
        </div>
        <div class="row">
            <?php if(!empty($posts)) { ?>
            @forelse($posts as $post)
                <div class="col-lg-4 col-md-4 mb-4">
                    <div class="card h-100 card-latest">
                        <a href="{{ route('frontend.news.index', $post->slug) }}" class="parent">
                            <img src="{{ $post->thumbnail }}" alt="img-blog" class="card-img-top child">
                        </a>
                        <div class="card-body">
                            <div class="card-title">
                                <h5>
                                    <a href="{{ route('frontend.news.index', $post->slug) }}">{{ $post->title }}</a>
                                </h5>
                            </div>
                            <p class="card-text mb-0">
                                {!! $post->excerpt !!}
                            </p>
                            <a href="{{ route('frontend.news.index', $post->slug) }}" class="btn btn-outline-primary btn-readmore">
                                <span>Read More</span>
                            </a>
                        </div>
                    </div>
                </div>
            
            @empty

            @endforelse
            <?php } ?>
        </div>
    </div>
</section><!-- Latest Post -->

<!-- our partner -->
<section class="partner bg-light text-center" id="partner">
    <div class="container">
        <div class="row">
            <div class="mx-auto">
                <ul class="list-inline">
                    <?php if(!empty($setting['partner'])) { ?>
                        @foreach(json_decode($setting['partner']) as $key => $partner )
                            <li class="list-inline-item">
                                <img src="{{ url(config('storage.images.general.image.url_path').$partner->image) }}" alt="{{ $partner->image }}" class="img-fluid">
                            </li>
                        @endforeach
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section> <!-- end our partner -->

<!-- Contact -->
<section class="contact" id="contact" class="parallax-window" data-parallax="scroll" data-image-src="/images/contact_us_banner.jpg" speed="1">
    <div class="col-lg-6 mx-auto text-center">
        <div class="title mb-5">
            <h4>CONTACT <span>US</span></h3>
        </div>
        @include('includes.partials.messages')
        {{ html()->form('POST', route('frontend.contact.send'))->class('contact-from')->open() }}
            <div class="controls">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group has-error has-danger">
                            <input type="text" class="form-control" name="name" id="form-name" placeholder="Name" required="required">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group has-error has-danger">
                            <input type="email" class="form-control" name="email" id="form-email" placeholder="Email" required="required">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group has-error has-danger">
                            <input type="text" class="form-control" name="subject" id="form-subject" placeholder="Subject" required="required">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group has-error has-danger">
                            <textarea class="form-control" name="message" id="form-message" rows="4" placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-sm mt-4 btn-contact">
                            <span>Send Message</span>
                        </button>
                    </div>
                </div>
            </div>
        {{ html()->form()->close() }}
    </div>
</section><!-- End contact -->

@include('frontend.includes.footer')