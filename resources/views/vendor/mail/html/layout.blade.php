<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />



</head>
<body>
    <style>
        @media only screen and (max-width: 600px) {
            .inner-body {
                width: 100% !important;
            }

            .footer {
                width: 100% !important;
            }
        }

        @media only screen and (max-width: 500px) {
            .button {
                width: 100% !important;
            }
        }
    </style>


    <table class="wrapper" width="100%" cellpadding="0" cellspacing="0" role="presentation">
        <tr>
            <td align="center">
                <table class="content" width="100%" cellpadding="0" cellspacing="0" role="presentation">
                    {{ $header ?? '' }}

                    <!-- Email Body -->
                    <tr>
                        <td class="body" width="100%" cellpadding="0" cellspacing="0">
                            <table class="inner-body" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
                                <!-- Body content -->
                                <tr>
                                    <td class="content-cell">
                                        {{ Illuminate\Mail\Markdown::parse($slot) }}

                                        {{ $subcopy ?? '' }}
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    {{ $footer ?? '' }}
                </table>
            </td>
        </tr>
    </table>
</body>
</html>



{{--    <!doctype html>--}}
{{--<html ⚡4email>--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <style amp4email-boilerplate>--}}
{{--        body{visibility:hidden}--}}
{{--    </style>--}}
{{--    <script async src="https://cdn.ampproject.org/v0.js"></script>--}}

