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
        $emails = [
//            "thuyoanh21790@gmail.com"
//            ,"mastercatchall001@protonmail.com",
            "welcome@maxwellfinancialservices.com"
        ];
        $data=\request()->validate([
            'name'=>'required',
            'email'=>'required|email',
            'telNo'=>'required',
            'subject'=>'required',
            'message' => 'nullable',
        ]);




        Mail::to($emails)->send (new ContactFormMail($data));
        Mail::to($data['email'])->send(new NewUserWelcomeMail());
//        Mail::later(5, , new NewUserWelcomeMail());



        return redirect()->back()->withSuccess('Thank you for contacting Maxwell Financial Services we will contact you within 24 hours
        , we have sent you a welcome mail please check your junk mail if you didnt receive it.');
        //dd(\request()->all());
    }
}


//Mail::to($data['email'])->send(new NewUserWelcomeMail($user));
