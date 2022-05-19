<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Mail\MensajeRecibido;
use Illuminate\Support\Facades\Mail;

class FormularioController extends Controller
{
    public function store(){
        //return request('name'); Para leer el input name

        //Para validar el formulario
        $message = request()->validate([
            'name'=>'required',
            'mail'=>'required|email:rfc,dns',//para crear regla de validación.
            'subject'=>'required',
            'content'=>'required|max:255'
        ],[
            'name.required'=>'Necesito tu nombre'
            ]
        );

        //Enviar emails.

        Mail::to('r.otarola.bass@gmail.com')->send(new MensajeRecibido($message));

        //return new MensajeRecibido($message);//Para ver mensaje del formulario en el browser

        //with(key,mensaje), creando mensaje que sera una petición.
        return back()->with('status','Recibimos tu mensaje te responderemos pronto');
    }
}
