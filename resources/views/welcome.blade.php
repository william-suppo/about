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
    <body style="font-family: 'PT Sans Narrow', sans-serif;" class="antialiased">
        <img class="mt-12 mb-4 rounded-full h-40 w-40 mx-auto shadow-lg" src="/images/avatar.jpg" alt="logo">
        <div class="my-8 flex justify-center text-xl">
            <a href="https://twitter.com/williamsuppo" class="mr-8 text-primary hover:text-secondary">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://github.com/william-suppo" class="mr-8 text-primary hover:text-secondary">
                <i class="fab fa-github"></i>
            </a>
            <a href="https://www.linkedin.com/in/william-suppo-188a01111/" class="text-primary hover:text-secondary">
                <i class="fab fa-linkedin-in"></i>
            </a>
        </div>
        <div class="my-12 mx-auto md:w-1/2 px-4 md:px-0 flex flex-col justify-center md:px-0 pb-4 md:pb-0">
            <h3 class="text-3xl font-bold mb-4">Salut voyageur 👋</h3>
            <p class="mb-4 text-justify text-xl">
                Je m'appelle William, je suis Lead développeur, expert PHP et Laravel.<br>
                Je suis aussi l'heureux papa de 3 ptits monstres !<br>
            </p>
            <p class="mb-4 text-justify text-xl">
                J'aime la tech et partager avec la communauté c'est pourquoi, avec <a class="text-primary hover:text-secondary underline" href="https://twitter.com/DeGraciaMathieu">Mathieu</a>, nous avons fondé <a class="text-primary hover:text-secondary underline" href="https://laravel-france.com/">Laravel France</a>, notre blog communautaire francophone autour du framework Laravel.
            </p>
            <p class="mb-4 text-justify text-xl">Je vous invite à me suivre sur <a class="text-primary hover:text-secondary underline" href="https://twitter.com/williamsuppo">Twitter</a> pour rester à l'affût de mes dernières news !</p>
        </div>
        <div class="mx-auto md:w-1/2 px-4 md:px-0">
            <h3 class="text-3xl font-bold mb-4">Mes derniers articles 📰</h3>
            @foreach($posts as $post)
                <article class="flex flex-col md:flex-row mb-4 pb-4 border-b border-gray-200">
                    <div class="mb-4 md:mb-0 md:mr-4">
                        <img class="object-cover h-32 w-64 rounded mb-4" src="{{ $post->image }}" alt="thumbnail"/>
                        <div class="text-gray-400 text-sm">
                            <div>{{ $post->publishedAt->translatedFormat('j F Y') }}</div>
                        </div>
                    </div>
                    <div class="flex flex-col justify-between w-2/3">
                        <a href="{{ $post->link }}" class="text-primary hover:text-secondary text-2xl font-bold mb-4">
                            {{ $post->title }}
                        </a>
                        <div class="mb-4">{{ $post->description }}</div>
                        <a href="{{ $post->link }}" class="text-primary hover:text-secondary">En savoir plus</a>
                    </div>
                </article>
            @endforeach
        </div>
        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>
