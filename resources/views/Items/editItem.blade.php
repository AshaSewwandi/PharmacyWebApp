<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="/css/addItem.css" rel="stylesheet"> 
    </head>
    <body>
    <div class="conteiner">
    <h1>Edit Item</h1>
    <br>
    <form method="post" action="/editItem">
    @csrf
    <input type="hidden" name="ItemID" value="{{$items->ItemID}}" readonly>
    <div class="form-group row">
    <label for="Name" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" name="Name" class="form-control" id="Name" value="{{$items->Name}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="Brand" class="col-sm-2 col-form-label">Brand</label>
    <div class="col-sm-10">
      <input type="text" name="Brand" class="form-control" id="Brand" value="{{$items->Brand}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="Price" class="col-sm-2 col-form-label">Price</label>
    <div class="col-sm-10">
      <input type="text" name="Price" class="form-control" id="Price" value="{{$items->Price}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="Quantity" class="col-sm-2 col-form-label">Quantity</label>
    <div class="col-sm-10">
      <input type="text" name="Quantity" class="form-control" id="Quantity" value="{{$items->Quantity}}">
    </div>
  </div>
  
  <br>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Save Changes</button>
    </div>
  </div>
</form> 
    </div>
    </body>
</html>
    
