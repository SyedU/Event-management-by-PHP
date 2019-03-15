<?php
session_start();
require_once('db.php');
require_once('includes/header.php');

?>




          <div class="row">
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>Add New User</h4>
                </div>
                <div class="card-body">
                  <p>Lorem ipsum dolor sit amet consectetur.</p>
                  <form action="adduserpost.php" method="post">
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" name="email" placeholder="Email Address" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" name="password" placeholder="Password" class="form-control">
                    </div>
                    <div class="form-group">
                      <input type="submit" value="Submit" class="btn btn-primary">
                    </div>
                  </form>
                </div>
              </div>
            </div>

          </div>

<?php
require_once('includes/footer.php');
?>
