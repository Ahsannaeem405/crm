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
    $tadmin = App\Models\user::Where('role', '!=', 'user')->count();
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
                            <i class="icon ion-person-stalker  tx-80 lh-0 tx-primary op-5" style="    color: white;"></i>
                            {{-- <i class="icon ion-person tx-80 lh-0 tx-primary op-5" style="    color: white;"></i> --}}

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
                            <i class="icon ion-person tx-80 lh-0 tx-primary op-5" style="    color: white;"></i>
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
                            <i class="icon ion-person tx-80 lh-0 tx-primary op-5" style="    color: white;"></i>
                            <div class="mg-l-20">
                                <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Monthy Admin
                                </p>
                                <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{ $monthlya }}</p>
                            </div>
                        </div>
                    </div>
                </div><!-- col-3 -->




                <div class="col-sm-6 col-lg-4" style="margin-top: 15px; ">
                    <div class="bg-white rounded shadow-base overflow-hidden"
                        style="    background-color: #1D2939 !important;">
                        <div class="pd-x-20 pd-t-20 d-flex align-items-center" style="    padding: 33px;">
                            <i class="icon ion-person tx-80 lh-0 tx-primary op-5" style="    color: white;"></i>

                            <div class="mg-l-20">
                                <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase mg-b-10"
                                    style="    color: white;">Verified Users </p>
                                <p class="tx-32 tx-inverse tx-lato tx-black mg-b-0 lh-1" style="    color: white;">1,975,224
                                </p>
                            </div>
                        </div>
                        {{-- <div id="ch5" class="ht-60 tr-y-1"></div> --}}
                    </div>
                </div><!-- col-4 -->


                <div class="col-sm-6 col-lg-4" style="margin-top: 15px; ">
                    <div class="bg-white rounded shadow-base overflow-hidden"
                        style="       background-color: #dc3545 !important;">
                        <div class="pd-x-20 pd-t-20 d-flex align-items-center" style="    padding: 33px;">
                            <i class="icon ion-person-add tx-80 lh-0 tx-primary op-5" style="    color: white;"></i>

                            <div class="mg-l-20">
                                <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase mg-b-10"
                                    style="    color: white;">Unverified Users </p>
                                <p class="tx-32 tx-inverse tx-lato tx-black mg-b-0 lh-1" style="    color: white;">1,975,224
                                </p>
                            </div>
                        </div>
                        {{-- <div id="ch5" class="ht-60 tr-y-1"></div> --}}
                    </div>
                </div><!-- col-4 -->


                <div class="col-sm-6 col-lg-4" style="margin-top: 15px; ">
                    <div class="bg-white rounded shadow-base overflow-hidden" style="background-color: #00b297 !important;">
                        <div class="pd-x-20 pd-t-20 d-flex align-items-center" style="    padding: 33px;">
                            <i class="icon ion-person tx-80 lh-0 tx-primary op-5" style="    color: white;"></i>

                            <div class="mg-l-20">
                                <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase mg-b-10"
                                    style="    color: white;">Total Admin </p>
                                <p class="tx-32 tx-inverse tx-lato tx-black mg-b-0 lh-1" style="    color: white;">
                                    {{ $tadmin }}</p>
                            </div>
                        </div>
                        {{-- <div id="ch5" class="ht-60 tr-y-1"></div> --}}
                    </div>
                </div><!-- col-4 -->

                <div class="col-xl-6" style="margin-top: 30px;">
                    <div class="bd pd-t-30 pd-b-20 pd-x-20"><canvas id="chartBar1" height="200"></canvas></div>
                </div><!-- col-6 -->

                <div class="col-md-6 mg-t-20 mg-md-t-0" style="margin-top: 30px;">
                    <div class="bd pd-t-30 pd-b-20 pd-x-20"><canvas id="chartBar2" height="200"></canvas></div>


                </div><!-- col-6 -->


            </div><!-- row -->

            <div class="row row-sm mg-t-20">
                <div class="col-12">

                    <div class="card bd-0 shadow-base pd-30 mg-t-20">
                        <div class="d-flex align-items-center justify-content-between mg-b-30">
                            <div>
                                <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Newly Registered
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <?php
    $count1 = null;
    $count2 = null;
    $count3 = null;
    $count4 = null;
    $count5 = null;
    $pre_month1 = null;

    ?>

    @for ($i = 4; $i >= 0; $i--)
        <?php
        $pre_month1 .= date('M-Y', strtotime('-' . $i . ' month')) . ',';
        ?>
    @endfor

    <?php
    $pre_month1 = explode(',', $pre_month1);
    $users = App\Models\User::pluck('created_at')->all();
    ?>

    @foreach ($users as $user)

        @if (date('M-Y', strtotime($user)) == $pre_month1['0'])
            <?php
            $count1 += 1;
            ?>
        @elseif (date("M-Y",strtotime($user)) == $pre_month1['1'])
            <?php
            $count2 += 1;
            ?>
        @elseif (date("M-Y",strtotime($user)) == $pre_month1['2'])
            <?php
            $count3 += 1;
            ?>
        @elseif (date("M-Y",strtotime($user)) == $pre_month1['3'])
            <?php
            $count4 += 1;
            ?>
        @elseif (date("M-Y",strtotime($user)) == $pre_month1['4'])
            <?php
            $count5 += 1;
            ?>
        @endif
    @endforeach

    {{-- @dd(date('M-Y', strtotime($user))) --}}



    {{-- @dd( $pre_month1[0]) --}}

    <script>
        $(document).ready(function() {



            // $(function() {
            'use strict'

            var ctx = document.getElementById('chartBar1').getContext('2d');
            new Chart(ctx, {
                type: 'line',
                data: {
                    // labels: ["Jan", 'Feb', 'Mar', 'Apr', 'May'],
                    labels: [<?php echo "'$pre_month1[0]'" . ',' . "'$pre_month1[1]'" . ',' . "'$pre_month1[2]'" . ',' . "'$pre_month1[3]'" . ',' . "'$pre_month1[4]'"; ?>],

                    datasets: [{
                        label: 'Total',
                        // data: [12, 39, 20, 10, 25],
                        data: [<?php echo $count1 . ',', $count2 . ',', $count3 . ',', $count4 . ',', $count5; ?>],
                    }]
                },
                options: {
                    legend: {
                        display: false,
                        labels: {
                            display: false
                        }
                    },
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true,
                                fontSize: 10,
                                max: 80
                            }
                        }],
                        xAxes: [{
                            ticks: {
                                beginAtZero: true,
                                fontSize: 11
                            }
                        }]
                    }
                }
            });


            var ctx = document.getElementById('chartBar2').getContext('2d');
            new Chart(ctx, {
                type: 'bar',
                data: {


                    labels: [<?php echo "'$pre_month1[0]'" . ',' . "'$pre_month1[1]'" . ',' . "'$pre_month1[2]'" . ',' . "'$pre_month1[3]'" . ',' . "'$pre_month1[4]'"; ?>],

                    datasets: [{
                        label: 'Total',
                        // data: [12, 39, 20, 10, 25],
                        data: [<?php echo $count1 . ',', $count2 . ',', $count3 . ',', $count4 . ',', $count5; ?>],
                        backgroundColor: '#27AAC8'
                    }]
                },
                options: {
                    legend: {
                        display: false,
                        labels: {
                            display: false
                        }
                    },
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true,
                                fontSize: 10,
                                max: 80
                            }
                        }],
                        xAxes: [{
                            ticks: {
                                beginAtZero: true,
                                fontSize: 11
                            }
                        }]
                    }
                }
            });
        });
    </script>


@endsection
