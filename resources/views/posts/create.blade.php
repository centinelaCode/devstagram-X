@extends('layouts.app')


@section('titulo')
   Crear una nueve Publicación
@endsection


@section('contenido')
   <div class="md:flex md:items-center">
      <div class="md:w-1/2 px-10">
         <form action="/xxx" id="dropzone" class="dropzone border-dash border-2 w-full h-96 rounded flex flex-col justify-center items-center"
         ></form>
      </div>

      <div class="md:w-1/2 p-10 bg-white rounded-lg shadow-xl mt-10 md:mt-0">
         <form action="{{ route('register') }}" method="POST" novalidate>
            @csrf
            <div class="mb-5">
               <label for="titulo" class="mb-2 block uppercase text-gray-500 font-bold">Titulo</label>
               <input
                  id="titulo"
                  name="titulo"
                  type="text"
                  placeholder="Titulo de la Publicación"
                  class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
                  value={{ old('titulo') }}
               >
               @error('titulo')
                  <p class="text-red-600 font-bold text-sm my-3">
                     {{-- El nombre es Obligatorio --}}
                     {{ $message }}
                  </p>
               @enderror
            </div>

            <div class="mb-5">
               <label for="descripcion" class="mb-2 block uppercase text-gray-500 font-bold">Descripción</label>
               <textarea
                  id="descripcion"
                  name="descripcion"
                  rows="5"
                  placeholder="Descripción de la Publicación"
                  class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
               >{{ old('titulo') }}</textarea>
               @error('titulo')
                  <p class="text-red-600 font-bold text-sm my-3">
                     {{-- El nombre es Obligatorio --}}
                     {{ $message }}
                  </p>
               @enderror
            </div>

            <input
               type="submit"
               value="Crear Publicación"
               class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer font-bold w-full p-3 text-white rounded-lg"
            >
         </form>
      </div>

   </div>
@endsection
