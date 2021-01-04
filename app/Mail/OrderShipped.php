<?php
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;
    protected $nombre,$correo,$mensage,$telefono;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nombre,$correo,$mensage,$telefono)
    {
        //
        $this->nombre=$nombre;
        $this->correo=$correo;
        $this->mensage=$mensage;
        $this->telefono=$telefono;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.blade.php')
                    ->with([
                        'Nombre'  => $this->nombre,
                        'correo'  => $this->correo,
                        'mensage' => $this->mensage,
                        'telefono'=> $this->telefono
                    ]);
    }
}
