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
        <div class="container">
            <h1 class="py-3">Solar System</h1>

            <table class="table table-sm table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Diameter <span class="text-muted">(miles)</span></th>
                        <th scope="col">Orbital Distance <span class="text-muted">(million miles)</span></th>
                        <th scope="col">Orbital Length <span class="text-muted">(days)</span></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($planets as $planet)
                    <tr>
                        <th scope="row">{{ $planet->id }}</th>
                        <td><a href="#" title="{{ $planet->name }}">{{ $planet->name }}</a></td>
                        <td>{{ $planet->diameter }}</td>
                        <td>{{ $planet->distance }}</td>
                        <td>{{ $planet->orbit_length }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </body>
</html>