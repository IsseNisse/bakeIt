<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pastry extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function getImgPathAttribute($value) {
        return asset('storage/' . $value);
    }

    public function orders() {
        return $this->belongsToMany(Order::class);
    }
}
