<?php

namespace App\Http\Controllers\Api;

use Auth;
use App\SampleCode;
use Illuminate\Http\Request;

class SampleCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $code = Auth::user()->samplecodes()->get();

        if ($code)
            return response()->json($code, 200);

        return response()->json(null, 404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->filled('hive_id') && $request->user()->hives()->find($request->input('hive_id')))
        {
            $code = $request->only('hive_id', 'queen_id');
            $code['sample_date'] = $request->filled('sample_date') ? $request->input('sample_date') : date('Y-m-d H:i:m');
            $code['sample_code'] = SampleCode::generate_code();
            $code['user_id']     = $request->user()->id;
            $samplecode          = SampleCode::create($code);
            return response()->json($samplecode, 201);
        }
        return response()->json(null, 400);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SampleCode  $sampleCode
     * @return \Illuminate\Http\Response
     */
    public function show(SampleCode $sampleCode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SampleCode  $sampleCode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SampleCode $sampleCode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SampleCode  $sampleCode
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if($request->filled('sample_code'))
        {
            $code = $request->user()->samplecodes()->where('sample_code', $request->input('sample_code'))->first();
            if ($code)
            {
                $code->delete();
                return response()->json('code_deleted', 200);
            }
        }
        return response()->json(null, 400);
    }
}
