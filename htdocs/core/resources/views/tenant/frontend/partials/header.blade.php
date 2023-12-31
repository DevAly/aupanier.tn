<!DOCTYPE html>
<html lang="{{ \App\Facades\GlobalLanguage::user_lang_slug() }}"
      dir="{{ \App\Facades\GlobalLanguage::user_lang_dir() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">

    @php
        $theme_slug = \App\Facades\ThemeDataFacade::getSelectedThemeSlug();
        $theme_header_css_files = \App\Facades\ThemeDataFacade::getHeaderHookCssFiles();
        $theme_header_js_files = \App\Facades\ThemeDataFacade::getHeaderHookJsFiles();
    @endphp

    {!! load_google_fonts($theme_slug) !!}
    {!! render_favicon_by_id(get_static_option('site_favicon')) !!}

    <title>
        @if(!request()->routeIs('tenant.frontend.homepage'))
            @yield('title')
            -
            {{get_static_option('site_title')}}
        @else
            {{get_static_option('site_title')}}
            @if(!empty(get_static_option('site_tag_line')))
                - {{get_static_option('site_tag_line')}}
            @endif
        @endif
    </title>

    {!! render_favicon_by_id(filter_static_option_value('site_favicon', $global_static_field_data)) !!}
    <link rel="stylesheet" href="{{global_asset('assets/tenant/frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{global_asset('assets/tenant/frontend/css/animate.css')}}">
    <link rel="stylesheet" href="{{global_asset('assets/tenant/frontend/css/slick.css')}}">
    <link rel="stylesheet" href="{{global_asset('assets/tenant/frontend/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{global_asset('assets/tenant/frontend/css/line-awesome.min.css')}}">
    <link rel="stylesheet" href="{{global_asset('assets/tenant/frontend/css/odometer.css')}}">
    <link rel="stylesheet" href="{{global_asset('assets/tenant/frontend/css/common.css')}}">
    <link rel="stylesheet" href="{{global_asset('assets/tenant/frontend/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{global_asset('assets/tenant/frontend/css/helpers.css')}}">
    <link rel="stylesheet" href="{{ global_asset('assets/common/css/toastr.css') }}">
    <link rel="stylesheet" href="{{global_asset('assets/common/css/loader-01.css')}}">
    @foreach($theme_header_css_files ?? [] as $cssFile)
        <link rel="stylesheet" href="{{ loadCss($cssFile) }}" type="text/css" />
    @endforeach

    <link rel="stylesheet" href="{{global_asset('assets/tenant/frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{global_asset('assets/tenant/frontend/css/custom-style.css')}}">

    @if(\App\Facades\GlobalLanguage::user_lang_dir() == 'rtl')
        <link rel="stylesheet" href="{{global_asset('assets/tenant/frontend/css/rtl.css')}}">
    @endif

    @if(request()->routeIs('tenant.frontend.homepage'))
        @include('tenant.frontend.partials.meta-data')
    @else
        @yield('meta-data')
    @endif

    @include('tenant.frontend.partials.css-variable', ['theme_slug' => $theme_slug])
    <link rel="stylesheet" href="{{global_asset('assets/tenant/frontend/css/shop-order-custom.css')}}?version={{time()}}">

    @yield('style')

    @if(\App\Enums\LanguageEnums::getdirection(get_user_lang_direction()) == 'rtl')
        <link rel="stylesheet" href="{{global_asset('assets/tenant/frontend/css/rtl.css')}}">
    @endif

    @php
        $file = file_exists('assets/tenant/frontend/css/'.tenant()->id.'/dynamic-style.css');
    @endphp
    @if($file)
        <link rel="stylesheet" href="{{global_asset('assets/tenant/frontend/css/'. tenant()->id .'/dynamic-style.css')}}">
    @endif

    @foreach($theme_header_js_files ?? [] as $jsFile)
        <script src="{{loadJs($jsFile)}}"></script>
    @endforeach
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-BQM3DKVRPM"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-BQM3DKVRPM');
    </script>
    @if(get_static_option('is_facebook_pixel_enabled') && !empty(get_static_option('facebook_pixel_id')) && is_numeric(get_static_option('facebook_pixel_id')))
        <!-- Meta Pixel Code -->
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                n.queue=[];t=b.createElement(e);t.async=!0;
                t.src=v;s=b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t,s)}(window, document,'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '{{ get_static_option('facebook_pixel_id') }}');
            fbq('track', 'PageView', {
                "source": "aupanier.tn",
                "version": "1.0.0"
            });
        </script>
        <noscript><img height="1" width="1" style="display:none"
                       src="https://www.facebook.com/tr?id={{ get_static_option('facebook_pixel_id') }}&ev=PageView&noscript=1"
            /></noscript>
        <!-- End Meta Pixel Code -->
    @endif
</head>

<body class="{{$theme_slug}}">
@if(Auth::guard('admin')->user())
<div class="admin-navbar" style="padding:0 10px;position:fixed;width:100%;z-index:9999;">
    <a href="{{ route('tenant.admin.dashboard') }}"><i class="las la-home"></i>{{ __('Dashboard') }}</a>
   <a href="https://{{ getenv('CENTRAL_DOMAIN') }}/user-home?domain={{tenant()->id}}&from_tenant=true"><i class="las la-store"></i> {{ __('Your Subdomains') }}</a>
</div>
<style>

    .admin-navbar {
        background-color: black;
        overflow: hidden;
    }

    .admin-navbar a {
        float: left;
        display: block;
        color: white;
        text-align: center;
        padding: 0 8px;
        text-decoration: none;
		font-size:12px;
    }

    .admin-navbar a:hover {
        background-color: #333;
    }
</style>
@endif
@include('tenant.frontend.partials.loader')
@include('tenant.frontend.partials.navbar')

<div class="search-suggestion-overlay"></div>
