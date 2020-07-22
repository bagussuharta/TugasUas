<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PariwisataLombok;
class PariwisataLombokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=PariwisataLombok::all();
        return response()->json($data);
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
        $data= new PariwisataLombok;
        $data->NamaLokasi=$request->NamaLokasi;
        $data->Wilayah=$request->Wilayah;
        $data->Jarak_Dari_Mataram=$request->Jarak_Dari_Mataram;
        $data->JenisTempat=$request->JenisTempat;
        $data->Keterangan=$request->Keterangan;
        $data->save();
        return response()->json(['msg'=>'succes']);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data= PariwisataLombok::findorfail($id);
        return response()->json($data);
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
        $data= PariwisataLombok::find($id);
        $data->NamaLokasi=$request->NamaLokasi;
        $data->Wilayah=$request->Wilayah;
        $data->Jarak_Dari_Mataram=$request->Jarak_Dari_Mataram;
        $data->JenisTempat=$request->JenisTempat;
        $data->Keterangan=$request->Keterangan;
        $data->save();
        return response()->json(['msg'=>'succes']);
        // return response()->json(['data'=>$request,'id'=>$id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data= PariwisataLombok::findorfail($id);
        $data->delete();
        return response()->json(['msg'=>'succes hapus']);
    }
}
