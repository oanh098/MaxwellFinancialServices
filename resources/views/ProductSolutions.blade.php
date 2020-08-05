@extends('layouts.appMaxwell')
@section('content')

    <section class="trailer"><div style="width: 100%"> @include('inc.menu')</div>
                <!-- <a><img src="{{asset('FrontEnd')}}/images/return.png"  alt="" class="close-img"  
                    onclick="toggle()"></a> -->
                <h1>Wills & Power of Attorneys</h1>

                <div><iframe src="https://player.vimeo.com/video/394174481?byline=0&portrait=0" style="position:absolute;top:30vh;left:0;width:100%;height:70%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>


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
