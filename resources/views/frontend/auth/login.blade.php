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
    <meta name="description" content="@yield('meta_description', 'Laravel 5 Boilerplate')">
    <meta name="author" content="@yield('meta_author', 'Anthony Rappa')">
    @yield('meta')

    {{-- See https://laravel.com/docs/5.5/blade#stacks for usage --}}
    @stack('before-styles')

    <!-- Check if the language is set to RTL, so apply the RTL layouts -->
    <!-- Otherwise apply the normal LTR layouts -->
    {{ style(mix('css/backend.css')) }}

    @stack('after-styles')

    <script type="text/javascript">
        var BASE_URL = '{{ url('/') }}';
    </script>
</head>
<body class="app flex-row align-items-center">
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card-group">
                <div class="card p-4">
                    <div class="card-body">
                        <div class="text-center">
                            <h1>Login</h1>
                            <p class="text-muted">Sign In to your account</p>
                        </div>
                        @include('includes.partials.messages')
                        {{ html()->form('POST', route('frontend.auth.login.post'))->open() }}
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="icon-user"></i>
                                    </span>
                                </div>
                                {{ html()->email('email')
                                        ->class('form-control')
                                        ->placeholder(__('validation.attributes.frontend.email'))
                                        ->attribute('maxlength', 191)
                                        ->required() }}
                                </div>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="icon-lock"></i>
                                        </span>
                                    </div>
                                    {{ html()->password('password')
                                        ->class('form-control')
                                        ->placeholder(__('validation.attributes.frontend.password'))
                                        ->required() }}
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <div class="checkbox">
                                                    {{ html()->label(html()->checkbox('remember', false, 1) . ' ' . __('labels.frontend.auth.remember_me'))->for('remember') }}
                                                </div>
                                            </div><!--form-group-->
                                        </div><!--col-->
                                    </div><!--row-->
                                    <div class="row">
                                        <div class="col-6">
                                            <button class="btn btn-primary px-4" type="submit">Login</button>
                                        </div>
                                        <div class="col-6 text-right">
                                            <a class="btn btn-link px-0" href="{{ route('frontend.auth.password.reset') }}">{{ __('labels.frontend.passwords.forgot_password') }}</a>
                                        </div>
                                    </div>
                                </div>
                                <ul class="list-group list-group-flush">
                                  <li class="list-group-item"><a href="{{ url('/') }}"> <i class="icon icon-arrow-left"></i> Back to {{ (!empty($setting['site_title'])) ? $setting['site_title'] : app_name() }}</a></li>
                                </ul>
                            </div>
                        {{ html()->form()->close() }}
                    </div>
                </div>
            </div>
            <br />
        </div>
    {!! script(mix('js/backend.js')) !!}
</body>
</html>