@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
            <div class="flex text-gray-100 pt-10">
                <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">

                    <a 
                        href="/blog"
                        class=" text-center bg-orange-500 py-3 px-8 rounded-3xl text-white-600 hover:underline font-bold text-xl uppercase">
                        Read More
                    </a>
                </div>
            </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-blie-200">
        <div>
            <img src="http://cdn.onlinewebfonts.com/svg/img_555444.png" width="700" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block bg-clip-border p-6 border-4  border-dashed">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Struggling to be a better Gamer?
            </h2>
            
            <p class=" py-8 text-gray-500 text-s    ">
                Check out all the latests tips and tricks from gamers around the world to help you improve your game.
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
                Gamers from around the world have shared their own unique tips and tricks for all sorts of games. Want to share yours?
            </p>

            <a 
                href="/blog"
                class="text-center bg-orange-500 py-3 px-8 rounded-3xl text-white hover:underline font-bold text-xl uppercase">
                Find Out More
            </a>
        </div>
    </div>

    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l"> 
            Want to be an expert in...
        </h2>

        <span class="font-extrabold block text-4xl py-1">
            First Person Shooters
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Sim Racing
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Strategic Plays
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Competitive Gaming
        </span>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>

        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
            Recent posts from gamers all across the world will appear here!
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    PHP
                </span>

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
                <a 
                    href=""
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find Out More
                </a>
            </div>
        </div>
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="">
        </div>
    </div>
@endsection