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
        <div class="container">
            <h1 class="py-3">{{ $planet->name }}</h1>

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
                        <th scope="col">Orbital Distance <span class="text-muted">(million miles)</span></th>
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
    </body>
</html>