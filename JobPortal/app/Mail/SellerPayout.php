<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SellerPayout extends Mailable
{
    use Queueable, SerializesModels;

    public $SellerPayout;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($SellerPayout)
    {
        $this->SellerPayout = $SellerPayout;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //dd($this->contract);
        return $this->markdown('email.seller_payout')
        ->with('SellerPayout',$this->SellerPayout);
    }
   
}
