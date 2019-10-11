
@extends('layouts.app')

@section('content')

    <div class="container">
        <form action="/profiles/shows/{{$user->id}}" enctype="multipart/form-data" method="post">
            @method('PATCH')
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row"><h1>Edit Profile</h1></div>
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">UserName</label>
                        <div class="col-md-6">
                            <input id="name"
                                   type="text"
                                   class="form-control" name="name" value="{{ $user->name }}"
                                   autocomplete="name" readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                        <div class="col-md-6">
                            <input id="email" type="text" class="form-control"
                                   name="email" value="{{ $user->email }}"  autocomplete="email" readonly>


                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="first_name" class="col-md-4 col-form-label text-md-right">First Name</label>

                        <div class="col-md-6">
                            <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror"
                                   name="first_name" value="{{ $user->first_name }}"  autocomplete="first_name" autofocus>

                            @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="last_name" class="col-md-4 col-form-label text-md-right">Last Name</label>

                        <div class="col-md-6">
                            <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror"
                                   name="last_name" value="{{ $user->last_name }}"  autocomplete="last_name" autofocus>

                            @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="account_number" class="col-md-4 col-form-label text-md-right">Account Number</label>

                        <div class="col-md-6">
                            <input id="account_number" type="text" class="form-control @error('account_number') is-invalid @enderror"
                                   name="account_number" value="{{ $user->account_number }}"  autocomplete="account_number" autofocus>

                            @error('account_number')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="holdings" class="col-md-4 col-form-label text-md-right">Holdings</label>

                        <div class="col-md-6">
                            <input id="holdings" type="text" class="form-control @error('holdings') is-invalid @enderror"
                                   name="holdings" value="{{ $user->holdings }}"  autocomplete="holdings" autofocus>

                            @error('holdings')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="account_funding" class="col-md-4 col-form-label text-md-right">Account Funding</label>

                        <div class="col-md-6">
                            <input id="account_funding" type="text" class="form-control @error('account_funding') is-invalid @enderror"
                                   name="account_funding" value="{{ $user->account_funding }}"  autocomplete="account_funding" autofocus>

                            @error('account_funding')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>


                    @csrf
                    <div class="row">
                        <button class="btn btn-primary">Save Profile</button>
                    </div>


                </div>
            </div>



        </form>
    </div>
@endsection

