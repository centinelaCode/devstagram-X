@extends('layouts.app')

@section('titulo')
   Registrate en Devstagram
@endsection


@section('contenido')
   <div class="md:flex md:justify-center md:gap-10 md:items-center">
      <div class="md:w-6/12">
         <img src="{{ asset('img/registrar.jpg') }}" alt="Imagen registro de usuarios">
      </div>

      <div class="md:w-5/12 bg-white p-6 rounded-lg shadow-xl">
         <form action="{{ route('register') }}" method="POST" novalidate>
            @csrf
            <div class="mb-5">
               <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Nombre</label>
               <input
                  id="name"
                  name="name"
                  type="text"
                  placeholder="Tu Nombre"
                  class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
                  value={{ old('name') }}
               >
               @error('name')
                  <p class="text-red-600 font-bold text-sm my-3">
                     {{-- El nombre es Obligatorio --}}
                     {{ $message }}
                  </p>
               @enderror
            </div>

            <div class="mb-5">
               <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">Username</label>
               <input
                  id="username"
                  name="username"
                  type="text"
                  placeholder="Tu Nombre de Usuario"
                  class="border p-3 w-full rounded-lg @error('username') border-red-500 @enderror"
                  value={{ old('username') }}
               >
               @error('username')
                  <p class="text-red-600 font-bold text-sm my-3">
                     {{ $message }}
                  </p>
               @enderror
            </div>

            <div class="mb-5">
               <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Email</label>
               <input
                  id="email"
                  name="email"
                  type="email"
                  placeholder="Tu Email de Registro"
                  class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror"
                  value={{ old('email') }}
               >
               @error('email')
                  <p class="text-red-600 font-bold text-sm my-3">
                     {{ $message }}
                  </p>
               @enderror
            </div>

            <div class="mb-5">
               <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Password</label>
               <input
                  id="password"
                  name="password"
                  type="password"
                  placeholder="Tu Password"
                  class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror"
               >
               @error('password')
                  <p class="text-red-600 font-bold text-sm my-3">
                     {{ $message }}
                  </p>
               @enderror
            </div>

            <div class="mb-5">
               <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">Repetir Password</label>
               <input
                  id="password_confirmation"
                  name="password_confirmation"
                  type="password"
                  placeholder="Repite Password"
                  class="border p-3 w-full rounded-lg"
               >
            </div>

            <input
               type="submit"
               value="Crear Cuenta"
               class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer font-bold w-full p-3 text-white rounded-lg"
            >
         </form>
      </div>
   </div>

@endsection()
