<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUs extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * @var array
     */
    private $all;

    /**
     * Create a new message instance.
     *
     * @param array $all
     */
    public function __construct(array $all)
    {
        //
        $this->all = $all;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.contact_us_mail_style',["data"=>$this->all]);
    }
}
