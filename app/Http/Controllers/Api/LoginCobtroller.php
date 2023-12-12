<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomerModels;
use App\Models\DriverModels;

class LoginCobtroller extends Controller
{
    public function index (Request $request){
      if($request->role_id === 'driver'){
        $driver = DriverModels::where(['username' => $request->username, 'password' => $request->password]);
        return response()->json(['data' => $driver, 'status' => 'success', 'message' => 'Success login...']);
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
      if($request->role_id === 'driver'){
        $driver = DriverModels::create([
          'nama_lengkap' => $request->nama_lengkap,
          'password' => $request->password,
          'username' => $request->username,
          'pekerjaan' => $request->pekerjaan,
          'no_angkot' => $request->no_angkot,
          'no_polisi' => $request->no_polisi,
          'trayek' => $request->trayek,
          ]);
          return response()->json([
            'data' => $driver,
            'message' => 'Success register..',
            'status' => 'success',
            ]);
      }else{
        $customer = CustomerModels::create([
          'username' => $request->username,
          'password' => $request->password,
          'nama_lengkap' => $request->nama_lengkap,
          'pekerjaan' => $request->pekerjaan,
        ]);
      return response()->json([
        'data' => $customer,
        'message' => 'Success register...',
        'status' => 'success',
        ]);
      }
      
    }
}