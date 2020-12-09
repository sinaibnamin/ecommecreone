<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Division;
use App\District;
use App\Notifications\VerifyRegistration;
use Illuminate\Http\Request;
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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
      $districts = District::all();
      $divisions = Division::all();
        return view('auth.register',compact('districts','divisions'));
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
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'password' => 'required|string|min:6|confirmed',
            'division_id' => 'required',
            'district_id' => 'required',
            'phone' => 'required',
            'street_address' => 'required|string',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function register(Request $request)
    {
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'username' => str_slug($request->first_name.$request->last_name) ,
            'division_id' => $request->division_id,
            'district_id' => $request->district_id,
            'phone' => $request->phone,
            'street_address' => $request->street_address,
            'ip_address' => request()->ip(),
            'password' => Hash::make($request->password),
            'remember_token' => str_random(20),
            'status' => 0,
        ]);
        $user->notify(new VerifyRegistration($user, $user->remember_token));
        return back('/');



    }
}
