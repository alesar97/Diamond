<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator;
use Auth;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
            'First_name' => ['required', 'string', 'max:255'],
            'phone'=> ['sometimes|required', 'digits:10'],
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
    protected function create(Request $request)
    {

        $validateErrors = $request->validate([

                'First_name' => 'string|required|min:3|max:255',
                'email' => 'required|email|unique:users,email',
                'phone' => 'sometimes|required|digits:10|unique:users,phone',
                'password' => 'required|string|confirmed|min:8|max:20',
            ]);
//        if ($validateErrors->fails()) {
//            return response()->json(['status' => 201, 'message' => $validateErrors->errors()->first()]);
//        }

        $data = [
            'name' => $request->First_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'role_id' =>2
        ];

        $id = User::create($data)->id;


        if($id){
            // make auto login for user.
            if(Auth::attempt(["email"=>$request->email, "password"=>$request->password])) {

                return redirect()->route('welcome');
            }else
                return  redirect()->route('login.form');
        }
        else
            return redirect()->route('login.form');
    }

}
