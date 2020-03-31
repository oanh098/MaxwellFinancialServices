<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\Mail\rmv;
use App\Mail\NewUserWelcomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Mime\Header\MailboxListHeader;

class ContactFormController extends Controller
{
    public function create(){
        $bodyClass='liabilities-management';
        $headerTitle = 'Contact';
        return view('contact.create', compact(['bodyClass','headerTitle']));
    }
//    public function index(){
//        $bodyClass='liabilities-management';
//        $headerTitle = 'Contact';
//        return view('contact.create', compact(['bodyClass','headerTitle']));
////        return 'Hello';
//    }
    public function store(){
//        $users = [];
        $emails = ["thuyoanh21790@gmail.com"
//            , "rembiotech@protonmail.com","mastercatchall001@protonmail.com", "info@maxwellfinancialservices.com"
        ];
        $data=\request()->validate([
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'message' => 'nullable',
        ]);

        Mail::to($emails)->send (new ContactFormMail($data));
        Mail::to($data['email'])->send(new NewUserWelcomeMail($data));
//        Mail::later(5, , new NewUserWelcomeMail());



//    return redirect()->back()->with('alert', 'You have successfully send to Our Contacts');
        return redirect()->back()->withSuccess('You have successfully send to Our Contacts.');
//        return redirect('contactus');
        //dd(\request()->all());
    }
}


//Mail::to($data['email'])->send(new NewUserWelcomeMail($user));
