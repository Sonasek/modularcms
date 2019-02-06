<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ModularCms') }}</title>  
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <!-- static nav bar in this time -->
        <nav class="navbar has-shadow" role="navigation" aria-label="main navigation">
            <div class="container">
                <div class="navbar-brand">
                <a class="navbar-item is-tab" href="{{route('home')}}">
                    <img src="{{asset('images/logo_dark_wide.png')}}" >
                    </a>
                
                    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    </a>
                </div>
                
                <div class="navbar-menu">
                    <div class="navbar-start">
                        <a class="navbar-item is-tab">Learn</a>
                        <a class="navbar-item is-tab">Discuss</a>
                        <a class="navbar-item is-tab">Share</a>
                    </div>
                
                    <div class="navbar-end">
                        @if(Auth::guest())
                            <a class="navbar-item is-tab" href="{{route('login')}}">Log In</a>
                            <a class="navbar-item is-tab" href="{{route('register')}}">Join the Community</a>
                        @else
                            <div class="navbar-item has-dropdown is-aligned-right is-hoverable">
                                <a class="navbar-link">
                                Hi Sonasek
                                </a>
                                <div class="navbar-dropdown">
                                    <a class="navbar-item">
                                        <span class="icon"><i class="fa fa-user m-r-15"></i></span>Profile
                                    </a>
                                    <a class="navbar-item">
                                        <span class="icon"><i class="fa fa-bell m-r-15"></i></span>Notification
                                    </a>
                                    <a class="navbar-item">
                                        <span class="icon"><i class="fa fa-cogs m-r-15"></i></span>Settings
                                    </a>
                                    <hr class="navbar-divider">
                                    <a class="navbar-item">
                                        <span class="icon"><i class="fa fa-sign-out m-r-15"></i></span>Logout
                                    </a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </nav>
        
        @yield('content')
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
