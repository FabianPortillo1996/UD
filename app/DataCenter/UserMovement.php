<?php

namespace App\DataCenter;


use App\Transformers\UserMovementTransformer;
use Illuminate\Database\Eloquent\Model;

class UserMovement extends Model
{
    protected $fillable = ['user_id', 'city_id', 'actual_city_id'];

    public $transformer = UserMovementTransformer::class;


    public function setData($attributes)
    {
        $data['user_id'] = $attributes['user'];
        $data['city_id'] = $attributes['city'];
        $data['actual_city_id'] = $attributes['actual_city'];
        return $data;
    }
}
