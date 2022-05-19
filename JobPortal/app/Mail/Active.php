<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Active extends Mailable
{
    use Queueable, SerializesModels;

    public $Active;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($Active)
    {
        $this->Active = $Active;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //dd($this->contract);
        return $this->markdown('email.Active')
        ->with('Active',$this->Active);
    }
   
}
