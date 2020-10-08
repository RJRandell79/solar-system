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
                <div class="jumbotron jumbotron-fluid mb-4 position-relative bg-dark extra-padding" style="padding-top: 27.5rem;">
                    <figure class="position-absolute w-100 mb-0" style="top: 0; right: 0; bottom: 0; left: 0;">
                        <img src="/images/istockphoto-1005439278-1024x1024.jpg" class="img-fluid w-100 h-100" style="object-fit: cover;" alt="...">
                    </figure>
                    <div class="position-absolute w-100 mb-0 development-banner-gradient" style="top: 0; right: 0; bottom: 0; left: 0;"></div>

                    <div class="container position-relative" style="z-index: 1;">
                        <h1 class="display-4 text-white">{{ $planet->name }}</h1>
                        <hr class="my-4 bg-white" />
                        <p class="lead text-white">A range of 2, 3, 4 &amp; 5 bedroom homes across Cheshire, Cumbria, Greater Manchester, Lancashire and Merseyside, offering incentives such as Help to Buy, Part Exchange and Movemaker; there’s never been a better time to buy a Wainhome.</p>
                    </div>
                </div>

                <div class="container-fluid extra-padding">
                    <div class="container">
        
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">Diameter <span class="text-muted">(miles)</span></th>
                                    <th scope="col">Orbital Distance <span class="text-muted">(million miles)</span></th>
                                    <th scope="col">Orbital Length <span class="text-muted">(days)</span></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $planet->diameter }}</td>
                                    <td>{{ $planet->distance }}</td>
                                    <td>{{ $planet->orbit_length }}</td>
                                </tr>
                            </tbody>
                        </table>

                        @if( $planet->moons()->exists() )
                        <h3>Satellites</h3>
                        <table class="table table-sm table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Diameter <span class="text-muted">(miles)</span></th>
                                    <th scope="col">Orbital Distance <span class="text-muted">(miles)</span></th>
                                    <th scope="col">Orbital Length <span class="text-muted">(days)</span></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($planet->moons as $moon)
                                <tr>
                                    <td><a href="#" title="{{ $moon->name }}">{{ $moon->name }}</a></td>
                                    <td>{{ $moon->diameter }}</td>
                                    <td>{{ $moon->distance }}</td>
                                    <td>{{ $moon->orbit_length }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </body>

    <script src="{{ asset('js/app.js') }}" defer></script>
</html>