<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\crudModel;

class crudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crudModelData = crudModel::all();
        $compactingData = compact('crudModelData');
        return view('index')->with($compactingData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $crudModelData = new crudModel();
        $crudModelData->name = $request->name;
        $crudModelData->save();
        return redirect('crud');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $crudModelData = crudModel::find($id);
        $compactingData = compact('crudModelData');
        return view('show',$compactingData);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $crudModelData = crudModel::find($id);
        $compactingData = compact('crudModelData');
        return view('edit',$compactingData);
        // return view('edit');
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
        $crudModelData = crudModel::find($id);
        $crudModelData->name = $request->name;
        $crudModelData->save();
        return redirect('crud');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $crudModelData = crudModel::find($id)->delete();
        return redirect('crud');
    }
}
