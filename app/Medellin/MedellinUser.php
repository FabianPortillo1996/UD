<?php

namespace App\Medellin;


use Illuminate\Database\Eloquent\Model;
use App\Transformers\MedellinUserTransformer;

class MedellinUser extends Model
{

    protected $connection = 'medellin';

    protected $fillable = [
        'email', 'name', 'phone', 'identification'
    ];
    public $transformer = MedellinUserTransformer::class;
}
