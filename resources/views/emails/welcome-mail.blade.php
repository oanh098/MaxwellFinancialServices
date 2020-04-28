




<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="utf-8"> <!-- utf-8 works for most cases -->
    <meta name="viewport" content="width=device-width"> <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
    <meta name="x-apple-disable-message-reformatting">  <!-- Disable auto-scale in iOS 10 Mail entirely -->
    <title></title> <!-- The title tag shows in email notifications, like Android 4.4. -->

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700" rel="stylesheet">

    <!-- CSS Reset : BEGIN -->
    <style>

        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
            background: #f1f1f1;
        }

        /* What it does: Stops email clients resizing small text. */
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        /* What it does: Centers email on Android 4.4 */
        div[style*="margin: 16px 0"] {
            margin: 0 !important;
        }

        /* What it does: Stops Outlook from adding extra spacing to tables. */
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }

        /* What it does: Fixes webkit padding issue. */
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }

        /* What it does: Uses a better rendering method when resizing images in IE. */
        img {
            -ms-interpolation-mode:bicubic;
        }

        /* What it does: Prevents Windows 10 Mail from underlining links despite inline CSS. Styles for underlined links should be inline. */
        a {
            text-decoration: none;
        }

        /* What it does: A work-around for email clients meddling in triggered links. */
        *[x-apple-data-detectors],  /* iOS */
        .unstyle-auto-detected-links *,
        .aBn {
            border-bottom: 0 !important;
            cursor: default !important;
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        /* What it does: Prevents Gmail from displaying a download button on large, non-linked images. */
        .a6S {
            display: none !important;
            opacity: 0.01 !important;
        }

        /* What it does: Prevents Gmail from changing the text color in conversation threads. */
        .im {
            color: inherit !important;
        }

        /* If the above doesn't work, add a .g-img class to any image in question. */
        img.g-img + div {
            display: none !important;
        }

        /* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
        /* Create one of these media queries for each additional viewport size you'd like to fix */

        /* iPhone 4, 4S, 5, 5S, 5C, and 5SE */
        @media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
            u ~ div .email-container {
                min-width: 320px !important;
            }
        }
        /* iPhone 6, 6S, 7, 8, and X */
        @media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
            u ~ div .email-container {
                min-width: 375px !important;
            }
        }
        /* iPhone 6+, 7+, and 8+ */
        @media only screen and (min-device-width: 414px) {
            u ~ div .email-container {
                min-width: 414px !important;
            }
        }

    </style>

    <!-- CSS Reset : END -->

    <!-- Progressive Enhancements : BEGIN -->
    <style>

        .primary{
            background: #2f89fc;
        }
        .bg_white{
            background: #ffffff;
        }
        .bg_light{
            background: #F7F7F6;
        }
        .bg_black{
            background: #223748;
        }
        .bg_dark{
            background: rgba(0,0,0,.8);
        }
        .email-section{
            padding:2.5em;
        }

        /*BUTTON*/
        .btn{
            padding: 5px 15px;
            display: inline-block;
        }
        .btn.btn-primary{
            border-radius: 5px;
            background: #2f89fc;
            color: #ffffff;
        }
        .btn.btn-white{
            border-radius: 5px;
            background: #ffffff;
            color: #000000;
        }
        .btn.btn-white-outline{
            border-radius: 5px;
            background: transparent;
            border: 1px solid #fff;
            color: #fff;
        }

        h1,h2,h3,h4,h5,h6{
            font-family: 'Work Sans', sans-serif;
            color: #000000;
            margin-top: 0;
            font-weight: 400;
        }

        body{
            font-family: 'Work Sans', sans-serif;
            font-weight: 400;
            font-size: 15px;
            line-height: 1.8;
            color: rgba(0,0,0,.4);
        }

        a{
            color: #2f89fc;
        }

        table{
        }
        /*LOGO*/

        .logo h1{
            margin: 0;
        }
        .logo h1 a{
            color: #000000;
            font-size: 20px;
            font-weight: 700;
            text-transform: uppercase;
            font-family: 'Poppins', sans-serif;
        }

        .navigation{
            padding: 0;
        }
        .navigation li{
            list-style: none;
            display: inline-block;;
            margin-left: 5px;
            font-size: 13px;
            font-weight: 500;
        }
        .navigation li a{
            color: rgba(0,0,0,.4);
        }

        /*HERO*/
        .hero{
            position: relative;
            z-index: 0;
        }

        .hero .text{
            color: rgba(0,0,0,.3);
        }
        .hero .text h2{
            color: #000;
            font-size: 30px;
            margin-bottom: 0;
            font-weight: 300;
        }
        .hero .text h2 span{
            font-weight: 600;
            color: #2f89fc;
        }


        /*HEADING SECTION*/
        .heading-section{
        }
        .heading-section h2{
            color: #000000;
            font-size: 28px;
            margin-top: 0;
            line-height: 1.4;
            font-weight: 400;
        }
        .heading-section .subheading{
            margin-bottom: 20px !important;
            display: inline-block;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: rgba(0,0,0,.4);
            position: relative;
        }
        .heading-section .subheading::after{
            position: absolute;
            left: 0;
            right: 0;
            bottom: -10px;
            content: '';
            width: 100%;
            height: 2px;
            background: #2f89fc;
            margin: 0 auto;
        }

        .heading-section-white{
            color: rgba(255,255,255,.8);
        }
        .heading-section-white h2{
            font-family:
            line-height: 1;
            padding-bottom: 0;
        }
        .heading-section-white h2{
            color: #ffffff;
        }
        .heading-section-white .subheading{
            margin-bottom: 0;
            display: inline-block;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: rgba(255,255,255,.4);
        }

        /*PROJECT*/
        .text-project{
            padding-top: 10px;
        }
        .text-project h3{
            margin-bottom: 0;
        }
        .text-project h3 a{
            color: #000;
        }

        /*FOOTER*/

        .footer{
            color: rgba(255,255,255,.5);

        }
        .footer .heading{
            color: #ffffff;
            font-size: 20px;
        }
        .footer ul{
            margin: 0;
            padding: 0;
        }
        .footer ul li{
            list-style: none;
            margin-bottom: 10px;
        }
        .footer ul li a{
            color: rgba(255,255,255,1);
        }


        @media screen and (max-width: 500px) {


        }


    </style>