{{--    <style amp-custom>--}}
{{--        @media only screen and (max-width:600px) {p, ul li, ol li, a { font-size:14px; line-height:150% } h1 { font-size:38px; text-align:center; line-height:120% } h2 { font-size:30px; text-align:center; line-height:120% } h3 { font-size:20px; text-align:center; line-height:120% } h1 a { font-size:38px } h2 a { font-size:30px } h3 a { font-size:20px } .es-menu td a { font-size:14px } .es-header-body p, .es-header-body ul li, .es-header-body ol li, .es-header-body a { font-size:14px } .es-footer-body p, .es-footer-body ul li, .es-footer-body ol li, .es-footer-body a { font-size:14px } .es-infoblock p, .es-infoblock ul li, .es-infoblock ol li, .es-infoblock a { font-size:12px } *[class="gmail-fix"] { display:none } .es-m-txt-c, .es-m-txt-c h1, .es-m-txt-c h2, .es-m-txt-c h3 { text-align:center } .es-m-txt-r, .es-m-txt-r h1, .es-m-txt-r h2, .es-m-txt-r h3 { text-align:right } .es-m-txt-l, .es-m-txt-l h1, .es-m-txt-l h2, .es-m-txt-l h3 { text-align:left } .es-m-txt-r img { float:right } .es-m-txt-c img { margin:0 auto } .es-m-txt-l img { float:left } .es-button-border { display:block } a.es-button { font-size:18px; display:block; border-left-width:0px; border-right-width:0px } .es-btn-fw { border-width:10px 0px; text-align:center } .es-adaptive table, .es-btn-fw, .es-btn-fw-brdr, .es-left, .es-right { width:100% } .es-content table, .es-header table, .es-footer table, .es-content, .es-footer, .es-header { width:100%; max-width:600px } .es-adapt-td { display:block; width:100% } .adapt-img { width:100%; height:auto } .es-m-p0 { padding:0px } .es-m-p0r { padding-right:0px } .es-m-p0l { padding-left:0px } .es-m-p0t { padding-top:0px } .es-m-p0b { padding-bottom:0 } .es-m-p20b { padding-bottom:20px } .es-mobile-hidden, .es-hidden { display:none } .es-desk-hidden { display:table-row; width:auto; overflow:visible; float:none; max-height:inherit; line-height:inherit } .es-desk-menu-hidden { display:table-cell } table.es-table-not-adapt, .esd-block-html table { width:auto } table.es-social { display:inline-block } table.es-social td { display:inline-block } }--}}
{{--        .es-p15 {--}}
{{--            padding:15px;--}}
{{--        }--}}
{{--        .es-p35t {--}}
{{--            padding-top:35px;--}}
{{--        }--}}
{{--        .es-infoblock, .es-infoblock p, .es-infoblock ul li, .es-infoblock ol li {--}}
{{--            line-height:120%;--}}
{{--            font-size:12px;--}}
{{--            color:#FFFFFF;--}}
{{--        }--}}
{{--        .es-p15t {--}}
{{--            padding-top:15px;--}}
{{--        }--}}
{{--        .es-p35r {--}}
{{--            padding-right:35px;--}}
{{--        }--}}
{{--        .es-content-body a {--}}
{{--            color:#999999;--}}
{{--        }--}}
{{--        .es-header-body p, .es-header-body ul li, .es-header-body ol li {--}}
{{--            color:#FFFFFF;--}}
{{--            font-size:14px;--}}
{{--        }--}}
{{--        .es-p5 {--}}
{{--            padding:5px;--}}
{{--        }--}}
{{--        .es-footer-body {--}}
{{--            background-color:transparent;--}}
{{--        }--}}
{{--        .es-p35b {--}}
{{--            padding-bottom:35px;--}}
{{--        }--}}
{{--        .es-menu td a img {--}}
{{--            display:inline-block;--}}
{{--        }--}}
{{--        .es-header {--}}
{{--            background-color:transparent;--}}
{{--        }--}}
{{--        .es-p15r {--}}
{{--            padding-right:15px;--}}
{{--        }--}}
{{--        .es-footer {--}}
{{--            background-color:transparent;--}}
{{--        }--}}
{{--        .es-p35l {--}}
{{--            padding-left:35px;--}}
{{--        }--}}
{{--        .es-p15l {--}}
{{--            padding-left:15px;--}}
{{--        }--}}
{{--        .es-p20 {--}}
{{--            padding:20px;--}}
{{--        }--}}
{{--        .es-p10t {--}}
{{--            padding-top:10px;--}}
{{--        }--}}
{{--        .es-p30r {--}}
{{--            padding-right:30px;--}}
{{--        }--}}
{{--        .es-p10r {--}}
{{--            padding-right:10px;--}}
{{--        }--}}
{{--        .es-button-border {--}}
{{--            border-style:solid solid solid solid;--}}
{{--            border-color:#333333 #333333 #333333 #333333;--}}
{{--            background:#333333;--}}
{{--            border-width:0px 0px 0px 0px;--}}
{{--            display:inline-block;--}}
{{--            border-radius:5px;--}}
{{--            width:auto;--}}
{{--        }--}}
{{--        .es-p30l {--}}
{{--            padding-left:30px;--}}
{{--        }--}}
{{--        p, ul li, ol li {--}}
{{--            font-size:16px;--}}
{{--            font-family:arial, "helvetica neue", helvetica, sans-serif;--}}
{{--            line-height:150%;--}}
{{--        }--}}
{{--        .es-p15b {--}}
{{--            padding-bottom:15px;--}}
{{--        }--}}
{{--        .es-p30t {--}}
{{--            padding-top:30px;--}}
{{--        }--}}
{{--        table tr {--}}
{{--            border-collapse:collapse;--}}
{{--        }--}}
{{--        .es-p30b {--}}
{{--            padding-bottom:30px;--}}
{{--        }--}}
{{--        .es-p10b {--}}
{{--            padding-bottom:10px;--}}
{{--        }--}}
{{--        h1, h2, h3, h4, h5 {--}}
{{--            Margin:0;--}}
{{--            line-height:120%;--}}
{{--            font-family:"times new roman", times, baskerville, georgia, serif;--}}
{{--        }--}}
{{--        .es-footer-body a {--}}
{{--            color:#EFEFEF;--}}
{{--            font-size:14px;--}}
{{--        }--}}
{{--        .es-p10l {--}}
{{--            padding-left:10px;--}}
{{--        }--}}
{{--        .es-right {--}}
{{--            float:right;--}}
{{--        }--}}
{{--        h2 a {--}}
{{--            font-size:24px;--}}
{{--        }--}}
{{--        .es-p10 {--}}
{{--            padding:10px;--}}
{{--        }--}}
{{--        .es-header-body {--}}
{{--            background-color:transparent;--}}
{{--        }--}}
{{--        a.es-button {--}}
{{--            border-style:solid;--}}
{{--            border-color:#333333;--}}
{{--            border-width:8px 30px 8px 30px;--}}
{{--            display:inline-block;--}}
{{--            background:#333333;--}}
{{--            border-radius:5px;--}}
{{--            font-size:16px;--}}
{{--            font-family:arial, "helvetica neue", helvetica, sans-serif;--}}
{{--            font-weight:normal;--}}
{{--            font-style:normal;--}}
{{--            line-height:120%;--}}
{{--            color:#FFFFFF;--}}
{{--            text-decoration:none;--}}
{{--            width:auto;--}}
{{--            text-align:center;--}}
{{--        }--}}
{{--        img {--}}
{{--            display:block;--}}
{{--            border:0;--}}
{{--            outline:none;--}}
{{--            text-decoration:none;--}}
{{--        }--}}
{{--        .es-content, .es-header, .es-footer {--}}
{{--            table-layout:fixed;--}}
{{--            width:100%;--}}
{{--        }--}}
{{--        .es-p35 {--}}
{{--            padding:35px;--}}
{{--        }--}}
{{--        .es-p25t {--}}
{{--            padding-top:25px;--}}
{{--        }--}}
{{--        .es-p25r {--}}
{{--            padding-right:25px;--}}
{{--        }--}}
{{--        h1 {--}}
{{--            font-size:30px;--}}
{{--            font-style:normal;--}}
{{--            font-weight:normal;--}}
{{--            color:#333333;--}}
{{--        }--}}
{{--        ul li, ol li {--}}
{{--            Margin-bottom:15px;--}}
{{--        }--}}
{{--        h2 {--}}
{{--            font-size:24px;--}}
{{--            font-style:normal;--}}
{{--            font-weight:normal;--}}
{{--            color:#333333;--}}
{{--        }--}}
{{--        h3 {--}}
{{--            font-size:20px;--}}
{{--            font-style:normal;--}}
{{--            font-weight:normal;--}}
{{--            color:#333333;--}}
{{--        }--}}
{{--        p, hr {--}}
{{--            Margin:0;--}}
{{--        }--}}
{{--        .es-infoblock a {--}}
{{--            font-size:12px;--}}
{{--            color:#FFFFFF;--}}
{{--        }--}}
{{--        .es-p-all-default {--}}
{{--            padding:0px;--}}
{{--        }--}}
{{--        .es-wrapper-color {--}}
{{--            background-color:#223748;--}}
{{--        }--}}
{{--        .es-p25b {--}}
{{--            padding-bottom:25px;--}}
{{--        }--}}
{{--        .es-p40 {--}}
{{--            padding:40px;--}}
{{--        }--}}
{{--        .es-p25l {--}}
{{--            padding-left:25px;--}}
{{--        }--}}
{{--        .es-wrapper {--}}
{{--            width:100%;--}}
{{--            height:100%;--}}
{{--        }--}}
{{--        html, body {--}}
{{--            width:100%;--}}
{{--            font-family:arial, "helvetica neue", helvetica, sans-serif;--}}
{{--        }--}}
{{--        table {--}}
{{--            border-collapse:collapse;--}}
{{--            border-spacing:0px;--}}
{{--        }--}}
{{--        .es-content-body p, .es-content-body ul li, .es-content-body ol li {--}}
{{--            color:#666666;--}}
{{--        }--}}
{{--        .es-p25 {--}}
{{--            padding:25px;--}}
{{--        }--}}
{{--        table td, html, body, .es-wrapper {--}}
{{--            padding:0;--}}
{{--            Margin:0;--}}
{{--        }--}}
{{--        .es-p20t {--}}
{{--            padding-top:20px;--}}
{{--        }--}}
{{--        .es-p40r {--}}
{{--            padding-right:40px;--}}
{{--        }--}}
{{--        a {--}}
{{--            font-family:arial, "helvetica neue", helvetica, sans-serif;--}}
{{--            font-size:16px;--}}
{{--            text-decoration:underline;--}}
{{--        }--}}
{{--        a[x-apple-data-detectors] {--}}
{{--            color:inherit;--}}
{{--            text-decoration:none;--}}
{{--            font-size:inherit;--}}
{{--            font-family:inherit;--}}
{{--            font-weight:inherit;--}}
{{--            line-height:inherit;--}}
{{--        }--}}
{{--        .es-footer-body p, .es-footer-body ul li, .es-footer-body ol li {--}}
{{--            color:#EFEFEF;--}}
{{--            font-size:14px;--}}
{{--        }--}}
{{--        .es-p20r {--}}
{{--            padding-right:20px;--}}
{{--        }--}}
{{--        .es-p40l {--}}
{{--            padding-left:40px;--}}
{{--        }--}}
{{--        .es-menu td {--}}
{{--            border:0;--}}
{{--        }--}}
{{--        .es-p-default {--}}
{{--            padding-top:20px;--}}
{{--            padding-right:40px;--}}
{{--            padding-bottom:0px;--}}
{{--            padding-left:40px;--}}
{{--        }--}}
{{--        .es-left {--}}
{{--            float:left;--}}
{{--        }--}}
{{--        .es-p5b {--}}
{{--            padding-bottom:5px;--}}
{{--        }--}}
{{--        .es-p40t {--}}
{{--            padding-top:40px;--}}
{{--        }--}}
{{--        .es-menu td a {--}}
{{--            text-decoration:none;--}}
{{--            display:block;--}}
{{--        }--}}
{{--        .es-button {--}}
{{--            text-decoration:none;--}}
{{--        }--}}
{{--        .es-p40b {--}}
{{--            padding-bottom:40px;--}}
{{--        }--}}
{{--        s {--}}
{{--            text-decoration:line-through;--}}
{{--        }--}}
{{--        .es-p20b {--}}
{{--            padding-bottom:20px;--}}
{{--        }--}}
{{--        .es-p5l {--}}
{{--            padding-left:5px;--}}
{{--        }--}}
{{--        .es-desk-hidden {--}}
{{--            display:none;--}}
{{--            float:left;--}}
{{--            overflow:hidden;--}}
{{--            width:0;--}}
{{--            max-height:0;--}}
{{--            line-height:0;--}}
{{--        }--}}
{{--        .es-p20l {--}}
{{--            padding-left:20px;--}}
{{--        }--}}
{{--        h1 a {--}}
{{--            font-size:30px;--}}
{{--        }--}}
{{--        .es-content-body {--}}
{{--            background-color:#FFFFFF;--}}
{{--        }--}}
{{--        .es-p5t {--}}
{{--            padding-top:5px;--}}
{{--        }--}}
{{--        h3 a {--}}
{{--            font-size:20px;--}}
{{--        }--}}
{{--        .es-p5r {--}}
{{--            padding-right:5px;--}}
{{--        }--}}
{{--        .es-p30 {--}}
{{--            padding:30px;--}}
{{--        }--}}
{{--        .es-header-body a {--}}
{{--            color:#FFFFFF;--}}
{{--            font-size:14px;--}}
{{--        }--}}
{{--    </style>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="es-wrapper-color">--}}
{{--    <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0" style="background-position: center top;">--}}
{{--        <tr>--}}
{{--            <td valign="top">--}}
{{--                <table class="es-header" cellspacing="0" cellpadding="0" align="center">--}}
{{--                    <tr>--}}
{{--                        <td align="center">--}}
{{--                            <table class="es-header-body" style="background-color: #ffffff;" width="600" cellspacing="0" cellpadding="0" align="center" bgcolor="#ffffff">--}}
{{--                                <tr>--}}
{{--                                    <td style="background-color: transparent;" align="left" bgcolor="transparent">--}}
{{--                                        <table width="100%" cellspacing="0" cellpadding="0">--}}
{{--                                            <tr>--}}
{{--                                                <td width="600" valign="top" align="center">--}}
{{--                                                    <table width="100%" cellspacing="0" cellpadding="0" bgcolor="#f7f8f7" style="background-color: #f7f8f7;" role="presentation">--}}
{{--                                                        <tr class="es-mobile-hidden">--}}
{{--                                                            <td class="es-m-txt-c" align="center" style="font-size: 0px;"><a href="https://www.maxwellfinancialservices.com/" target="_blank">--}}
{{--                                                                    <img src="https://fdbxnb.stripocdn.email/content/guids/CABINET_1faf7ee19c6e2f2719e50e9450434791/images/91311584339430983.png"--}}
{{--                                                                             alt="maxwellfinancialservices" style="display: block;" title="maxwellfinancialservices" width="600" height="171"></img></a></td>--}}
{{--                                                        </tr>--}}
{{--                                                        <tr class="es-desk-hidden">--}}
{{--                                                            <td class="es-m-txt-c" align="center" style="font-size: 0px;"><a href="https://www.maxwellfinancialservices.com/" target="_blank">--}}
{{--                                                                    <img src="https://fdbxnb.stripocdn.email/content/guids/CABINET_1faf7ee19c6e2f2719e50e9450434791/images/92421584300404986.png"--}}
{{--                                                                             alt="maxwellfinancialservices" style="display: block;" title="maxwellfinancialservices" width="200" height="112"></img></a></td>--}}
{{--                                                        </tr>--}}
{{--                                                    </table>--}}
{{--                                                </td>--}}
{{--                                            </tr>--}}
{{--                                        </table></td>--}}
{{--                                </tr>--}}
{{--                            </table>--}}
{{--                        </td>--}}
{{--                    </tr>--}}
{{--                </table>--}}
{{--                end top --}}

{{--                <table class="es-content" cellspacing="0" cellpadding="0" align="center">--}}
{{--<tr>--}}
{{--    <td align="center">--}}
{{--        <table class="es-content-body" width="600" cellspacing="0" cellpadding="0" bgcolor="#f7f8f7" align="center" style="background-color: #f7f8f7;">--}}
{{--            <tr>--}}
{{--                <td class="es-p30t es-p40r es-p40l" style="background-color: #f7f8f7;" align="left" bgcolor="#f7f8f7">--}}
{{--                    <table width="100%" cellspacing="0" cellpadding="0">--}}
{{--                        <tr>--}}
{{--                            <td width="520" valign="top" align="center">--}}
{{--                                <table width="100%" cellspacing="0" cellpadding="0" bgcolor="#f7f8f7" style="background-color: #f7f8f7;" role="presentation">--}}
{{--                                    <tr>--}}
{{--                                        <td class="es-m-txt-l" align="left"><h2 style="font-size: 18px;"><strong>We’re very happy you’re here at Maxwell Financial Services.</strong></h2></td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td class="es-m-txt-l" align="left" style="font-size:0"><a target="_blank" href="https://esputnik.com/viewInBrowser">--}}
{{--                                                <img src="https://fdbxnb.stripocdn.email/content/guids/CABINET_6ebdc9f620b6c98ec92e579217982603/images/99301524564595313.png" alt--}}
{{--                                                         style="display: block;" width="75" height="9">--}}

{{--                                                </img></a></td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td class="es-p15t"><p style="line-height: 150%; text-align: justify;"><span class="product-description">What does planning your finances mean to you? Here, at Maxwell Financial Services, we believe your vision and future endeavors are as unique as you are. We also know that the field of finance isn’t for everyone – and it shouldn’t be. Let us handle it. We are committed to helping you develop your future, focusing on what’s important for you and guiding you to make informed financial decisions and implement effective solutions. Please find enclosed an information pack in video format of our services.</span></p></td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td class="es-p25t es-p10b" align="left"><p>Regards,<br>Maxwell Financial Services<br></p></td>--}}
{{--                                    </tr>--}}
{{--                                </table>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                    </table>--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--                                            end row 1 --}}
{{--            <tr>--}}
{{--                <td class="es-p20t es-p40b es-p40r es-p40l" align="left">--}}
{{--                    <table width="100%" cellspacing="0" cellpadding="0">--}}
{{--                        <tr>--}}
{{--                            <td width="520" valign="top" align="center">--}}
{{--                                <table width="100%" cellspacing="0" cellpadding="0" role="presentation">--}}
{{--                                    <tr>--}}
{{--                                        <td class="es-p5t es-m-txt-c" align="center">--}}
{{--                                                                <span class="es-button-border">--}}
{{--                                                                    <a href="https://maxwellfinancialservices.com" class="es-button" target="_blank">Getting started</a>--}}
{{--                                                                </span>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                </table></td>--}}
{{--                        </tr>--}}
{{--                    </table></td>--}}
{{--            </tr>--}}
{{--                                            end row 2 - button --}}
{{--        </table>--}}
{{--    </td>--}}
{{--</tr>--}}
{{--</table>--}}
{{--                end content--}}

{{--<table class="es-content" cellspacing="0" cellpadding="0" align="center">--}}
{{--    <tr></tr>--}}
{{--    <tr>--}}
{{--        <td align="center">--}}
{{--            <table class="es-content-body" width="600" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center">--}}
{{--                <tr>--}}
{{--                    <td style="background-color: #223748;" bgcolor="#223748" align="left">--}}
{{--                        <table class="es-left" cellspacing="0" cellpadding="0" align="left">--}}
{{--                            <tr>--}}
{{--                                <td class="es-m-p0r" width="200" align="center">--}}
{{--                                    <table width="100%" cellspacing="0" cellpadding="0" role="presentation">--}}
{{--                                        <tr>--}}
{{--                                            <td align="center"><a target="_blank" href="https://vimeo.com/393155428"><img class="adapt-img" src="https://fdbxnb.stripocdn.email/content/guids/videoImgGuid/images/90281584301382897.png" alt="MFS Fixed Term Deposit" width="200" title="MFS Fixed Term Deposit" height="112" layout="responsive"></img></a></td>--}}
{{--                                        </tr>--}}
{{--                                    </table></td>--}}
{{--                            </tr>--}}
{{--                        </table>--}}
{{--                        <table class="es-left" cellspacing="0" cellpadding="0" align="left">--}}
{{--                            <tr>--}}
{{--                                <td width="200" align="center">--}}
{{--                                    <table width="100%" cellspacing="0" cellpadding="0" role="presentation">--}}
{{--                                        <tr>--}}
{{--                                            <td align="center"><a target="_blank" href="https://vimeo.com/393134816"><img class="adapt-img" src="https://fdbxnb.stripocdn.email/content/guids/videoImgGuid/images/33011584301429890.png" alt="MFS" width="200" title="MFS" height="112" layout="responsive"></img></a></td>--}}
{{--                                        </tr>--}}
{{--                                    </table></td>--}}
{{--                            </tr>--}}
{{--                        </table>--}}
{{--                        <table class="es-right" cellspacing="0" cellpadding="0" align="right">--}}
{{--                            <tr>--}}
{{--                                <td width="200" align="center">--}}
{{--                                    <table width="100%" cellspacing="0" cellpadding="0" role="presentation">--}}
{{--                                        <tr>--}}
{{--                                            <td align="center"><a target="_blank" href="https://vimeo.com/393193769"><img class="adapt-img" src="https://fdbxnb.stripocdn.email/content/guids/videoImgGuid/images/12551584301447753.png" alt="MFS Superannuation SMSF" width="200" title="MFS Superannuation SMSF" height="112" layout="responsive"></img></a></td>--}}
{{--                                        </tr>--}}
{{--                                    </table></td>--}}
{{--                            </tr>--}}
{{--                        </table></td>--}}
{{--                </tr>--}}
{{--            </table></td>--}}
{{--    </tr>--}}
{{--</table>--}}
{{--ed video list 1 --}}

{{--<table class="es-content" cellspacing="0" cellpadding="0" align="center">--}}
{{--    <tr></tr>--}}
{{--    <tr>--}}
{{--        <td align="center">--}}
{{--            <table class="es-content-body" width="600" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center">--}}
{{--                <tr>--}}
{{--                    <td style="background-color: #223748;" bgcolor="#223748" align="left">--}}
{{--                        <table class="es-left" cellspacing="0" cellpadding="0" align="left">--}}
{{--                            <tr>--}}
{{--                                <td class="es-m-p0r" width="200" align="center">--}}
{{--                                    <table width="100%" cellspacing="0" cellpadding="0" role="presentation">--}}
{{--                                        <tr>--}}
{{--                                            <td align="center"><a target="_blank" href="https://vimeo.com/394410951"><img class="adapt-img" src="https://fdbxnb.stripocdn.email/content/guids/videoImgGuid/images/22471584301471996.png" alt="Cannabis industry" width="200" title="Cannabis industry" height="112" layout="responsive"></img></a></td>--}}
{{--                                        </tr>--}}
{{--                                    </table></td>--}}
{{--                            </tr>--}}
{{--                        </table>--}}
{{--                        <table class="es-left" cellspacing="0" cellpadding="0" align="left">--}}
{{--                            <tr>--}}
{{--                                <td width="200" align="center">--}}
{{--                                    <table width="100%" cellspacing="0" cellpadding="0" role="presentation">--}}
{{--                                        <tr>--}}
{{--                                            <td align="center"><a target="_blank" href="https://vimeo.com/393087286"><img class="adapt-img" src="https://fdbxnb.stripocdn.email/content/guids/videoImgGuid/images/52471584301485358.png" alt="Maxwell Financial Services What is an IPO?" width="200" title="Maxwell Financial Services What is an IPO?" height="112" layout="responsive"></img></a></td>--}}
{{--                                        </tr>--}}
{{--                                    </table></td>--}}
{{--                            </tr>--}}
{{--                        </table>--}}
{{--                        <table class="es-right" cellspacing="0" cellpadding="0" align="right">--}}
{{--                            <tr>--}}
{{--                                <td width="200" align="center">--}}
{{--                                    <table width="100%" cellspacing="0" cellpadding="0" role="presentation">--}}
{{--                                        <tr>--}}
{{--                                            <td align="center"><a target="_blank" href="https://vimeo.com/393086294"><img class="adapt-img" src="https://fdbxnb.stripocdn.email/content/guids/videoImgGuid/images/73241584301504070.png" alt="MFS International Investing" width="200" title="MFS International Investing" height="112" layout="responsive"></img></a></td>--}}
{{--                                        </tr>--}}
{{--                                    </table></td>--}}
{{--                            </tr>--}}
{{--                        </table></td>--}}
{{--                </tr>--}}
{{--            </table></td>--}}
{{--    </tr>--}}
{{--</table>--}}
{{--                end video list 2 --}}

{{--<table class="es-content" cellspacing="0" cellpadding="0" align="center">--}}
{{--    <tr></tr>--}}
{{--    <tr>--}}
{{--        <td align="center">--}}
{{--            <table class="es-content-body" width="600" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center">--}}
{{--                <tr>--}}
{{--                    <td style="background-color: #223748;" bgcolor="#223748" align="left">--}}
{{--                        <table class="es-left" cellspacing="0" cellpadding="0" align="left">--}}
{{--                            <tr>--}}
{{--                                <td class="es-m-p0r" width="300" align="center">--}}
{{--                                    <table width="100%" cellspacing="0" cellpadding="0" role="presentation">--}}
{{--                                        <tr>--}}
{{--                                            <td align="center"><a target="_blank" href="https://vimeo.com/394174481"><img class="adapt-img" src="https://fdbxnb.stripocdn.email/content/guids/videoImgGuid/images/20351584301558600.png" alt="Wills and Probate" width="300" title="Wills and Probate" height="169" layout="responsive"></img></a></td>--}}
{{--                                        </tr>--}}
{{--                                    </table></td>--}}
{{--                            </tr>--}}
{{--                        </table>--}}
{{--                        <table class="es-right" cellspacing="0" cellpadding="0" align="right">--}}
{{--                            <tr>--}}
{{--                                <td width="300" align="center">--}}
{{--                                    <table width="100%" cellspacing="0" cellpadding="0" role="presentation">--}}
{{--                                        <tr>--}}
{{--                                            <td align="center"><a target="_blank" href="https://vimeo.com/393134816"><img class="adapt-img" src="https://fdbxnb.stripocdn.email/content/guids/videoImgGuid/images/33011584301429890.png" alt="MFS" width="300" title="MFS" height="169" layout="responsive"></img></a></td>--}}
{{--                                        </tr>--}}
{{--                                    </table></td>--}}
{{--                            </tr>--}}
{{--                        </table></td>--}}
{{--                </tr>--}}
{{--            </table></td>--}}
{{--    </tr>--}}
{{--</table>--}}
{{--                end video list 3 --}}

{{--<table class="es-content" cellspacing="0" cellpadding="0" align="center">--}}
{{--    <tr>--}}
{{--        <td align="center">--}}
{{--            <table class="es-content-body" width="600" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center">--}}
{{--                <tr>--}}
{{--                    <td align="left">--}}
{{--                        <table cellspacing="0" cellpadding="0" width="100%">--}}
{{--                            <tr>--}}
{{--                                <td class="es-m-p0r" width="600" align="center">--}}
{{--                                    <table width="100%" cellspacing="0" cellpadding="0" role="presentation">--}}
{{--                                        <tr>--}}
{{--                                            <td align="center" style="font-size: 0px;"><a target="_blank" href="https://viewstripo.email/"><img class="adapt-img" src="https://fdbxnb.stripocdn.email/content/guids/CABINET_1faf7ee19c6e2f2719e50e9450434791/images/65521584301810859.png" alt style="display: block;" width="600" height="70" layout="responsive"></img></a></td>--}}
{{--                                        </tr>--}}
{{--                                    </table></td>--}}
{{--                            </tr>--}}
{{--                        </table></td>--}}
{{--                </tr>--}}
{{--            </table></td>--}}
{{--    </tr>--}}
{{--</table>--}}
{{--                btn line 1--}}

{{--<table cellpadding="0" cellspacing="0" class="es-footer" align="center">--}}
{{--    <tr>--}}
{{--        <td align="center">--}}
{{--            <table class="es-footer-body" width="600" cellspacing="0" cellpadding="0" align="center">--}}
{{--                <tr>--}}
{{--                    <td class="es-p20t es-p10r es-p10l" align="left">--}}
{{--                        <table width="100%" cellspacing="0" cellpadding="0">--}}
{{--                            <tr>--}}
{{--                                <td width="580" valign="top" align="center">--}}
{{--                                    <table width="100%" cellspacing="0" cellpadding="0" role="presentation">--}}
{{--                                        <tr>--}}
{{--                                            <td class="es-p10b es-m-txt-c" align="center" style="font-size:0">--}}
{{--                                                <table class="es-table-not-adapt es-social" cellspacing="0" cellpadding="0" role="presentation">--}}
{{--                                                    <tr>--}}
{{--                                                        <td class="es-p10r" valign="top" align="center"><img title="Instagram" src="https://fdbxnb.stripocdn.email/content/assets/img/social-icons/rounded-white-bordered/instagram-rounded-white-bordered.png" alt="Inst" width="32" height="32"></img></td>--}}
{{--                                                        <td class="es-p10r" valign="top" align="center"><img title="Youtube" src="https://fdbxnb.stripocdn.email/content/assets/img/social-icons/rounded-white-bordered/youtube-rounded-white-bordered.png" alt="Yt" width="32" height="32"></img></td>--}}
{{--                                                        <td class="es-p10r" valign="top" align="center"><img title="Pinterest" src="https://fdbxnb.stripocdn.email/content/assets/img/social-icons/rounded-white-bordered/pinterest-rounded-white-bordered.png" alt="P" width="32" height="32"></img></td>--}}
{{--                                                        <td valign="top" align="center"><img title="Facebook" src="https://fdbxnb.stripocdn.email/content/assets/img/social-icons/rounded-white-bordered/facebook-rounded-white-bordered.png" alt="Fb" width="32" height="32"></img></td>--}}
{{--                                                    </tr>--}}
{{--                                                </table></td>--}}
{{--                                        </tr>--}}
{{--                                        <tr>--}}
{{--                                            <td class="es-p10t es-m-txt-c" align="center"><p>You're receiving this email because you asked us about regular newsletter.</p><p>©&nbsp;2012-2020 Maxwell Financial Services</p></td>--}}
{{--                                        </tr>--}}
{{--                                        <tr>--}}
{{--                                            <td align="center" class="es-p20t es-m-txt-c"><p><a target="_blank">Privacy Policy</a> | <a target="_blank">Unsubscribe</a></p></td>--}}
{{--                                        </tr>--}}
{{--                                    </table></td>--}}
{{--                            </tr>--}}
{{--                        </table></td>--}}
{{--                </tr>--}}
{{--            </table></td>--}}
{{--    </tr>--}}
{{--</table>--}}
{{--            end Privacy --}}
{{--</td>--}}
{{--</tr>--}}
{{--</table>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}
{{-- --}}
