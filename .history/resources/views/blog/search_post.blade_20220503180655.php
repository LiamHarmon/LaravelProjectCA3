@extends('layouts.app')

@section('content')

<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">
            Search Result
        </h1>
    </div>
</div>



@if (session()->has('message'))
    <div class="w-4/5 m-auto mt-10 pl-2">
        <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
            {{ session()->get('message') }}
        </p>
    </div>
@endif

@if (Auth::check())
<div class="flex items-baseline h-56 grid grid-cols-2 gap-4 content-evenly ">
    <div class="py-4 pt-30 m-auto">   
        <a 
            href="/blog/create"
            class="text-center bg-green-500 py-3 px-8 rounded-3xl text-white hover:underline font-bold text-xl uppercase">
            Create post
        </a>
    </div> 
   
    <div class="py-12">   <form class="flex flex-nowrap " method="post" action="{{ url('/search_post') }}">
        @csrf
         <input class="  w-80 px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm 
         type="search" placeholder="Search" name="search" aria-label="Search">
         <button class="text-center bg-green-500 py-3 px-8 rounded-3xl text-white hover:underline font-bold text-xl uppercase"type="submit" name="submit">Search</button>
     </form></div>
  </div>
@endif

@foreach ($posts as $post)
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="{{ asset('images/' . $post->image_path) }}" alt="">
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

            <a href="/blog/{{ $post->slug }}" class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                Keep Reading
            </a>

            @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                <span class="float-right">
                    <a 
                        href="/blog/{{ $post->slug }}/edit"
                        class="text-gray-700 italic hover:text-gray-900 pb-1 border-b-2">
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
                            class="text-red-500 pr-3"
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