@extends('user.layouts.default')
@section('content')

    {{-- @dd(Auth::user()->id) --}}

    <?php

    $fields = [
        'country' => 'AUS',
        'firstName' => Auth::user()->name,
        'middleName' => 'ok',
        'lastName' => Auth::user()->lastname,
        'gender' => 'male',
        'dateOfBirth' => '20/10/1980',
        'address' => Auth::user()->address,
        'email' => Auth::user()->email,
    ];

    $get = Http::post('https://dev.bronid.com/idform', [
        'metadata_serviceUid' => 'XL7ULiU6B4QE9Y2iWFZnhtMDKFN2',
        'metadata_secretKey' => 'api_sec_NJAtNcRtUrPlf7xYDrMNP9URI-ZfN314',
        'metadata_version' => '4',
        'metadata_userId' => Auth::user()->id,
        'bronLink_dataAccessType' => 'idForm',
        'type' => 'individual',
        'fields' => $fields,
    ]);
    $res = json_decode($get->body());


    ?>
    {{-- @dd(  $res->bronLink) --}}



    <div class="content">
        <div class="container">
            <div class="row justify-content-center">
                <!-- <div class="col-md-6 order-md-2">
                                      <img src="images/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid">
                                    </div> -->
                <div class="col-md-12 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="form-block" style="    box-shadow: 0 3px 10px rgb(0 0 0 / 20%);">
                                <form action="{{ url('admin/form_save') }}" method="post">
                                    @csrf

                                    <input type="hidden" name="statuss" value="{{$res->status}}" id="">
                                    <input type="hidden" name="apiUrl" value="{{$res->bronLink}}" id="">

                                    <div class="mb-4">
                                        <div class="col-12" style="border: 2px solid black; padding:0px;">


                                            <h5 style="    background: #80808061;    font-weight: bold;"> &nbsp; Section 1 -
                                                Customer
                                                Details</h5>
                                            <div class="row">
                                                <div class="col-lg-8  col-md-8  ">
                                                    &nbsp; <label for="">Full Name </label> <br>
                                                    <input required class="" style="    width: 87%;"
                                                        type="text" name="fullname" id="">

                                                </div>
                                                <div class="col-lg-4 col-md-4">
                                                    <label for=""> Date of Birth
                                                    </label>
                                                    <br>
                                                    <input required type="date" style="width: 100%;" name="dob" id="">

                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-12" style="    margin-top: 9px;">
                                                    &nbsp; <label for=""> Residential address PO Box is not acceptable
                                                    </label>
                                                    <br>
                                                    <input required type="text" style="width: 100%;" name="Residential"
                                                        id="">

                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-6" style="    margin-top: 9px;">


                                                </div>
                                                <div class="col-3" style="    margin-top: 9px;">
                                                    <P style="color: black;     font-weight: 500;">State</P>


                                                </div>
                                                <div class="col-3" style="    margin-top: 9px;">
                                                    <P style="color: black;     font-weight: 500;">Postcode</P>


                                                </div>


                                            </div>


                                        </div>

                                        <div class="col-12"
                                            style="border: 2px solid black; padding:0px;    margin-top: 2px;">


                                            <h5 style="    background: #80808061;    font-weight: bold;"> &nbsp; Section 2 -
                                                Source Of
                                                Funds</h5>
                                            <div style="    padding: 8px;    background: #80808014;margin-top: -8px;">
                                                Please indicate the main source of funds. You may choose more than one
                                                option if
                                                they are equally significant. Documentary evidence may be required. Examples
                                                of
                                                Source Of Funds include:income/earnings, Business profits, Compensation
                                                payment,
                                                Employment income/earnings, Gift/Donation, Government benefits, Inheritance,
                                                Insurance payment, Investment income/earnings, Liquidation of Assets, Owns
                                                real
                                                estate/property, Redundancy, Rental Income, Sale of Assets,
                                                Superannuation/pension, Windfall
                                            </div>
                                            &nbsp;<label for="">Please Provide Details:</label>
                                            <input type="text" required style="width:100%" name="detail" id="">



                                        </div>

                                        <div class="col-12"
                                            style="border: 2px solid black; padding:0px;    margin-top: 2px;">


                                            <h5 style="    background: #80808061;    font-weight: bold;"> &nbsp; Section 3 -
                                                Source Of
                                                Wealth</h5>
                                            <div style="    padding: 8px;    background: #80808014;margin-top: -8px;">
                                                Please indicate the main source of Wealth. You may choose more than one
                                                option
                                                if they are equally significant. Documentary evidence may be required.
                                                Examples
                                                of Source Of Wealth include:income/earnings, Business profits, Compensation
                                                payment, Employment income/earnings, Gift/Donation, Government benefits,
                                                Inheritance, Insurance payment, Investment income/earnings, Liquidation of
                                                Assets, Owns real estate/property, Redundancy, Rental Income, Sale of
                                                Assets,
                                                Superannuation/pension, Windfall
                                            </div>
                                            &nbsp; <label for="">Please Provide Further Details:</label>
                                            <input type="text" required style="width:100%" name="further_detail" id="">



                                        </div>

                                        <div class="col-12"
                                            style="border: 2px solid black; padding:0px;    margin-top: 2px;">


                                            <h5 style="    background: #80808061;    font-weight: bold;"> &nbsp; Section 4 -
                                                Declaration</h5>
                                            <div style="    padding: 8px;    background: #80808014;margin-top: -8px;">
                                                I declare that the information on this form is correct
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    &nbsp;<label>Signature</label>
                                                    <br>
                                                    <input style="width:100%" type="text" required name="signature" id="">
                                                </div>
                                                <div class="col-6">
                                                    <label for=""> Date</label> <br>
                                                    <input type="date" style="width:100%" required name="signature_date"
                                                        id="">
                                                </div>
                                                <div class="col-12"
                                                    style="margin-bottom: 5px;text-align: end;margin-top: 20px;margin-left: -5px;">
                                                    <input type="submit" required class="btn btn-primary"
                                                        style="color: white">

                                                </div>


                                            </div>
                                </form>



                            </div>
                        </div>

                    </div>
                </div>


            </div>

        </div>

    </div>
    </div>
    </div>


@endsection
