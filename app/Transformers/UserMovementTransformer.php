<?php

namespace App\Transformers;

use App\Bogota\BogotaUser;
use App\DataCenter\City;
use App\DataCenter\UserMovement;
use App\Medellin\MedellinUser;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use League\Fractal\TransformerAbstract;

class UserMovementTransformer extends TransformerAbstract
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
        //
    ];

    /**
     * @param UserMovement $userMovement
     * @return array
     */
    public function transform(UserMovement $userMovement)
    {
        return [
            'id' => $userMovement->id,
            'nombre_usuario' => $this->getUser($userMovement->city_id, $userMovement->user_id),
            'ciudad_actual' => $this->getCity($userMovement->actual_city_id)->city,
            'ciudad_origen' => $this->getCity($userMovement->city_id)->city,
            'fecha' => Carbon::parse($userMovement->created_at)->format('Y-m-d'),
            'hora' => Carbon::parse($userMovement->created_at)->format('h:m')
        ];
    }

    public function getCity($city)
    {
        return City::find($city);
    }

    public function getUser($city, $user)
    {
        $cityUser = $this->getCity($city);
        switch ($cityUser->city) {
            case 'Bogota D.C':
                return BogotaUser::find($user)->name;
                break;
            case 'Medellin':
                return MedellinUser::find($user)->name;
                break;
        }
    }
}
