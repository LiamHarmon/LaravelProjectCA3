@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
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

<div class="w-4/5 m-auto pt-20">
    <form 
        action="/blog/{{ $post->slug }}"
        method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <input 
            type="text"
            name="title"
            value="{{ $post->title }}"
            class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none">

        <textarea 
            name="description"
            placeholder="Description..."
            class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none">{{ $post->description }}</textarea> 

            @foreach ($posts as $post)
            <div class="bg-grey-lighter pt-15">
                <label class="text-center mt-10 bg-gray-500 py-3 px-8 rounded-3xl text-white hover:underline font-bold text-xl uppercase">
                    <span class="">
                        Select a image
                    </span>
                    <input 
                        type="file"
                        name="image"
                        class="hidden"
                        {{ asset('images/' . $post->file) }}>
                </label>
            </div>
            @endforeach
        <button    
            type="submit"
            class="text-center mt-10 bg-orange-500 py-3 px-8 rounded-3xl text-white hover:underline font-bold text-xl uppercase">
            Submit Post
        </button>
    </form>
</div>

@endsection