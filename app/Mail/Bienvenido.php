<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Bienvenido extends Mailable
{
    use Queueable, SerializesModels;

    private $pdf;

    public $body;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($fPdf)
    {
        // $this->body = $body;
        $this->pdf = $fPdf;
    }

    public function build()
    {
        return $this->subject('Hemos recibidos sus datos!')
        ->view('emails.bienvenida')
        ->attach($this->pdf);
    }
}
