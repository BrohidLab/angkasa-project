<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerModels extends Model
{
    use HasFactory;
    protected $table = 'table_customer';
    protected $fillable = ['nama_lengkap', 'pekerjaan','username','password'];
}
