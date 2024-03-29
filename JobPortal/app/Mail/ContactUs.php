<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactUs extends Mailable
{
    use Queueable, SerializesModels;

    public $ContactUs;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($ContactUs)
    {
        $this->Suspended = $ContactUs;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //dd($this->contract);
        return $this->markdown('email.ContactUs')
        ->with('ContactUs',$this->ContactUs);
    }
   
}
