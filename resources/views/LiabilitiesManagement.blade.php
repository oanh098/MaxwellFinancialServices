@extends('layouts.appMaxwell')
@section('content')



<div class="trailer">
    <div class="row">
        <div class="col-md-3 col-sm-4 col-xs-6">
{{--            <img class="img-responsive" src="http://2.bp.blogspot.com/-H6MAoWN-UIE/TuRwLbHRSWI/AAAAAAAABBk/89iiEulVsyg/s400/Free%2BNature%2BPhoto.jpg" />--}}
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <img src="{{asset('FrontEnd')}}/images/return.png"  alt=""  class="close-img"  onclick="toggle()">
            <img class="img-responsive"
                 src="{{asset('FrontEnd')}}/images/img-FixedTermDeposits.jpg" />
        </div>
{{--        <div class="col-md-3 col-sm-4 col-xs-6"><img class="img-responsive" src="http://blog.arborday.org/wp-content/uploads/2013/02/NEC1-300x200.jpg" /></div>--}}
        <div class="col-md-3 col-sm-4 col-xs-6">
{{--            <img class="img-responsive" src="http://th03.deviantart.net/fs70/200H/f/2010/256/0/9/painting_of_nature_by_dhikagraph-d2ynalq.jpg" />--}}
        </div>
    </div><div class="row">
        <div class="col-md-4 col-sm-4 col-xs-6">
            <p style="color: white; font-size: 2em">Fixed-term</p>
            <div style="padding:56.25% 0 0 0;position:relative;">

                <iframe src="https://player.vimeo.com/video/393155428?title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>

        </div>
        <div class="col-md-4 col-sm-4 col-xs-6">
            <p style="color: white; font-size: 2em">Our offices</p>
            <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/393134816?title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-6">
            <p style="color: white; font-size: 2em">Why choose us?</p>
            <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/393086629?title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
        </div>

    </div>
</div>

        <div class="row" >
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" ></div>
            <div class="col-lg-8 col-md-6 col-sm-5 col-xs-5 pl-3" >
                <a href="{{asset('FrontEnd')}}/PDSFTD.pdf" class="view-pdf"><span style="background-color: yellow; color: #1155cc;"> Click here for PDS </span></a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-5 col-xs-5" >
                <a style="color: #1155cc; background-color: yellow; white-space: nowrap" onclick="toggle()">Click here for current rate.</a>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" ></div>
        </div>
        <div class="row" >
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" ></div>
            <div class="col-lg-8 col-md-6 col-sm-5 col-xs-5 pl-3" >
                <a href="{{asset('FrontEnd')}}/FIXED_TERM_PDS.pdf" class="view-pdf"><span style="background-color: yellow; color: #1155cc;"> Click here for Full Version PDS </span></a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-5 col-xs-5" >
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" ></div>
        </div>
        <div class="row" >
        <section>
            <div style="background: blue;  opacity: 0.65; "><p>In these uncertain times ask us about our guaranteed fixed term deposits
                     paid fortnightly. <span style="color: gold">9.46% P/A. Terms and conditions apply. </span></p></div>
            <div style="background: blue;  opacity: 0.65; "><p>In these uncertain times ask us about our guaranteed fixed term deposits
                     paid fortnightly. <span style="color: gold">9.46% P/A. Terms and conditions apply.</span> </p></div>
        </section>


    </div>
    <div class="ttr_liabilities-management_html_row0 row">
        <div class="col-lg-12 col-md-10 col-sm-10 col-xs-9">
                <div class="html_content">
                    <p>
                            MFS offers fixed term deposits, annuities paid weekly or fortnightly into your nominated account. This is great for pensioner’s retirees and clients looking for a safe investment return paid weekly.
                    </p>

                    <p>
                            What is a term deposit? A term deposit with MFS is a fixed term investment that includes the deposit of money into an account for a set period of time. Please speak to your specialist as we have numerous fixed terms and the rates are always changing. The interest earned on a term deposit account with Maxwell Financial services (please ask a specialist the current terms and interest rate) .
                    </p>
                </div>
        </div>
    </div>
    @endsection
