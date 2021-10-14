<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="/css/addItem.css" rel="stylesheet"> 
    </head>
    <body>
    <div class="conteiner">
    <h1>Add Item</h1>
    <br>
    <form method="post" action="/saveItem">
    {{csrf_field()}}
    <input type="hidden" name="AdminID" value="{{Auth::user()->id}}" readonly>
  <div class="form-group row">
    <label for="Name" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" name="Name" class="form-control" id="Name" placeholder="Name">
    </div>
  </div>
  <div class="form-group row">
    <label for="Brand" class="col-sm-2 col-form-label">Brand</label>
    <div class="col-sm-10">
      <input type="text" name="Brand" class="form-control" id="Brand" placeholder="Brand">
    </div>
  </div>
  <div class="form-group row">
    <label for="Price" class="col-sm-2 col-form-label">Price</label>
    <div class="col-sm-10">
      <input type="text" name="Price" class="form-control" id="Price" placeholder="Price">
    </div>
  </div>
  <div class="form-group row">
    <label for="Quantity" class="col-sm-2 col-form-label">Quantity</label>
    <div class="col-sm-10">
      <input type="text" name="Quantity" class="form-control" id="Quantity" placeholder="Quantity">
    </div>
  </div>
  <br>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Add Item</button>
    </div>
  </div>
</form> 
    </div>
    </body>
</html>
    
