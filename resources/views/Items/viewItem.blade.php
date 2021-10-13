<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="/css/viewItem.css" rel="stylesheet"> 
    </head>
    <body>
        <div class="conteiner">
            <table class="table">
                <thead class="thead-dark">
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
                        <button type= button class="btn btn-waring">Edit</button>
                        <button type= button class="btn btn-danger">Delete</button>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>