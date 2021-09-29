<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="{{asset('mystyle/mystyle.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <script defer src="{{asset('js/bootstrap.min.js')}}"></script>
    </head>
    <body class="antialiased">

        <div class="container mt-5">
            <div class="d-flex justify-content-center m-5">
                <h1>Prelim Project</h1>
            </div>

            <div class="d-flex justify-content-center p-3">
                <h4 class="p-2">Contact |</h2>
                <a class="p-2 h5" href="{{url('/')}}">Home</a>
                <a class="p-2 h5"href="{{url('/contact')}}">About</a>
            </div>
        </div>

    </body>
</html>
