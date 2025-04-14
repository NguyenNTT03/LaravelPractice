<?php

namespace App\Http\Repositories\User;

use App\Models\User;
use App\Http\Repositories\BaseRepository;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    public function __construct(User $user)
    {
        parent::__construct($user);
    }

    public function findWithDetails($id)
    {
        return $this->model->with('userDetail', 'orders.product')->find($id);
    }

    public function updateUserAndDetail($id, array $data)
    {
        $user = $this->model->with('userDetail')->findOrFail($id);
        $user->name = $data['name'];
        $user->userDetail->address = $data['address'];
        $user->userDetail->date_of_birth = $data['date_of_birth'];

        $user->userDetail->save();
        $user->save();

        return $user;
    }
}