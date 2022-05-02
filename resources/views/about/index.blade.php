@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-center">

        <div class="items-center rounded-md  shadow-[0_35px_60px_-15px_rgba(0,0,0.5,100)] px-72 border-2 my-10 ">
            <h2 class="text-5xl font-extrabold text-sky-500 my-2 text-center">
                About US
            </h2>
        </div>

    </div>

    <div class="   text-center">

        <video class=" w-full h-96 text-center bg-black" autoplay loop muted>
            <source src="https://downloads.coindesk.com/cd3/about-us/video_desktop.mp4" type="video/mp4">
        </video>
    </div>

    <div class="w-4/5 m-auto flex border-t border-b text-left my-7">

        <h2 class="text-5xl font-extrabold font-serif  text-sky-500 my-7 text-left">
            Mission
        </h2>
        <div class="w-2/3 ml-5 text-lg text-left mt-20 mb-5" >
            <p>
                We are building the most influential, trusted information platform for a global community engaged in the
                transformation of the financial system and the emerging crypto economy. Our blog is an integrated platform
                for
                media, events, data & indices for the next generation of investing and the future of money.
            </p>
        </div>


    </div>
    <div class="w-4/5 m-auto my-5">

        <div class="w-4/5 flex m-auto my-7 border-b">
            <div class="my-7">
                <img class="rounded-md drop-shadow-[0_5px_5px_rgba(0,0,0,20)]	" src="./images/about1.png" alt="">
            </div>

            <div class="w-2/3 ml-5 text-lg mt-20 ">
                <p>
                    Our leading journalists and cryptocurrency prices are regularly featured in top-tier media including
                    Axios,
                    Bloomberg, Business Insider, CBS News, CNBC, The Economist, Financial Times, Forbes, Fortune,
                    MarketWatch,
                    Nasdaq, The Wall Street Journal, and USA Today, Yahoo Finance!
                </p>
            </div>

        </div>

        <div class="w-4/5 flex m-auto my-7 border-b">

            <div class="w-2/3 mr-5 text-lg mt-14 ">
                <p>
                    Our blog Indices are the bellwether for the market. They are the industry standard for
                    institutional-grade
                    cryptocurrency pricing with billions of dollars in monthly trading volume quoted against them. The
                    flagship
                    CoinDesk Bitcoin Price Index (XBX) is a spot reference rate for BTC that benchmarks the world's first
                    publicly
                    traded bitcoin fund and the world's first bitcoin ETF.
                </p>
            </div>
            <div class="my-7">
                <img class="rounded-md drop-shadow-[0_5px_5px_rgba(0,0,0,20)]	" src="./images/about2.png" alt="">
            </div>

        </div>

        <div class="w-4/5 flex m-auto my-7">
            <div class="my-7">
                <img class="rounded-md drop-shadow-[0_5px_5px_rgba(0,0,0,20)]	" src="./images/about3.png" alt="">
            </div>
            <div class="w-2/3 ml-5 text-lg mt-14">
                <p>
                    Our blog hosts myriad industry events and webinars each year, including the annual Consensus summit
                    event each
                    May, the largest and most important forward-thinking gathering of stakeholders in the global crypto and
                    blockchain ecosystem
                </p>
            </div>

        </div>



    </div>
    <div class="w-4/5 m-auto border-b border-t border-gray-300 flex">

        <div class="w-2/4     text-center">
            <h2 class="text-5xl font-extrabold font-serif mt-14 text-sky-500 my-2 text-left">By the numbers</h2>
        </div>

        <div class="w-2/4 flex flex-wrap mt-14">

            <div class="w-2/5 my-4 mr-2 border-b border-t border-gray-300 text-center">
                <div class="flex">
                    <h1 class="text-5xl font-extrabold font-serif  text-green-500  text-left">1.3</h1>
                    <h2 class="text-lg font-extrabold font-serif  text-green-500 my-2 text-right top-3">M</h2>
                </div>

                <div class="">
                    <p class="  font-serif  text-black font-extrabold my-2 text-left">Followers on Twitter</p>
                </div>
            </div>

            <div class="w-2/5 my-4 mr-2  border-b border-t border-gray-300 text-center">
                <div class="flex">
                    <h1 class="text-5xl font-extrabold font-serif  text-green-500  text-left">13</h1>
                    <h2 class="text-lg font-extrabold font-serif  text-green-500 my-2 text-right top-3">M</h2>
                </div>

                <div class="">
                    <p class="  font-serif  text-black font-extrabold my-2 text-left">Average Monthly
                        Viewers</p>
                </div>
            </div>

            <div class="w-2/5 my-4 mr-2  border-b border-t border-gray-300 text-center">
                <div class="flex">
                    <h1 class="text-5xl font-extrabold font-serif  text-green-500  text-left">20</h1>
                    <h2 class="text-lg font-extrabold font-serif  text-green-500 my-2 text-right top-3">K</h2>
                </div>

                <div class="">
                    <p class="  font-serif  text-black font-extrabold my-2 text-left">Consensus Event Attendees</p>
                </div>
                <div><span class="font-serif  text-black my-2 text-left">Consensus has been
                        recognized as the most influential event in cryptocurrency and
                        blockchain.</span>
                </div>
            </div>


            <div class="w-2/5 my-4 mr-2 border-b border-t border-gray-300 text-center">
                <div class="flex">
                    <h1 class="text-5xl font-extrabold font-serif  text-green-500  text-left">50</h1>
                    <h2 class="text-lg font-extrabold font-serif  text-green-500 my-2 text-right top-3">+</h2>
                </div>

                <div class="">
                    <p class="  font-serif  text-black font-extrabold my-2 text-left">Largest Group of Crypto
                        Journalists In The World</p>
                </div>
            </div>
        </div>


    </div>
@endsection
