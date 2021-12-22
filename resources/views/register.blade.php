@extends('user.layouts.default')
@section('content')



  <div class="content">
    <div class="container">
      <div class="row justify-content-center">
        <!-- <div class="col-md-6 order-md-2">
          <img src="images/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid">
        </div> -->
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-12">
              <div class="form-block" style="    box-shadow: 0 3px 10px rgb(0 0 0 / 20%);">
                  <div class="mb-4">
                  <h3>Register</h3>
                </div>
                <form action="#" method="post" style="">
                  <div class="form-group first">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username">

                  </div>
                  <div class="form-group last mb-4">
                    <label for="password">Email</label>
                    <input type="email" class="form-control" id="email">

                  </div>

                  <div class="form-group last mb-4">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password">

                  </div>


                  <input type="submit" value="Register" class="btn btn-pill text-white btn-block btn-primary">

                  {{-- <span class="d-block text-center my-4 text-muted"> or sign in with</span>

                  <div class="social-login text-center">
                    <a href="#" class="facebook">
                      <span class="icon-facebook mr-3"></span>
                    </a>
                    <a href="#" class="twitter">
                      <span class="icon-twitter mr-3"></span>
                    </a>
                    <a href="#" class="google">
                      <span class="icon-google mr-3"></span>
                    </a>
                  </div> --}}
                </form>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>


  @endsection
