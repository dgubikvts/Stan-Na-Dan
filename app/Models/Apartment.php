<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'price',
        'desc',
        'location',
        'takenDates',
        'beds',
        'bedrooms',
        'wifi',
        'hairdryer',
        'ac',
        'heating',
        'hot_tub',
        'smoke_detector',
        'smoking',
        'pets',
        'balcony',
        'coffee_maker'
    ];

    protected $casts = [
        'takenDates' => 'array',
    ];

    public function image(){
        return $this->hasOne(Image::class);
    }
}
