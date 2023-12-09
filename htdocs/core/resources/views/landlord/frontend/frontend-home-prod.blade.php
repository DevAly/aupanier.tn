<!DOCTYPE html>
<html dir="{{ \App\Facades\GlobalLanguage::user_lang_dir() }}" lang="{{ \App\Facades\GlobalLanguage::user_lang_slug() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    {!! JsonLd::generate() !!}

    <link rel="preconnect" href="https://fonts.googleapis.com">

    {!! load_google_fonts() !!}
    {!! render_favicon_by_id(get_static_option('site_favicon')) !!}

    <title>
        @if(!request()->routeIs('landlord.homepage'))
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

    <link rel="stylesheet" href="{{global_asset('assets/landlord/frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/landlord/frontend/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/landlord/frontend/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/landlord/frontend/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/landlord/frontend/css/line-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/landlord/frontend/css/odometer.css')}}">
    <link rel="stylesheet" href="{{asset('assets/landlord/frontend/css/common.css')}}">
    <link rel="stylesheet" href="{{global_asset('assets/common/css/loader-01.css')}}">
    <link rel="stylesheet" href="{{asset('assets/landlord/frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/landlord/common/css/helpers.css')}}">
    
    <link rel="stylesheet" href="{{global_asset('assets/landlord/frontend/css/custom-style.css')}}">
    
    @if(\App\Facades\GlobalLanguage::user_lang_dir() == 'rtl')
    <link rel="stylesheet" href="{{asset('assets/landlord/frontend/css/rtl.css')}}">
    @endif
    
    @include('landlord.frontend.partials.color-font-variable')
    @yield('style')
    
    @yield('seo_data')
    
    @php
        $dynamic_style = 'assets/landlord/frontend/css/dynamic-style.css';
        @endphp
    @if(file_exists($dynamic_style))
    <link rel="stylesheet" href="{{asset($dynamic_style)}}">
    @endif
    <link rel="stylesheet" href="{{asset('assets/landlord/frontend/css/rayen.css')}}?version={{time()}}">
</head>
<body>
    
@include('tenant.frontend.partials.loader')
<header class="header-style-01">
    <!-- Menu area Starts -->
    <nav class="navbar navbar-area nav-absolute navbar-expand-lg">
        <div class="container nav-container">
            <div class="responsive-mobile-menu">
                <div class="logo-wrapper">
                    <a href="{{url('/')}}" class="logo">
                        @if(!empty(get_static_option('site_logo')))
                            {!! render_image_markup_by_attachment_id(get_static_option('site_logo')) !!}
                        @else
                            <h2 class="site-title">{{get_static_option('site_'.get_user_lang().'_title')}}</h2>
                        @endif
                    </a>
                </div>
                <a href="javascript:void(0)" class="click-nav-right-icon">
                    <i class="las la-user-circle"></i>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#multi_tenancy_menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="navbar-inner-all">
                <div class="collapse navbar-collapse" id="multi_tenancy_menu">
                    <ul class="navbar-nav">
                        {!! render_frontend_menu($primary_menu) !!}
                    </ul>
                </div>
                <div class="navbar-right-content show-nav-content">
                    <div class="single-right-content">
                        @if( Auth::guard('web')->check())
                            <div class="btn-wrapper">
                                @php
                                    $route = auth()->guest() == 'admin' ? route('landlord.admin.dashboard') : route('landlord.user.home');
                                @endphp
                                    <a class="cmn-btn cmn-btn-bg-1" href="{{$route}}">{{ get_static_option('default_dashboard_text') ?? __('Dashboard') }}  </a>
                                    <a class="cmn-btn cmn-btn-bg-1" href="{{route('landlord.user.logout') }}">{{ get_static_option('default_logout_text') ?? __('Logout') }}</a>
                            </div>
                        @else
                            <div class="btn-wrapper">
                                @if(get_static_option('default_menu_item') == get_static_option('default_login_text'))
                                    <a href="{{route('landlord.user.login')}}" class="cmn-btn cmn-btn-bg-1">{{get_static_option('default_login_text') ?? __("Get started for FREE")}}</a>
                                @elseif(get_static_option('default_menu_item') == get_static_option('default_register_text'))
                                    <a href="{{route('landlord.user.register')}}" class="cmn-btn cmn-btn-bg-1">{{get_static_option('default_register_text') ?? __("Get Started")}}</a>
                                @else
                                    <a href="{{route('landlord.user.register')}}" class="cmn-btn cmn-btn-bg-1">{{get_static_option('default_register_text') ?? __("Get Started")}}</a>
                                @endif
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Menu area end -->
</header>

<div style="height: 200vh;"></div>
