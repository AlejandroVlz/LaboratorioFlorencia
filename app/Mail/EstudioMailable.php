<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EstudioMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = 'Estudios';
    public $datos;
    public $estudion;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($datos, $estudion)
    {
        $this->datos = $datos;

        $this->estudion = $estudion;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.estudio', compact($this->datos, $this->estudion));
    }
}
