<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        //
        return view('contact');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        $email = $request->email;
        $name = $request->name;
        $message = $request->message;
        $subject = $request->subject;
        $phone = $request->number;

        $validateErrors =   Validator::make($request->all(),
            [
                'name'=>'required|string|min:4|max:250',
                'email'=>'required|email|string|min:3|max:250',
                'number'=>'sometimes|required|string|min:10|max:20',
                'subject'=>'required|string|min:8|max:150',
                'message'=>'required|string|min:3:max:4000',

            ]);
        if($validateErrors->fails()){
            return response()->json(['status'=>200,'error' => $validateErrors->errors()->first()]);
            return $validateErrors->errors()->first();
        } // end if fails .


        $to = 'info@example.com';
        $subject = "The subject is: ". strip_tags($subject). "\r\n";
        $header = "From: " . strip_tags($email) . "\r\n";
        $header .= "Reply-To: ". strip_tags($email) . "\r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-Type: text/html;charset=UTF-8\r\n";
        $messages = '<html><body>';
        $messages .= '<h1>gssm.llc</h1>';
        $messages .= '</body></html>';
        $messages .= '<html><body>';
        $messages .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
        $messages .= "<tr ><td><strong>Name:</strong> </td><td>" . strip_tags($name) . "</td></tr>";
        $messages .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($email) . "</td></tr>";
        $messages .= "<tr><td><strong>Phone Number:</strong> </td><td>" . strip_tags($phone) . "</td></tr>";
        $messages .= "<tr><td><strong>Subject:</strong> </td><td>" . strip_tags($subject) . "</td></tr>";
        $messages .= "<tr><td><strong>Message:</strong> </td><td>" . strip_tags($message) . "</td></tr>";
        $messages .= "</table>";
        $messages .= "</body></html>";


        mail($to,$subject,$messages,$header);
        return response()->json(['status'=>200,'message' => 'Your Quote Registered Success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
