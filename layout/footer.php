
        <footer class="bg-dark text-light text-center">
            &copy; Copyrights Dum Must Music

        </footer>

        <!-- Sign In Modal -->
        <div class="modal fade" id="signinmodal" tabindex="-1" role="dialog" aria-labelledby="signinModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
            	<form>
					<div class="modal-header">
						<h5 class="modal-title" id="signinModalLabel">Sign In</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
					<div class="form-group">
					    <label for="email">Email</label>
					    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
					  </div>
					  <div class="form-group">
					    <label for="password">Password</label>
					    <input type="password" class="form-control" id="password" placeholder="Password" required>
					  </div>
					  <div class="form-check">
					    <input type="checkbox" class="form-check-input" id="remember" name="remember">
					    <label class="form-check-label" for="remember">Remember me</label>
					  </div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="type" class="btn btn-primary">Sign In</button>
					</div>
              </form>
            </div>
          </div>
        </div>

        <!-- Sign Up Modal -->
        <div class="modal fade" id="registermodal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
            	<form action="#" name="register_form" onsubmit="return validate()" method="post">
		              <div class="modal-header">
		                <h5 class="modal-title" id="registerModalLabel">Sign Up</h5>
		                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		                  <span aria-hidden="true">&times;</span>
		                </button>
		              </div>
		              <div class="modal-body">
		                
		                    <div class="form-group">
		                        <label for="username">Username<span class="text-danger">*</span></label>
		                        <input type="text" class="form-control" id="username" name="username" placeholder="username" required>
		                      </div>
		                      <div class="form-group">
		                        <label for="email">Email<span class="text-danger">*</span></label>
		                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
		                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		                      </div>
		                      <div class="form-group">
		                        <label for="password">Password<span class="text-danger">*</span></label>
		                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
		                      </div>
		                      <div class="form-group">
		                        <label for="re-password">Retype Password<span class="text-danger">*</span></label>
		                        <input type="password" class="form-control" id="re-password" name="re-password" placeholder="Retype Password" required>
		                      </div>
		              </div>
		              <div class="modal-footer">
		                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		                <button type="submit" name="register" class="btn btn-primary">Register</button>
		              </div>
                </form>
            </div>
          </div>
        </div>
    </body>
</html>