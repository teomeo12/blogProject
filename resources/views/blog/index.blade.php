@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-center">
        <div class="py-15 border-b border-gray-200">
            <h1 class="text-4xl font-bold py-10 text-gray-600">
                Blog Posts

            </h1>
        </div>
    </div>

    @if (session()->has('message'))
        <div class="w-4/5 m-auto mt-10 pl-2 text-center">
            <p class="w-2/6 mb-4 text-gray-500 bg-green-500 rounded-2xl py-4">
                {{ session()->get('message') }}
            </p>
        </div>
    @endif

    @if (Auth::check())
        <div class=" w-4/5 m-auto p-10">
            <a href="/blog/create" class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                Create post
            </a>
        </div>
    @endif

    @foreach ($posts as $post)
        <div class="pb-10 gap-20 w-4/5 m-auto p-15 border-b border-gray-200">

            <div>
                <h2 class="text-gray-700 font-bold text-5xl pb-4 flex items-center justify-center">
                    {{ $post->title }}
                </h2>

                <div class="flex items-center justify-center my-3">
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

                <div class="pt-6 border-2">
                    <a href="/blog/{{ $post->slug }}"
                        class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                        Keep Reading
                    </a>

                    @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                        <span class="float-right mt-0 ">
                            <form action="/blog/{{ $post->slug }}" method="POST" >
                               
                                @csrf
                                @method('delete')

                                <button
                                    class="uppercase bg-red-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl"
                                    type="submit">
                                    Delete
                                </button>

                            </form>
                        </span>
                        <span class="float-right mb-4 pr-6">
                            <a href="/blog/{{ $post->slug }}/edit"
                                class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                                Edit
                            </a>
                        </span>
                    @endif
                </div>
            </div>
        </div>
    @endforeach
@endsection
