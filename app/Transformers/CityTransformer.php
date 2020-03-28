<?php

namespace App\Transformers;

use App\DataCenter\City;
use League\Fractal\TransformerAbstract;

class CityTransformer extends TransformerAbstract
{

    /**
     * List of resources to automatically include
     *
     * @var array
     */
    protected $defaultIncludes = [

    ];

    /**
     * List of resources possible to include
     *
     * @var array
     */
    protected $availableIncludes = [
        //
    ];

    /**
     * @param City $city
     * @return array
     */
    public function transform(City $city)
    {
        return [
            'id' => $city->id,
            'ciudad' => $city->city
        ];
    }
}
