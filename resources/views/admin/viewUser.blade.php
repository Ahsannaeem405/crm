@extends('admin.layouts.default')
@section('content')
    <style>
        .br-pagebody {
            margin-top: 83px;
        }

    </style>
    <!-- ########## START: LEFT PANEL ########## -->

    @include('admin.layouts.sidebar')



    @include('admin.layouts.header')

    <?php

    $view = App\Models\User::where('role','user')->get();

    ?>

    <div class="br-mainpanel">


        <div class="br-pagebody">
            <div class="br-section-wrapper">
                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">View Users</h6>

                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                            <tr>
                                <th class="wd-15p">Id</th>

                                <th class="wd-15p">First name</th>
                                <th class="wd-15p">Last name</th>

                                <th class="wd-15p">Start date</th>

                                <th class="wd-25p">E-mail</th>

                                <th class="wd-25p">Status</th>


                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $i = 1;

                            ?>

                            @foreach ($view as $views)

                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $views->firstname }}</td>
                                    <td>{{ $views->lastname }}</td>
                                    <td>{{ $views->created_at }}</td>
                                    <td>{{ $views->email }}</td>
                                    <td>

                                        @if(isset($views->statuss))
                                        <Button class="btn btn-primary">{{ $views->statuss }}
                                        </Button>


                                        @else
                                        <button class="btn btn-danger">
                                            {{ 'NULL' }}
                                        </button>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div><!-- table-wrapper -->






            </div><!-- br-section-wrapper -->
        </div><!-- br-pagebody -->
        @include('admin.layouts.footer')
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer></script>


    <script>
        $(function() {
            'use strict';

            $('#datatable1').DataTable({
                responsive: true,
                language: {
                    searchPlaceholder: 'Search...',
                    sSearch: '',
                    lengthMenu: '_MENU_ items/page',
                }
            });

            $('#datatable2').DataTable({
                bLengthChange: false,
                searching: false,
                responsive: true
            });

            // Select2
            $('.dataTables_length select').select2({
                minimumResultsForSearch: Infinity
            });

        });
    </script>





@endsection
