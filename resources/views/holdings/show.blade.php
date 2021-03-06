
@extends('./layouts/adminPanelLayout')


@section('content')

    <div class="container mt-5" >
        <form action="#" enctype="multipart/form-data" method="post">
            @csrf
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row"><h1>Holding Details</h1></div>
                    <div><a href="/holdings/{{auth()->id()}}">Back</a></div>

                    <div class="row pt-3">
                        <div class="col-md-4 text-md-right ">Date Input</div>
                        <div class="col-md-6">{{date('d-m-Y', strtotime( $holding->Date))}}
                            {{--                            {{ $holding->Date->format('m-d-Y') }}--}}
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-md-4 text-md-right ">Holding Name</div>
                        <div class="col-md-6">{{ $holding->Holding_Name }} </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-md-4 text-md-right ">Code Units</div>
                        <div class="col-md-6">{{ $holding->Code_Units }} </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-md-4 text-md-right ">Registered Units</div>
                        <div class="col-md-6">{{ $holding->Registered_Units }} </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-md-4 text-md-right ">Available Units</div>
                        <div class="col-md-6">{{ $holding->Available_Units }} </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-md-4 text-md-right ">Reversed Units</div>
                        <div class="col-md-6">{{ $holding->Reversed_Units }} </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-md-4 text-md-right ">Purchase Price</div>
                        <div class="col-md-6">{{ $holding->Purchase_Price }} </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-md-4 text-md-right ">Total Value</div>
                        <div class="col-md-6">{{ $holding->Total_Value }} </div>
                    </div>



                    <div class="row pt-3">
                        <div class="col-md-4 text-md-right ">Amount Invested</div>
                        <div class="col-md-6">{{ $holding->Amount_Invested }} </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-md-4 text-md-right ">Interest Rate</div>
                        <div class="col-md-6">{{ $holding->Interest_Rate }} </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-md-4 text-md-right ">Fornight Return</div>
                        <div class="col-md-6">{{ $holding->Fortnight_Return }} </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-md-4 text-md-right ">Client Account</div>
                        <div class="col-md-6">{{ $holding->Client_Account }} </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-md-4 text-md-right ">Bank Name</div>
                        <div class="col-md-6">{{ $holding->Bank_Name }} </div>
                    </div>

                    <div><a href="/holdings/shows/{{$holding->id}}/edit">Edit</a></div>

                </div>
            </div>



        </form>
    </div>
@endsection

