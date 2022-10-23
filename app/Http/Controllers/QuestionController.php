<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use DataTables;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id)
    {
        //
        if ($request->ajax()) {

            $data = Question::where('service_id','=', $id)->get();

            return Datatables::of($data)

                ->addIndexColumn()


                ->addColumn('action', function($row){



                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="btn btn-maincolor btn-sm edit"> <i class="fa fa-edit"></i> </a> ';


                    $btn .= ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm delete"> <i class="fa fa-trash"></i> </a>';

                    return $btn;


                })

                ->rawColumns(['action'])

                ->make(true);

            return;
        }

        return view("questions",compact('id')) ;
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
        Question::updateOrCreate(['id' => $request->_id],

            [
                'lesson_id' => $request->lecture_id,
                'title' => $request->question,
                'q_options' => $request->options,
                'answers' =>$request->answers,

            ]);


        return response()->json(['success' => ' تمت الإضافة بنجاح    .']);

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
        $item = Question::find($id);

        return response()->json($item);
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
        Question::updateOrCreate(['id' => $request->_id],

            [
                'lesson_id' => $request->lecture_id,
                'title' => $request->question,
                'q_options' => $request->options,
                'answers' =>$request->answers,

            ]);


        return response()->json(['success' => 'تم التعديل بنجاح']);
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
        Question::find($id)->delete();
        return response()->json(['success'=>'deleted successfully']);
    }
}
