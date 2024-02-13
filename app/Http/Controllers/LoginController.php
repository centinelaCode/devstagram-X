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

      // retorna null | on
      // dd($request->remember);

      // Validacion
      $this->validate($request, [
         'email' => 'required|email',
         'password' => 'required'
      ]);

      // si credenciales incorrectas
      if(!auth()->attempt($request->only('email', 'password'), $request->remember)) {
         return back()->with('mensaje', 'Usuario/Password incorrecto');
      }

      // si credenciales correctas
      return redirect()->route('posts.index', auth()->user()->username);
   }
}
