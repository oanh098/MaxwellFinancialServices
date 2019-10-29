<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function about()
    {
        $bodyClass = 'about';
        $headerTitle = 'About Us';
        return view('about', compact(['bodyClass','headerTitle']));
    }

    public function BusinessGrowth(){
        $bodyClass='business-growth';
        $headerTitle = 'Superannuation SMSF';
        return view('BusinessGrowth', compact(['bodyClass','headerTitle']));
    }

    public function ResearchAndStrategy(){
        $bodyClass='research-and-strategy';
        $headerTitle = 'International Investing';
        return view('ResearchAndStrategy', compact(['bodyClass','headerTitle']));
    }

    public function LiabilitiesManagement(){
        $bodyClass='liabilities-management';
        $headerTitle = 'Fixed Term Deposits Annuties';
        return view('LiabilitiesManagement', compact(['bodyClass','headerTitle']));
    }

    public function ClearingAndExecution(){
        $bodyClass='clearing-and-execution';
        $headerTitle = 'Refinancing Advice';
        return view('ClearingAndExecution', compact(['bodyClass','headerTitle']));
    }

    public function ProductSolution(){
        $bodyClass='product-solutions';
        $headerTitle = 'Wills & Power of Attorneys Estate Planning';
        return view('ProductSolutions', compact(['bodyClass','headerTitle']));
    }
    public function TransitionServices(){
        $bodyClass='transition-services';
        $headerTitle = 'Transition Services';
        return view('TransitionServices', compact(['bodyClass','headerTitle']));
    }
    public function Resource(){
            $bodyClass='resource';
            $headerTitle = 'Resource';
            return view('Resource', compact(['bodyClass','headerTitle']));
    }
    public function Contact(){
                $bodyClass='contact';
                $headerTitle = 'Contact';
                return view('contact', compact(['bodyClass','headerTitle']));
    }

}
