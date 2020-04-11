@extends('layouts.appMaxwell')
@section('content')

    <div class="trailer" >
        <div class="row" >
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="align-items: center; justify-content: center;">
                <img src="{{asset('FrontEnd')}}/images/return.png"  alt="" class="" style=" max-width: 45px; filter:  invert(1);" onclick="toggle()">
            </div>
        </div>

        <div class="row" >

            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12  flex-video-title" >
                Wills & Power of Attorneys

                <iframe src="https://player.vimeo.com/video/394174481?byline=0&portrait=0" width="900" height="506" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                <p><a href="https://vimeo.com/394174481">Wills and Power of Attorneys</a></p>

                </iframe>
            </div>
        </div>
    </div>

    <div class="row" > <div class="col-lg-9 col-md-9 col-sm-8 col-xs-9" ></div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-9" >
            <a style="color: #1155cc; background-color: yellow;" onclick="toggle()">Click here for more detail.</a>
        </div></div>

    <div class="ttr_liabilities-management_html_row0 row">
        <div class=" col-lg-12 col-md-10 col-sm-10 col-xs-9">
                <div class="html_content">
                    <p>
                            An effective estate plan includes tax effective Wills to protect your esatate and the interests of your beneficiaries in the event of your death. Drawing up or even revising a will is not on most peoples to do Lists, however it is an important part of life no matter what your age, especially if you have a variety of investments. In Australia will and Estates fall undertow areas of law known as succession law and probate, and in almost all cases, they are designed to ensure that the death of a person that their final wishes are fulfilled wherever possible. Without a will, this can be an expensive, time consuming and often distressing process for loved one.
                    </p>
                    <p>
                            If your estate is fairly straightforward, it is possible to write your own will. Will packs can be bought at Australian Post Offices and many newsagents or download online. Please contact Maxwell Financial Services for any information regarding your Will.
                    </p>
                </div>
        </div>
{{--        <div class=" visible-lg-block" style="clear: both;"></div>--}}
    </div>
    @endsection
