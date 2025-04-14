<?php

namespace App\Http\Controllers;
use App\Http\Repositories\User\UserRepositoryInterface;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userRepo;

    public function __construct(UserRepositoryInterface $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function show($userId)
    {
        $user = $this->userRepo->findWithDetails($userId);
        return view('showUser', ['user' => $user]);
    }

    public function edit($id)
    {
        $user = $this->userRepo->findById($id);
        return view('editUser', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'date_of_birth' => 'required|date|before:today',
        ]);

        $user = $this->userRepo->findWithDetails($id);
        if (!$user) return redirect()->back()->with('error', 'User không tồn tại');

        $user->name = $request->input('name');
        $user->userDetail->address = $request->input('address');
        $user->userDetail->date_of_birth = $request->input('date_of_birth');

        $user->userDetail->save();
        $user->save();

        return redirect()->route('user.show', $user->id)->with('success', 'Thông tin cập nhật thành công!');
    }
}