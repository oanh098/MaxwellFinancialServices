@extends('./layouts/adminPanelLayout')

@section('content')

                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>

                        <div class="card m-4 w-50">
                            <div class="card-header"><h1>Account details</h1></div>
                            <div id="account_details" class="card-body" data-userBladeSide="{{ $userBladeSide }}">

                            </div>

                        </div>

                        <div class="card mb-4">
                            <div class="card-header"><h1><i class="fas fa-table mr-1"></i>Holdings Details</h1></div>
                            <div class="card-body">
                                <div class="table-responsive">

                                <div class="table-responsive"> @can('create', App\Holding::class)
                                    <!-- <div  class="row justify-content-center pt-4 pb-4">
                                     <App v-bind:holdings="{{$holdings}}" :id="{{auth()->user()->id}}" :can="true"></App>
                                    </div> -->

                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Date</th>
                                                <th>Name</th>
                                                <th>Code Units</th>
                                                <th>Registered Units</th>
                                                <th>Available Units</th>
                                                <th>Reversed Units</th>
                                                <th>Purchase Price</th>
                                                <th>Total Value</th>
                                                <th>Amount Invested</th>
                                                <th>Interest Rate</th>
                                                <th>Fortnight Return</th>
                                                <th>Client Account</th>
                                                <th>Bank Name</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Date</th>
                                                <th>Name</th>
                                                <th>Code Units</th>
                                                <th>Registered Units</th>
                                                <th>Available Units</th>
                                                <th>Reversed Units</th>
                                                <th>Purchase Price</th>
                                                <th>Total Value</th>
                                                <th>Amount Invested</th>
                                                <th>Interest Rate</th>
                                                <th>Fortnight Return</th>
                                                <th>Client Account</th>
                                                <th>Bank Name</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>

                                        @foreach($holdings as $r)
                                            <tr>
                                                <td>{{$r->id}}</td>
                                                <td>{{$r->Date}}</td>
                                                <td><a href="/holdings/shows/{{$r->id}}">{{$r->Holding_Name}}</a></td>
                                                <td>{{$r->Code_Units}}</td>
                                                <td>{{$r->Registered_Units}}</td>
                                                <td>{{$r->Available_Units}}</td>
                                                <td>{{$r->Reversed_Units}}</td>
                                                <td>{{$r->Purchase_Price}}</td>
                                                <td>{{$r->Total_Value}}</td>
                                                <td>{{$r->Amount_Invested}}</td>
                                                <td>{{$r->Interest_Rate}}</td>
                                                <td>{{$r->Fortnight_Return}}</td>
                                                <td>{{$r->Client_Account}}</td>
                                                <td>{{$r->Bank_Name}}</td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>

                                @endcan </div>


                                </div>
                            </div>
                        </div>


                        <div class="card mb-4">
                            <div class="card-header"><h1><i class="fas fa-table mr-1"></i>Clients Data</h1></div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    @can('create', App\Holding::class)

                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>

                                        @foreach($users as $user1)
                                            <tr>
                                                <td>{{$user1->id}}</td>
                                                <td><a href="/holdings/user/{{$user1->id}}/edit">{{$user1->name}}</a></td>
                                                <td>{{$user1->email}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    @endcan
                                </div>
                            </div>
                        </div>



                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2019</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
@endsection
