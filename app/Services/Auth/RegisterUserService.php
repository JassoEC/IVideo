<?php

namespace App\Services\Auth;

use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class RegisterUserService
{

    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function register(Request $request)
    {
        $user = new User();
        $user->fill($request->toArray());
        
        return $this->userRepository->save($user);
    }
}
