<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(){
        $bodyClass='index';
        return view('indexbck',compact(['$bodyClass']));
    }
}
