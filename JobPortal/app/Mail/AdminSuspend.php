<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AdminSuspend extends Mailable
{
    use Queueable, SerializesModels;

    public $AdminSuspend;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($AdminSuspend)
    {
        $this->AdminSuspend = $AdminSuspend;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //dd($this->contract);
        return $this->markdown('email.adminsuspend')
        ->with('AdminSuspend',$this->AdminSuspend);
    }
   
}
