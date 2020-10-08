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
            <div class="container-fluid">
                
                <div class="d-flex">
                    <h1 class="d-flex align-items-center m-0 w-25"><a href="/" title="The Planets">The Planets</a></h1>
                    <ul class="nav justify-content-center py-4 flex-grow-1">
                        <li class="nav-item"><a class="nav-link px-4 mx-1" href="planet/mercury" title="Mercury">Mercury</a></li>
                        <li class="nav-item"><a class="nav-link px-4 mx-1" href="planet/venus" title="Venus">Venus</a></li>
                        <li class="nav-item"><a class="nav-link px-4 mx-1" href="planet/earth" title="Earth">Earth</a></li>
                        <li class="nav-item"><a class="nav-link px-4 mx-1" href="planet/mars" title="Mars">Mars</a></li>
                        <li class="nav-item"><a class="nav-link px-4 mx-1" href="planet/jupiter" title="Jupiter">Jupiter</a></li>
                        <li class="nav-item"><a class="nav-link px-4 mx-1" href="planet/saturn" title="Saturn">Saturn</a></li>
                        <li class="nav-item"><a class="nav-link px-4 mx-1" href="planet/uranus" title="Uranus">Uranus</a></li>
                        <li class="nav-item"><a class="nav-link px-4 mx-1" href="planet/neptune" title="Neptune">Neptune</a></li>
                    </ul>
                    <div class="d-flex w-25"></div>
                </div>
       
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
    </body>
</html>