<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($veriler)
    {
        $this->veriler = $veriler;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $veriler = $this->veriler;
        $konu    = $veriler['konu'];
        return $this->subject($konu)->view('mail.sendmail',compact('veriler'));
    }
}
