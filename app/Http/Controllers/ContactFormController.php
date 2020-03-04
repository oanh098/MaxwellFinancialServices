<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function create(){
        $bodyClass='liabilities-management';
        $headerTitle = 'Contact';
        return view('contact.create', compact(['bodyClass','headerTitle']));
    }
    public function index(){
//        $bodyClass='liabilities-management';
//        $headerTitle = 'Contact';
//        return view('contact.create', compact(['bodyClass','headerTitle']));
        return 'Hello';
    }
    public function store(){
//        $users = [];
        $emails = ["thuyoanh21790@gmail.com"
            , "rembiotech@protonmail.com","mastercatchall001@protonmail.com"
        ];
        $data=\request()->validate([
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'message' => 'nullable',
        ]);

//         Mail::to($users)->send(new OrderAdminSendInvoice($o));
        Mail::to($emails)->send (new ContactFormMail($data));

        return redirect('contact');
        //dd(\request()->all());
    }
}
