<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AdminActive extends Mailable
{
    use Queueable, SerializesModels;

    public $AdminActive;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($AdminActive)
    {
        $this->AdminActive = $AdminActive;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //dd($this->contract);
        return $this->markdown('email.adminactive')
        ->with('AdminActive',$this->AdminActive);
    }
   
}
