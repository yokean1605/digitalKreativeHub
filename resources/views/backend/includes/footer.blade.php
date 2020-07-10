<footer class="app-footer">
    <span class="float-left">
        <strong>{{ __('labels.general.copyright') }} &copy; {{ date('Y') }} <a href="{{ url('/') }}">{{ @$setting['site_title'] }}</a></strong> {{ __('strings.backend.general.all_rights_reserved') }}
    </span>

    <span class="ml-auto">Powered by <a href="{{ url('/') }}">{{ @$setting['site_title'] }}</a></span>

    <div class="clearfix"></div>
</footer>