<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'details',
        'publish', // Still treat it as a string
    ];

    // Optionally, you can cast 'publish' as a string
    protected $casts = [
        'publish' => 'string',
    ];
}
