<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegisterMail extends Mailable
{
    use Queueable, SerializesModels;
    public $registered;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($registered)
    {
        $this->registered = $registered;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('registered')->subject('Welcome'.$this->registered['name'])->from('hello@ourwebsite.be');
    }
}
