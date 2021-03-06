<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="/css/viewCustomer.css" rel="stylesheet"> 
    </head>
    <body>
        <div class="conteiner">
            <p>List of Customers</p>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">NIC</th>
                    <th scope="col">MobileNo</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($customers as $customer)
                    <tr>
                    <td scope="row">{{$customer->Name}}</td>
                    <td scope="row">{{$customer->Email}}</td>
                    <td scope="row">{{$customer->Address}}</td>
                    <td scope="row">{{$customer->NIC}}</td>
                    <td scope="row">{{$customer->MobileNo}}</td>
                    <td>
                    @if(Auth::user()->roles->name == 'Manager')
                        <button onclick="return confirm('Are you sure you want to edit this customer?');" type= button class="btn btn-warning"><a href="/editcustomer/{{ $customer->CustomerID }}">Edit</a></button>
                        &nbsp &nbsp
                        <button onclick="return confirm('Are you sure you want to delete this customer?');" type= button class="btn btn-danger"><a href="/daletecustomer/{{ $customer->CustomerID }}">Delete</a></button>
                    @endif
                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>