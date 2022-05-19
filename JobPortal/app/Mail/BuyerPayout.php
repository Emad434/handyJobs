<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class BuyerPayout extends Mailable
{
    use Queueable, SerializesModels;

    public $BuyerPayout;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($BuyerPayout)
    {
        $this->BuyerPayout = $BuyerPayout;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //dd($this->contract);
        return $this->markdown('email.buyer_payout')
        ->with('BuyerPayout',$this->BuyerPayout);
    }
   
}
