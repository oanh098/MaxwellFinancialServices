
@extends('./layouts/adminPanelLayout')


@section('content')

    <div class="container mt-5">
        <form action="/holdings/shows/{{$holding->id}}" enctype="multipart/form-data" method="post">
            @method('PATCH')
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row"><h1>Edit Holding</h1></div>
                    <div class="form-group row">
                        <label for="date" class="col-md-4 col-form-label text-md-right">Date Input</label>
                        <div class="col-md-6">
                            <input id="date"
                                   type="date"
                                   class="form-control @error('date') is-invalid @enderror" name="date" value="{{ $holding->Date }}"
                                   autocomplete="date" autofocus>

                            @error('date')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Holding_Name" class="col-md-4 col-form-label text-md-right">{{ __('Holding Name') }}</label>

                        <div class="col-md-6">
                            <input id="Holding_Name" type="text" class="form-control @error('Holding_Name') is-invalid @enderror"
                                   name="Holding_Name" value="{{ $holding->Holding_Name }}"  autocomplete="Holding_Name" autofocus>

                            @error('Holding_Name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Code_Units" class="col-md-4 col-form-label text-md-right">{{ __('Code Units') }}</label>

                        <div class="col-md-6">
                            <input id="Code_Units" type="text" class="form-control @error('Code_Units') is-invalid @enderror" name="Code_Units" value="{{ $holding->Code_Units }}"  autocomplete="Code_Units" autofocus>

                            @error('Code_Units')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Registered_Units" class="col-md-4 col-form-label text-md-right">{{ __('Registered Units') }}</label>

                        <div class="col-md-6">
                            <input id="Registered_Units" type="text" class="form-control @error('Registered_Units') is-invalid @enderror" name="Registered_Units" value="{{ $holding->Registered_Units }}"  autocomplete="Registered_Units" autofocus>

                            @error('Registered_Units')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Available_Units" class="col-md-4 col-form-label text-md-right">{{ __('Available Units') }}</label>

                        <div class="col-md-6">
                            <input id="Available_Units" type="text" class="form-control @error('Available_Units') is-invalid @enderror" name="Available_Units" value="{{ $holding->Available_Units }}"  autocomplete="Available_Units" autofocus>

                            @error('Available_Units')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Reversed_Units" class="col-md-4 col-form-label text-md-right">{{ __('Reversed Units') }}</label>

                        <div class="col-md-6">
                            <input id="Reversed_Units" type="text" class="form-control @error('Reversed_Units') is-invalid @enderror" name="Reversed_Units" value="{{ $holding->Reversed_Units }}"  autocomplete="Reversed_Units" autofocus>

                            @error('Reversed_Units')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Purchase_Price" class="col-md-4 col-form-label text-md-right">{{ __('Purchase Price') }}</label>

                        <div class="col-md-6">
                            <input id="Purchase_Price" type="text" class="form-control @error('Purchase_Price') is-invalid @enderror" name="Purchase_Price" value="{{ $holding->Purchase_Price }}"  autocomplete="Purchase_Price" autofocus>

                            @error('Purchase_Price')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Total_Value" class="col-md-4 col-form-label text-md-right">{{ __('Total Value') }}</label>

                        <div class="col-md-6">
                            <input id="Total_Value" type="text" class="form-control @error('Total_Value') is-invalid @enderror" name="Total_Value" value="{{ $holding->Total_Value }}"  autocomplete="Total_Value" autofocus>

                            @error('Total_Value')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>


                      <div class="form-group row">
                        <label for="Amount_Invested" class="col-md-4 col-form-label text-md-right">{{ __('Amount Invested') }}</label>

                        <div class="col-md-6">
                            <input id="Total_Value" type="text" class="form-control @error('Amount_Invested') is-invalid @enderror" name="Amount_Invested" value="{{ $holding->Amount_Invested }}"  autocomplete="Amount_Invested" autofocus>

                            @error('Amount_Invested')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Interest_Rate" class="col-md-4 col-form-label text-md-right">{{ __('Interest Rate') }}</label>

                        <div class="col-md-6">
                            <input id="Interest_Rate" type="text" class="form-control @error('Interest_Rate') is-invalid @enderror" name="Interest_Rate" value="{{ $holding->Interest_Rate }}"  autocomplete="Interest_Rate" autofocus>

                            @error('Interest_Rate')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Fortnight_Return" class="col-md-4 col-form-label text-md-right">{{ __('Fortnight Return') }}</label>

                        <div class="col-md-6">
                            <input id="Fortnight_Return" type="text" class="form-control @error('Fortnight_Return') is-invalid @enderror" name="Fortnight_Return" value="{{ $holding->Fortnight_Return }}"  autocomplete="Fortnight_Return" autofocus>

                            @error('Fortnight_Return')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Client_Account" class="col-md-4 col-form-label text-md-right">{{ __('Client Account') }}</label>

                        <div class="col-md-6">
                            <input id="Client_Account" type="text" class="form-control @error('Client_Account') is-invalid @enderror" name="Client_Account" value="{{ $holding->Client_Account }}"  autocomplete="Client_Account" autofocus>

                            @error('Client_Account')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Bank_Name" class="col-md-4 col-form-label text-md-right">{{ __('Bank Name') }}</label>

                        <div class="col-md-6">
                            <input id="Bank_Name" type="text" class="form-control @error('Bank_Name') is-invalid @enderror" name="Bank_Name" value="{{ $holding->Bank_Name }}"  autocomplete="Bank_Name" autofocus>

                            @error('Bank_Name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>



                    @csrf
                    <div class="row">
                        <button class="btn btn-primary">Save Holding</button>
                    </div>


                </div>
            </div>



        </form>
    </div>
@endsection

