<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <script defer src="{{asset('js/bootstrap.min.js')}}"></script>
    </head>
    <body class="">
        <div class="container mt-5">
            <div class="d-flex justify-content-center m-5">
                <h1>Prelim Project</h1>
            </div>

            <div class="d-flex justify-content-center p-3">
                <h4 class="p-2">Home |</h2>
                <a class="p-2 h5" href="{{url('/about')}}">About</a>
                <a class="p-2 h5"href="{{url('/contact')}}">Contact</a>
            </div>
        </div>
    </body>

</html>
