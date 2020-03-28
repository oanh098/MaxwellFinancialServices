{{--    @include('inc.nav')--}}
<header id="ttr_header">
    <div id="ttr_header_inner" style="display: flex; direction: ltr; justify-content: space-between">
        <div class="ttr_header_logo" style="flex-shrink: 0">
            <img src="{{asset('FrontEnd')}}/logo.png" alt="Logo Image" />
        </div>
{{--        <div class="ttr_header_element_alignment container">--}}
{{--        </div>--}}
        <div class="ttr_headershape01"  style="flex-shrink: 2; ">
{{--            <div class="html_content">--}}
{{--                <p>--}}
{{--                    <span style="font-family: Arial; font-weight:500;font-size:3.25em;">--}}
                        {{$headerTitle ?? ''}}
{{--                    </span>--}}
{{--            </p>--}}
{{--            </div>--}}
        </div>
    </div>
{{--    @include('inc.nav')--}}

</header>
