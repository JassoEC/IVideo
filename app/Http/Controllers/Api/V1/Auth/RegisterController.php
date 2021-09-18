<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\Auth\RegisterUserRequest;
use App\Http\Resources\V1\RegisterUserResource;
use App\Services\Auth\RegisterUserService;

class RegisterController extends Controller
{

    protected $registerUserService;

    public function __construct(RegisterUserService $registerUserService)
    {
        $this->registerUserService = $registerUserService;
    }

    public function register(RegisterUserRequest $request)
    {
        $data = $this->registerUserService->register($request);        
        return new RegisterUserResource($data);
    }
}
