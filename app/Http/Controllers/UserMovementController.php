<?php

namespace App\Http\Controllers;

use App\DataCenter\UserMovement;
use App\Http\Requests\UserMovementPostRequest;
use Illuminate\Http\Request;

class UserMovementController extends ApiController
{


    private $userMovement;

    public function __construct(UserMovement $userMovement)
    {
        $this->userMovement = $userMovement;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->showAll(UserMovement::latest('id')->get(), 200);
    }


    public function find(UserMovement $userMovement)
    {
        return $this->showOne($userMovement, 200);
    }

    /**
     * @param UserMovementPostRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(UserMovementPostRequest $request)
    {
        $this->userMovement = $this->userMovement
            ->create($this->userMovement->setData($request->all()));
        return $this->showOne($this->userMovement, 200);
    }
}
