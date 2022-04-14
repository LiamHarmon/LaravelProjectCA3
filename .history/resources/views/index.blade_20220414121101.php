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
  
    <div class="text-center bg-orange-500 p-15 text-white bg-repeat-x bg-center" style="background-image: url(images/patterBg.jpg)">
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
<!-- Carousel wrapper -->
<div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">
    <!-- Indicators -->
    <div class="carousel-indicators">
      <button
        type="button"
        data-mdb-target="#carouselBasicExample"
        data-mdb-slide-to="0"
        class="active"
        aria-current="true"
        aria-label="Slide 1"
      ></button>
      <button
        type="button"
        data-mdb-target="#carouselBasicExample"
        data-mdb-slide-to="1"
        aria-label="Slide 2"
      ></button>
      <button
        type="button"
        data-mdb-target="#carouselBasicExample"
        data-mdb-slide-to="2"
        aria-label="Slide 3"
      ></button>
    </div>
  
    <!-- Inner -->
    <div class="carousel-inner">
      <!-- Single item -->
      <div class="carousel-item active">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(15).webp" class="d-block w-100" alt="Sunset Over the City"/>
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
  
      <!-- Single item -->
      <div class="carousel-item">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(22).webp" class="d-block w-100" alt="Canyon at Nigh"/>
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
  
      <!-- Single item -->
      <div class="carousel-item">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(23).webp" class="d-block w-100" alt="Cliff Above a Stormy Sea"/>
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    <!-- Inner -->
  
    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- Carousel wrapper -->
            </div>
        </div>
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="">
        </div>
    </div>
@endsection