<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MyMail extends Mailable
{
    use Queueable, SerializesModels;

    public $BookingReference;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($BookingReference)
    {
        $this->BookingReference = $BookingReference;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('syaidi@asprasitech.com')
            ->subject('Auto Generated Email')
            ->view('email.mymail');
    }
}
