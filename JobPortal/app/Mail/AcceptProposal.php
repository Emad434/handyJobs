<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AcceptProposal extends Mailable
{
    use Queueable, SerializesModels;

    public $proposal;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($proposal)
    {
        $this->proposals = $proposal;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       // dd($this->user);
        return $this->markdown('email.AcceptProposal')
        ->with('proposals',$this->proposals);
    }
   
}
