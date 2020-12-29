<!DOCTYPE html>
<html lang="en">

    @include('inc.head')

    <body class="{{$bodyClass ?? 'no'}}">
        <div class="totopshow">
            <a href="#" class="back-to-top" ><img style="background-color: white;" alt="Back to Top" src="{{asset('FrontEnd')}}/newImages/gototop0.png"/></a>
        </div><!-- totopshow -->

        @include('cookieConsent::index')

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

        <!-- {{-- scamadvicer box --}} -->
        <a href="https://scamadviser.com" target="_blank" class="scamadviser-sidebar">Check the Trust Score on Scamadviser.com.</a>
        <!-- {{-- End scamadvicer box --}} -->

        @if($bodyClass =='index')
            @include('inc.slideShow')
        @else
            @include('inc.header')
        @endif
        <div class="container-fluid">
            @yield('abc')
        </div>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


    </body>
</html>
