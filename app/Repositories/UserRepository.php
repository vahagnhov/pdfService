<?php

namespace App\Repositories;


use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    public function usersAssociatedWithCompanies($country)
    {
        $users = User::whereHas('companies',
            function ($query) use ($country) {
                $query->whereHas('countries',
                    function ($query) use ($country) {
                        $query->where('name', $country)->select('name');
                    });
            })
            ->with(['companies' =>
                function ($query) {
                    $query->select('name');
                }])
            ->get();

        return $users;
    }
}