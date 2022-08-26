<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'apartment_id',
    ];

    protected $casts = [
        'name' => 'array',
    ];

    public function apartment(){
        return $this->belongsTo(Apartment::class);
    }
}