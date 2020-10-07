<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Solar System</title>
        
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body>
        <div class="position-relative min-vw-100 min-vh-100 bg-dark">
            <figure class="position-absolute mb-0 background-img-wrapper">
                <img src="/images/istockphoto-1005439278-1024x1024.jpg" />
            </figure>

            <div class="container-fluid">    
                <h1 class="mx-0 py-3 w-100 text-center"><a class="text-white" href="/" title="The Planets">The Planets</a></h1>

                <div class="container">
                    <div class="d-flex flex-wrap flex-row">
                        @foreach($planets as $planet)
                            <div class="card planet-card">
                                <img src="/images/istockphoto-1005439278-1024x1024.jpg" class="card-img-top align-self-start" alt="{{ $planet->name }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $planet->name }}</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                                <ul class="list-group list-group-flush w-100">
                                    <li class="list-group-item"><span>Diameter:</span><span class="float-right">{{ $planet->diameter }} <span class="text-muted">miles</span></span></li>
                                    <li class="list-group-item">Orbital Distance: <span class="float-right">{{ $planet->distance }} <span class="text-muted">million miles</span></span></li>
                                    <li class="list-group-item">Orbital Length: <span class="float-right">{{ $planet->orbit_length }} <span class="text-muted">days</span></span></li>
                                </ul>
                                <div class="card-body align-self-end">
                                    <a href="{{ url('planet/' . strtolower($planet->name)) }}" class="btn btn-primary">Visit {{ $planet->name }}</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                
            </div>
        </div>
    </body>
</html>