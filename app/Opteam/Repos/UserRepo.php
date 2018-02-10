<?php


namespace App\Opteam\Repos;

use App\Opteam\Models\User;
use App\Opteam\Models\UserRole;
use Log;

class UserRepo {

    public function filter(array $filterData = [])
    {
        $q = User::query();

        extract($filterData);

        if (isset($search) && $search !== '')
        {
            $q->where(function ($q) use ($search) {
                $s = str_for_search($search);
                $q->where('name', 'ilike', $s)
                    ->orWhere('email', 'ilike', $s)
                    ->orWhere('surname', 'ilike', $s);
            });
        }
        if (isset($role) && $role !== ''&& $role !== 'all')
        {
            $q->whereHas('role', function ($query) use ($role) {
                $query->where('name', '=', strtolower(trim($role)));
            });
        }

        return $q->with('role');
    }

    public function store(array $data = [])
    {
        try
        {
            $user = User::create([
                'name'     => arraY_get($data, 'name'),
                'email'    => arraY_get($data, 'email'),
                'surname'  => arraY_get($data, 'surname'),
                'role_id'  => UserRole::firstOrCreate(['id' => arraY_get($data, 'role_id')])->first()->id,
                'password' => bcrypt(arraY_get($data, 'password'))
            ]);

        } catch (\Exception $e)
        {
            $user = new User;
            log_e('UserRepo::store: unable to create user', [$e->getMessage()]);
        }


        return $user;
    }

    public function update(array $data = [])
    {
        try
        {

            $user = User::findOrFail(arraY_get($data, 'id'));
            $user->name = arraY_get($data, 'name');
            $user->email = arraY_get($data, 'email');
            $user->surname = arraY_get($data, 'surname');
            $user->role_id = UserRole::find(arraY_get($data, 'role_id'))->id;
            $user->password = bcrypt(arraY_get($data, 'password'));
            $user->save();

        } catch (\Exception $e)
        {
            $user = new User;
            log_e('UserRepo::update: unable to update user', [$e->getMessage()]);
        }


        return $user;
    }

    public function find($id)
    {
        try
        {
            $user = User::findOrFail($id);

        } catch (\Exception $e)
        {
            $user = new User;
            log_e('UserRepo::find: unable to find user', [$e->getMessage()]);
        }

        return $user;
    }
}