<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContractDispute extends Mailable
{
    use Queueable, SerializesModels;

    public $contrcat_dispute;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contrcat_dispute)
    {
        $this->contrcat_dispute = $contrcat_dispute;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //dd($this->contract);
        return $this->markdown('email.contrcat_dispute')
        ->with('Contract Dispute',$this->contrcat_dispute);
    }
   
}
