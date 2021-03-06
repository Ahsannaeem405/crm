<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use PDF;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    public function viewDocument()
    {
        return view('viewDocument');

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $admin  = new User();
        $admin->firstname = $request->firstname;
        $admin->lastname = $request->lastname;

        $admin->email = $request->email;

        $admin->address = $request->address;

        $admin->role = 'admin';

        $admin->country = $request->country;
        $admin->password = Hash::make($request->password);
        $admin->save();

        Cookie::make('check', 'value', 120);

        return back()->with('success', 'Added Successfully');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin , $id)
    {
        $adm = User::find($id);
        return view('admin.edit' , compact('adm') );


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        $admin = User::find($request->id);
        $admin->firstname = $request->firstname;
        $admin->lastname = $request->lastname;

        $admin->email = $request->email;

        $admin->address = $request->address;

        $admin->country = $request->country;

        $admin->update();
        return back()->with('success', 'Updated Successfully');


    }




    public function generatePDF($id)
    {
        $user =User::find($id);

        $data = [
            'fullname' =>  $user->fullname,
            'dob' =>  $user->dob,
            'Residential' =>  $user->Residential,
            'detail' =>  $user->detail,
            'further_detail' =>  $user->further_detail,
            'signature' =>  $user->signature,
            'signature_date' =>  $user->signature_date,


        ];

        $pdf = PDF::loadView('myFile', $data);
        // dd($pdf);

        return $pdf->download('myDocument.pdf');
    }
    public function form_save(Request $request)
    {

        $user = User::find(Auth::user()->id);
        $user->fullname = $request->fullname;
        $user->dob = $request->dob;
        $user->Residential = $request->Residential;
        $user->detail = $request->detail;
        $user->signature = $request->signature;
        $user->further_detail = $request->further_detail;
        $user->signature_date = $request->signature_date;
        $user->statuss = 'Unverified';
        $user->apiUrl = $request->apiUrl;
        $user->state = $request->state;
        $user->postcode = $request->postcode;
        $user->verificationUuid = $request->verificationUuid;
        $user->save();
        setcookie('check', 'value', time() + (86400 * 30), "/");
        return redirect('user/viewDocument');

    }

    public function api_response(Request $request)
    {


                $user = User::find(Auth::user()->id);
                $user->statuss = 'Verified';
                $user->save();

                return redirect(Auth::user()->apiUrl);



    }

    public function destroy(Admin $admin, $id)
    {

        User::find($id)->delete();
        return back()->with('success', 'Delete Successfully');

        //
    }
}
