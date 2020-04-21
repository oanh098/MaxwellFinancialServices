@extends('layouts.appMaxwell')
@section('content')


    <div class="trailer" >
        <div class="row" >
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                <img src="{{asset('FrontEnd')}}/images/return.png"  alt=""  class="close-img" onclick="toggle()">
            </div>
        </div>

        <div class="row" >

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  flex-video-title" >
                <span> International Investing</span>

                <iframe src="https://player.vimeo.com/video/393086294?byline=0&portrait=0" class="width-height"  frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                <p><a href="https://vimeo.com/393086294">International Investing</a> </p>

            </div>
        </div>
    </div>

    <div class="row" > <div class="col-lg-9 col-md-9 col-sm-8 col-xs-9" ></div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-9" >
            <a style="color: #1155cc; background-color: yellow;" onclick="toggle()">Click here for more detail.</a>
        </div></div>

    <div class="ttr_liabilities-management_html_row0 row">
        <div class="col-lg-12 col-md-10 col-sm-10 col-xs-9">
                <div class="html_content">
                    <p >Maxwell Financial Services offers Clients an extensive range of international investing. People often invest internationally to broaden diversification greater returns Tax incentives and less risk among foreign markets and companies. MFS has their own dedicated team working within emerging markets, over the last few years we have shown exceptional results for our investors within the artificial intelligence and medical marijuana sectors within the international emerging markets. Please speak to your Specialist at Maxwell Financial Services
                    </p>

                </div>
        </div>
    </div>
    @endsection
