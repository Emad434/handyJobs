<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CancelContract extends Mailable
{
    use Queueable, SerializesModels;

    public $contcart_cancel_Client;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contcart_cancel_Client)
    {
        $this->contcart_cancel_Client = $contcart_cancel_Client;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        ///dd($this->contcart_cancel_Client);
        return $this->markdown('email.contcart_cancel_Client')
        ->with('Contract cancel',$this->contcart_cancel_Client);
    }
   
}
