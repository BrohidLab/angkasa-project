<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrayekModels extends Model
{
    use HasFactory;
    
    protected $table = 'table_trayek';
    protected $fillable = [
      'from', 'lat_from', 'long_from',
      'to', 'lat_to', 'long_to',
      'price'
    ];
}
