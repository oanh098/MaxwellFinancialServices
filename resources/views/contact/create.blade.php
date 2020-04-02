@extends('layouts.appMaxwell')
@section('content')
    <div class="ttr_liabilities-management_html_row0 row">
        <div class=" col-lg-12 col-md-10 col-sm-10 col-xs-12">
            <div class="ttr_liabilities-management_html_column00">
                <div class="html_content"><br style="line-height:1.375;" /><p style="margin:0.12em 0em 0em 0.5em;line-height:1.375;">
                    <div class="contactformdiv" style="margin:10px 10px 10px 10px;">
                        <form id="ContactForm5" class="form-horizontal" role="form" method="post" action="/contactus" style="float:left;width:100%;">
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
                                <label class="col-lg-4 col-md-4 col-sm-4 col-xs-12 control-label">Subject</label>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <input type="text" class="form-control" data-vali="novalidation" name="subject" />
                                    <div>{{$errors->first('subject')}}</div>
                                </div>
                            </div>
                            <div class="form-group">
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

                            <div class="success" style="text-align: center; font-size: 1.5em;">
                                @if(session('success'))
                                    <p>{{session('success')}}</p>
                                @endif
                            </div>




                            <div class="req_field"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
