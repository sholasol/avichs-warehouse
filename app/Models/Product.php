<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $tables = "products"; 

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function oderItems()
    {
        return $this->hasMany(OrderItem::class, 'product_id');
    }
}
