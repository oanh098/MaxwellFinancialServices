<!DOCTYPE html>
<html lang="en">

    @include('inc.head')

<body class="{{$bodyClass ?? 'no'}}">


<div class="totopshow">
    <a href="#" class="back-to-top" ><img style="background-color: white;" alt="Back to Top" src="{{asset('FrontEnd')}}/images/gototop0.png"/></a>
</div><!-- totopshow -->

<div ></div>
<div id="ttr_page" class="container">@include('cookieConsent::index')

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

    @if($bodyClass =='index')
        @include('inc.slideShow')
    @else
{{--        @include('inc.headerShow')--}}

        @include('inc.nav')
        @include('inc.header')

    @endif

    <div id="ttr_content_and_sidebar_container">
        <div id="ttr_content">
            <div id="ttr_html_content_margin" class="container-fluid">
                @yield('content')
            </div><!--content_margin-->
        </div><!--content-->
        <div style="clear:both">
        </div>
    </div><!--container-->
    <div style="height:0px;width:0px;overflow:hidden;"></div>

    @include('inc.footer')

    <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-bottom-collapse: separate;"></div>
</div><!--page-->
<script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '030e0c11-b4ff-4963-be8d-7d4d4c6c8a0f', f: true }); done = true; } }; })();</script>
</body>
</html>
