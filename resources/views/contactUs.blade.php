@extends('layouts.app')
@section('content')
    <div class="w-3/5  m-auto">

      <div class="items-center rounded-md  shadow-[0_35px_60px_-15px_rgba(0,0,0.5,100)] px-72 border-2 mt-10 ">
        <h2 class="text-5xl font-extrabold text-blue-600 my-2 text-center">
            Contact Us
        </h2>
    </div>
        
        <form method="POST" action="{{ route('contactUsStore') }}"
            class="w-full bg-blue-100 shadow-[0_35px_60px_-15px_rgba(0,0,0.5,100)] rounded px-8 pt-3 pb-8 my-10 ">
            <br>
            @if (Session::has('success'))
                <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4 text-center">

                    {{ Session::get('success') }}

                    @php
                        
                        Session::forget('success');
                        
                    @endphp

                </p>
            @endif
            {{ csrf_field() }}
            <br>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Name
                </label>
                <input name="name"
                    class=" appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="text" placeholder="Please enter your Name..." value="{{ old('name') }}">
                @if ($errors->has('name'))
                    <p class="text-red-500 text-xs italic">{{ $errors->first('name') }}</p>
                @endif
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Email
                </label>
                <input
                    class=" appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="email" type="text" placeholder="Please enter your Email..." value="{{ old('email') }}">
                @if ($errors->has('email'))
                    <p class="text-red-500 text-xs italic">{{ $errors->first('email') }}</p>
                @endif
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    Phone
                </label>
                <input name="phone"
                    class=" appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="text" placeholder="Please enter your Phone..." value="{{ old('phone') }}">

                @if ($errors->has('phone'))
                    <p class="text-red-500 text-xs italic">{{ $errors->first('phone') }}</p>
                @endif
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Topic
                </label>
                <input name="subject"
                    class=" appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="text" placeholder="Please add Topic..." value="{{ old('subject') }}">

                @if ($errors->has('subject'))
                    <p class="text-red-500 text-xs italic">{{ $errors->first('subject') }}</p>
                @endif
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    Message
                </label>
                <textarea name="message"
                    class=" appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    type="password" placeholder="Whrite your Message...">{{ old('message') }}</textarea>

                @if ($errors->has('message'))
                    <p class="text-red-500 text-xs italic">{{ $errors->first('message') }}</p>
                @endif
            </div>
            <br>
            <div class="items-center   px-72  mt-10 ">
                <button
                    class="w-full rounded-3xl delay-150 border-2 border-gray-300 text-center bg-green-700 drop-shadow-[0_5px_5px_rgba(0,0,0)] 
                    px-5 py-3 font-bold text-xl uppercase  text-stone-50 hover:delay-150
                     hover:text-lime-500 hover:bg-stone-600 hover:border-lime-500 hover:drop-shadow-[0_5px_5px_rgba(192,192,192)]">
                    Send 
                </button>
                 
            </div>
        </form>
    </div>
@endsection
