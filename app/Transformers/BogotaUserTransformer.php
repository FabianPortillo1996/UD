<?php

namespace App\Transformers;

use App\Bogota\BogotaUser;
use App\DataCenter\City;
use League\Fractal\TransformerAbstract;

class BogotaUserTransformer extends TransformerAbstract
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
        'city'
    ];

    public function includeCity()
    {
        return $this->item(City::byName('Bogota D.C')->first(), new CityTransformer);
    }

    /**
     * @param BogotaUser $user
     * @return array
     */
    public function transform(BogotaUser $user)
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
