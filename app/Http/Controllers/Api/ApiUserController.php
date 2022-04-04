<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use App\Models\User;

class ApiUserController extends ApiController
{
    public function index()
    {
        $user = User::all();
        return $this->showAll($user, 200);
    }
}
