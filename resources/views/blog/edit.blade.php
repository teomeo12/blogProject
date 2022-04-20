@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-center">
        <div class="py-15 border-b border-gray-200">
            <h1 class="text-4xl font-bold py-10 text-gray-600">
                Update Post
            </h1>
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

    <div class="w-4/5 m-auto pt-8">
        <form action="/blog/{{ $post->slug }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <input type="text" name="title" value="{{ $post->title }}"
                class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none">

            <textarea name="shortdesc" placeholder="Short Description..."
                class="py-8 bg-transparent block border-b-2 w-full h-30 text-xl outline-none">{{ $post->shortdesc }}</textarea>

            <textarea name="description" placeholder="Description..."
                class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none">{{ $post->description }}</textarea>
            <div class="py-8">
                <button type="submit"
                    class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                    Submit Post
                </button>
            </div>
        </form>

        <a href="/blog/" class="uppercase mt-15 bg-red-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
            Cancel</a>
    </div>

@endsection
