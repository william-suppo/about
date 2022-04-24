<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <style>
            body {
                font-family: 'Roboto Condensed', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <header style="clip-path: ellipse(174% 100% at 53.72% 0%);" class="bg-electric-violet-700 py-14">
            <div class="flex flex-col md:flex-row px-4 md:px-0 items-center justify-between mx-auto md:w-1/2">
                <div class="flex-grow">
                    <img class="h-40 mx-auto" src="/images/logo.png" alt="logo">
                    <div class="flex justify-center text-xl">
                        <a href="https://twitter.com/williamsuppo" class="mr-8 text-aquamarine hover:text-aquamarine-800">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://github.com/william-suppo" class="mr-8 text-aquamarine hover:text-aquamarine-800">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/william-suppo-188a01111/" class="text-aquamarine hover:text-aquamarine-800">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
                <div class="mt-14 md:mt-0 md:px-0 md:px-4 md:w-2/3 flex flex-col justify-center text-white">
                    <h3 class="text-4xl font-bold mb-8">Salut voyageur 👋</h3>
                    <p class="mb-4 text-justify text-xl">
                        Je m'appelle William, je suis Lead développeur, expert PHP et Laravel.<br>
                        Je suis aussi l'heureux papa de 3 ptits monstres !<br>
                    </p>
                    <p class="mb-4 text-justify text-xl">
                        J'aime la tech et partager avec la communauté c'est pourquoi, avec <a class="text-aquamarine hover:text-aquamarine-800 underline" href="https://twitter.com/DeGraciaMathieu">Mathieu</a>, nous avons fondé <a class="text-aquamarine hover:text-aquamarine-800 underline" href="https://laravel-france.com/">Laravel France</a>, notre blog communautaire francophone autour du framework Laravel.
                    </p>
                    <p class="mb-4 text-justify text-xl">Je vous invite à me suivre sur <a class="text-aquamarine hover:text-aquamarine-800 underline" href="https://twitter.com/williamsuppo">Twitter</a> pour rester à l'affût de mes dernières news !</p>
                </div>
            </div>
        </header>
        <div class="mt-14 mx-auto md:w-1/2 px-4 md:px-0">
            <h3 class="text-4xl font-bold mb-8">Mes derniers articles 📰</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
                @foreach($posts as $post)
                    <a href="{{ $post->link }}" class="flex flex-col justify-between rounded-lg shadow-lg overflow-hidden">
                        <div class="flex-shrink-0 bg-gray-100">
                            <img class="object-cover w-full h-64" src="{{ $post->image }}" alt="">
                        </div>
                        <div class="flex flex-col justify-between flex-1 p-4 bg-white">
                            <div>
                                <p class="text-2xl font-semibold text-electric-violet-700">
                                    {{ $post->title }}
                                </p>
                                <p class="mt-4 text-base text-gray-500">
                                    {{ $post->description }}
                                </p>
                            </div>
                            <div class="text-gray-400 mt-4">
                                {{ $post->publishedAt->translatedFormat('j F Y') }}
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>
