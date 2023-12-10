<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EventModels;

class EventController extends Controller
{
    public function index(){
      $event = EventModels::all();
      return response()->json(['data' => $event]);
    }
}
