<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'INVFEST 2.0') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css">
        #particle-canvas {
          width: 100%;
          height: 100%;
        }
        #hero{
            background-image: url('/img/bg.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center; 
            background-size:cover; 
            -webkit-background-size: cover; 
            -moz-background-size: cover; 
            -o-background-size: cover;
        }
    </style>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.1/css/bulma.min.css" integrity="sha256-CDVQJfU+jJGU/oyDzvnzuGXbv0rz+SyBsPQwyn7x/jQ=" crossorigin="anonymous" /> --}}
    {{-- <link rel="stylesheet" href="https://unpkg.com/buefy/lib/buefy.min.css"> --}}
    {{-- <link href="{{ asset('css/buefy.min.css') }}" rel="stylesheet"> --}}

    <!-- Font -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">
    {{-- <style type="text/css">
            .is-bold{
                background: url(https://desforets.github.io/md5/img/toile-nogradient.png), url(../img/toile-upwards.png), linear-gradient(141deg, #dfd8d8 0%, whitesmoke 71%, white 100%);
                background-size: 36vw, 36vw, cover;
                background-position: 87.2% 1.75%, left bottom;
                background-repeat: no-repeat, no-repeat;
            }
    </style> --}}
</head>
<body class="is-bold">

    <div id="app">
        @yield('init')
    </div>
      
    <!-- Scripts -->
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.4.2/vue.min.js"></script> --}}
    <script src="{{ asset('js/vue.js') }}"></script>
    {{-- <script src="https://unpkg.com/buefy"></script> --}}
    {{-- <script src="{{ asset('js/buefy.min.js') }}"></script> --}}
    <script src="{{ asset('js/app.js') }}"></script>
    {{-- <script src="{{ asset('js/particle.js') }}"></script> --}}

</body>
</html>
