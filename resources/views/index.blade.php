@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Do you want to become a crypto guru?
                </h1>
                <a 
                    href="/blog"
                    class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Read More
                </a>
            </div>
        </div>
    </div>
    <div class="px-72">
        <h2 class="text-3xl font-extrabold text-gray-600">
            Real Time Coin Prices Of The Most Popular Cryptocurrencies
        </h2>
    </div>
    <?php
global  $thisCoin_price;
global  $thisCoin_Price;
// api key
$myAPIKey = 'f8f63e10-a149-462d-9440-1d72461abb3e';
//array of coin requests
$myCoins_array = array ('BTC', 'ETH', 'DOGE', 'SHIB', 'USDT', 'BNB', 'USDC', 'XRP', 'SOL', 'ADA');
// turn array into list
$myCoins_list = '';
foreach ($myCoins_array as $item) {
    $myCoins_list .= $item . ',';
}
// remove last comma
$myCoins_list = substr_replace($myCoins_list, "", -1);

//setup query
$url = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/quotes/latest';
$parameters = array('symbol' => $myCoins_list);
$headers = array(
    'Accepts: application/json',
     'X-CMC_PRO_API_KEY: ' . $myAPIKey
    );

// query string encode the parameters
$qs = http_build_query($parameters);
// create the request url
$request = "{$url}?{$qs}";
// get cURL resource / setup options
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => $request,
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_RETURNTRANSFER => 1
));
// send the request, save the response
$response = curl_exec($curl);
$apiData = json_decode($response, true);
//close request
curl_close($curl);
?>
<style>
    marquee {
        padding-top: 2%; 
        padding-bottom: 2%;
    }
    .coin_wrapper {
        color: black; padding-right: 20%; 
        border: 1px solid gray; 
        padding-left:1%; 
        padding-right:1%;}
    .coin_symbol {
        --tw-text-opacity: 1;
        color: rgb(75 85 99 / var(--tw-text-opacity));
        font-weight: 800;
    }
    .coin_price { 
        padding-left:1%; 
        padding-right:1%;
    }
    .coin_change { 
        padding-left:1%; 
        padding-right:1%;
    }
    .arrow {
        border: solid black;
        border-width: 0 3px 3px 0;
        display: inline-block;
        padding: 3px;
    }
    .coin_change_green {
        color: green; 
    }
    .coin_change_red {
        color: red; 
    }
</style>

<?php
echo '<marquee scrollamount="12">';
// loop through the coins
foreach ($myCoins_array as $value)
{
    $thisCoin_Symbol = $value;
    $thisCoin_price = $apiData['data'][$value]['quote']['USD']['price'];
    $thisCoin_percent_change_1h = $apiData['data'][$value]['quote']['USD']['percent_change_1h'];

    if($thisCoin_percent_change_1h >= 0)
    {
        $changeColorClass = 'coin_change_green';
    }
    else
    {
        $changeColorClass = 'coin_change_red';
    }
    echo '<span class="coin_wrapper">';
    echo '<span class="coin_symbol">' . $thisCoin_Symbol . '</span>';
    echo '<span class="coin_price">';
    // get rid of decimals for anything over 1000
    if($thisCoin_price > 1000)
    {
        echo '$'. number_format($thisCoin_price, 0);
    }
    else
    {
        if(strpos ($thisCoin_price, 'E-'))
        {
            $thisCoin_price *= 10;
            echo '-$0.' . number_format($thisCoin_price, 10, '', '');
        }
        else{
            echo '$' . $thisCoin_price;
        }
    }
    echo '</span>';
    echo '<span class="coin_change ' . $changeColorClass . '">';
        echo number_format($thisCoin_percent_change_1h, 2) . '%';
    echo '</span>';
}
echo '</marquee>';
?>


    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        
        <div>
            <img src="./images/cryptocurrency.jpg" width="700" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                About Crypto Guru
            </h2>
            
            <p class="py-8 text-gray-500 text-s">
                Crypto Guru started with sole focus on educating its readers about Bitcoin and its potential impact on the traditional financial systems has grown with the cryptocurrency industry to cover various altcoins, blockchain projects, crowdsales, regulatory developments and the futuristic confluence of some of the leading technologies of time viz., blockchain, artificial intelligence, internet of things and more.
            </p>

            {{-- <p class="font-extrabold text-gray-600 text-s pb-9">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente magnam vero nostrum! Perferendis eos molestias porro vero. Vel alias.
            </p> --}}

            <a 
                href="/blog"
                class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>

    {{-- <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l"> 
            I'm an expert in...
        </h2>

        <span class="font-extrabold block text-4xl py-1">
            Ux Design
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Project Management
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Digital Strategy
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Backend Development
        </span>
    </div> --}}

    <div class="text-center py-15">
        {{-- <span class="uppercase text-s text-gray-400">
            Blog
        </span> --}}

        <h2 class="text-4xl font-bold py-10 text-gray-600">
            Recent Posts
        </h2>

        <p class="m-auto w-4/5 text-gray-500 pb-10">
            It is always important to be in tune with the latest news. To have the latest news means to be the first in making meaningful choices and to know everything significant before your competitors do. Our latest news on cryptocurrency is the best source to rely on while deciding on trading strategies and investment options. Read the latest news on blockchain and cryptocurrency
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto flex-row">
        <div class="flex bg-gray-800 text-gray-100 pt-10 ">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                {{-- <span class="uppercase text-xs"> --}}
                    <h2 class="uppercase text-xs">What Is Cryptocurrency?</h2>
                {{-- </span> --}}

                <h3 class="text-xl font-bold py-10">
                    Cryptocurrency, sometimes called crypto-currency or crypto, is any form of currency that exists digitally or virtually and uses cryptography to secure transactions. Cryptocurrencies don't have a central issuing or regulating authority, instead using a decentralized system to record transactions and issue new units.
                </h3>

                <a 
                    href="/blog/what-is-cryptocurrency"
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find Out More
                </a>
            </div>
        </div>
        <div class="flex bg-gray-800 text-gray-100 pt-10 pl-3 border-l-2">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                {{-- <span class="uppercase text-xs"> --}}
                    <h2 class="uppercase text-xs">What Is An NFT?</h2>
                {{-- </span> --}}

                <h3 class="text-xl font-bold py-10">
                    An NFT is a digital asset that represents real-world objects like art, music, in-game items and videos. They are bought and sold online, frequently with cryptocurrency, and they are generally encoded with the same underlying software as many cryptos.
                </h3>

                <a 
                    href="/blog/non-fungible-tokens-explained"
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find Out More
                </a>
            </div>
        </div>
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="">
        </div>
    </div>
@endsection