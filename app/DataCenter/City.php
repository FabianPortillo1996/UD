<?php

namespace App\DataCenter;

use App\Transformers\CityTransformer;
use Illuminate\Database\Eloquent\Model;


class City extends Model
{

    public $transformer = CityTransformer::class;

    protected $fillable = [
        'city', 'data_base_name'
    ];

    const CITIES = [
        ['city' => 'Bogota D.C', 'data_base_name' => 'bogota'],
        ['city' => 'Medellin', 'data_base_name' => 'medellin']
    ];


    public function scopeByName($query, $city)
    {
        return $query->where('city', $city);
    }
}
