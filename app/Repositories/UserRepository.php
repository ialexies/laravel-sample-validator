<?php

namespace App\Repositories;

use App\User;


class UserRepository implements UserRepositoryInterface{
    protected $user;

    public function __construct(User $model)
    {
        $this->user = $model;
    }

    public function getModel(){
        return $this->user;
    }

    public function store($data)
    {
        $data["password"] = bcrypt($data["password"] );

        return $this->user->create($data);

    }





}
