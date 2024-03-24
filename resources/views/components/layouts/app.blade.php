<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'LearnCode0261' }}</title>
        <link rel="stylesheet" href="{{asset('./css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('./css/aos.css')}}">
        <link rel="stylesheet" href="{{asset('./css/styles.css')}}">

    </head>
    <body>
        {{ $slot }}


        <script src="{{asset('./js/jquery-3.4.1.min.js')}}"></script>
        <script src="{{asset('./js/bootstrap.min.js')}}"></script>
        <script src="{{asset('./js/aos.js')}}"></script>
        <script src="{{asset('./js/app.js')}}"></script>
    </body>
</html>
