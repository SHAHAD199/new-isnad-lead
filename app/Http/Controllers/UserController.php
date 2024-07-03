<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\Users\{StoreUserRequest, UpdateUserRequest};
use App\Services\Users\{GetUserService, PostUserService};
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $getUserService, $postUserService;
    public function __construct(GetUserService $getUserService, PostUserService $postUserService)
    {
        $this->getUserService = $getUserService;
        $this->postUserService = $postUserService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return $this->getUserService->index($request);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        return $this->postUserService->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return $this->getUserService->show($user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        return $this->postUserService->update($request, $user);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        return $this->postUserService->destroy($user);
    }
}
