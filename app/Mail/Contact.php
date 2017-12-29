<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Contact extends Mailable
{
    use Queueable, SerializesModels;


    protected $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.contact.message')
            ->with([
                'subject' => (isset($this->data['contact_subject'])) ? $this->data['contact_subject'] : '',
                'email' => (isset($this->data['contact_email'])) ? $this->data['contact_email'] : '',
                'name' => (isset($this->data['contact_name'])) ? $this->data['contact_name'] : '',
                'text' => (isset($this->data['contact_text'])) ? $this->data['contact_text'] : '',
            ]);
    }
}
