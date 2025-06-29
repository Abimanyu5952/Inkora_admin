<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'brand', 'category', 'size', 'color', 'price', 'description', 'image', 'type'
    ];

    protected $casts = [
        'customizable' => 'array',
    ];
}