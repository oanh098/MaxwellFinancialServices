
@extends('layouts.app')

@section('content')

    <div class="container">
        <form action="#" enctype="multipart/form-data" method="post">
            @csrf
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row"><h1>Client Details</h1></div>
{{--                    <div><a href="/holdings/{{auth()->id()}}">Back</a></div>--}}
                    <div class="row pt-3">
                        <div class="col-md-4 text-md-right ">User Name</div>
                        <div class="col-md-6">{{ $user->name }} </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-md-4 text-md-right ">Email</div>
                        <div class="col-md-6">{{ $user->email }} </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-md-4 text-md-right ">First Name</div>
                        <div class="col-md-6">{{ $user->first_name }} </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-md-4 text-md-right ">Last Name</div>
                        <div class="col-md-6">{{ $user->last_name }} </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-md-4 text-md-right ">Account Number</div>
                        <div class="col-md-6">{{ $user->account_number }} </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-md-4 text-md-right ">Holdings</div>
                        <div class="col-md-6">{{ $user->holdings}} </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-md-4 text-md-right ">Account Funding</div>
                        <div class="col-md-6">{{ $user->account_funding }} </div>
                    </div>

                    <div><a href="/profiles/shows/{{$user->id}}/edit">Edit</a></div>

                </div>
            </div>



        </form>
    </div>
@endsection

