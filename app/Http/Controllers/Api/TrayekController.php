<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TrayekModels;
use Illuminate\Support\Facades\DB;

class TrayekController extends Controller
{
    public function index(){
      $data = TrayekModels::all();
      
      return response()->json(
        [
          "data" => $data
        ]
      );
    }
    
    public function create(Request $request){
      $data = TrayekModels::create($request->all());
      return response()->json([
        "status" => "success",
        "message" => "Trayek berhasil ditambahkan",
        "data" => $data->get(),
      ]);
    }
    
    public function listAngkotByTrayek($id){
      $data = DB::table('table_driver')->select('no_angkot')->where('trayek','=',$id)->get();
      
      return response()->json(["data" => $data]);
    }
}
