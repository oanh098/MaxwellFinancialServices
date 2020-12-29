
        @extends('layouts.appMaxwell')
        @section('content')


            <div class="trailer" >
                <div style="width: 100%"> @include('inc.menu')</div>

                <h1>Superannuation SMSF</h1>
                <br />
                <br />
                <a href="">
                    <img id="imgReturn"  src="{{asset('FrontEnd')}}/newImages/return.png"  alt="" class=""  olick="toggle()">
                </a>


                <div id="idframe" ><iframe class="responsive-iframe" src="https://player.vimeo.com/video/393193769?title=0&byline=0&portrait=0"
                     frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div>

                <script src="https://player.vimeo.com/api/player.js"></script>
            </div>

            <section class="clsBusinessGrowth">
                <div style="align-self: flex-end; display: block; ">
                    <a href="#" onclick="toggle()"
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

            </section>
        @endsection
