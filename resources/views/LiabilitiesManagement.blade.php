@extends('layouts.appMaxwell')
@section('content')


        <div class="trailer" >
        <div class="row" >
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="align-items: center; justify-content: center">
                 <img src="{{asset('FrontEnd')}}/images/img-FixedTermDeposits.jpg" class="FDA-bannerimg"  alt="" >
                 <img src="{{asset('FrontEnd')}}/images/return.png"  alt=""  class="close-img" style="" onclick="toggle()">
             </div>
        </div>

{{--            </div>--}}
        <div class="row" >

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6  flex-video-title" >
                Fixed term deposit

                <iframe src="https://player.vimeo.com/video/393155428?title=0&byline=0&portrait=0"  frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>


            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 flex-video-title" >Our offices

                <iframe src="https://player.vimeo.com/video/393134816" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>

            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 flex-video-title">  Why choose us?
                <iframe src="https://player.vimeo.com/video/393086629?title=0&byline=0&portrait=0"  frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>

            </div>

        </div>

        </div>
{{--        <div class="trailer">--}}
{{--            <video src="https://vimeo.com/393155428" controls="true"></video>--}}
{{--            <img src="close.png" class="close" alt="" onclick="toggle()">--}}
{{--            <h2>Popup</h2>--}}

{{--            <div class="popup" onclick="myFunction()">Click me to toggle the popup!--}}
{{--                <span class="popuptext" id="myPopup">A Simple Popup!</span>--}}
{{--            </div>--}}


{{--        </div>--}}
        <div class="row" > <div class="col-lg-10 col-md-9 col-sm-8 col-xs-9" ></div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-xs-9" >
{{--        <div align="right" style="right: 0" >--}}
            <a style="color: #1155cc; background-color: yellow;" onclick="toggle()">Click here for current rate.</a>
{{--        </div>--}}
        </div></div>
        <div class="row" >
        <section>
            <div style="background: blue;  opacity: 0.65; "><p>In these uncertain times ask us about our guaranteed fixed term deposits paid fortnightly. <span style="color: gold">9.46% P/A. Terms and conditions apply. </span></p></div>
            <div style="background: blue;  opacity: 0.65; "><p>In these uncertain times ask us about our guaranteed fixed term deposits paid fortnightly. <span style="color: gold">9.46% P/A. Terms and conditions apply.</span> </p></div>
        </section>


    </div>
    <div class="ttr_liabilities-management_html_row0 row">
        <div class="col-lg-12 col-md-10 col-sm-10 col-xs-9">
                <div class="html_content">
                    <p>
                            MFS offers fixed term deposits, annuities paid weekly or fortnightly into your nominated account. This is great for pensioner’s retirees and clients looking for a safe investment return paid weekly.
                    </p>

                    <p>
                            What is a term deposit? A term deposit with MFS is a fixed term investment that includes the deposit of money into an account for a set period of time. Please speak to your specialist as we have numerous fixed terms and the rates are always changing. The interest earned on a term deposit account with Maxwell Financial services (please ask a specialist the current terms and interest rate) .
                    </p>
                </div>
        </div>
    </div>
    @endsection
