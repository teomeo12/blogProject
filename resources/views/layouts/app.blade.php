<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-gray-800 py-6">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                    <a href="{{ url('/') }}" class=" w-5 h-5 text-lg font-semibold text-gray-100 no-underline">
                        {{-- {{ config('app.name', 'Laravel') }} --}}
                       
                        <img class="w-12 h-9 " src="{{ asset('images/logo.jpg') }}" alt="">
                    
                        
                    </a>
                </div>
                <nav class="text-gray-300 text-sm sm:text-base flex gap-x-3">
                    <a class="no-underline shadow-none   delay-150  hover:underline hover:text-slate-400 hover:shadow-gray-400   hover:delay-150 "  href="/">Home</a>
                    <a class="no-underline shadow-none   delay-150  hover:underline hover:text-slate-400 hover:shadow-gray-400   hover:delay-150 " href="/about">About</a>
                    <a class="no-underline shadow-none   delay-150  hover:underline hover:text-slate-400 hover:shadow-gray-400   hover:delay-150 " href="/blog">Blog</a>
                    
                    @guest
                        <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else

                        <div class="flex flex-col">
                            <div>LogIn as</div>
                            <span class="text-yellow-500">{{ Auth::user()->name }}</span>
                        </div>

                        <a href="{{ route('logout') }}"
                           class="no-underline hover:underline"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </nav>
            </div>
        </header>

        <div>
            @yield('content')
        </div>

        <div>
            @include('layouts.footer')
        </div>
    </div>
</body>
</html>
