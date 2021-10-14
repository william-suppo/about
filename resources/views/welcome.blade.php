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
        <div class="min-h-screen bg-repeat" style="background-image: url('/images/pattern.png')">
            <div class="flex content-center flex-wrap min-h-screen">
                <div class="w-2/3 md:w-1/3 mx-auto text-primary">
                    <h1 class="text-8xl text-center font-semibold">Hi ! I'm <span class="text-secondary" style="text-shadow: 5px 5px #333333;">William</span></h1>
                    <img class="mt-12 rounded-full mx-auto shadow-lg" src="/images/avatar.jpg" alt="" width="300px">
                    <div class="mt-12 text-2xl text-justify">
                        Salut, je suis Architecte logiciel.<br/>
                        Père de 3 ptits monstres !<br/>
                        J'aime la tech et partager avec la communauté.<br/>
                        C'est pourquoi j'ai créé <a class="font-bold text-secondary hover:underline" href="https://neoshift.tv">Neoshift TV</a>.<br/>
                        J'y diffuse mes découvertes et mes développements sur mes projet persos.<br/>
                        Essentiellement en PHP, souvent autour du framework Laravel.<br/>
                        Je vous invite à me suivre sur les réseaux ! Ciao !
                    </div>

                    <div class="mt-12 mb-4 md:mb-0 grid grid-cols-3 justify-items-center text-3xl">
                        <a href="https://twitter.com/williamsuppo" class="hover:bg-secondary hover:text-primary rounded-full h-16 w-16 flex items-center justify-center bg-primary text-secondary">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://github.com/william-suppo" class="hover:bg-secondary hover:text-primary rounded-full h-16 w-16 flex items-center justify-center bg-primary text-secondary">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/william-suppo-188a01111/" class="hover:bg-secondary hover:text-primary rounded-full h-16 w-16 flex items-center justify-center bg-primary text-secondary">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>
