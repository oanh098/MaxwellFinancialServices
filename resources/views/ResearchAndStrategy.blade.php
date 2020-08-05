@extends('layouts.appMaxwell')
@section('content')

    <section class="trailer">
                <div style="width: 100%"> @include('inc.menu')</div>
                <!-- <a><img src="{{asset('FrontEnd')}}/images/return.png"  alt="" class="close-img"  
                    onclick="toggle()"></a> -->
                <h1>International Investing</h1>

                <div><iframe src="https://player.vimeo.com/video/393086294?byline=0&portrait=0" style="position:absolute;top:30vh;left:0;width:100%;height:70%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>


                <style type="text/css">
                    .trailer{
                        position: absolute;
                        display: flex;
                        flex-direction: column;
                        justify-content: space-between;
                        align-items: center;
                        height: 100vh;
                        z-index: 10000;
                        background: rgba(0,0,0,0.9);
                        width: 100%;
                        top: 0;
                        visibility: hidden;
                        overflow: auto;
                    }
                    .activeTrailer
                    {
                        visibility: visible;
                        opacity: 1;
                    }
                    .activeTrailer h1
                    {
                        position: absolute;
                        top: 20vh;
                        color: #fff;
                    }
                    

                </style>
                <script type="text/javascript">
                    function toggle(){
                        var trailer=document.querySelector(".trailer");
                        var video=document.querySelector("video");
                        trailer.classList.toggle("activeTrailer");
                    }
                </script>
            </section>

    <section class="clsResearchStrategy">
        <div>
            <a onclick="toggle()" 
            style="color: #000; background: rgba(234,67,53,.7);cursor: pointer;">
            Click here for video presentation.</a>
        </div>
        <p>Maxwell Financial Services offers Clients an extensive range of international investing. People often invest internationally to broaden diversification greater returns Tax incentives and less risk among foreign markets and companies. MFS has their own dedicated team working within emerging markets, over the last few years we have shown exceptional results for our investors within the artificial intelligence and medical marijuana sectors within the international emerging markets. Please speak to your Specialist at Maxwell Financial Services</p>
        <style type="text/css">
            .clsResearchStrategy
            {
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                padding: 100px 150px;
            }
            .clsResearchStrategy div
            {
                display: block;
                align-self: flex-end;
                margin-bottom: 20px;
            }
            @media (max-width: 991px)
            {
                .clsResearchStrategy
                {
                    padding: 50px 30px;
                }
            }
        </style>
    </section>
    
@endsection
