@extends('layouts.appMaxwell')
@section('content')
    <style>

        input:invalid+span:after {
            position: absolute; content: '✖';
            padding-left: 5px;
            color: #8b0000;}
        input:valid+span:after {
            position: absolute;
            content: '✓';
            padding-left: 5px;
            color: #009000;
        }

    </style>

     <div class="ttr_liabilities-management_html_row0 row">
        <div class=" col-lg-12 col-md-10 col-sm-10 col-xs-12">
                <div class="html_content">

                    <div class="contactformdiv" >
                        <form id="ContactForm5" class="form-horizontal" role="form" method="post" action="/contactus" style="float:left;width:100%;">
                            @if(session('success'))<div class="success" style="text-align: center; font-size: 1.5em;">

                                    <p id="hidethis"> {{session('success')}} </p>
                                    <br>

                            </div> @endif
                            <div class="form-row pt-2">
                                <label class="col-lg-4 col-md-4 col-sm-4 col-xs-12 control-label">Name</label>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <input type="text" class="form-control" data-vali="novalidation" name="name" />
                                    <div>{{$errors->first('name')}}</div>
                                </div>
                            </div>

                            <div class="form-row pt-2">
                                <label class="col-lg-4 col-md-4 col-sm-4 col-xs-12 control-label">Email</label>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <input type="text" class="form-control" data-vali="novalidation" name="email" />
                                    <div>{{$errors->first('email')}}</div>
                                </div>
                            </div>

                            <div class="form-row pt-2">
                                <label class="col-lg-4 col-md-4 col-sm-4 col-xs-12 control-label">Choose your country</label>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <select id="country" name="country">
                                        <option selected>AU</option>
                                        <option>Others</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-row pt-2">
                                <label class="col-lg-4 col-md-4 col-sm-4 col-xs-12 control-label">Phone Number</label>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <input type="tel" id="telNo" name="telNo" placeholder="0123-456-789"
                                          required size="20" minlength="9" maxlength="14" /><span style="visibility:visible" class="validity"></span>
                                    <div>{{$errors->first('telNo')}}</div>
                                </div>
                            </div>

                            <div class="form-row pt-2">
                                <label class="col-lg-4 col-md-4 col-sm-4 col-xs-12 control-label">Subject</label>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <input type="text" class="form-control" data-vali="novalidation" name="subject" />
                                    <div>{{$errors->first('subject')}}</div>
                                </div>
                            </div>

                            <div class="form-row pt-2" >
                                <label class="col-lg-4 col-md-4 col-sm-4 col-xs-12 control-label">Message</label>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <textarea class="form-control comment" name="message" rows="4"></textarea>
                                </div>
                            </div>

                            @csrf
                            <div class="form-row pt-2">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
                                <div class="col-sm-8 col-sm-offset-4">
                                    <input type="submit" class="btn btn-primary" id="submitform" name="submit" value="Send Message" />
                                </div>
                            </div>

                            <div class="req_field"></div>
                        </form>


                        <script>
                            // document.getElementById("drop").onchange = function() {
                            //     if (this.selectedIndex !== 0) {
                            //         window.location.href = this.value;
                            //     }
                            // };

                            $(document).ready(function() {
                                var selectElem = document.querySelector("#country");
                                var inputEle = document.querySelector("#telNo");
                                var spanvalidity = document.querySelector(".validity");

                                selectElem.onchange = function () {
                                    if(selectElem.value === "AU") {
                                        inputEle.placeholder = "0123-456-789";
                                        spanvalidity.style.visibility = "visible";
                                    }else if(selectElem.value === "Others"){
                                        inputEle.placeholder = "Maximum 20 digits";
                                        spanvalidity.style.visibility = "hidden";
                                    }
                                }

                            })
                        </script>
                </div>
            </div>
        </div>
    </div>
    @endsection
