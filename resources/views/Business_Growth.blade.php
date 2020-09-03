


        @extends('layouts.appMaxwell')
        @section('content')

            
            <div class="trailer" >
                <div style="width: 100%"> @include('inc.menu')</div>

                <h1>Superannuation SMSF</h1>
                <a href="">
                    <img id="imgReturn"  src="{{asset('FrontEnd')}}/newImages/return.png"  alt="" class=""  olick="toggle()">
                </a>


                <div id="idframe"><iframe src="https://player.vimeo.com/video/393193769?title=0&byline=0&portrait=0"               
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



            <section class="clsBusinessGrowth">
                <div style="align-self: flex-end; display: block; ">
                    <a onclick="toggle()" 
                    style="color: #000; background: rgba(234,67,53,.7);cursor: pointer;">
                    Click here for video presentation.</a>
                </div>
                <h1 style="align-self: flex-start;">Superannuation</h1>
                <p>Personal superannuation (often simply known as ‘super’) is money that’s put aside and saved while you’re working, so you can enjoy a regular income later in life when you retire.  These days, the average Australian may expect around 20 years of retirement. By investing money in a superannuation fund, you’re building a nest egg to live on when you’re no longer earning a wage. And the more you put away now, the more you’ll be able to spend in your retirement</p>
                <p>Super is one of the most valuable assets you’ll have in your life. And it can be the key to enjoying a comfortable retirement. So it makes sense to make the most of it – to get it working hard so you’ll have as much money as possible to retire on. But how do you go about doing that?</p>
                <p>That’s where financial advice comes in. By talking to our team of friendly, expert Specialists, you’ll be able to develop a specific plan to help you work towards your financial and lifestyle goals.</p>
                <span style="padding: 30px 0"></span>
                <h1 style="align-self: flex-start;">SMSF Self-Managed Superannuation Fund</h1>
                <p>Using our expertise and knowledge in Superannuation being in control of the decision making process means a SMSF is not for everybody. More and More Australians are turning to SMSF as a means of taking control of their future. SMSF can be an excellent way to diversify your investment structure and reap the benefits of investing in what you want. Choosing individual trustees or corporate trustee is an important decision from day one. Once appointed the trustees will need create the trust and dead. We here at MFS understand the process involved and with our affiliated teams we can now deliver a SMSF service.</p>
                <style type="text/css">
                    .clsBusinessGrowth
                    {
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        flex-direction: column;
                        padding: 100px 150px;
                        position: relative;
                    }
                    @media (max-width: 991px)
                    {
                        .clsBusinessGrowth
                        {
                            padding: 50px 30px;
                        }
                    }
                </style>
            </section>
@endsection
