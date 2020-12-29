@extends('layouts.appMaxwell')
@section('content')


     <div class="trailer" >
                <div style="width: 100%"> @include('inc.menu')</div>

                <h1>International Investing</h1>
                <br />
                <br />
                <a href="">
                    <img id="imgReturn"  src="{{asset('FrontEnd')}}/newImages/return.png"  alt="" class=""  olick="toggle()">
                </a>


                <div id="idframe"><iframe src="https://player.vimeo.com/video/393086294??title=0&byline=0&portrait=0"
                     frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div>

                <script src="https://player.vimeo.com/api/player.js"></script>




            </div>



    <section class="clsResearchStrategy">
        <div>
            <a href="#" onclick="toggle()"
            style="color: #000; background: rgba(234,67,53,.7);cursor: pointer;">
            Click here for video presentation.</a>
        </div>
        <p>Maxwell Financial Services offers Clients an extensive range of international investing. People often invest internationally to broaden diversification greater returns Tax incentives and less risk among foreign markets and companies. MFS has their own dedicated team working within emerging markets, over the last few years we have shown exceptional results for our investors within the artificial intelligence and medical marijuana sectors within the international emerging markets. Please speak to your Specialist at Maxwell Financial Services</p>
        <style type="text/css">

        </style>
    </section>

@endsection
