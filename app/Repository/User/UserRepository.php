<?php
namespace App\Repository\User;

use App\Models\User;
use App\Repository\BaseRepository;

abstract class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    public function getModel()
    {
        return User::class;
    }

    public function test(){
        return $this->model::get();
    }



}
