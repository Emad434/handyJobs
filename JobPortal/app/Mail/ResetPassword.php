<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ResetPassword extends Mailable
{
    use Queueable, SerializesModels;

    public $user_details;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user_details)
    {
        $this->user_details = $user_details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('email.reset_email')
        ->with('ResetPassword',$this->user_details);
    }
   
}
