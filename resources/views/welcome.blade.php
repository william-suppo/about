<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow:wght@400;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <style>
            body {
                font-family: 'PT Sans Narrow', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="min-h-screen flex flex-col">
            <div class="flex flex-col md:flex-row content-center justify-center flex-grow">
                <div class="mb-12 md:mb-0 md:mr-12 pt-4 md:pt-0 flex flex-col justify-center">
                    <img class="rounded-full mx-auto shadow-lg" src="/images/avatar.jpg" alt="" width="300px">
                </div>
                <div class="text-2xl flex flex-col justify-center px-4 md:px-0 pb-4 md:pb-0">
                    {!! $content !!}
                </div>
            </div>
            <div class="py-8 flex justify-center text-3xl">
                <a href="https://twitter.com/williamsuppo" class="mr-12 text-gray-300 hover:text-gray-500">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://github.com/william-suppo" class="mr-12 text-gray-300 hover:text-gray-500">
                    <i class="fab fa-github"></i>
                </a>
                <a href="https://www.linkedin.com/in/william-suppo-188a01111/" class="text-gray-300 hover:text-gray-500">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </div>
        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>
