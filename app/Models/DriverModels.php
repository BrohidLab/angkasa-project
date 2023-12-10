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
      'phone',
      'alamat',
      'foto',
      'username',
      'password',
      'foto_sim',
      'foto_stnk'
    ];
}
