<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
   public function index()
   {
      return view('auth.login');
   }

   public function store(Request $request)
   {
      // dd('autenticado');

      // Validacion
      $this->validate($request, [
         'email' => 'required|email',
         'password' => 'required'
      ]);

      // si credenciales incorrectas
      if(!auth()->attempt($request->only('email', 'password'))) {
         return back()->with('mensaje', 'Usuario/Password incorrecto');
      }

      // si credenciales correctas
      return redirect()->route('posts.index');
   }
}
