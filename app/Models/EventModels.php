<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventModels extends Model
{
    use HasFactory;
    
    protected $table = 'table_event';
    protected $fillable = ['title','description','image'];
}
