<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Suspended extends Mailable
{
    use Queueable, SerializesModels;

    public $Suspended;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($Suspended)
    {
        $this->Suspended = $Suspended;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //dd($this->contract);
        return $this->markdown('email.Suspended')
        ->with('Suspended',$this->Suspended);
    }
   
}
