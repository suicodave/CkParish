<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name')}}</title>


    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="background">


    <div id="app">
        @auth
        @includeWhen( request()->route()->getPrefix() != '/auth','partials.navbar')
        @endauth


        @yield('content')

    </div>



    <script src="{{asset('js/app.js')}}"> </script>

    @yield('scripts')
    
</body>

</html>