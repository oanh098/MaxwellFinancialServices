<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function show(){

       $user=\auth()->user();
        return view('profiles.show', compact('user'));
    }

    public function edit(){
        $user=\auth()->user();
        return view('profiles.edit',compact('user'));

    }

    public function update(\App\User $user){
       // $user=\auth()->user();
        $data= \request()->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'account_number' => 'required',
            'holdings' => 'required',
            'account_funding' => 'required',

        ]);
        $user->update($data);
        return redirect('/holdings/'.Auth()->id());
    }
}
