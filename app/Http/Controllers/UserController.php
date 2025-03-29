<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController
{
    /**
     * @return int[]
     */
    public function index(): array
    {
        $result = [];

        return match (request()->type) {
            'admin' => [1, 2, 3],
            'customer' => [4, 5, 6],
            default => $result,
        };
    }

    public function show(User $user): User
    {
        return $user;
    }
}

