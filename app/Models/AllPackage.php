<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllPackage extends Model
{
    use HasFactory;

     protected $fillable = [
        'title1',
        'location',
        'country',
        'package_type',
        'rating',
        'tour_length',
        'tour_description',
        'price',
        'discount_price',
        'image',
    ];
}
