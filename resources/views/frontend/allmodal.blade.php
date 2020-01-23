<!-- Modal -->
<div id="job-available-Modal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">

      <div class="modal-body" id="filejobavaliable">
      </div>
	</div>

	</div>
	</div>
	<!-- END Modal content-->

  <!-- The Modal Login -->
  <div class="modal fade" id="login">
    <div class="modal-dialog modal-md">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Login</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
							<div class="row form-group">
							<div class="col-md-12">
								<label for="fname">Username : </label>
							<input  oninput="this.className = ''">
							</div>
							</div>
							<div class="row form-group">
							<div class="col-md-12">
								<label for="fname">Password : </label>
							<input  oninput="this.className = ''">
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-2">

						</div>
						<div class="col-md-2">

						</div>
						<div class="col-md-4">
							<button type="button" class="btn btn btn-info">Login</button>
						</div>
						<div class="col-md-2">

						</div>
					<div class="col-md-2">

					</div>
					</div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
					<div class="row form-group">
					<div class="col-md-12">
							Looking to<a href="{{ route('register') }}"> create an account ?</a>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-12">
							Or <a href="{{ route('password.update') }}"> forget your password ?</a>
					</div>
					</div>
        </div>
      </div>
    </div>
  </div>


    <!-- The Modal register -->
    <div class="modal fade" id="firstregisterModal">
      <div class="modal-dialog modal-md">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <form method="POST" action="{{ route('/') }}">
                @csrf
            <h4 class="modal-title">Register</h4>
            <br>
            <div class="row form-group">
            <div class="col-md-12">
              <label for="fname">citizen id : </label>
              <div class="col-md-12">
                  <input id="citizen_id" type="text" class="form-control @error('citizen_id') is-invalid @enderror" name="citizen_id" value="{{ old('citizen_id') }}" required autocomplete="citizen_id" autofocus>

                  @error('citizen_id')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
          </div>
        </div>
        <div class="row form-group">
        <div class="col-md-12">
          <label for="fname">email : </label>
            <div class="col-md-12">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
          </div>
      </div>
    </div>
  							<div class="row form-group">
  							<div class="col-md-12">
  								<label for="fname">Password : </label>
                  <div class="col-md-12">
                      <input id="password" type="text" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password">

                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
  						</div>
  					</div>
            <div class="row form-group">
            <div class="col-md-12">
              <label for="fname">Repeat Password : </label>
              <div class="col-md-12">
                  <input id="password-confirm" type="text" class="form-control" name="password_confirmation" required autocomplete="new-password">
              </div>
          </div>
        </div>
  					<div class="row form-group">
  						<div class="col-md-2">

  						</div>
  						<div class="col-md-2">

  						</div>
  						<div class="col-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
  						</div>
  						<div class="col-md-2">

  						</div>
  					<div class="col-md-2">

  					</div>
  					</div>
                    </form>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
  					<div class="row form-group">
  					<div class="col-md-12">
  							Looking to<a href="#" data-dismiss="modal"  data-toggle="modal" data-target="#login"> Login ?</a>
  					</div>
  				</div>
  				<div class="row form-group">
  					<div class="col-md-12">
  							Or <a href="#" data-dismiss="modal"  data-toggle="modal" data-target="#forgetpassword"> Forgot Password ?</a>
  					</div>
  					</div>
          </div>
        </div>
      </div>
    </div>

    <!-- The Modal register -->
    <div class="modal fade" id="forgetpassword">
      <div class="modal-dialog modal-md">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <h4 class="modal-title">Forgot password</h4>
                <div class="row form-group">
                <div class="col-md-12">
                  <label for="citizen_id">Citizen ID : </label>
                <input  oninput="this.className = ''">
                </div>
                </div>
                <div class="row form-group">
                <div class="col-md-12">
                  <label for="email">E-mail : </label>
                <input  oninput="this.className = ''">
                </div>
                </div>
                <div class="row form-group">
                <div class="col-md-12">
                  <label for="password">New Password : </label>
                <input  oninput="this.className = ''">
              </div>
            </div>
            <div class="row form-group">
            <div class="col-md-12">
              <label for="ref_password">Repeat New Password : </label>
            <input  oninput="this.className = ''">
          </div>
        </div>
            <div class="row form-group">
              <div class="col-md-2">

              </div>
              <div class="col-md-2">

              </div>
              <div class="col-md-4">
                <button type="button" class="btn btn btn-info">Register</button>
              </div>
              <div class="col-md-2">

              </div>
            <div class="col-md-2">

            </div>
            </div>
          </div>
          <!-- Modal footer -->
          <div class="modal-footer">
            <div class="row form-group">
            <div class="col-md-12">
                Looking to<a href="#" data-dismiss="modal"  data-toggle="modal" data-target="#login"> Login ?</a>
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-12">
                Or <a href="#" data-dismiss="modal"  data-toggle="modal" data-target="#firstregisterModal"> create an account ?</a>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
