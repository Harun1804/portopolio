<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'position',
        'in',
        'out',
        'subposition',
        'desc',
        'category'
    ];

    protected $dates = ['created_at', 'updated_at', 'in','out'];
}
