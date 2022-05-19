<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContractCancel extends Mailable
{
    use Queueable, SerializesModels;

    public $contrcat_cancel;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contrcat_cancel)
    {
        $this->contrcat_cancel = $contrcat_cancel;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       // dd($this->contract);
        return $this->markdown('email.contrcat_cancel')
        ->with('Contract cancel',$this->contrcat_cancel);
    }
   
}
