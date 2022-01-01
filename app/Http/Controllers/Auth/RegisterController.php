<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/User/Form';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {

        // $fields=array(
    //         "country"=> "AUS",
    //         "firstName"=> $data['name'],
    //         "middleName"=> "ok",
    //         "lastName"=> "Citizen",
    //         "gender"=> "user",
    //         "dateOfBirth"=> "20/10/1980",
    //         "address"=> $data['address'],
    //         "email"=> $data['email']

    //     );
    //     $get=Http::post('https://dev.bronid.com/idform',[
    //         "metadata_serviceUid"=> "XL7ULiU6B4QE9Y2iWFZnhtMDKFN2",
    //         "metadata_secretKey"=> "api_sec_NJAtNcRtUrPlf7xYDrMNP9URI-ZfN314",
    //         "metadata_version"=> "4",
    //         "metadata_userId"=> "yourUniqueUserId",
    //         "bronLink_dataAccessType"=> "idForm",
    //         "type"=> "individual",
    //         'fields'=>$fields,

    //     ]);
    //    $res=json_decode($get->body());
    //  dd(  $res);


        return User::create([
            'firstname' => $data['name'],
            'email' => $data['email'],
            'role' => 'user',

            'address' => $data['address'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
