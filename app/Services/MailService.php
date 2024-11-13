<?php

namespace App\Services;


use Illuminate\Support\Facades\Mail;


class MailService
{
    public function __construct()
    {
        // $this->name = "John";
    }


    /**
     * Sends an email with the provided details.
     *
     * @param string $email The email address to send the message to.
     * @param string $name The name of the recipient.
     * @param string $subject The subject of the email.
     * @param string $message The message body of the email.
     */
    public function sendMail($email, $name, $subject, $message): void
    {
        Mail::send('emails.contact', ['name' => $name, 'message' => $message], function ($message) use ($email, $name, $subject) {
            $message->to($email, $name)->subject($subject);
        });
    }
}
