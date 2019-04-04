<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMariecare extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $deliverMessage;
    public $fullname, $useremail;

    /**
     * ContactMariecare constructor.
     * @param $deliverMessage
     * @param $name
     * @param $email
     */
    public function __construct($deliverMessage, $name, $email)
    {
        $this->deliverMessage = $deliverMessage;
        $this->fullname = $name;
        $this->useremail = $email;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.index')
            ->subject('Notification')
            ->with('name', $this->fullname)
            ->with('email', $this->useremail)
            ->with('deliverMessage', $this->deliverMessage);
    }
}
