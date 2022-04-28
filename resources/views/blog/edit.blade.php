@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-center">

        <div class="items-center rounded-md  shadow-[0_35px_60px_-15px_rgba(0,0,0.5,100)] px-72 border-2 my-10 ">
            <h2 class="text-5xl font-extrabold text-gray-500 my-2 text-center">
                Update Post
            </h2>
        </div>
    </div>

    @if ($errors->any())
        <div class="w-4/5 m-auto">
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="w-4/5 m-auto pt-8 rounded-md ">
        <form action="/blog/{{ $post->slug }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <label class="block text-blue-700 text-4xl font-bold mb-2" for="username">
                Title
            </label>
            <input type="text" name="title" value="{{ $post->title }}"
                class="bg-transparent block rounded-md  border-b-2 w-full h-20 text-4xl outline-none">
            <label class="block text-blue-700 text-4xl font-bold mb-2" for="username">
                Short Description
            </label>
            <textarea name="shortdesc" class="py-8 rounded-md bg-transparent block border-b-2 w-full h-30 text-xl outline-none">{{ $post->shortdesc }}
            </textarea>
            <label class="block text-blue-700 text-4xl font-bold mb-2" for="username">
                Description
            </label>
            <textarea name="description"
                class="py-20 rounded-md bg-transparent block border-b-2 w-full h-60 text-xl outline-none">{{ $post->description }}</textarea>

            <label class="block text-blue-700 text-4xl font-bold mb-2" for="username">
                Image
            </label>
            <div class="flex items-center  border-zinc-700 border w-full h-60
            outline-none rounded-md ">

                <img class="rounded-md m-5   drop-shadow-[0_5px_5px_rgba(0,0,0,20)] h-40 w-60	"
                    src="{{ asset('images/' . $post->image_path) }}" alt="">
            </div>

            <div class="bg-grey-lighter pt-15 pt-6 border-zinc-700 border-b">
                <label
                    class="w-44 flex flex-col rounded-3xl items-center mb-5 px-2 py-3 text-s font-extrabold drop-shadow-[0_1px_1px_rgba(0,0,255)] 
                    tracking-wide uppercase border border-blue cursor-pointer
                    hover:bg-slate-500 hover:drop-shadow-[0_5px_5px_rgba(0,0,255,0.6)]
                    hover:text-gray-100">
                    <span class="my-1 text-base leading-normal ">
                        Select a file...
                    </span>
                    <input type="file" name="image" class="hidden">
                </label>
            </div>

            <div class="py-8 flex justify-evenly">
                <button type="submit"
                    class="uppercase delay-150 border-2 border-gray-300 drop-shadow-[0_5px_5px_rgba(0,0,0)]
                 bg-sky-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl 
                 hover:text-sky-500 hover:drop-shadow-[0_5px_5px_rgba(0,0,255,0.6)]
                  hover:bg-gray-300 hover:delay-150
                 hover:border-sky-500">
                    Submit Post
                </button>
                <a href="/blog/"
                    class="uppercase delay-150 border-2 border-gray-300 drop-shadow-[0_5px_5px_rgba(0,0,0)]
                 bg-red-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl 
                 hover:text-red-500 hover:drop-shadow-[0_5px_5px_rgba(255,0,0)]
                  hover:bg-gray-300 hover:delay-150
                 hover:border-red-500">
                    Cancel</a>
            </div>

        </form>


    </div>

@endsection
