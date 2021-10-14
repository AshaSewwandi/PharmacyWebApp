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
                      <li class="nav-item">
                        <a class="nav-link" href="/Addcustomer/{{ Auth::user()->id }}">
                          <span data-feather="compass"></span>
                            Add Customer
                        </a>
                      </li>
                      @endif
                      @if(Auth::user()->roles->name == 'Owner')
                      <li class="nav-item">
                        <a class="nav-link" href="/Additem/{{ Auth::user()->id }}">
                          <span data-feather="compass"></span>
                            Add Item
                        </a>
                      </li>
                      @endif
                      @if(Auth::user()->roles->name == 'Owner')
                      <li class="nav-item">
                        <a class="nav-link" href="/viewitem">
                          <span data-feather="compass"></span>
                            View Item
                        </a>
                      </li>
                      @endif
                      @if(Auth::user()->roles->name == 'Manager')
                      <li class="nav-item">
                        <a class="nav-link" href="/viewcustomer">
                          <span data-feather="compass"></span>
                            View Customer
                        </a>
                      </li>
                      @endif
                      @if(Auth::user()->roles->name == 'Manager')
                      <li class="nav-item">
                        <a class="nav-link" href="/viewitem">
                          <span data-feather="compass"></span>
                            View Item
                        </a>
                      </li>
                      @endif
                      @if(Auth::user()->roles->name == 'Cashier')
                      <li class="nav-item">
                        <a class="nav-link" href="/viewitem">
                          <span data-feather="compass"></span>
                            View Item
                        </a>
                      </li>
                      @endif
                      @if(Auth::user()->roles->name == 'Cashier')
                      <li class="nav-item">
                        <a class="nav-link" href="/viewcustomer">
                          <span data-feather="compass"></span>
                            View Customer
                        </a>
                      </li>
                      @endif   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
