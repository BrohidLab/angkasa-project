<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalatigaTodayModels extends Model
{
    use HasFactory;
    
    protected $table = 'table_salatiga_today';
    protected $fillable = [
      'title',
      'description',
      'image'
    ];
}
