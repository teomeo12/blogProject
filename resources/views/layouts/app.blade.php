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
        <header class="bg-black py-6 headerBorder">

            <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                    <a href="{{ url('/') }}" class=" w-5 h-5 text-lg font-semibold text-gray-100 no-underline">
                        {{-- {{ config('app.name', 'Laravel') }} --}}

                        <img class="w-20 h-20 " src="{{ asset('images/logo1.png') }}" alt="">


                    </a>

                </div>

                <nav class="text-gray-300 text-lg sm:text-base flex gap-x-3 shadow ">

                    <a class=" delay-150  hover:underline underline-offset-1 hover:text-white  hover:delay-150  "
                        href="/">Home</a>
                    <a class=" delay-150  hover:underline underline-offset-1 hover:text-white  hover:delay-150 "
                        href="/about">About</a>
                    <a class=" delay-150  hover:underline underline-offset-1 hover:text-white   hover:delay-150 "
                        href="/blog">Blog</a>
                    |
                    <a class=" delay-150 font-bold text-green-200 hover:underline  underline-offset-1   hover:text-sky-400 "
                        href="/buycypto">Buy Crypto</a>
                    @guest
                        | <a class="hover:underline underline-offset-1 hover:text-red-300  hover:delay-150 "
                            href="{{ route('login') }}">{{ __(' Sign in') }}</a>
                        @if (Route::has('register'))
                            <a class="hover:underline underline-offset-1 hover:text-red-300  hover:delay-150 "
                                href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                    <a class=" delay-150 font-bold text-green-200 hover:underline underline-offset-1  hover:text-sky-400 hover:delay-150 "
                        href="/contactUs">Contact Us</a>
                        <div class="flex flex-col">
                            <div> | LogIn as</div>
                            <span class="text-yellow-500">&nbsp {{ Auth::user()->name }}</span>
                        </div>

                        <a class="hover:underline underline-offset-1 hover:text-red-300  hover:delay-150 " href="{{ route('logout') }}" class="no-underline" onclick="event.preventDefault();
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
