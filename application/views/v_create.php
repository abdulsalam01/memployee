<h3>Insert Employee~</h3>

<form action="#" method="POST">
  <div class="form-group">
    <label>Name</label>
    <input type="text" name="name[]" class="form-control" placeholder="name" required="true"/>
  </div>
  <div class="form-group">
    <label>Login Code</label>
    <input type="text" name="login[]" class="form-control" placeholder="alphanumeric login data" required="true" />
  </div>
  <div id="container"></div>
  <div class="form-group">
    <input type="hidden" name="size" class="form-control" value="1" />
  </div>

  <button class="btn btn-danger float-right ml-3" onclick="reset_field()" type="button">Reset Other Field</button>
  <button class="btn btn-success float-right" onclick="add_field()" type="button">Add Other Employee</button>
  <button type="button" class="btn btn-primary" onclick="submit_field()">Submit</button>
</form>