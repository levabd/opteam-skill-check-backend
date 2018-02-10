<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Validator;
use App\Opteam\Models\User;
use App\Opteam\Repos\UserRepo;
use Illuminate\Http\Request;

class UserController extends Controller {

    /**
     * @var UserRepo
     */
    private $userRepo;

    public function __construct(UserRepo $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    /**
     * User list
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function index()
    {
        return $this->userRepo->filter(request()->all())->paginate(10);
    }

    /**
     * Get user for update
     *
     * @param User    $user
     *
     * @return User
     */
    public function edit(User $user)
    {
        return $user->load('role')->makeVisible('role_id');
    }

    /**
     * Store user
     *
     * @param Request $request
     *
     * @return User
     */
    public function store(Request $request)
    {
         $request->validate([
            'name'     => 'required|max:255',
            'surname'  => 'required|max:255',
            'email'    => 'required|email|max:255|unique:users',
            'role_id'  => 'required|exists:user_roles,id',
            'password' => 'required|min:6',
        ]);

        return $this->userRepo->store( $request->all());
    }

    /**
     * Update user
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate( [
            'id'       => 'required|exists:users,id',
            'name'     => 'required|max:255',
            'surname'  => 'required|max:255',
            'email'    => 'required|email|max:255|unique:users,email,' . $request->input('id'),
            'role_id'  => 'required|exists:user_roles,id',
            'password' => 'nullable|min:6',
        ]);


        return $this->userRepo->update( $request->all());
    }

    /**
     * Delete user
     *
     * @param User $user
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function destroy(User $user)
    {
        if ($user->id === request()->user()->id){
            return response(['status'=> 'error', 'message' => trans('app.cant_remove_yourself')]);
        }

        $user->delete();

        return response(['status'=>'success']);
    }
}
