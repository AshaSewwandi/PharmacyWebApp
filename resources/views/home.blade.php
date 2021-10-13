 @extends('layouts.app')
@section('title','Dashboard')
@section('content') 
<!-- <div class="container">
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

                    {{ __('You are logged in!') }}
                </div>

            </div><br>
     
            <div>
                <button onclick="location.href='Addcustomer/{{ Auth::user()->id }}'" type="button" class="btn btn-primary" >Add Customer</button>
            </div>
            <br>
            <div>
                <button onclick="location.href='Viewcustomer/{{ Auth::user()->id }}'" type="button" class="btn btn-primary" >View Customer</button>
            </div>  -->
        <!-- </div>
    </div>
</div>  -->
 @endsection
