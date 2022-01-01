@extends('admin.layouts.default')
@section('content')
    <!-- ########## START: LEFT PANEL ########## -->

    @include('admin.layouts.sidebar')


    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    @include('admin.layouts.header')
    <!-- ########## END: HEAD PANEL ########## -->


    <?php

    $user = App\Models\user::Where('role', 'user')->count();
    $date = Date('Y-m-d');
    $submon = Date('Y-m-d', strtotime($date . ' -30 days'));
    $monthly = App\Models\user::whereDate('created_at', '>=', $submon)
        ->whereDate('created_at', '<=', $date)
        ->where('role', 'user')
        ->count();
    $monthlya = App\Models\user::whereDate('created_at', '>=', $submon)
        ->whereDate('created_at', '<=', $date)
        ->where('role', 'admin')
        ->count();

    $latest = App\Models\user::latest()
        ->take(5)
        ->get();

    ?>

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        <div class="pd-30">
            <h4 class="tx-gray-800 mg-b-5">Dashboard</h4>
        </div><!-- d-flex -->

        <div class="br-pagebody mg-t-5 pd-x-30">
            <div class="row row-sm">
                <div class="col-sm-6 col-xl-4">
                    <div class="bg-teal rounded overflow-hidden">
                        <div class="pd-25 d-flex align-items-center">
                            <i class="ion ion-earth tx-60 lh-0 tx-white op-7"></i>
                            <div class="mg-l-20">
                                <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total User
                                </p>
                                <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{ $user }}</p>
                            </div>
                        </div>
                    </div>
                </div><!-- col-3 -->
                <div class="col-sm-6 col-xl-4 mg-t-20 mg-sm-t-0">
                    <div class="bg-danger rounded overflow-hidden">
                        <div class="pd-25 d-flex align-items-center">
                            <i class="ion ion-bag tx-60 lh-0 tx-white op-7"></i>
                            <div class="mg-l-20">
                                <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Monthly
                                    Users</p>
                                <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{ $monthly }}</p>
                            </div>
                        </div>
                    </div>
                </div><!-- col-3 -->
                <div class="col-sm-6 col-xl-4 mg-t-20 mg-xl-t-0">
                    <div class="bg-primary rounded overflow-hidden">
                        <div class="pd-25 d-flex align-items-center">
                            <i class="ion ion-monitor tx-60 lh-0 tx-white op-7"></i>
                            <div class="mg-l-20">
                                <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Monthy Admin
                                </p>
                                <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{ $monthlya }}</p>
                            </div>
                        </div>
                    </div>
                </div><!-- col-3 -->

            </div><!-- row -->

            <div class="row row-sm mg-t-20">
                <div class="col-12">

                    <div class="card bd-0 shadow-base pd-30 mg-t-20">
                        <div class="d-flex align-items-center justify-content-between mg-b-30">
                            <div>
                                <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Newly Registered Users
                                </h6>
                            </div>
                        </div><!-- d-flex -->

                        <table class="table table-valign-middle mg-b-0">
                            <tbody>
                                @foreach ($latest as $latests)



                                    <tr>
                                        <td class="pd-l-0-force">
                                            <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle"
                                                alt="">
                                        </td>
                                        <td>
                                            <h6 class="tx-inverse tx-14 mg-b-0">
                                                {{ $latests->firstname }}{{ $latests->lastname }}</h6>
                                            <span class="tx-12">{{ $latests->email }}</span>
                                        </td>
                                        <td>{{ $latests->created_at }}</td>
                                        <td class="pd-r-0-force tx-center"><a href="" class="tx-gray-600"><i
                                                    class="icon ion-more tx-18 lh-0"></i></a></td>
                                    </tr>

                                @endforeach

                            </tbody>
                        </table>
                    </div><!-- card -->


                </div><!-- col-9 -->
                <div class="col-4">



                </div><!-- col-3 -->
            </div><!-- row -->

        </div><!-- br-pagebody -->
        @include('admin.layouts.footer')
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->




@endsection
