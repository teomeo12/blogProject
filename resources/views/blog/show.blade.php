@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15">
        <h1 class="text-6xl">
            {{ $post->title }}
        </h1>
    </div>
    <div class="flex items-center justify-center my-3">
            <img class="rounded-md drop-shadow-[0_5px_5px_rgba(0,0,0,20)]	" src="{{ asset('images/' . $post->image_path) }}" alt="">
        </div>
</div>

<div class="w-4/5 m-auto pt-20">
    <span class="text-gray-500">
        By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
    </span>

    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {{ $post->description }}
    </p>
   
<div class="w-4/5 m-auto text-center">
    <a href="/blog/"
                class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl hover:text-red-300 hover:drop-shadow-[0_5px_5px_rgba(0,0,0,20)]">
 Back</a>
</div>

    
</div>

@endsection 