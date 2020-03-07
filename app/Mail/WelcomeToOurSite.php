<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeToOurSite extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * @var array
     */
    private $data;

    /**
     * Create a new message instance.
     *
     * @param  $data
     */
    public function __construct($data)
    {
        //
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mails.welcome_mail_style',["data"=>$this->data]);
    }
}
