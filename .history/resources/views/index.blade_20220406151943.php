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
  
    <div class="text-center p-15 bg-black text-white bg-repeat-x " style="background-image: url(images/mojangLogo.png)">
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

                <h3 class="text-xl font-bold py-10">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas necessitatibus dolorum error culpa laboriosam. Enim voluptas earum repudiandae consequuntur ad? Expedita labore aspernatur facilis quasi ex? Nemo hic placeat et?
                </h3>

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