<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactNotification extends Mailable
{
    use Queueable, SerializesModels;

    public string $name;
    public string $email;
    public string $body;
    public string $webSubject;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(string $name, string $email,  string $subject, string $body)
    {
        //
        $this->name =$name;
        $this->email = $email;
        $this->webSubject = $subject;
        $this->body = $body;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->email)->subject("Contacto desde la web")->markdown('emails.webcontact');
        //return $this->view('view.name');
    }
}
