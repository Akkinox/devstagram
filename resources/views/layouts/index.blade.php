<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>Devstragram - @yield('titulo')</title>
        @vite('resources/css/app.css')
    </head>
    <body class="bg-gray-100">
       <header class="p-5 border-b bg-white-100 shadow">
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-3xl font-black" >Devstragram</h1>
                <nav class="flex gap-2 items-center">
                    <a class="font-bold uppercase text-gray-600 text-sm" href="#">Login</a>
                    <a class="font-bold uppercase text-gray-600 text-sm" href="/crear-cuenta">Registrarse</a>
                </nav>
            </div>
       </header>

       <main class="container mx-auto mt-10">
            <h2 class="font-black text-center text-3xl">@yield('titulo')</h2>
            <div class="mt-5">
                @yield('contenido')
            </div>
        </main>

       <footer class="mt-10 text-center p-5 text-gray-600 uppercase font-bold">
            Devstragram todos los derechos reservados {{now()->year}}
       </footer>
    </body>
</html>