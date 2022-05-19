<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewConversation extends Mailable
{
    use Queueable, SerializesModels;

    public $new_conversation;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($new_conversation)
    {
        $this->new_conversation = $new_conversation;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //dd($this->contract);
        return $this->markdown('email.conversation')
        ->with('Demo email',$this->new_conversation);
    }
   
}
