<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Services\UsersService;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    private UsersService $usersService;

    /**
     * UsersController constructor.
     * @param UsersService $usersService
     */
    public function __construct(
        UsersService $usersService
    ) {
        $this->usersService = $usersService;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(Request $request)
    {
        $filters = $request->get('filters', []);

        $payments = $this->usersService->getAll($filters);

        return UserResource::collection($payments);
    }

    public function show(Request $request, User $user)
    {
        $direccion = $this->usersService->getDireccion($user);

        return (new UserResource($user))
            ->additional([
                'direccion' => $direccion
            ]);
    }
}
