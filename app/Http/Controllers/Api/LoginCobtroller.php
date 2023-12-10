<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomerModels;

class LoginCobtroller extends Controller
{
    public function index (Request $request){
      if($request->role_id === 'driver'){
        
        return response()->json(['data' => $request->all()]);
      }else{
        $customer = CustomerModels::where(['username' => $request->username, 'password' => $request->password])->first();
        return response()->json([
          'data' => $customer,
          'message' => 'Success to login',
          'status' => 'success'
          ]);
      }
    }
    
    public function register (Request $request){
      $customer = CustomerModels::create($request->all());
      return $customer;
    }
}