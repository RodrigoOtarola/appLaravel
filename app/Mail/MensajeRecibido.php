<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MensajeRecibido extends Mailable
{
    use Queueable, SerializesModels;

   //Mensaje que saldra si pasa la validación.

    public $msg;//tiene que se public para verse en la vista

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($msg)//Pasa la variable message de FormularioController
    {
        $this->msg = $msg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.mensaje-recibido');
    }
}
