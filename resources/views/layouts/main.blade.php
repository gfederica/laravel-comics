<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DC Comics</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        @include('partials.header')    

        <main>
            <div class="jumbotron"></div>
            {{-- creo un segnaposto per la sezione fumetti, che salvo in un file a parte --}}
            @yield('main-content')
        </main>

        @include('partials.footer')
    </body>
</html>