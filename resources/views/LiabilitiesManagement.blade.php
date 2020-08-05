


        @extends('layouts.appMaxwell')
        @section('content')

            

            <section class="trailer">
                <a style="height: 15vh;"><img src="{{asset('FrontEnd')}}/images/return.png"  alt="" class="close-img"  
                    onclick="toggle()" >
                </a>
                    <img src="{{asset('FrontEnd')}}/images/img-FixedTermDeposits.jpg"  />
                <div id="listVideos">
                    <div>
                    <h2>Fixed-term</h2>
                    <iframe src="https://player.vimeo.com/video/393155428?title=0&byline=0&portrait=0" style="position:relative;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div>
                    <div>
                    <h2>Our offices</h2>
                    <iframe src="https://player.vimeo.com/video/393134816?title=0&byline=0&portrait=0" style="position:relative;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div>
                    <div>
                    <h2>Why choose us?</h2>
                    <iframe src="https://player.vimeo.com/video/393086629?title=0&byline=0&portrait=0" style="position:relative;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div>

                </div>

                <script src="https://player.vimeo.com/api/player.js"></script>

                <style type="text/css">
                    .trailer{
                        position: absolute;
                        display: flex;
                        flex-direction: column;
                        justify-content: space-between;
                        align-items: center;
                        height: 150vh;
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
                    .activeTrailer #listVideos
                    {
                        display: flex;
                        justify-content: space-around;
                        align-items: center;
                        height: 100%;
                        width: 100%;
                    }
                    .activeTrailer #listVideos div
                    {
                        display: flex;
                        width: 100%;
                        height: 100%;
                        flex-direction: column;
                        align-items: center;
                        justify-content: center;
                        margin: 20px 20px;
                        padding-top: 20px;
                    }
                    
                    .activeTrailer #listVideos div h2
                    {
                        color: #fff;
                    }

                    @media (max-width: 991px)
                    {
                        .trailer
                        {
                            flex-direction: column;
                            height: 100vh;
                        }
                        .activeTrailer #listVideos
                        {
                            flex-direction: column;
                        }
                        .activeTrailer #listVideos iframe
                        {
                            margin: 5px 0;
                        }
                        .activeTrailer img
                        {
                            width: 80%; 
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
            </section>



            <section class="clsLiabilitiesManagement">
                <div>
                    <a onclick="toggle()"> 
                    Click here for PDS.</a>
                    <a onclick="toggle()">
                    Click here for current rate.</a>
                    <a onclick="toggle()"> 
                    Click here for Full Version PDS.</a>
                </div>
                <span style="padding: 30px 0"></span>
                <p>MFS offers fixed term deposits, annuities paid weekly or fortnightly into your nominated account. This is great for pensioner’s retirees and clients looking for a safe investment return paid weekly.</p>

                <p>What is a term deposit? A term deposit with MFS is a fixed term investment that includes the deposit of money into an account for a set period of time. Please speak to your specialist as we have numerous fixed terms and the rates are always changing. The interest earned on a term deposit account with Maxwell Financial services (please ask a specialist the current terms and interest rate).</p>
                
                
                <style type="text/css">
                    .clsLiabilitiesManagement
                    {
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        flex-direction: column;
                        padding: 100px 150px;
                        position: relative;
                    }
                    .clsLiabilitiesManagement div
                    {
                        display: flex;
                        flex-direction: column;
                        justify-content: space-between;
                        align-items: flex-start;
                        width: 100%;
                        color: #000; 
                        cursor: pointer;

                    }
                    .clsLiabilitiesManagement div a
                    {
                        margin: 5px 0;
                        color: #000; 
                        background: rgba(234,67,53,.7);
                        cursor: pointer;

                    }
                    @media (max-width: 991px)
                    {
                        .clsLiabilitiesManagement
                        {
                            padding: 50px 30px;
                        }
                    }
                </style>
            </section>
@endsection
