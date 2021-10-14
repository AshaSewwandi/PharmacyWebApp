<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="/css/viewItem.css" rel="stylesheet"> 
    </head>
    <body>
        <div class="conteiner">
            <p>List of Items</p>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($items as $item)
                    <tr>
                    <td scope="row">{{$item->Name}}</td>
                    <td scope="row">{{$item->Brand}}</td>
                    <td scope="row">{{$item->Price}}</td>
                    <td scope="row">{{$item->Quantity}}</td>
                    <td>
                    @if(Auth::user()->roles->name == 'Cashier')
                        <button onclick="return confirm('Are you sure you want to edit this item?');" type= button class="btn btn-warning"><a href="/editItem/{{$item->ItemID}}" >Edit</a></button>
                         &nbsp  &nbsp
                        <button onclick="return confirm('Are you sure you want to delete this item?');" type= button class="btn btn-danger"><a href="/deleteItem/{{$item->ItemID}}" >Delete</a></button>
                    @endif
                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>