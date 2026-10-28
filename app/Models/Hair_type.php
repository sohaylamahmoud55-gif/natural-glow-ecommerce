<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hair_type extends Model
{
    protected $table = 'hair_types';

    protected $fillable = [
        'name',
        'image',
        'description'
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
