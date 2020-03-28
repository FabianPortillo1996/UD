<?php

namespace App\Http\Controllers;

use App\Bogota\BogotaUser;
use Illuminate\Http\Request;

class BogotaUserController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->showAll(BogotaUser::all(), 200);
    }
}
