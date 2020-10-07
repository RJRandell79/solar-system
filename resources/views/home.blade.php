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
            <h1 class="py-3">Solar</h1>
            <ul>
                @foreach($planets as $planet)
                <li>
                    {{ $planet->name }}
                    <ul>
                        @foreach($planet->features as $feature)
                        <li>{{ $feature->name }}
                        @endforeach
                    </ul>
                    <ul>
                        @foreach($planet->moons as $moon)
                        <li>{{ $moon->name }}
                            <ul>
                                @foreach($moon->features as $feature)
                                <li>{{ $feature->name }}
                                @endforeach
                            </ul>
                        </li>
                        @endforeach
                    </ul>
                </li>
                @endforeach
            </ul>
        </div>
    </body>
</html>