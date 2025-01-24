<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject('NextLearn - New Message from Website')
                    ->view('emails.contact-form')
                    ->attach(public_path('images/logo1.jpeg'), [
                        'as' => 'logo.jpeg',
                        'mime' => 'image/jpeg',
                    ]);
    }
}
