<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AcceptDispute extends Mailable
{
    use Queueable, SerializesModels;

    public $accept_dispute_provider;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($accept_dispute_provider)
    {
        $this->accept_dispute_provider = $accept_dispute_provider;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //dd($this->contract);
        return $this->markdown('email.accept_dispute_provider')
        ->with('Contract cancel',$this->accept_dispute_provider);
    }
   
}
