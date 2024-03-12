<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{Vite::asset('resources/img/treni.webp')}}">
    <title>{{env('APP_NAME', 'Trains')}} | @yield('title')</title>
    {{--Assets Frontend--}}
    @vite('resources/js/app.js')
    {{--Cdns--}}
    @yield('cdns')
</head>
<body>

    {{--Header--}}
    @include('includes.header')

     {{--Main Content--}}
     @yield('main-content')
     
    {{--Footer--}}
    <footer></footer> 
</body>
 {{-- Scripts --}}
 @yield('cdns')
</html>