<div class="container">
<div class="row">
  <h2>Sign Up<hr></h2><br>
  <p><i>Please, fill your information with correctly!</i></p>
  <form action="config/prosesdaftaruser.php" method="POST" class="form-horizontal">
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="fullname">Full Name:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="fullname" name="fullname">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="username">Username:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="username" name="username">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="password">Password:</label>
      <div class="col-sm-5">
        <input type="password" class="form-control" id="password" name="password">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="address">Address:</label>
      <div class="col-sm-5">          
        <textarea class="form-control" id="address" rows="2" name="address"></textarea>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-5">
        <input type="email" class="form-control" id="email" name="email">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="phonenumber">Phone Number:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="phonenumber" name="phonenumber">
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-5">
        <button type="submit" class="btn btn-success">Submit</button>
        <button type="submit" class="btn btn-basic">Cancle</button>
      </div>
    </div>
  </form>
</div>
</div>