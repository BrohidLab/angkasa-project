<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EventModels;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function index(){
      $event = EventModels::all();
      return response()->json(['data' => $event]);
    }
    
    public function create(Request $request){
      $event = new EventModels();
      $fillname = '';
    if($request->hasFile('image')){
        $filePath = Storage::disk('public')->put('images', request()->file('image'));
            $fillname = "storage/app/public/$filePath";
      }else{
        $fillname=null;
      }
      $event->title= $request->title;
      $event->image = $fillname;
      $event->description = $request->description;
      
      $result = $event->save();
      
      return response()->json([
        'message' => 'Success create event',
        'status' => 'success',
        ]);
    }
}
