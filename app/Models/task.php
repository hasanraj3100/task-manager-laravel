<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    use HasFactory;

    public $fillable = [
        'title',
        'desc',
        'date',
        'priority',
        'tag',
    ];

     public $timestamps = false;


}
