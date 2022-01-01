@extends('admin.layouts.default')
@section('content')
    <!-- ########## START: LEFT PANEL ########## -->

    @include('admin.layouts.sidebar')


    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    @include('admin.layouts.header')
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->

    <?php
    $countries = App\Models\Country::all();

    ?>

    <div class="br-mainpanel">

        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30" style="padding-top:1px>
        </div>

        <div class="br-pagebody">
            <div class="br-section-wrapper">
                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">User Detail</h6>

                <div class="form-layout form-layout-1">
                    <div class="row">

                        <div class="col-12">
                            <div class="col-lg-10 col-xl-10 col-md-10 col-12" style="margin: auto;">




                    <div class="card text-center" style="    border-radius: 5px;box-shadow: rgb(100 100 111 / 20%) 0px 7px 29px 0px;">
                        <div class="card-header">
                            User Detail
                        </div>
                        <div class="card-body" style="    padding: 36px;">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <input class="form-control" type="text" value="{{Auth::user()->firstname}}" name="firstname" required
                                            placeholder=" Firstname">
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <input class="form-control"  value="{{Auth::user()->lastname}}" type="text" name="firstname" required
                                            placeholder="Lastname">
                                    </div>
                                </div>


                                <div class="col-6">
                                    <div class="form-group">
                                        <input class="form-control" value="{{Auth::user()->email}}" type="text" name="firstname" required
                                            placeholder="Email">
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <input class="form-control" value="{{Auth::user()->address}}" type="text" name="firstname" required
                                            placeholder="Address">
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <input class="form-control" value="{{Auth::user()->signature}}" type="text" name="firstname" required
                                            placeholder="Signature">
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <input class="form-control" value="{{Auth::user()->dob}}" type="date" name="firstname" required
                                            placeholder="Date of birth">
                                    </div>
                                </div>
                            </div>
                            <a href="{{url('admin/generate-pdf',Auth::user()->id)}}" class="btn btn-info "> Download Document </a>

                        </div>

                    </div>
                </div>
                </div>

            </div>



                </div><!-- br-section-wrapper -->
            </div><!-- br-pagebody -->
            @include('admin.layouts.footer')
        </div><!-- br-mainpanel -->
        <!-- ########## END: MAIN PANEL ########## -->


    @endsection
