 <!--Login trigger Modal-->
    <div class="modal fade" id="login" >
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content"style="background-color:rgba(255,255,255,0.95)">

            <div class="modal-header">
              <h5 class="modal-title">Login</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">
              <form action="login_script.php" method="post">
                 <div class="form-group">
                     <label for="email">Email address:</label>
                     <input type="email" class="form-control"  name="lemail" placeholder="Enter email" required>
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd"  name="lpassword" placeholder="Password" required>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input">
                    <label for="checkbox" class="form-check-label">Check me out</label>
                </div>
                <button type="submit" class="btn btn-secondary btn-block" name="Submit">Login</button>
              </form>
              <a href="http://">forgot password ?</a>
            </div>
            <div class="modal-footer">
              <p class="mr-auto">New User? <a href="#signup" data-toggle="modal" data-dismiss="modal" >signup</a></p>
              <button type="button" class="btn btn-secondary" data-dismiss="modal" >Close</button>
            </div>
          </div>
        </div>
      </div>
    <!--Login trigger Model ends-->