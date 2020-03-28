<?php

namespace App\Bogota;

use App\Transformers\BogotaUserTransformer;
use Illuminate\Database\Eloquent\Model;

class BogotaUser extends Model
{
    protected $connection = 'bogota';

    protected $fillable = [
        'email', 'name', 'phone', 'identification'
    ];

    public $transformer = BogotaUserTransformer::class;

}
