@extends('layouts.adminPanelLayout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body"><h1>Edit User Holdings</h1>

                    </div>
                    <div class="card-body">
                        <div>Client Name: {{$user1->email}}</div>
                        <div>Account Number: {{$user1->account_number ?? 'N/A'}} </div>
                        <div>Holdings:</div>
                        <div>{{$user1->holding}}</div>
                    </div>
                    <div class="card-body">   <a href="/holdings/{{auth()->id()}}">Back</a></div>
                </div>

            </div>
        </div>
        <div class="row justify-content-center pt-4"><h1>Add - Remove </h1></div>


        @can('create', App\Holding::class)
            <div id="btn_store_pivot_table" data-user_id="{{$user1->id}}" data-addHoldings="{{ $addHoldings }}" data-removeHoldings="{{ $removeHoldings }} ">
            </div>
        @endcan
    </div>
@endsection
