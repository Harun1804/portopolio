<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'tech',
        'thumbnail',
        'desc'
    ];

    public function getThumbnailAttribute($value)
    {
        return public_path('storage/'.$value);
    }
}