</head>

<body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #222222;">
<center style="width: 100%; background-color: #223748;">
    <div style="display: none; font-size: 1px;max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;">
        &zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
    </div>
    <div style="max-width: 600px; margin: 0 auto;" class="email-container">
        <!-- BEGIN BODY -->
        <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto; background-color: #F7F7F6;">
            <tr>
                <td valign="top" class="bg_white" >
                    <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tr>
                            <td>
                                <img src="https://fdbxnb.stripocdn.email/content/guids/CABINET_1faf7ee19c6e2f2719e50e9450434791/images/91311584339430983.png"
                                     alt="maxwellfinancialservices" title="maxwellfinancialservices"  width="100%">
                            </td>
                        </tr>
                    </table>
                </td>
            </tr><!-- end tr -->
            <tr>
                <td valign="middle" class="hero hero-2 bg_light" style="padding: 4em 2em;">
                    <table>
                        <tr>
                            <td >
                                <!--                                <img src="" alt="" style="position: relative; margin-top: 2em">-->
                                <h3 style="font-size: 1.2em;font-weight: 600; line-height: 1em">
                                    We’re very happy you’re here at Maxwell Financial Services.</h3>
                                <h3 style="font-size: 1.2em; line-height: 1em">What does planning your finances mean to you? Here, at Maxwell Financial Services,
                                    we believe your vision and future endeavors are as unique as you are. We also know that the field of finance isn’t for everyone – and it shouldn’t be.
                                    Let us handle it. We are committed to helping you develop your future, focusing on what’s important for you and guiding you to make informed financial
                                    decisions and implement effective solutions. Please find enclosed an information pack in video format of our services.</h3>
                                <br>
                                <p><h3 style="font-size: 1.2em; line-height: 1em">Regards,</h3></p>
                                <p><h3 style="font-size: 1.2em; line-height: 1em">Maxwell Financial Services</h3></p>

                            </td>
                        </tr>
                    </table>
                </td>
            </tr><!-- end tr -->
            <tr>
                <td class="bg_white">
                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                        <tr>
                            <td class="bg_white email-section">
                                <div class="heading-section" >
                                    <h3 style="text-align: center;"><a href="https://www.maxwellfinancialservices.com/"
                                           style="
           display: inline-block;
            padding: 15px 30px;
            background: black;
            color: #fff;
            letter-spacing: 2px;">Getting started</a> </h3>
                                    <p></p>
                                </div>
                                <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                                    <tr>
                                        <td valign="top" width="50%">
                                            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                                <tr>
                                                    <td style="padding-top: 20px; padding-right: 10px;">

                                                        <a target="_blank" href="https://vimeo.com/393155428">
                                                            <img class="adapt-img" src="https://fdbxnb.stripocdn.email/content/guids/videoImgGuid/images/90281584301382897.png"
                                                                 alt="MFS Fixed Term Deposit" width="100%" title="MFS Fixed Term Deposit" height="112" layout="responsive" >
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding-top: 20px; padding-right: 10px;">
                                                        <!--                                                        <a href="#"><img src="images/work-2.jpg" alt="" style="width: 100%; max-width: 600px; height: auto; margin: auto; display: block;"></a>-->
                                                        <!--                                                        <div class="text-project" style="text-align: center;">-->
                                                        <!--                                                            <h3><a href="#">Work name</a></h3>-->
                                                        <!--                                                            <span>Printing</span>-->
                                                        <!--                                                        </div>-->

                                                        <a target="_blank" href="https://vimeo.com/393134816"><img class="adapt-img" src="https://fdbxnb.stripocdn.email/content/guids/videoImgGuid/images/33011584301429890.png"
                                                                                                                   alt="MFS" width="100%" title="MFS" height="112" layout="responsive"></img></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding-top: 20px; padding-right: 10px;">
                                                        <!--                                                        <a href="#"><img src="images/work-3.jpg" alt="" style="width: 100%; max-width: 600px; height: auto; margin: auto; display: block;"></a>-->
                                                        <!--                                                        <div class="text-project" style="text-align: center;">-->
                                                        <!--                                                            <h3><a href="#">Work</a></h3>-->
                                                        <!--                                                            <span>Printing</span>-->
                                                        <!--                                                        </div>-->
                                                        <a target="_blank" href="https://vimeo.com/393193769"><img class="adapt-img" src="https://fdbxnb.stripocdn.email/content/guids/videoImgGuid/images/12551584301447753.png"
                                                                                                                   alt="MFS Superannuation SMSF" width="100%" title="MFS Superannuation SMSF" height="112" layout="responsive"></img></a>




                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding-top: 20px; padding-right: 10px;">
                                                        <!--                                                        <a href="#"><img src="images/work-4.jpg" alt="" style="width: 100%; max-width: 600px; height: auto; margin: auto; display: block;"></a>-->
                                                        <!--                                                        <div class="text-project" style="text-align: center;">-->
                                                        <!--                                                            <h3><a href="#">Work</a></h3>-->
                                                        <!--                                                            <span>Printing</span>-->
                                                        <!--                                                        </div>-->

                                                        <a target="_blank" href="https://vimeo.com/393134816"><img class="adapt-img" src="https://fdbxnb.stripocdn.email/content/guids/videoImgGuid/images/33011584301429890.png"
                                                                                                                   alt="MFS" width="100%" title="MFS" height="169" layout="responsive"></img></a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>



                                        <td valign="top" width="50%">
                                            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                                <tr>
                                                    <td style="padding-top: 20px; padding-left: 10px;">
                                                        <!--                                                        <a href="#"><img src="images/work-5.jpg" alt="" style="width: 100%; max-width: 600px; height: auto; margin: auto; display: block;"></a>-->
                                                        <!--                                                        <div class="text-project" style="text-align: center;">-->
                                                        <!--                                                            <h3><a href="#">Work name</a></h3>-->
                                                        <!--                                                            <span>Branding</span>-->
                                                        <!--                                                        </div>-->

                                                        <a target="_blank" href="https://vimeo.com/394410951"><img class="adapt-img" src="https://fdbxnb.stripocdn.email/content/guids/videoImgGuid/images/22471584301471996.png"
                                                                                                                   alt="Cannabis industry" width="100%" title="Cannabis industry" height="112" layout="responsive"></img></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding-top: 20px; padding-left: 10px;">
                                                        <!--                                                        <a href="#"><img src="images/work-6.jpg" alt="" style="width: 100%; max-width: 600px; height: auto; margin: auto; display: block;"></a>-->
                                                        <!--                                                        <div class="text-project" style="text-align: center;">-->
                                                        <!--                                                            <h3><a href="#">Work name</a></h3>-->
                                                        <!--                                                            <span>Branding</span>-->
                                                        <!--                                                        </div>-->
                                                        <a target="_blank" href="https://vimeo.com/393087286"><img class="adapt-img" src="https://fdbxnb.stripocdn.email/content/guids/videoImgGuid/images/52471584301485358.png"
                                                                                                                   alt="Maxwell Financial Services What is an IPO?" width="100%" title="Maxwell Financial Services What is an IPO?" height="112" layout="responsive"></img></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding-top: 20px; padding-left: 10px;">
                                                        <!--                                                        <a href="#"><img src="images/work-7.jpg" alt="" style="width: 100%; max-width: 600px; height: auto; margin: auto; display: block;"></a>-->
                                                        <!--                                                        <div class="text-project" style="text-align: center;">-->
                                                        <!--                                                            <h3><a href="#">Work name</a></h3>-->
                                                        <!--                                                            <span>Branding</span>-->
                                                        <!--                                                        </div>-->
                                                        <a target="_blank" href="https://vimeo.com/393086294">
                                                            <img class="adapt-img" src="https://fdbxnb.stripocdn.email/content/guids/videoImgGuid/images/73241584301504070.png"
                                                                                                                   alt="MFS International Investing" width="100%" title="MFS International Investing" height="112" layout="responsive"></img></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding-top: 20px; padding-left: 10px;">
                                                        <!--                                                        <a href="#"><img src="images/work-8.jpg" alt="" style="width: 100%; max-width: 600px; height: auto; margin: auto; display: block;"></a>-->
                                                        <!--                                                        <div class="text-project" style="text-align: center;">-->
                                                        <!--                                                            <h3><a href="#">Work name</a></h3>-->
                                                        <!--                                                            <span>Branding</span>-->
                                                        <!--                                                        </div>-->

                                                        <a target="_blank" href="https://vimeo.com/394174481"><img class="adapt-img" src="https://fdbxnb.stripocdn.email/content/guids/videoImgGuid/images/20351584301558600.png"
                                                                                                                   alt="Wills and Probate" width="100%" title="Wills and Probate" height="169" layout="responsive"></img></a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr><!-- end: tr -->



                        <tr>
                            <td width="100%">
                                <img  src="https://fdbxnb.stripocdn.email/content/guids/CABINET_1faf7ee19c6e2f2719e50e9450434791/images/65521584301810859.png" width="100%"  alt="">
                            </td>
                        </tr>

                    </table>

                </td>
            </tr><!-- end:tr -->



            <!-- 1 Column Text + Button : END -->
{{--        </table>--}}
{{--        <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">--}}

            <tr style="padding-top: 4em">
                <td valign="middle" class="bg_black footer email-section" >
                    <table>
                        <tr>
                            <td valign="top" width="100%" >
                                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                    <tr>
                                        <td style="text-align: left; padding-right: 10px;">
                                            <p>
                                                You're receiving this email because you asked us about regular newsletter.</p>

                                            <p> © 2012-2020 Maxwell Financial Services

                                            </p>
                                        </td>
                                    </tr>
                                </table>
                            </td>
{{--                            <td valign="top" width="50%">--}}
{{--                                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">--}}
{{--                                    <tr>--}}
{{--                                        <td style="text-align: right; padding-left: 5px; padding-right: 5px;">--}}
{{--                                            <p><a href="#" style="color: rgba(255,255,255,.4);">Privacy Policy | Unsubscribe</a></p>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                </table>--}}
{{--                            </td>--}}
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

    </div>
</center>
</body>
</html>





