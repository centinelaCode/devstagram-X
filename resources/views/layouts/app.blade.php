<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
      @vite('resources/css/app.css')
      <title>Devstagram - @yield('titulo')</title>
      <script src="{{ asset('js/app.js') }}"></script>

   </head>
   <body class="bg-gray-100">

      <header class="p-5 border-b bg-white shadow">
         <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-black"><a href="/">Devstagram</a></h1>

            {{-- Check si auth  FORMA 1--}}
            {{-- @if(auth()->user())
               <p>Autenticado</p>
            @else
               <p>No Autenticado</p>
            @endif --}}

            {{-- Check si auth FORMA 2 --}}
            {{-- @auth para si esta autenticado --}}
            @auth
               <nav class="flex gap-2 items-center">
                  <a href="#" class="font-bold text-gray-600 text-sm">
                     Hola, <span class="font-normal">
                              {{ auth()->user()->username }}
                           </span>
                  </a>
                  <a href="{{ route('register') }}" class="font-bold uppercase text-gray-600 text-sm">
                     Cerrar Sesión
                  </a>
               </nav>
            @endauth

            {{-- @guess para si NO esta autenticado --}}
            @guest
               <nav class="flex gap-2 items-center">
                  <a href="#" class="font-bold uppercase text-gray-600 text-sm">Login</a>
                  <a href="{{ route('register') }}" class="font-bold uppercase text-gray-600 text-sm">
                     Crear Cuenta
                  </a>
               </nav>
            @endguest

         </div>
      </header>

      <main class="container mx-auto mt-10">
         <h2 class="font-black text-center text-3xl mb-10">@yield('titulo')</h2>
         @yield('contenido')
      </main>


      <footer class="text-center p-5 mt-5 text-gray-500 font-bold">
         Devstagram - Todos los derecho reservados {{ now()->year }}
      </footer>

   </body>
</html>
