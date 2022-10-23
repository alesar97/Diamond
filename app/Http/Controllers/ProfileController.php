<?php

namespace App\Http\Controllers;

use App\Models\AppType;
use App\Models\ProgrammingLanguage;
use App\Models\Subscription;
use App\Models\UserService;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('profile');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //

        if ($request->ajax()) {

            $user_id = Auth::id();
            $data = UserService::where('user_id','=', $user_id)->get();

            return Datatables::of($data)

                ->addIndexColumn()


                ->addColumn('action', function($row){



                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Add" class="btn btn-darkgrey btn-sm add"> <i class="fa fa-plus"></i> Add Questions </a> ';


//                    $btn .= ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteMark"> <i class="fa fa-trash"></i> </a>';

                    return $btn;

                }) ->addColumn('type_id', function ($row) {

                    $que = AppType::find($row->type_id);
                    if (is_null($que))
                        return "-";
                    return " " . $que->name;

                })->addColumn('programming_lang_id', function ($row) {

                    $que = ProgrammingLanguage::find($row->programming_lang_id);
                    if (is_null($que))
                        return "-";
                    return " " . $que->name;

                })->addColumn('subscription_id', function ($row) {

                    $que = Subscription::find($row->subscription_id);
                    if (is_null($que))
                        return "-";
                    return " " . $que->name;

                })

                ->rawColumns(['type_id','programming_lang_id','subscription_id','action'])

                ->make(true);

            return;
        }

        return view("profile") ;
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
