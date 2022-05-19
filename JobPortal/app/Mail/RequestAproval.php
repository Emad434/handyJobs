<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RequestAproval extends Mailable
{
    use Queueable, SerializesModels;

    public $RequestAproval;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($RequestAproval)
    {
        $this->RequestAproval = $RequestAproval;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //dd($this->contract);
        return $this->markdown('email.buyer_request_aproval')
        ->with('RequestAproval',$this->RequestAproval);
    }
   
}
