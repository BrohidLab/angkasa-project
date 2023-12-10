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
}
