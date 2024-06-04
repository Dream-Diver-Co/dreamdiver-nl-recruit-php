<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PostedjobNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $student;
    /**
     * Create a new message instance.
     * @return void
     */

    public function __construct($student)
    {
         $this->student = $student;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.postedjob_notification')
                    ->with('student', $this->student);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Postedjob Notification',
        );
    }

   
}
