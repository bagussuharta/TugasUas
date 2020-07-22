<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PariwisataLombok;
class PariwisataController extends Controller
{
    public function update(Request $request, $id)
    {
        echo dd($request->all());
        // $data= PariwisataLombok::find($id);
        // $data->NamaLokasi=$request->NamaLokasi;
        // $data->Wilayah=$request->Wilayah;
        // $data->Jarak_Dari_Mataram=$request->Jarak_Dari_Mataram;
        // $data->JenisTempat=$request->JenisTempat;
        // $data->Keterangan=$request->Keterangan;
        // $data->save();
        // return response()->json(['msg'=>'succes']);
        return response()->json(['data'=>$request,'id'=>$id]);
    }
}
