<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function login(Request $request){

            $validateErrors = Validator::make($request->all(),

            [
                'email_login'=>'required|email|min:3|max:255',
                'password_login'=>'required|string|min:8|max:20',
            ]);
        if ($validateErrors->fails()) {
            return response()->json(['status' => 201, 'success' => $validateErrors->errors()->first()]);
        } // end if fails .

        $credential = ["email"=>$request->email_login, "password"=>$request->password_login];

        $remember_me  = ( !empty( $request->remember_me ) )? TRUE : FALSE;
        if(Auth::attempt($credential,$remember_me))
        {
//            $user = User::where(["email" => $credential['email']])->first();
//            Auth::login($user, $remember_me);
            return redirect('profile');
        }
        else{
            return response()->json(['status'=>201,"success"=>'name or password not correct']);
            return redirect('/')->withErrors('Login Failed');

        } // end else for ! is null.

    }

    public function signUp(Request $request)
    {
        if(empty($request->_id)) {
            $validateErrors = Validator::make($request->all(),
            [
                'name'=>'required|string|min:3|max:100',
                'phone'=>'sometimes|required|digits:10',
                'email'=>'required|email|min:3|max:255',
                'password'=>'required|string|min:8|max:20|confirmed',
            ]);
            if ($validateErrors->fails()) {
                return response()->json(['status' => 201, 'success' => $validateErrors->errors()->first()]);
            } // end if fails .
        }
        $data =  [
            'First_name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request['password']),

        ];

        $id = User::create($data)->id;
        if($id){
            // make auto login for user.
            if(Auth::attempt(["email"=>$request->email, "password"=>$request->password]))
                return redirect('profile');
        }

    }

    public function logout(){
        auth()->logout();

        session()->flash('message', 'GoodBye');
        return redirect('/');
    }

}
