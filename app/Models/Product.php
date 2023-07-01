<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable =[
        "name",
        'price',
        'bref',
        'salecondition',
        'avantage',
        'view',
        'numberlike',
        'image',
        'is_sold',


    ];
    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
