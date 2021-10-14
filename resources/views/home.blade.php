@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(Auth::user()->roles->name == 'Owner')
                    <div class="icon1">
                      <i class="material-icons" style="font-size:50px; color:dodgerblue;">all_inclusive</i>
                    </div>
                    <div class="a-link1">
                      <a class="nav-link" href="/Addcustomer/{{ Auth::user()->id }}">Add Customer</a>
                    </div> 
                      @endif
                      @if(Auth::user()->roles->name == 'Owner')
                      <div class="icon2">
                      <i class="material-icons" style="font-size:50px; color:dodgerblue;">all_inclusive</i>
                      </div>
                      <div class="a-link2">
                      <a class="nav-link" href="/Additem/{{ Auth::user()->id }}"> Add Item</a>
                      </div>
                      @endif
                      @if(Auth::user()->roles->name == 'Manager')
                      <div class="icon1">
                      <i class="material-icons" style="font-size:50px; color:dodgerblue;">all_inclusive</i>
                      </div>
                      <div class="a-link1">
                      <a class="nav-link" href="/viewcustomer"> View Customer</a>
                      </div>
                      @endif
                      @if(Auth::user()->roles->name == 'Manager')
                      <div class="icon2">
                      <i class="material-icons" style="font-size:50px; color:dodgerblue;">all_inclusive</i>
                      </div>
                      <div class="a-link2">
                      <a class="nav-link" href="/viewitem">View Item</a>
                      </div>
                      @endif
                      @if(Auth::user()->roles->name == 'Cashier')
                      <div class="icon1">
                      <i class="material-icons" style="font-size:50px; color:dodgerblue;">all_inclusive</i>
                      </div>
                      <div class="a-link1">
                      <a class="nav-link" href="/viewitem">View Item</a>
                      </div>
                      @endif
                      @if(Auth::user()->roles->name == 'Cashier')
                      <div class="icon2">
                      <i class="material-icons" style="font-size:50px; color:dodgerblue;">all_inclusive</i>
                      </div>
                      <div class="a-link2">
                      <a class="nav-link" href="/viewcustomer">View Customer</a>
                      </div>
                      @endif   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
