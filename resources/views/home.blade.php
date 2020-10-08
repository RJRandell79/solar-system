<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Solar System</title>
        
        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body>
        <div class="position-relative min-vw-100 min-vh-100 bg-dark">
            <figure class="position-absolute mb-0 background-img-wrapper">
               <img src="/images/istockphoto-1189556356-1024x1024.jpg" />
            </figure>

            <div class="d-flex min-vh-100 min-vw-100 align-items-center">   
                <div class="min-vw-100"> 
                    <h1 class="mt-0 py-3 w-100 text-center"><a class="text-white" href="/" title="The Planets">The Planets</a></h1>

                    <div class="container overflow-hidden">
                        <div class="planets-slider">
                            @foreach($planets as $planet)
                            <div>
                                <a class="text-decoration-none" href="{{ url('planet/' . strtolower($planet->name)) }}" title="{{ $planet->name }}">
                                    <span class="planet">&nbsp;</span>
                                    <h5 class="card-title text-light text-center">{{ $planet->name }}</h5>
                                    <p class="text-light text-center m-0">Diameter: {{ $planet->diameter }} <span>miles</span></p>
                                    <p class="text-light text-center m-0">Distance: {{ $planet->distance }} <span>million miles</span></p>
                                    <p class="text-light text-center m-0">Orbital Length: {{ $planet->orbit_length }} <span>days</span></p>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </body>

    <script src="{{ asset('js/app.js') }}" defer></script>
</html>