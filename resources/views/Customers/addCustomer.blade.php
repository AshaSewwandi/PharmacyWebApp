<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="/css/addCustomer.css" rel="stylesheet"> 
    </head>
    <body>
    <div class="conteiner">
    <h1>Add Customer</h1>
    <br>
    <form method="post" action="/saveCustomer">
    @csrf
    <input type="hidden" name="AdminID" value="{{Auth::user()->id}}" readonly>
    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" name="Name" class="form-control" id="inputEmail3" placeholder="Name">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">NIC</label>
    <div class="col-sm-10">
      <input type="text" name="NIC" class="form-control" id="inputEmail3" placeholder="NIC">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" name="Email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-10">
      <input type="text" name="Address" class="form-control" id="inputPassword3" placeholder="Address">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Contact</label>
    <div class="col-sm-10">
      <input type="tel" name="MobileNo" class="form-control" id="inputPassword3" placeholder="Contact Number">
    </div>
  </div>
  <br>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Add Customer</button>
    </div>
  </div>
</form> 
    </div>
    </body>
</html>
    
