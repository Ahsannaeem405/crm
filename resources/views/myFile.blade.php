<!DOCTYPE html>
<html>

<head>
</head>

<body>


    <div style="border: 2px solid black; padding:0px;width: 100%">


        <h5 style="    background: #80808061;  margin-top:0px;  font-weight: bold;"> &nbsp; Section
            1 -
            Customer
            Details</h5>





    <table  style=" width: 100%;">
        <tr>
          <td style="        width: 65%;">
            <p class="alignleft" style="display: inline-block;width: 100%;"><label for="">Full Name </label> <br> <input style="   font-size:13px;   width: 91%;" value="{{$fullname}}" type="text" value=""> </p>
          </td>

          <td align="right">
              <div style="    text-align: start;" >

                <p class="alignright" style="display: inline-block; width: 100%; ">   <label for=""> Date of Birth
                </label>
                <br> <input type="text" value="{{$dob}}" style=" font-size:13px;   width: 98%;"></p>
              </div>

          </td>
        </tr>
      </table>






        <div style="width: 100%;  ;">
            <div style="width: 100%">
                &nbsp; <label for=""> Residential address PO Box is not acceptable </label> <br>
                <input required     value="{{$Residential}}"  class="" type="text" style="font-size:13px; width: 99%" name="fullname" id="">


            </div>

        </div>



    <table id="upp" style=" width: 100%;">
        <tr>
          <td style="        width: 57%;">
            <p class="alignleft" style="display: inline-block;width: 100%;"><label for=""> </label> <br>  </p>
          </td>
          <td>State</td>

          <td align="right">
              <div style="    text-align: start;" >

                <p class="alignright" style="display: inline-block; width: 100%; ">   <label for=""> Postcode
                </label>
                <br
              </div>

          </td>
        </tr>
      </table>


    </div>





    <div style="border: 2px solid black; padding:0px;width: 100%;    margin-top: 2px;">


        <h5 style="    background: #80808061;  margin-top:0px;  font-weight: bold;"> &nbsp; Section 2 - Source Of Funds
        </h5>
        <div style="width:96%;    padding: 15px;    background: #80808014;margin-top: -21px;">
            Please indicate the main source of funds. You may choose more than one option if
            they are equally significant. Documentary evidence may be required. Examples of
            Source Of Funds include:income/earnings, Business profits, Compensation payment,
            Employment income/earnings, Gift/Donation, Government benefits, Inheritance,
            Insurance payment, Investment income/earnings, Liquidation of Assets, Owns real
            estate/property, Redundancy, Rental Income, Sale of Assets,
            Superannuation/pension, Windfall
        </div>



        <div style="width: 100% ;">
            <div style="width: 100%">
                &nbsp; <label for=""> Please Provide Details:</label> <br>
                <input required class="" value="{{$detail}}"  value="" type="text" style="font-size:13px; width: 99%" name="fullname" id="">


            </div>

        </div>




    </div>




    <div style="border: 2px solid black; padding:0px;width: 100%;    margin-top: 2px;">



        <h5 style="    background: #80808061;  margin-top:0px;  font-weight: bold;"> &nbsp; Section 3 - Source Of Wealth
        </h5>
        <div style="width:96%;    padding: 15px;    background: #80808014;margin-top: -21px;">
            Please indicate the main source of Wealth. You may choose more than one option if they are equally
            significant. Documentary evidence may be required. Examples of Source Of Wealth include:income/earnings,
            Business profits, Compensation payment, Employment income/earnings, Gift/Donation, Government benefits,
            Inheritance, Insurance payment, Investment income/earnings, Liquidation of Assets, Owns real
            estate/property, Redundancy, Rental Income, Sale of Assets, Superannuation/pension, Windfall
        </div>



        <div style="width: 100% ;">
            <div style="width: 100%">
                &nbsp; <label for=""> Please Provide Further Details:</label> <br>
                <input required class=""  value="{{$further_detail}}" value="" type="text" style="font-size:13px; width: 99%" name="fullname" id="">


            </div>

        </div>




    </div>


    <div style="border: 2px solid black; padding:0px;width: 100%;  margin-top: 2px;">


        <h5 style="    background: #80808061;  margin-top:0px;  font-weight: bold;"> &nbsp;
            Section 4 - Declaration</h5>
            <div style="width:96%;    padding: 15px;    background: #80808014;margin-top: -21px;">
                I declare that the information on this form is correct

            </div>








    <table id="upp" style=" width: 100%;">
        <tr>
          <td style="        width: 50%;">
            <p class="alignleft" style="display: inline-block;width: 100%;"><label for="">Signature </label> <br> <input style=" font-size:13px;    width: 91%;" value="{{$signature}}"  type="text" value=""> </p>
          </td>

          <td align="right">
              <div style="    text-align: start;" >

                <p class="alignright" style="display: inline-block; width: 100%; ">   <label for=""> Date
                </label>
                <br> <input type="text" value="{{$signature_date}}" style=" font-size:13px;    width: 99%;"></p>
              </div>

          </td>
        </tr>
      </table>


    </div>



</body>

</html>
