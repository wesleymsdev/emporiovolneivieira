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
        'uf_id',
        'region',
        'classification',
        'description',
        'type_of_grape',
        'harvest',
        'temperature',
        'graduate',
        'volume',
        'measures',
        'weight',
        'olfactory',
        'visual',
        'taste',
        'harmonization',
        'image'
    ];

    public function countries()
    {
        return $this->hasOne(Countries::class, 'id', 'uf_id');
    }

    public function suppliers()
    {
        return $this->hasOne(Suppliers::class, 'id', 'winery_id');
    }
}
