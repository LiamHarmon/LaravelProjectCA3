@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-black-500">
        <h1 class="text-6xl">
            Gaming Posts
        </h1>
    </div>
</div>

@if (session()->has('message'))
    <div class="w-4/5 m-auto mt-10 pl-2">
        <p class="w-2/6 mb-4 text-white text-center bg-blue-500 rounded-3xl py-3">
            {{ session()->get('message') }}
        </p>
    </div>
@endif

@if (Auth::check())
    <div class="pt-15 w-4/5 m-auto">
        <a 
            href="/blog/create"
            class="text-center bg-green-500 py-3 px-8 rounded-3xl text-white hover:underline font-bold text-xl uppercase">
            Create post
        </a>
    </div>
    <div class="flex-none w-20 h-14 ">
    <form class="text-center bg-green-500 py-3 px-8 rounded-3xl text-white hover:underline font-bold text-xl uppercase" method="post" action="{{ url('/search_post') }}">
        @csrf
         <input class="form-control me-2" type="search" placeholder="Search" name="search" aria-label="Search">
         <button class="text-center bg-green-500 py-3 px-8 rounded-3xl text-white hover:underline font-bold text-xl uppercase"type="submit" name="submit">Search</button>
     </form>
    </div>
@endif
{{-- <form class="flex-none w-14 " method="post" action="{{ url('/search_post') }}">
   @csrf
    <input class="form-control me-2" type="search" placeholder="Search" name="search" aria-label="Search">
    <button class="btn btn-dark"type="submit" name="submit">Search</button>
</form> --}}
@foreach ($posts as $post)
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200 ">
        <div>
            <img src="{{ asset('images/' . $post->image_path) }}" width="350px" alt="">
        </div>
        <div>
            <h2 class="text-gray-700 font-bold text-5xl pb-4">
                {{ $post->title }}
            </h2>

            <span class="text-gray-500">
                By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
            </span>

            <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                {{ $post->description }}
            </p>

            <a href="/blog/{{ $post->slug }}" class="text-center bg-orange-500 py-3 px-8 rounded-3xl text-white hover:underline font-bold text-xl uppercase">
                Keep Reading
            </a>

            @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                <span class="float-right">
                    <a 
                        href="/blog/{{ $post->slug }}/edit"
                        class="text-center text-blue-500 hover:underline font-bold text-xl uppercase">
                        Edit
                    </a>
                </span>

                <span class="float-right">
                     <form 
                        action="/blog/{{ $post->slug }}"
                        method="POST">
                        @csrf
                        @method('delete')

                        <button
                            class="text-center text-red-500 mr-5 hover:underline font-bold text-xl uppercase"
                            type="submit">
                            Delete
                        </button>

                    </form>
                </span>
            @endif
        </div>
    </div>    
@endforeach

@endsection