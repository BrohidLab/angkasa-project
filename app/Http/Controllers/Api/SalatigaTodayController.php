<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SalatigaTodayModels;

class SalatigaTodayController extends Controller
{
    public function index(){
      $salatiga = SalatigaTodayModels::all();
      return response()->json(['data'=>$salatiga]);
    }
}
