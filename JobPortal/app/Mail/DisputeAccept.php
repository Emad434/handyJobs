<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class DisputeAccept extends Mailable
{
    use Queueable, SerializesModels;

    public $accept_dispute_client;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($accept_dispute_client)
    {
        $this->accept_dispute_client = $accept_dispute_client;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //dd($this->contract);
        return $this->markdown('email.accept_dispute_client')
        ->with('Contract cancel',$this->accept_dispute_client);
    }
   
}
