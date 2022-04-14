@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
            <div class="flex text-gray-100 pt-10">
                <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">

                    <a 
                        href="/blog"
                        class=" 	text-decoration-line: none, text-center bg-orange-500 py-3 px-8 rounded-3xl text-white-600 hover:underline font-bold text-xl uppercase">
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
            </div>
        </div>
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="">
        </div>
    </div>
@endsection