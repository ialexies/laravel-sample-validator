<?php

namespace App\Repositories;

interface UserRepositoryInterface{

    public function getModel();
    public function store($data);

}
