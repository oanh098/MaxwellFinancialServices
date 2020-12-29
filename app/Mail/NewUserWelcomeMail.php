<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewUserWelcomeMail extends Mailable
{
    use Queueable, SerializesModels;
//    public $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
//    public function __construct($user)
    public function __construct()
    {
//        $this->user=$user;
    }



    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
//        return $this->markdown('emails.welcome-mail');
        return $this->from( 'welcome@maxwellfinancialservices.com', 'Welcome from MaxwellFinancialServices')
            ->markdown('emails.welcome-mail')
            ->subject('Welcome mail from MaxwellFinancialServices');
    }
}


