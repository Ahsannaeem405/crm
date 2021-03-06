@extends('user.layouts.default')
@section('content')


    <?php
    $countries = App\Models\Country::all();

    ?>











    <div class="content">



        <div class="container">

            <div class="row justify-content-center">



                <!-- <div class="col-md-6 order-md-2">
                  <img src="images/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid">
                </div> -->
                <div class="col-md-8">





                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="form-block"
                                style="    box-shadow: 0 3px 10px rgb(0 0 0 / 20%);    border-radius: 25px;">
                                <div class="mb-4">
                                    <h3>Register</h3>
                                </div>

                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="row">


                                        <div class="col-6" style="padding-left: 0px;">

                                            <div class="form-group first" style="margin-bottom: 22px;">
                                                <label for="username">Username</label>
                                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                    id="name" placeholder="Username" name="name" value="{{ old('name') }}"
                                                    required autocomplete="name" autofocus>

                                                {{-- <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus> --}}

                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror

                                            </div>
                                        </div>

                                        <div class="col-6" style="padding-right: 0px;">

                                            <div class="form-group first" style="margin-bottom: 22px;">
                                                <label for="username">Lastname</label>
                                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                    id="name" placeholder="Lastname" name="lastname" value="{{ old('name') }}"
                                                    required autocomplete="name" autofocus>


                                            </div>
                                        </div>
                                        <div class="col-6" style="padding-left: 0px;">
                                            <div class="form-group last mb-4" style="margin-bottom: 22px;">
                                                <label for="password">Email</label>
                                                <input type="email"
                                                    class="form-control  @error('email') is-invalid @enderror"
                                                    placeholder="Email" name="email" value="{{ old('email') }}" required
                                                    autocomplete="email" id="email">

                                                {{-- <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"> --}}

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror

                                            </div>
                                        </div>
                                        <div class="col-6" style="padding-right: 0px;">
                                        <div class="form-group last mb-4" style="margin-bottom: 22px;">
                                            <label for="password">Address</label>
                                            <input type="text" class="form-control" name="address" placeholder="Address"
                                                required autocomplete="address" id="address">

                                        </div>
                                    </div>

                                    <div class="col-6" style="padding-left: 0px;">
                                        <div class="form-group last mb-4" style="margin-bottom: 22px;">
                                            <label class="form-control-label">Country </label>

                                            <select class="form-control select2" name="country" required
                                            data-placeholder="Choose country">
                                            @foreach ($countries as $country)
                                                <option value="{{ $country->id }}">{{ $country->name }} -
                                                    {{ $country->code }}
                                                </option>
                                            @endforeach
                                        </select>
                                        </div>
                                    </div>

                                    <div class="col-6" style="padding-right: 0px;">

                                        <div class="form-group last mb-4" style="margin-bottom: 22px;">
                                            <label for="password">Password</label>
                                            <input type="password"
                                                class="form-control @error('password') is-invalid @enderror" id="password"
                                                placeholder="Password" name="password" required autocomplete="new-password">

                                            {{-- <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"> --}}

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="col-6" style="padding-left: 0px;">
                                        <div class="form-group last mb-4" style="margin-bottom: 22px;">
                                            <label for="password">Confirm Password</label>

                                            <input id="password-confirm" type="password" placeholder="Confirm Password"
                                                class="form-control" name="password_confirmation" required
                                                autocomplete="new-password">

                                        </div>
                                    </div>



                                        <button type="submit" class="btn btn-pill text-white btn-block btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                        <span class="d-block text-center my-4 text-muted">Do you have an acount? <span
                                                style="   "><a style=" color: #38d39f;" href="{{ url('login') }}">
                                                    Login</a></span> </span>


                                        {{-- <input type="submit" value="Register" class="btn btn-pill text-white btn-block btn-primary"> --}}

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
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>


    <script>
        var searchInput = 'address';
        $(document).ready(function() {
            var autocomplete;
            autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
                types: ['geocode'],
                /*componentRestrictions: {
                ??country: "USA"
                }*/
            });

            google.maps.event.addListener(autocomplete, 'place_changed', function() {
                var near_place = autocomplete.getPlace();
            });
        });
    </script>

@endsection
