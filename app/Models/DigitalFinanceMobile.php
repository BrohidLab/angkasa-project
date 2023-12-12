<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DigitalFinanceMobile extends Model
{
    use HasFactory;
    
    protected $table = 'table_digital_finance';
    protected $fillable = [
      'title',
      'description',
      'image'
    ];
}
