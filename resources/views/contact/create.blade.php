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
                                <p style="margin:0.12em 0em 1em 10em;line-height:1.375;">
                            <div class="form-group">
                                <label class="col-lg-4 col-md-4 col-sm-4 col-xs-12 control-label">Name</label>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <input type="text" class="form-control" data-vali="novalidation" name="name" />
                                    <div>{{$errors->first('name')}}</div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-4 col-md-4 col-sm-4 col-xs-12 control-label">Email</label>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <input type="text" class="form-control" data-vali="novalidation" name="email" />
                                    <div>{{$errors->first('email')}}</div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-4 col-md-4 col-sm-4 col-xs-12 control-label">Choose your country</label>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <select id="country" name="country">
                                        <option selected>AU</option>
                                        <option>Others</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-4 col-md-4 col-sm-4 col-xs-12 control-label">Phone Number</label>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <input type="tel" id="telNo" name="telNo" placeholder="0123-456-789"
                                          required size="20" minlength="9" maxlength="14" /><span style="visibility:visible" class="validity"></span>
                                    <div>{{$errors->first('telNo')}}</div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-4 col-md-4 col-sm-4 col-xs-12 control-label">Subject</label>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <input type="text" class="form-control" data-vali="novalidation" name="subject" />
                                    <div>{{$errors->first('subject')}}</div>
                                </div>
                            </div>

                            <div class="form-group" style="padding-top: 1em">
                                <label class="col-lg-4 col-md-4 col-sm-4 col-xs-12 control-label">Message</label>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <textarea class="form-control comment" name="message" rows="4"></textarea>
                                </div>
                            </div>

                            @csrf
                            <div class="form-group" style="padding-top: 1em">
                                <div class="col-sm-8 col-sm-offset-4">
                                    <input type="submit" class="pull-left btn btn-md btn-default" id="submitform" name="submit" value="Send Message" />
                                </div>
                            </div>

                            <div class="req_field"></div>
                        </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
