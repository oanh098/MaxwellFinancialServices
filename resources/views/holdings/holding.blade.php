@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-2" >
                <img src="{{asset('frontEnd')}}/slideshowlogo.png" style="width: auto; height: 150px; margin-top: 15px;" ></div>
            <div class="col-md-1" ></div>
            <div class="col-md-8">
                <div class="card">
                    <div class="row justify-content-center pt-4"><h1>CLIENT DETAILS</h1></div>

                    <div class="card-body">
                        <div>Client Name: {{$user->name}}</div>
                        <div>Account Number: {{$user->account_number ?? 'N/A'}} </div>
                        <div>Holdings:</div>
                        <div>{{$user->holding}}</div>
                        <div><a href="/profiles/shows/{{auth()->user()->id}}">View Details</a></div>
                    </div>
                </div>
            </div>
        </div>


            @can('create', App\Holding::class)

                <div  class="row justify-content-center pt-4">
                    <div class="col-xs-6 col-sm-6 col-lg-6 pt-3" style="text-align: left;padding-left: 100px;">
                        <p ><a href="/holdings/user/create">Add new Holding</a> </p></div>

                    <div class="col-xs-6 col-sm-6 col-lg-6"><h1>Holdings Data</h1></div>
                </div>


            <div class="row justify-content-center">
                <div class="col-xs-1 col-sm-1 col-lg-1 border font-weight-bold" >No</div>
                <div class="col-xs-2 col-sm-2 col-lg-2 border font-weight-bold" >Date</div>
                <div class="col-xs-2 col-sm-2 col-lg-2 border font-weight-bold" >Name</div>
                <div class="col-xs-1 col-sm-1 col-lg-1 border font-weight-bold" >Code Units</div>
                <div class="col-xs-1 col-sm-1 col-lg-1 border font-weight-bold" >Registered Units</div>
                <div class="col-xs-1 col-sm-1 col-lg-1 border font-weight-bold" >Available Units</div>
                <div class="col-xs-1 col-sm-1 col-lg-1 border font-weight-bold" >Reversed Units</div>
                <div class="col-xs-2 col-sm-2 col-lg-1 border font-weight-bold" >Purchase Price</div>
                <div class="col-xs-2 col-sm-2 col-lg-1 border font-weight-bold" >Total Value</div>
            </div>

                @foreach($holdings as $holding1)

                    <div class="row justify-content-center">
                        <div class="col-xs-1 col-sm-1 col-lg-1 border" >{{$holding1->id}}</div>
                        <div class="col-xs-2 col-sm-2 col-lg-2 border" >{{$holding1->Date}}</div>

                        <div class="col-xs-2 col-sm-2 col-lg-2 border" >
                            <a href="/holdings/shows/{{$holding1->id}}">{{$holding1->Holding_Name}}</a></div>
                        <div class="col-xs-1 col-sm-1 col-lg-1 border" >{{$holding1->Code_Units}}</div>
                        <div class="col-xs-1 col-sm-1 col-lg-1 border" >{{$holding1->Registered_Units}}</div>
                        <div class="col-xs-1 col-sm-1 col-lg-1 border" >{{$holding1->Available_Units}}</div>
                        <div class="col-xs-1 col-sm-1 col-lg-1 border" >{{$holding1->Reversed_Units}}</div>
                        <div class="col-xs-2 col-sm-2 col-lg-1 border" >{{$holding1->Purchase_Price}}</div>
                        <div class="col-xs-2 col-sm-2 col-lg-1 border" >{{$holding1->Total_Value}}</div>
                    </div>
                @endforeach
            @endcan


            @can('create', App\Holding::class)
            <div class="row justify-content-center pt-4"><h1>CLIENTS DATA</h1></div>
                <div class="row justify-content-center">
                    <div class="col-xs-1 col-sm-1 col-lg-1 border font-weight-bold" >No</div>
                    <div class="col-xs-2 col-sm-2 col-lg-2 border font-weight-bold" >Name</div>
                    <div class="col-xs-3 col-sm-3 col-lg-3 border font-weight-bold" >Email</div>
                </div>
                @foreach($users as $user1)
                    <div class="row justify-content-center">
                        <div class="col-xs-1 col-sm-1 col-lg-1 border" >{{$user1->id}}</div>
                        <div class="col-xs-2 col-sm-2 col-lg-2 border" ><a href="/holdings/user/{{$user1->id}}/edit">{{$user1->name}}</a></div>
                        <div class="col-xs-3 col-sm-3 col-lg-3 border" >{{$user1->email}}</div>
                    </div>
                @endforeach
            @endcan


        @cannot('create', App\Holding::class)

            <div class="row justify-content-center pt-4"><h1>Holdings Details</h1></div>

            <div class="row justify-content-center">
                <div class="col-xs-1 col-sm-1 col-lg-1 border font-weight-bold" >No</div>
                <div class="col-xs-2 col-sm-2 col-lg-2 border font-weight-bold" >Date</div>
                <div class="col-xs-2 col-sm-2 col-lg-2 border font-weight-bold" >Name</div>
                <div class="col-xs-1 col-sm-1 col-lg-1 border font-weight-bold" >Code Units</div>
                <div class="col-xs-1 col-sm-1 col-lg-1 border font-weight-bold" >Registered Units</div>
                <div class="col-xs-1 col-sm-1 col-lg-1 border font-weight-bold" >Available Units</div>
                <div class="col-xs-1 col-sm-1 col-lg-1 border font-weight-bold" >Reversed Units</div>
                <div class="col-xs-2 col-sm-2 col-lg-1 border font-weight-bold" >Purchase Price</div>
                <div class="col-xs-2 col-sm-2 col-lg-1 border font-weight-bold" >Total Value</div>
            </div>

            @foreach($user->Holdings as $holding)

                <div class="row justify-content-center">
                    <div class="col-xs-1 col-sm-1 col-lg-1 border" >{{$holding->id}}</div>
                    <div class="col-xs-2 col-sm-2 col-lg-2 border" >{{$holding->Date}}</div>
                    <div class="col-xs-2 col-sm-2 col-lg-2 border" >{{$holding->Holding_Name}}</div>
                    <div class="col-xs-1 col-sm-1 col-lg-1 border" >{{$holding->Code_Units}}</div>
                    <div class="col-xs-1 col-sm-1 col-lg-1 border" >{{$holding->Registered_Units}}</div>
                    <div class="col-xs-1 col-sm-1 col-lg-1 border" >{{$holding->Available_Units}}</div>
                    <div class="col-xs-1 col-sm-1 col-lg-1 border" >{{$holding->Reversed_Units}}</div>
                    <div class="col-xs-1 col-sm-2 col-lg-1 border" >{{$holding->Purchase_Price}}</div>
                    <div class="col-xs-1 col-sm-2 col-lg-1 border" >{{$holding->Total_Value}}</div>
                </div>
            @endforeach
        @endcannot


    </div>
@endsection
