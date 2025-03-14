<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }

    protected $fillable = [
        'brand',
        'model',
        'year',
        'price_per_day',
        'status',
    ];
}
