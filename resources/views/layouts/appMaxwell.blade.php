<!DOCTYPE html>
<html lang="en">

@include('inc.head')

<body>

<div class="totopshow">
    <a href="#" class="back-to-top" ><img style="background-color: white;" alt="Back to Top" src="{{asset('FrontEnd')}}/newImages/gototop0.png"/></a>
</div><!-- totopshow -->

<div id="ttr_page">@include('cookieConsent::index')

    <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container">
        <div class="tradingview-widget-container__widget"></div>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
            {
                "symbols": [
                {
                    "description": "",
                    "proName": "ASX:XAT"
                },
                {
                    "description": "",
                    "proName": "NASDAQ:IXIC"
                },
                {
                    "description": "",
                    "proName": "NASDAQ:NDAQ"
                },
                {
                    "description": "",
                    "proName": "MYX:SP500-CJ"
                },
                {
                    "description": "",
                    "proName": "LSE:LSE"
                },
                {
                    "description": "",
                    "proName": "ASX:YQFN"
                },
                {
                    "description": "",
                    "proName": "FX_IDC:USDAUD"
                },
                {
                    "description": "",
                    "proName": "ASX:WBC"
                },
                {
                    "description": "",
                    "proName": "ASX:ANZ"
                },
                {
                    "description": "",
                    "proName": "ASX:CBA"
                },
                {
                    "description": "",
                    "proName": "ASX:NAB"
                }
            ],
                "colorTheme": "light",
                "isTransparent": false,
                "displayMode": "adaptive",
                "locale": "en"
            }
        </script>
    </div>
    <!-- TradingView Widget END -->

    @include('inc.navigation')

    @if($bodyClass =='index')
        @include('inc.slideShow')
    @else
        @include('inc.header')
    @endif

    <div id="ttr_content_and_sidebar_container">
        <div id="ttr_content">
                @yield('content')
        </div><!--content-->
    </div><!--container-->

    @include('inc.footer')

</div><!--page-->

<a href="https://scamadviser.com" target="_blank" class="scamadviser-sidebar">Check the Trust Score on Scamadviser.com.</a>


<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>


<script type="text/javascript">

        $('.menu-toggle').click(function(){
            $('nav').toggleClass('active');
        })

        $('ul li.submenu').click(function(){
           $(this).siblings().removeClass('active');
           $(this).toggleClass('active');
        })




</script>

<script type="text/javascript">
    function toggle(){
        var trailer=document.querySelector(".trailer");
        var video=document.querySelector("video");
        trailer.classList.toggle("activeTrailer");
    }
</script>

<script type="text/javascript">
    function toggle2(){
        var trailer2=document.querySelector(".trailerDepositAnnuties");
        trailer2.classList.toggle("activeTrailer2");
    }

</script>
</body>

</html>
