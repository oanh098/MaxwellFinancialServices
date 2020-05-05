<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function about()
    {
        $bodyClass = 'liabilities-management';
        $headerTitle = 'About Us';
        return view('about', compact(['bodyClass','headerTitle']));
    }

    public function BusinessGrowth(){
        $bodyClass='liabilities-management';
        $headerTitle = 'Superannuation SMSF';
        return view('Business_Growth', compact(['bodyClass','headerTitle']));
    }

    public function ResearchAndStrategy(){
        $bodyClass='liabilities-management';
        $headerTitle = 'International Investing';
        return view('ResearchAndStrategy', compact(['bodyClass','headerTitle']));
    }

    public function LiabilitiesManagement(){
        $bodyClass='liabilities-management';
        $headerTitle = 'Our Fixed Term Deposits Annuties';
        return view('LiabilitiesManagement', compact(['bodyClass','headerTitle']));
    }

    public function ClearingAndExecution(){
        $bodyClass='liabilities-management';
        $headerTitle = 'Refinancing Advice';
        return view('ClearingAndExecution', compact(['bodyClass','headerTitle']));
    }

    public function ProductSolution(){
        $bodyClass='liabilities-management';
        $headerTitle = 'Wills & Power of Attorneys';
        return view('ProductSolutions', compact(['bodyClass','headerTitle']));
    }
    public function TransitionServices(){
        $bodyClass='liabilities-management';
        $headerTitle = 'Transition Services';
        return view('TransitionServices', compact(['bodyClass','headerTitle']));
    }
    public function Resource_Name(){
            $bodyClass='liabilities-management';
            $headerTitle = 'Resource';
            return view('Resource', compact(['bodyClass','headerTitle']));
    }
//    public function Contact(){
//                $bodyClass='liabilities-management';
//                $headerTitle = 'Contact';
//                return view('contact', compact(['bodyClass','headerTitle']));
//    }

}
