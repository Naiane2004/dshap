<!doctype html>

    <html lang="pt-br">

    <head>

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href = "{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" >

        <title> DShape - Site para avaliação física </title>

      </head>

    <body>

        @yield ('container')

        <!-- Bootstrap Bundle with Popper -->
        <script src= {{ asset ('/js/popper.min.js') }} >
        <script src= {{ asset ('/js/bootstrap.min.js') }} >

    </body>

</html>