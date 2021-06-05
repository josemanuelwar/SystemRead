<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\Mensajes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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
        ]);

            $mesajes= new Mensajes($request->get('name'),$request->get('email'),$request->get('message'),$request->get('phone'));
            Mail::to("josemanuel@systemready.online")->send($mesajes);
         $contato= new Contato();
         $contato->nombre_completo=$request->get('name');
         $contato->email=$request->get('email');
         $contato->telefono=$request->get('phone');  
         $contato->mensaje=$request->get('message');
         $contato->save();
        return $request;
    }

}
