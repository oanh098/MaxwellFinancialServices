<head>
    <!-- start Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-158597454-1"></script>

    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-158597454-1');
    </script>
    <!-- end Global site tag (gtag.js) - Google Analytics -->
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
{{--    start meta  tags collection --}}
    <meta name="description" content="Maxwell financial services offer full investment strategies specializing in emerging markets, superannuation fixed interest and  SMSF. We have only one goal. Our clients to prosper." />

{{--    end meta  tags collection --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
{{--    <script type="text/javascript" src="{{asset('FrontEnd')}}/navigation.js">--}}
{{--    </script>--}}
    <script type="text/javascript" src="{{asset('FrontEnd')}}/jquery.js">
    </script>
    <script type="text/javascript" src="{{asset('FrontEnd')}}/jquery-ui.min.js">
    </script>
    <script type="text/javascript" src="{{asset('FrontEnd')}}/tt_slideshow.js">
    </script>
    <script type="text/javascript" src="{{asset('FrontEnd')}}/bootstrap.min.js">
    </script>
    <script type="text/javascript" src="{{asset('FrontEnd')}}/customjs.js">
    </script>
    <script type="text/javascript" src="{{asset('FrontEnd')}}/contactform.js">
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>
        {{$headerTitle ?? 'Home - Maxwell Financial Services'}}
    </title>
    <link rel="stylesheet"  href="{{asset('FrontEnd')}}/bootstrap.css" type="text/css" media="screen"/>
    <link rel="stylesheet"  href="{{asset('FrontEnd')}}/style.css" type="text/css" media="screen"/>
{{--    <link rel="stylesheet"  href="{{asset('FrontEnd')}}/style.css" type="text/css" media="screen"/>--}}

    <!--[if lte IE 8]>
    <link rel="stylesheet"  href="{{asset('FrontEnd')}}/menuie.css" type="text/css" media="screen"/>
    <link rel="stylesheet"  href="{{asset('FrontEnd')}}/vmenuie.css" type="text/css" media="screen"/>
    <![endif]-->
    <script type="text/javascript" src="{{asset('FrontEnd')}}/totop.js">
    </script>

    <!--[if IE 7]>
    <style type="text/css" media="screen">
        #ttr_vmenu_items  li.ttr_vmenu_items_parent {margin-left:-16px;font-size:0px;}
    </style>
    <![endif]-->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="{{asset('FrontEnd')}}/html5shiv.js">
    </script>
    <script type="text/javascript" src="{{asset('FrontEnd')}}/respond.min.js">
    </script>
    <![endif]-->


</head>
