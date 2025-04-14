<?php

namespace App\Http\Repositories\User;

use App\Http\Repositories\BaseRepositoryInterface;

interface UserRepositoryInterface extends BaseRepositoryInterface
{
    public function findWithDetails($id);
    public function updateUserAndDetail($id, array $data);
}