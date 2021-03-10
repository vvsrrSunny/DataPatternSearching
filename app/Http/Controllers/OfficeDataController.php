<?php

namespace App\Http\Controllers;

use App\Models\OfficeData;
use Illuminate\Http\Request;

class OfficeDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $officeData = new OfficeData();
        $name = $request->input('name');
        if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $name))
            {
                abort(400, 'bad request');
            }

            $offices = $request->input('offices');
        $tables = $request->input('tables');
        $sqmMin = $request->input('sqmMin');
        $sqmMax = $request->input('sqmMax');
        $priceMin = $request->input('priceMin');
        $priceMax = $request->input('priceMax');
        if((is_numeric($tables)== true || $tables ==null) 
        &&(is_numeric($offices)== true || $offices ==null) 
        &&(is_numeric($sqmMin)== true || $sqmMin ==null)
        &&(is_numeric($sqmMax)== true || $sqmMax ==null) 
        &&(is_numeric($priceMin)== true || $priceMin ==null)
        &&(is_numeric($priceMax)== true || $priceMax ==null)){

        }else
        abort(400, 'bad request');
        
        if($offices<0 || $tables<0 || $sqmMin<0 || $sqmMax <0 || $priceMin<0 || $priceMax<0){
            abort(400, 'bad request negitive values');
        }

        if(($sqmMax<$sqmMin && $sqmMax!= null) || ($priceMax<$priceMin && $priceMax!= null))
        abort(400, 'bad request range not acceptable');



        $users=  $officeData->filter($request);
        //return response()->json($request);
        return response()->json($users);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OfficeData  $officeData
     * @return \Illuminate\Http\Response
     */
    public function show(OfficeData $officeData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OfficeData  $officeData
     * @return \Illuminate\Http\Response
     */
    public function edit(OfficeData $officeData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OfficeData  $officeData
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OfficeData $officeData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OfficeData  $officeData
     * @return \Illuminate\Http\Response
     */
    public function destroy(OfficeData $officeData)
    {
        //
    }
}
