<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Demo - {{ $title or 'Boom' }}</title>
    </head>
    <body>
        
        @include('layouts/partials/nav')



@yield('content')

<footer>

@yield('footer')

</footer>
    </body>
</html>