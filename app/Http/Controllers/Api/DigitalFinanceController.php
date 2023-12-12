<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DigitalFinanceMobile;

class DigitalFinanceController extends Controller
{
    public function index(){
      $digital = DigitalFinanceMobile::all();
      return response()->json(['data'=>$digital]);
    }
    
    public function create(Request $request){
      $digital = new DigitalFinanceMobile();
      $fillname = '';
    if($request->hasFile('image')){
        $filePath = Storage::disk('public')->put('images/digital', request()->file('image'));
            $fillname = "storage/app/public/$filePath";
      }else{
        $fillname=null;
      }
      $digital->title= $request->title;
      $digital->image = $fillname;
      $digital->description = $request->description;
      
      $result = $digital->save();
      
      return response()->json([
        'message' => 'Success create event',
        'status' => 'success',
        ]);
    }
}
