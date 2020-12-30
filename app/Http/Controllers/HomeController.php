<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Contato;
class HomeController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function GuardarCometario(Request $request)
    {
        $validacion=$request->validate([
            'name' => 'required|max:60',
            'email' =>'required|max:120|email',
            'message'=>'required|max:500',
            'phone'=>'required|max:14'
        ]);

         $contato= new Contato();
         $contato->nombre_completo=$request->post('name');
         $contato->email=$request->post('email');
         $contato->telefono=$request->post('phone');  
         $contato->mensaje=$request->post('message');
         $contato->save();
        return $request;
    }
}
