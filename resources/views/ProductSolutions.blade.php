@extends('layouts.appMaxwell')
@section('content')


     <div class="trailer" >
        <div style="width: 100%"> @include('inc.menu')</div>
        <h1>Wills & Power of Attorneys</h1>
        <br />
        <br />
        <br />
        <a href="">
            <img id="imgReturn"  src="{{asset('FrontEnd')}}/newImages/return.png"  alt="" class=""  olick="toggle()">
        </a>
        <div id="idframe"><iframe src="https://player.vimeo.com/video/394174481?title=0&byline=0&portrait=0"
             frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div>
        <script src="https://player.vimeo.com/api/player.js"></script>
    </div>


    <section class="clsProductSolutions">
        <div>
            <a href="#" onclick="toggle()"
            style="color: #000; background: rgba(234,67,53,.7);cursor: pointer;">
            Click here for video presentation.</a>
        </div>
        <p>An effective estate plan includes tax effective Wills to protect your esatate and the interests of your beneficiaries in the event of your death. Drawing up or even revising a will is not on most peoples to do Lists, however it is an important part of life no matter what your age, especially if you have a variety of investments. In Australia will and Estates fall undertow areas of law known as succession law and probate, and in almost all cases, they are designed to ensure that the death of a person that their final wishes are fulfilled wherever possible. Without a will, this can be an expensive, time consuming and often distressing process for loved one.</p>
        <p>If your estate is fairly straightforward, it is possible to write your own will. Will packs can be bought at Australian Post Offices and many newsagents or download online. Please contact Maxwell Financial Services for any information regarding your Will.</p>

    </section>

@endsection
