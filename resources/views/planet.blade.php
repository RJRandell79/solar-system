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
                        <p class="lead text-white font-weight-bold">{{ $planet->overview->description }}</p>
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
                    <div class="container position-relative" style="z-index: 1;">
                        <hr />
                        <h2>Overview</h2>
                        <p>{{ $planet->overview->overview }}</p>
                    </div>
                </section>

                <section class="stats">
                    <div class="container d-flex flex-wrap align-items-end" style="z-index: 1;">
                        <div class="planetary-stat">
                            <span>One way light time to Sun <span>(mins)</span></span>
                            <p>{{ number_format(($planet->distance * 1000000) / (186282 * 60), 2) }}</p>
                        </div>
                        <div class="planetary-stat">
                            <span>Distance to Sun <span>(million miles)</span></span>
                            <p>{{ $planet->distance }}</p>
                        </div>
                        <div class="planetary-stat">
                            <span>Length of year <span>(Earth days)</span></span>
                            <p>{{ number_format($planet->orbit_length) }}</p>
                        </div>
                    </div>
                </section>

                <section class="features">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 offset-md-4">
                                <hr />
                                <h2>Features</h2>
                                <p>{{ $planet->overview->description }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="background">
                        <figure>
                            <img src="/images/venus-clouds.jpg" class="img-fluid w-100 h-100" style="object-fit: cover;" alt="...">
                        </figure>
                        <div class="banner-gradient"></div>
                        <div class="container position-relative py-5" style="z-index: 1;">
                            <div class="row">
                                <div class="col-md-5 offset-md-7">
                                    <h3>Pearls</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    <ul>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </body>

    <script src="{{ asset('js/app.js') }}" defer></script>
</html>