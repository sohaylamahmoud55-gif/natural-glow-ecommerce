<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id',
        'skin_type_id',
        'hair_type_id',
        'body_section_id',
        'name',
        'description',
        'price',
        'stock',
        'image',
        'rating',
        'reviews',

    ];

    // belongsTo

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function skinType()
    {
        return $this->belongsTo(Skin_type::class);
    }

    public function hairType()
    {
        return $this->belongsTo(Hair_type::class);
    }

    public function bodySection()
    {
        return $this->belongsTo(Body_section::class);
    }

    // hasMany

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }

    public function orderItems()
    {
        return $this->hasMany(Order_item::class);
    }
}
