@extends('layouts.appMaxwell')
@section('content')

  
     <div class="trailer" >
                <div style="width: 100%"> @include('inc.menu')</div>

                <h1>Wills & Power of Attorneys</h1>
                <a href="">
                    <img id="imgReturn"  src="{{asset('FrontEnd')}}/newImages/return.png"  alt="" class=""  olick="toggle()">
                </a>


                <div id="idframe"><iframe src="https://player.vimeo.com/video/394174481?title=0&byline=0&portrait=0"               
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


    <section class="clsProductSolutions">
        <div>
            <a onclick="toggle()" 
            style="color: #000; background: rgba(234,67,53,.7);cursor: pointer;">
            Click here for video presentation.</a>
        </div>
        <p>An effective estate plan includes tax effective Wills to protect your esatate and the interests of your beneficiaries in the event of your death. Drawing up or even revising a will is not on most peoples to do Lists, however it is an important part of life no matter what your age, especially if you have a variety of investments. In Australia will and Estates fall undertow areas of law known as succession law and probate, and in almost all cases, they are designed to ensure that the death of a person that their final wishes are fulfilled wherever possible. Without a will, this can be an expensive, time consuming and often distressing process for loved one.</p>
        <p>If your estate is fairly straightforward, it is possible to write your own will. Will packs can be bought at Australian Post Offices and many newsagents or download online. Please contact Maxwell Financial Services for any information regarding your Will.</p>
        <style type="text/css">
            .clsProductSolutions
            {
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                padding: 100px 150px;
            }
            .clsProductSolutions div
            {
                display: block;
                align-self: flex-end;
                margin-bottom: 20px;
            }
            @media (max-width: 991px)
            {
                .clsProductSolutions
                {
                    padding: 50px 30px;
                }
            }
        </style>
    </section>
    
@endsection
