<?php

namespace App\Transformers;

use App\DataCenter\City;
use App\Medellin\MedellinUser;
use League\Fractal\TransformerAbstract;

class MedellinUserTransformer extends TransformerAbstract
{
    /**
     * List of resources to automatically include
     *
     * @var array
     */
    protected $defaultIncludes = [
        //
    ];

    /**
     * List of resources possible to include
     *
     * @var array
     */
    protected $availableIncludes = [
        'city'
    ];

    public function includeCity()
    {
        return $this->item(City::byName('Bogota D.C')->first(), new CityTransformer);
    }

    /**
     * @param MedellinUser $user
     * @return array
     */
    public function transform(MedellinUser $user)
    {
        return [
            'id' => $user->id,
            'nombre' => $user->name,
            'telefono' => $user->phone,
            'identificacion' => $user->identification,
            'email' => $user->email
        ];
    }
}
