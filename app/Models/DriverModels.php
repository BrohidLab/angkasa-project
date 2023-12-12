<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverModels extends Model
{
    use HasFactory;
    
    protected $table = 'table_driver';
    protected $fillable = [
      'no_angkot',
      'nama_lengkap',
      'pekerjaan',
      'no_polisi',
      'username',
      'password',
      'trayek'
    ];
}
