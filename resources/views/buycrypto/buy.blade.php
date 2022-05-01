@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-center">

        <div class="items-center rounded-md  shadow-[0_35px_60px_-15px_rgba(0,0,0.5,100)] px-72 border-2 my-10 ">
            <h2 class="text-5xl font-extrabold text-sky-500 my-2 text-center">
                Buy Crypto Currency
            </h2>
        </div>
    </div>
    <div class="w-4/5 m-auto text-center pl-8">
        <table class="px-72 rounded-md">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-12 py-2 text-xs text-gray-500 w-40 text-left">Broker</th>
                    <th class="px-6 py-2 text-xs text-gray-500 text-left">Rating</th>
                    <th class="px-6 py-2 text-xs text-gray-500 text-left">Fees</th>
                    <th class="px-6 py-2 text-xs text-gray-500 text-left">Account Minimum</th>
                    <th class="px-6 py-2 text-xs text-gray-500 text-left">Promotion</th>
                    <th class="px-6 py-2 text-xs text-gray-500 text-left">Learn More</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                <tr class="whitespace-nowrap py-4">
                    <td class="py-4">
                        <div class="text-sm text-gray-900">
                            <img class="w-10 h-10 "
                                src="https://www.nerdwallet.com/cdn-cgi/image/quality=85/cdn/investing/logos/ftxus.png">
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-900">
                            <p class="text-left">5.0 / 5</p>
                            <p class="text-gray-400 text-left">Best for Crypto exchanges</p>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-900">
                            <p class="text-left">0%-0.4%</p>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-900 text-left">
                            $0
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-900">
                            <p class="text-left">None</p>
                            <p class="text-gray-400 text-left">no promotion available at this time</p>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-900 text-left">
                            <a href="https://ftx.com/"
                                class="bg-blue-500 hover:bg-blue-700 text-white text-center py-2 px-4 rounded">
                                Learn More
                            </a>
                            <p class="text-gray-400 text-left pt-2">on FTX.US's website</p>
                        </div>
                    </td>
                </tr>
                <tr class="whitespace-nowrap py-4">
                    <td class="py-4">
                        <div class="text-sm text-gray-900">
                            <img class="h-8 w-40"
                                src="https://www.nerdwallet.com/cdn-cgi/image/quality=85/cdn/investing/logos/Coinbase_Wordmark.png">
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-900">
                            <p class="text-left">5.0 / 5</p>
                            <p class="text-gray-400 text-left">Best for Crypto exchanges</p>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-900">
                            <p class="text-left">0.5%-4.5%</p>
                            <p class="text-gray-400 text-left">varies by type of transaction; other fees may apply</p>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-900 text-left">
                            $2
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-900">
                            <p class="text-left">Earn $5</p>
                            <p class="text-gray-400 text-left">in bitcoin for getting started on coinbase</p>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-900 text-left">
                            <a href="https://www.coinbase.com/"
                                class="bg-blue-500 hover:bg-blue-700 text-white text-center py-2 px-4 rounded">
                                Learn More
                            </a>
                            <p class="text-gray-400 text-left pt-2">on Coinbase's website</p>
                        </div>
                    </td>
                </tr>
                <tr class="whitespace-nowrap py-4">
                    <td class="py-4">
                        <div class="text-sm text-gray-900">
                            <img class="h-8 w-40"
                                src="https://www.nerdwallet.com/cdn-cgi/image/quality=85/cdn/investing/logos/gemini.png">
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-900">
                            <p class="text-left">5.0 / 5</p>
                            <p class="text-gray-400 text-left">Best for Crypto exchanges</p>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-900">
                            <p class="text-left">0.5%-3.99%</p>
                            <p class="text-gray-400 text-left">depends on payment method and platform</p>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-900 text-left">
                            $0
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-900">
                            <p class="text-left">$20 of BTC</p>
                            <p class="text-gray-400 text-left">for new users after trading $100 or more within 30 days</p>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-900 text-left">
                            <a href="https://www.gemini.com/eu"
                                class="bg-blue-500 hover:bg-blue-700 text-white text-center py-2 px-4 rounded">
                                Learn More
                            </a>
                            <p class="text-gray-400 text-left pt-2">on Gemini's website</p>
                        </div>
                    </td>
                </tr>
                <tr class="whitespace-nowrap py-4">
                    <td class="py-4">
                        <div class="text-sm text-gray-900">
                            <img class="h-14 w-40"
                                src="https://www.nerdwallet.com/cdn-cgi/image/quality=85/cdn/investing/logos/etoro_logo.png">
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-900">
                            <p class="text-left">4.0 / 5</p>
                            <p class="text-gray-400 text-left">Best for Crypto exchanges</p>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-900">
                            <p class="text-left">1%</p>
                            <p class="text-gray-400 text-left">for cryptocurrency</p>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-900 text-left">
                            $10
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-900">
                            <p class="text-left">Get $10</p>
                            <p class="text-gray-400 text-left">when you buy $100 worth of crypto</p>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-900 text-left">
                            <a href="https://www.etoro.com/crypto/exchange/"
                                class="bg-blue-500 hover:bg-blue-700 text-white text-center py-2 px-4 rounded">
                                Learn More
                            </a>
                            <p class="text-gray-400 text-left pt-2">on eToro's website</p>
                        </div>
                    </td>
                </tr>
                <tr class="whitespace-nowrap py-4">
                    <td>
                        <div class="text-sm text-gray-900">
                            <img class="h-8 w-40"
                                src="https://www.nerdwallet.com/cdn-cgi/image/quality=85/cdn/investing/logos/Kraken.png">
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-900">
                            <p class="text-left">5.0 / 5</p>
                            <p class="text-gray-400 text-left">Best for Crypto exchanges</p>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-900">
                            <p class="text-left">0.9%-2%</p>
                            <p class="text-gray-400 text-left">varies by type of transaction; other fees may apply</p>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-900 text-left">
                            $0
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-900">
                            <p class="text-left">None</p>
                            <p class="text-gray-400 text-left">no promotion available at this time</p>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-900 text-left">
                            <a href="https://www.kraken.com/"
                                class="bg-blue-500 hover:bg-blue-700 text-white text-center py-2 px-4 rounded">
                                Learn More
                            </a>
                            <p class="text-gray-400 text-left pt-2">on Kraken's website</p>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    </div>
@endsection
