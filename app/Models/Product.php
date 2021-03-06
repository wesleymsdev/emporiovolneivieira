<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'category_id',
        'title',
        'winery_id',
        'qtda_per_carton',
        'country_of_origin',
        'region',
        'classification',
        'description',
        'type_of_grape',
        'harvest',
        'temperature',
        'olfactory',
        'visual',
        'taste',
        'harmonization',
        'image'
    ];
}
