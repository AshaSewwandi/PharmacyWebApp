<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    @guest
                        @if (Route::has('login'))
                        @endif
                                        
                        @if (Route::has('register'))
                        @endif

                        @else
                    @endguest
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
        

        <main class="py-1 pb-5" >
      @guest
        @if (Route::has('login'))
          @yield('content1')
        @endif
                            
        @if (Route::has('register'))
          @yield('content2')
        @endif
                                     
        @else
          <div class="container-fluid d-flex flex-column pb-5" style="background-color: #F4F2F3">
            <div class="row" >
              <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse" style="background-color: #2D3142 !important">
                <div class="position-sticky pt-3 pb-5" >
                  <ul class="nav flex-column " >
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="/home">
                        <span data-feather="home"></span>
                          Dashboard
                      </a>
                      
                    </li>
                    
                      <li class="nav-item">
                        <a class="nav-link" href="/viewcustomer">
                          <span data-feather="file"></span>
                            Customers
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/Addcustomer/{{ Auth::user()->id }}">
                          <span data-feather="file"></span>
                            Add Customers
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/viewitem">
                          <span data-feather="shopping-cart"></span>
                            Items
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/Additem/{{ Auth::user()->id }}">
                          <span data-feather="shopping-cart"></span>
                            Add Items
                        </a>
                      </li>
                   

                    @if(Auth::user()->can('delete-customer', App\Models\customer::class))
                      <li class="nav-item">
                        <a class="nav-link" href="/ViewCustomers">
                          <span data-feather="users"></span>
                            Delete Customers
                        </a>
                      </li>
                    @endif

                    @if(Auth::user()->can('add-item', App\Models\Item::class))
                      <li class="nav-item">
                        <a class="nav-link" href="/View-Task">
                          <span data-feather="target"></span>
                            Add Items
                        </a>
                      </li>
                    @endif
                                
                    @if(Auth::user()->can('view-item', App\Models\Item::class))
                      <li class="nav-item">
                        <a class="nav-link" href="/viewuser">
                          <span data-feather="user"></span>
                            View Items
                        </a>
                      </li>
                    @endif

                    @if(Auth::user()->can('delete-item', App\Models\Item::class))
                      <li class="nav-item">
                        <a class="nav-link" href="/viewuser">
                          <span data-feather="user"></span>
                            Delete Items
                        </a>
                      </li>
                    @endif    
                  </ul>
                </div>
              </nav>

            <main class="col-md-8 ms-sm-auto col-lg-10 px-md-4">
              <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2 header1">@yield('header','Dashboard')</h1>
              </div>
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

                    {{ __('You are logged in!') }}
                </div>

            </div>
            </div>
    </div>
</div>

              @yield('content')
              @endguest
            </main>
        </div>
        </div>
      </main>
    </div>
</body>
</html>
