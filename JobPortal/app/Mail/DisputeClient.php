<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class DisputeClient extends Mailable
{
    use Queueable, SerializesModels;

    public $contcart_dispute_Client;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contcart_dispute_Client)
    {
        $this->contcart_dispute_Client = $contcart_dispute_Client;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //dd($this->contract);
        return $this->markdown('email.contcart_dispute_Client')
        ->with('Contract Dispute',$this->contcart_dispute_Client);
    }
   
}
