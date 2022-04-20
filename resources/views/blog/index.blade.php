@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-center">

        <div class="items-center rounded-md  shadow-[0_35px_60px_-15px_rgba(0,0,0.5,100)] px-72 border-2 my-10 ">
            <h2 class="text-5xl font-extrabold text-sky-500 my-2 text-center">
                Blog Posts
            </h2>
        </div>
    </div>

    @if (session()->has('message'))
        <div class="w-4/5 m-auto mt-10 pl-2 text-center">
            <p class="w-2/6 mb-4 text-gray-500 bg-green-500 rounded-2xl py-4">
                {{ session()->get('message') }}
            </p>
        </div>
    @endif



    @foreach ($posts as $post)
        <div class="pb-10 gap-20 w-4/5 m-auto p-15 border-b border-gray-300">

            <div>
                <h2 class="text-gray-700 font-bold text-5xl pb-4 mt-6 flex items-center justify-center">
                    {{ $post->title }}
                </h2>

                <div class="flex items-center justify-center my-5">
                    <img class="rounded-md drop-shadow-[0_5px_5px_rgba(0,0,0,20)]	"
                        src="{{ asset('images/' . $post->image_path) }}" alt="">
                </div>

                <span class="text-gray-500">
                    By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on
                    {{ date('jS M Y', strtotime($post->updated_at)) }}
                </span>

                <p class="text-xl text-gray-700 pt-8 pb-6 leading-8 font-light">
                    {{ $post->shortdesc }}
                </p>
                <div class=" w-full   my-10">
                    <a href="/blog/{{ $post->slug }}"
                        class="uppercase delay-150 border-2 border-gray-300 drop-shadow-[0_5px_5px_rgba(0,0,0)]
                 bg-green-300 text-gray-500 text-s font-extrabold py-3 px-8 rounded-3xl 
                 hover:text-green-300 hover:drop-shadow-[0_5px_5px_rgba(0,255,0,0.3)]
                 hover:bg-gray-500 hover:delay-150
                 hover:border-green-300">
                        Keep Reading
                    </a>
                </div>


                <div class="pt-6  flex item-center justify-around">

                    @if (Auth::check())
                        <div class=" w-4/5 m-auto p-10">

                            <a href="/blog/create"
                                class="uppercase delay-150 border-2 border-gray-300 drop-shadow-[0_5px_5px_rgba(0,0,0)]
                 bg-sky-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl 
                 hover:text-sky-500 hover:drop-shadow-[0_5px_5px_rgba(0,0,255,0.6)]
                  hover:bg-gray-300 hover:delay-150
                 hover:border-sky-500">
                                Create post
                            </a>
                        </div>
                    @endif
                    @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                        {{-- <span class=" "> --}}
                            <form action="/blog/{{ $post->slug }}" method="POST">

                                @csrf
                                @method('delete')

                                <button
                                    {{-- class="uppercase bg-red-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl" --}}
                                    class="uppercase delay-150 border-2 border-gray-300 drop-shadow-[0_5px_5px_rgba(0,0,0)]
                 bg-red-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl 
                 hover:text-red-500 hover:drop-shadow-[0_5px_5px_rgba(255,0,0)]
                  hover:bg-gray-300 hover:delay-150
                 hover:border-red-500"
                                    type="submit">
                                    Delete
                                </button>
 <a href="/blog/{{ $post->slug }}/edit"
                                 class="uppercase delay-150 border-2 border-gray-300 drop-shadow-[0_5px_5px_rgba(0,0,0)]
                 bg-green-500 text-gray-200 text-s font-extrabold py-3 px-8 rounded-3xl 
                 hover:text-green-300 hover:drop-shadow-[0_5px_5px_rgba(0,255,0)]
                  hover:bg-gray-500 hover:delay-150
                 hover:border-green-300"
                                >
                                Edit
                            </a>
                            </form>
                        {{-- </span> --}}
                        {{-- <span class=" "> --}}
                            {{-- <a href="/blog/{{ $post->slug }}/edit"
                                 class="uppercase delay-150 border-2 border-gray-300 drop-shadow-[0_5px_5px_rgba(0,0,0)]
                 bg-green-500 text-gray-200 text-s font-extrabold py-3 px-8 rounded-3xl 
                 hover:text-green-300 hover:drop-shadow-[0_5px_5px_rgba(0,255,0)]
                  hover:bg-gray-500 hover:delay-150
                 hover:border-green-300"
                                >
                                Edit
                            </a> --}}
                        {{-- </span> --}}
                    @endif
                </div>
            </div>
        </div>
    @endforeach
@endsection
