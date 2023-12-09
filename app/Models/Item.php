<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'model',
        'brand',
        'type',
        'serial_number',
        'sku',
        'description',
        'price',
        'quantity',
        'category'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}