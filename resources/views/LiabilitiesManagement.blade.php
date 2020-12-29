        @extends('layouts.appMaxwell')
        @section('content')

            <section class="trailer">
                <a style="height: 15vh;"><img id="imgReturn" src="{{asset('FrontEnd')}}/newImages/return.png"  alt="" class="close-img"
                    onclick="toggle()" >
                </a>
                    <img src="{{asset('FrontEnd')}}/newImages/FixedTermDeposits.jpg"  />
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
            </section>


            <div class="trailerDepositAnnuties" >
                <div style="width: 100%"> @include('inc.menu')</div>
                <h1>Fixed Term Deposits Annuties</h1>

                <a href="">
                    <img id="imgReturn"  src="{{asset('FrontEnd')}}/newImages/return.png"  alt="" class=""  olick="toggle()">
                </a>
                 <br />
                <br />
                <br />

                <div id="idframe">
                    <iframe src="https://player.vimeo.com/video/393155428?title=0&byline=0&portrait=0"
                     frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe
                    <script src="https://player.vimeo.com/api/player.js"></script>
                </div>

            </div>


            <section class="clsLiabilitiesManagement">
                <div>
                    <a href="{{asset('FrontEnd')}}/PDSFTD.pdf">
                    Click here for PDS.</a>
                    <a href="#" onclick="toggle()">Click here for current rate.</a>
                    <a href="{{asset('FrontEnd')}}/FIXED_TERM_PDS.pdf">Click here for Full Version PDS.</a>
                    <a href="#" onclick="toggle2()">
                    Click here for video presentation.</a>
                </div>
                <span style="padding: 30px 0"></span>
                <p>MFS offers fixed term deposits, annuities paid weekly or fortnightly into your nominated account. This is great for pensioner’s retirees and clients looking for a safe investment return paid weekly.</p>

                <p>What is a term deposit? A term deposit with MFS is a fixed term investment that includes the deposit of money into an account for a set period of time. Please speak to your specialist as we have numerous fixed terms and the rates are always changing. The interest earned on a term deposit account with Maxwell Financial services (please ask a specialist the current terms and interest rate).</p>

            </section>
@endsection
