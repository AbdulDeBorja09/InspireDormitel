<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bills extends Model
{
    use HasFactory;
    protected $table = 'bills';
    protected $fillable = [
        'user_id',
        'month',
        'rent',
        'water',
        'internet',
        'electricity',
        'total',
        'due',
        'created_at',
        'updated_at',
    ];
}
