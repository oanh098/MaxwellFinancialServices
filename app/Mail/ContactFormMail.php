<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class   ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;
    public   $data;

    /**
     * Create a new message instance.
     *
     * @return void
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


        return $this->from( 'info@maxwellfinancialservices.com', 'MaxwellFinancialServices contact')
                    ->markdown('emails.contact.contact-form')
                    ->subject('Contacts sent to MaxwellFinancialServices')
            ;


//        return Mail::send('emails.contact.contact-form', ['data' => $data],function($m){
//            $m->from('info@maxwellfinancialservices.com','MFS Contact');
//            $m->replyTo('thuyoanh21790@yahoo.com','Feedback');
//        });

//        Mail::send('contact.contact-form',
//            array(
//                'name' => \request()->get('name'),
//                'email' => \request()->get('email'),
//                'subject' => \request()->get('subject'),
//                'message' => \request()->get('message'),
//            ),function($message){
//                $message->from('info@maxwellfinancialservices.com');
//                $message->to('thuyoanh21790@gmail.com', 'Admin')->subject('Feedback');
//            }
//        );

    }
}
