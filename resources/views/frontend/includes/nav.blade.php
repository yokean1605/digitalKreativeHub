<nav class="navbar navbar-expand-lg navbar-light bg-transparent mb-0 navbar-dig" id="menu">
    <div class="container">
        <a href="{{ route('frontend.index') }}" class="navbar-brand">
            <img src="{{ @url(config('storage.images.general.image.url_path').$setting['brand_logo']) }}" alt="{{ @$setting['site_title'] }}" class="img-fluid img-logo-header">
        </a>

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('labels.general.toggle_navigation') }}">
            <span class="fas fa-bars"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ url('/#home') }}" class="nav-link js-scroll-trigger">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/#about') }}" class="nav-link js-scroll-trigger">About</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/#our-team') }}" class="nav-link js-scroll-trigger">Team</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/#latest-post') }}" class="nav-link js-scroll-trigger">Blogs</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/#contact') }}" class="nav-link js-scroll-trigger">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
