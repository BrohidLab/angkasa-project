<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SalatigaTodayModels;
use Illuminate\Support\Facades\Storage;

class SalatigaTodayController extends Controller
{
    public function index(){
      $salatiga = SalatigaTodayModels::all();
      return response()->json(['data'=>$salatiga]);
    }
    
    public function create(Request $request){
      $data = new SalatigaTodayModels();
      $fillname = '';
    if($request->hasFile('image')){
        $filePath = Storage::disk('public')->put('images/salatiga', request()->file('image'));
            $fillname = "storage/app/public/$filePath";
      }else{
        $fillname=null;
      }
      $data->title= $request->title;
      $data->image = $fillname;
      $data->description = $request->description;
      
      $result = $data->save();
      
      return response()->json([
        'message' => 'Success create event',
        'status' => 'success',
      ]);
    }
}
