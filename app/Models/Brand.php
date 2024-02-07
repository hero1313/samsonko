<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function specie()
    {
        return $this->hasMany(Specie::class);
    }
}
