<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Solar System - {{ $planet->name }}</title>
        
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body>
        <div class="position-relative min-vw-100 min-vh-100">
            <div class="menu d-flex bg-light min-vh-100 flex-column">
                <a class="menu-toggle bg-light"><span>Show Nav</span></a>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('planet/mercury') }}" title="Mercury">
                            <span class="planet"></span>
                            <span class="d-inline-block text-center">Mercury</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('planet/venus') }}" title="Venus">
                            <span class="planet"></span>
                            <span class="d-inline-block text-center">Venus</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('planet/earth') }}" title="Earth">
                            <span class="planet"></span>
                            <span class="d-inline-block text-center">Earth</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('planet/mars') }}" title="Mars">
                            <span class="planet"></span>
                            <span class="d-inline-block text-center">Mars</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('planet/jupiter') }}" title="Jupiter">
                            <span class="planet"></span>
                            <span class="d-inline-block text-center">Jupiter</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('planet/saturn') }}" title="Saturn">
                            <span class="planet"></span>
                            <span class="d-inline-block text-center">Saturn</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('planet/uranus') }}" title="Uranus">
                            <span class="planet"></span>
                            <span class="d-inline-block text-center">Uranus</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('planet/neptune') }}" title="Neptune">
                            <span class="planet"></span>
                            <span class="d-inline-block text-center">Neptune</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="canvas">
                <a class="off-canvas-btn btn btn-primary" href="#" title="Menu">Menu</a>
                <div class="d-flex flex-wrap jumbotron jumbotron-fluid position-relative bg-dark pb-0 extra-padding">
                    <figure>
                        <img src="/images/PIA23791-Venus-NewlyProcessedView-20200608.jpg" class="img-fluid w-100 h-100" style="object-fit: cover;" alt="...">
                    </figure>
                    <div class="jumbotron-banner-gradient"></div>

                    <div class="container d-flex flex-wrap align-items-center" style="z-index: 1;">
                        <div>
                        <h1 class="display-1 text-white text-uppercase font-weight-bolder mb-5">{{ $planet->name }}</h1>
                        <p class="lead text-white font-weight-bold">{{ $planet->description }}</p>
                        </div>
                    </div>
                    <div class="container d-flex flex-wrap align-items-end" style="z-index: 1;">
                        <div class="planetary-stat">
                            <span>Day</span>
                            <p>{{ number_format($planet->day_length) }} Hours</p>
                        </div>
                        <div class="planetary-stat">
                            <span>Diameter</span>
                            <p>{{ number_format($planet->diameter, 1) }} miles</p>
                        </div>
                        <div class="planetary-stat">
                            <span>Moons</span>
                            <p>{{ count($planet->moons) }}</p>
                        </div>
                        <div class="planetary-stat">
                            <span>Planet Type</span>
                            <p>{{ $planet->planet_type }}</p>
                        </div>
                    </div>
                </div>

                <section>
                    <ul class="system">
                        <li class="sun"><p>Sun</p></li>
                        @foreach($allplanets as $otherplanet)
                        <li class="{{ strtolower($otherplanet->name) }}"><p>{{ $otherplanet->distance }} <span>million miles</span></p><div></div><p>{{ $otherplanet->name }}<span>{{ count($otherplanet->moons) }} moon{{ count($otherplanet->moons) > 1 || count($otherplanet->moons) === 0 ? 's' : '' }}</span></p></li>
                        @endforeach
                    </ul>
                </section>

                <section class="overview">
                    <figure>
                        <img src="/images/venus-clouds.jpg" class="img-fluid w-100 h-100" style="object-fit: cover;" alt="...">
                    </figure>
                    <div class="banner-gradient"></div>
                    <span>01</span>
                    <div class="container position-relative" style="z-index: 1;">
                        <hr />
                        <h2>Overview</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Orci nulla pellentesque dignissim enim sit amet venenatis urna cursus. Orci sagittis eu volutpat odio facilisis mauris sit. Velit sed ullamcorper morbi tincidunt ornare massa eget egestas purus. Sit amet mattis vulputate enim nulla aliquet porttitor lacus. Habitant morbi tristique senectus et netus et. Auctor eu augue ut lectus arcu bibendum at varius vel. Orci dapibus ultrices in iaculis nunc sed augue lacus viverra. Et malesuada fames ac turpis. Faucibus et molestie ac feugiat sed lectus. Ut morbi tincidunt augue interdum velit euismod in. Metus vulputate eu scelerisque felis imperdiet. Vivamus at augue eget arcu. Accumsan lacus vel facilisis volutpat est velit egestas. Massa tincidunt dui ut ornare. Amet luctus venenatis lectus magna fringilla urna porttitor rhoncus.</p>
                    </div>
                </section>
            </div>
        </div>
    </body>

    <script src="{{ asset('js/app.js') }}" defer></script>
</html>