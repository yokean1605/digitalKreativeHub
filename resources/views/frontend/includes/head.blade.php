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
        <div id="app">