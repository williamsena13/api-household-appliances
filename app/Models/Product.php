<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['code', 'name', 'description', 'voltage', 'brand_id'];

    public function brand()
    {
        return $this->belongsTo(Band::class);
    }
}