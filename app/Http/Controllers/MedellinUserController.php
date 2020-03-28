<?php

namespace App\Http\Controllers;

use App\Medellin\MedellinUser;
use Illuminate\Http\Request;

class MedellinUserController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->showAll(MedellinUser::all(), 200);
    }
}
