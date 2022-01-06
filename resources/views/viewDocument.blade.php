@extends('admin.layouts.default')
@section('content')

    @include('admin.layouts.sidebar')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>




    @include('admin.layouts.header')


    <?php
    $countries = App\Models\Country::all();

    ?>

    <style>
        /* .my-btn {
                    margin: 30%
                } */

        .example-block {
            transition: background 0.4s ease-out;
            position: relative;
            display: inline-block;
            height: auto
        }

        .example-block:hover {
            cursor: pointer;
            animation: levitate 1s ease-in-out infinite
        }

        @keyframes levitate {
            0% {
                transform: translate(0, 0px)
            }

            50% {
                transform: translate(0, -9px)
            }

            100% {
                transform: translate(0, 0px)
            }
        }

        .example-block .image {
            transition: ease-in-out, transform 0.4s ease-in- out
        }

        .example-block:hover .image {
            transform: scale(1.8)
        }

        .input-hidden {
            position: absolute;
            left: -9999px
        }

        input[type=radio]:checked+label>img {
            animation: levitate 0.5s ease-in-out infinite;
            transform: scale(2.0)
        }

        input[type=radio]+label>img {
            transition: 500ms all
        }


        @media (max-width: 400px) {
            img {
                width: auto;
                height: auto
            }
        }

        @media (min-width: 320px) {
            .modal-dialog-centered::before {
                height: calc(125vh - 50.5rem);
            }
        }

    </style>

    <?php
    // $value = session('verific');
    use Illuminate\Support\Facades\Session;
    $value =  Session::get('verific');

    if ($value == 'verific') {
        // echo   $value;
        // die();
        $apiRes = Http::post('https://dev.bronid.com/idform', [
            'metadata_version' => '4',
            'metadata_serviceUid' => 'XL7ULiU6B4QE9Y2iWFZnhtMDKFN2',
            'metadata_secretKey' => 'api_sec_NJAtNcRtUrPlf7xYDrMNP9URI-ZfN314',
            'bronLink_dataAccessType' => 'idForm',
            'bronLink_verificationUuid' => Auth::user()->verificationUuid,
        ]);
        $res = json_decode($apiRes->body());


        Session::put('apiRes', $res);
        // session(['apiRes' => $res]);
        // return redirect('user/api_response');
    }

    ?>

    <div class="br-mainpanel">

        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30" style="padding-top:1px">
        </div>

        <div class="br-pagebody">
            <div class="br-section-wrapper">
                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">User Detail</h6>

                <div class="form-layout form-layout-1">
                    <div class="row">

                        <div class="col-12">
                            <div class="col-lg-10 col-xl-10 col-md-10 col-12" style="margin: auto;">




                                <div class="card text-center"
                                    style="    border-radius: 5px;box-shadow: 0 1px 1px rgb(0 0 0 / 10%), 0 12px 22px rgb(0 0 0 / 15%);">
                                    <div class="card-header">
                                        User Detail
                                    </div>
                                    <div class="card-body" style="    padding: 36px;">
                                        <div class="row">


                                            <div class="col-12" style="    text-align: start;font-size: 15px;">

                                                <div class="form-group" style="text-align: center;">
                                                    <label for="" style="font-size: 17px;"> Verification Status</label> <br>
                                                    @if (Auth::user()->statuss == 'Unverified')

                                                        <Button class="btn btn-danger btn-lg"
                                                            style="margin-bottom: 10px;">Unverified </Button> <br>
                                                        <a href="{{url('user/api_response')}}" id="verific" target="blank"
                                                            style="font-size: 17px;">Click here for verification</a>
                                                    @else
                                                        <Button class="btn btn-success btn-lg"
                                                            style="margin-bottom: 10px;">Verified </Button>
                                                    @endif
                                                    {{-- <input class="form-control" readonly value="{{Auth::user()->statuss}}" type="text" name=""
                                            placeholder="Date of birth"> --}}

                                                </div>
                                            </div>

                                            <div class="col-6" style="    text-align: start;font-size: 15px;">
                                                <label for="" style=""> Firstname</label>
                                                <div class="form-group">
                                                    <input class="form-control" type="text"
                                                        value="{{ Auth::user()->firstname }}" name="firstname" required
                                                        placeholder=" Firstname">
                                                </div>
                                            </div>

                                            <div class="col-6" style="    text-align: start;font-size: 15px;">
                                                <label for="" style=""> Lastname</label>
                                                <div class="form-group">
                                                    <input class="form-control" value="{{ Auth::user()->lastname }}"
                                                        type="text" name="firstname" required placeholder="Lastname">
                                                </div>
                                            </div>


                                            <div class="col-6" style="    text-align: start;font-size: 15px;">
                                                <label for="" style=""> Email</label>
                                                <div class="form-group">
                                                    <input class="form-control" value="{{ Auth::user()->email }}"
                                                        type="text" name="firstname" required placeholder="Email">
                                                </div>
                                            </div>

                                            <div class="col-6" style="    text-align: start;font-size: 15px;">
                                                <label for="" style=""> Address</label>
                                                <div class="form-group">
                                                    <input class="form-control" value="{{ Auth::user()->address }}"
                                                        type="text" name="firstname" required placeholder="Address">
                                                </div>
                                            </div>

                                            <div class="col-6" style="    text-align: start;font-size: 15px;">
                                                <label for="" style=""> Signature</label>
                                                <div class="form-group">
                                                    <input class="form-control" value="{{ Auth::user()->signature }}"
                                                        type="text" name="firstname" required placeholder="Signature">
                                                </div>
                                            </div>

                                            {{-- <input type="text" class="veri_val" value=""> --}}
                                            <div class="col-6" style="    text-align: start;font-size: 15px;">
                                                <label for="" style=""> Date of Birth</label>

                                                <div class="form-group">
                                                    <input class="form-control" value="{{ Auth::user()->dob }}"
                                                        type="date" name="firstname" required placeholder="Date of birth">
                                                </div>
                                            </div>

                                            <div class="col-12" style="text-align: end">
                                                <div class="form-group" style="    display: flex;">
                                                    <input class="form-control" value="{{ Auth::user()->apiUrl }}"
                                                        type="text" id="myInput" name="" placeholder="Date of birth">
                                                    <button
                                                        style="    background: none;border: none;font-size: 20px;margin-left: -35px;">
                                                        <i onclick="myFunction()" class="fa fa-copy"></i>
                                                    </button>
                                                </div>
                                            </div>


                                            <!-- Modal -->
                                            <div class="container">
                                                <!-- Button trigger modal -->
                                                <div class="row my-btn">
                                                    <div class="col text-center ">
                                                        @if(Auth::user()->statuss == 'Unverified')

                                                        <button type="button" id="modelbtn"
                                                            style="display: none" class="btn btn-primary "
                                                            data-toggle="modal" data-target="#modelId">Launch Modal</button>
                                                            @endif
                                                    </div>
                                                </div> <!-- Modal -->
                                                <div class="modal fade" id="modelId" tabindex="-1" role="dialog"
                                                    aria-labelledby="modelTitleId" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered w-100    "
                                                        role="document">



                                                        <div class="modal-content">



                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Verification Status</h5>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body pl-5 mb-2">

                                                                <div class="row justify-content-center">
                                                                    <div class="col-auto example-block text-center">
                                                                        <label class="radio-inline"> <input type="radio"
                                                                                name="emotion" id="sad"
                                                                                class="input-hidden" /><img
                                                                                src="https://img.icons8.com/color/100/000000/boring.png"
                                                                                width="84" height="84"></label>
                                                                    </div>
                                                                    {{-- <div class="col-auto example-block text-center">
                                                                            <label class="radio-inline"> <input
                                                                                    type="radio" name="emotion" id="happy"
                                                                                    class="input-hidden" /> <img
                                                                                    src="https://img.icons8.com/color/100/000000/bored  .png"
                                                                                    width="84" height="84"> </label> </div> --}}
                                                                    {{-- <div class="col-auto example-block text-center">
                                                                                <label class="radio-inline"> <input
                                                                                        type="radio" name="emotion" id="exicetd"
                                                                                        class="input-hidden" /> <img
                                                                                        src="https://img.icons8.com/color/100/000000/smiling.png "
                                                                                        width="84" height="84"> </label> </div> --}}
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col text-center mt-2">

                                                                        <button class="btn btn-outline-dark btn-block"
                                                                            style="    background: red;color: white;border-color: red;">{{ Auth::user()->statuss }}</button>
                                                                        <a class="btn btn-outline-dark btn-block" id="verific"
                                                                        href="{{url('user/api_response')}}"
                                                                            target="blank">Click here for Verification</a>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-primary"
                                                                    data-dismiss="modal">Close</button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>








                                        </div>
                                        <a href="{{ url('user/generate-pdf', Auth::user()->id) }}"
                                            class="btn btn-info ">
                                            Download Document </a>

















                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>


                    <button type="button" style="display: none;" class="btn btn-primary modelbtn" data-toggle="modal"
                        data-target="#exampleModalCenter">
                        Launch demo modal
                    </button>

                </div><!-- br-section-wrapper -->
            </div><!-- br-pagebody -->
            @include('admin.layouts.footer')
        </div><!-- br-mainpanel -->
        <!-- ########## END: MAIN PANEL ########## -->


        <script>
            function myFunction() {
                /* Get the text field */
                var copyText = document.getElementById("myInput");

                /* Select the text field */
                copyText.select();
                copyText.setSelectionRange(0, 99999); /* For mobile devices */

                /* Copy the text inside the text field */
                navigator.clipboard.writeText(copyText.value);

                /* Alert the copied text */
                alert("Copied the text: " + copyText.value);
            }
        </script>

        <script>
            $(document).ready(function() {
                $('#modelbtn').click();

                // $("#verific").click(function() {
                //     // alert(12);
                //     <?php

                //     Session::put('verific', 'verific');
                //     ?>


                // });
            });
        </script>
    @endsection
