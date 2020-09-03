@extends('layouts.appMaxwell')
@section('content')


     <div class="trailer" >
                <div style="width: 100%"> @include('inc.menu')</div>

                <h1>International Investing</h1>
                <a href="">
                    <img id="imgReturn"  src="{{asset('FrontEnd')}}/newImages/return.png"  alt="" class=""  olick="toggle()">
                </a>


                <div id="idframe"><iframe src="https://player.vimeo.com/video/393086294??title=0&byline=0&portrait=0"               
                     frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div>
                
                <script src="https://player.vimeo.com/api/player.js"></script>


                <style type="text/css">
                    .trailer{
                       
                        visibility: hidden;
                        opacity: 0;
                        z-index: 5;
                         position: absolute;
                        display: flex;
                        flex-direction: column;
                        justify-content: space-between;
                        align-items: center;
                        height: 100vh;
                        background: rgba(0,0,0,1);
                        width: 100%;
                        top: 0;
                         overflow: auto;
                       
                    }


                    .activeTrailer
                    {
                        visibility: visible;
                        opacity: 1;
                        z-index: 5;
                         position: absolute;
                        display: flex;
                        flex-direction: column;
                        justify-content: space-between;
                        align-items: center;
                        height: 100vh;
                        background: rgba(0,0,0,1);
                        width: 100%;
                        top: 0;
                         overflow: auto;
                    }
                    .activeTrailer #imgReturn
                    {
                      position: absolute;
                      right: 20px;
                      top:0;
                      cursor:pointer;
                      filter: invert(1);
                      max-width: 30px;
                    }
                    .activeTrailer h1
                    {
                        position: absolute;
                        top: 25vh;
                        color: #fff;
                    }
                    .activeTrailer #idframe
                    {
                      position: relative;
                      top:0;
                      width: 100%;
                      overflow: hidden;
                      padding-top: 56.25%; /* 16:9 Aspect Ratio (divide 9 by 16 = 0.5625) */
                    }
                    #idframe iframe
                    {
                        position: absolute;
                        top: 15vh;
                        width: 100%;
                        height: 60%;
                    }
                   /* .activeTrailer div:nth-child(2)
                    {
                        visibility: visible;
                        opacity: 1;
                    }*/
                    

                     @media (max-width: 991px)
                    {
                        .activeTrailer 
                        {
                            width: 100%;
                            display: flex;
                            flex-direction: column;
                            justify-content: center;
                            align-items: center;
                            height: auto;
                            top:70vh;


                        }
                        /*.activeTrailer #listVideos
                        {
                            flex-direction: column;
                        }
                        .activeTrailer #listVideos iframe
                        {
                            margin: 5px 0;
                        }*/
                        .activeTrailer h1
                        {
                            top:0;
                        }
                        .activeTrailer div:nth-child(1)
                        {
                            visibility: hidden;
                            opacity: 0;
                        }

                         .activeTrailer #idframe
                        {
                            
                            visibility: visible;
                            opacity: 1;
                        }
                         #idframe iframe
                        {
                            position: absolute;
                            top: 0;
                            width: 90%;
                            height: 90%;
                        }
                        
                    }
                    
                    

                </style>
                <script type="text/javascript">
                    function toggle(){
                        var trailer=document.querySelector(".trailer");
                        var video=document.querySelector("video");
                        trailer.classList.toggle("activeTrailer");
                    }
                </script>
            </div>



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
